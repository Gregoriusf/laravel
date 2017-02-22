<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Register;
use Auth;

class RegisterController extends Controller
{
  public function store (){

  $data=Input::except(array('_token'));
  $rule=array(
    'username'=>'required',
    'email'=>'required|email',
    'password'=>'required|min:6',
    'cpassword'=>'required|same:password',
    'tanggallahir'=>'required',
    'tempatlahir'=>'required',
    'asalsekolah'=>'required',

  );

  $message=array(
    'tanggallahir.required'=>'tanggal lahir required',
    'tempatlahir.required'=>'tempat lahir required',
    'asalsekolah.required'=>'asal sekolah required',
    'cpassword.required'=>'the confirm password is required',
    'cpassword.min'=>'the confirm password must be at least 6 characters',
    'cpassword.same'=>'the confirmation password and password must same',
  );

  $validator=Validator::make($data,$rule,$message);

  if($validator->fails()){
    return Redirect::to('signup')->withErrors($validator);
  }
  else{
    //var_dump('$data');
    Register::formstore(Input::except(array('_token','cpassword ')));
    return Redirect::to('signup')->with('success','successfully registered');
  }
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

  /*  use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
  /*  protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
  /*  protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
/*    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }*/
  }

  public function login(){
    $data=Input::except(array('_token'));
    $rule=array(
      'email'=>'required|email',
      'password'=>'required',
    );

    $validator=Validator::make($data,$rule);

    if($validator->fails()){
      return Redirect::to('signin')->withErrors($validator);
    }
    else{

      $userdata=array(
        'email'=>input::get('email'),
        'password'=>input::get('password'),
      );
      $data=Input::except(array('_token'));
      //var_dump('$data');
      if(Auth::attempt($userdata)){
        return Redirect::to('uploadfile');
      //  echo'mantab';
      }
      else{
        return Redirect::to('signin')->withErrors($validator);

      //  echo "belom mantab";
      }
    }
  }

  public function dataRegister(){
    $register_users = register::all();
    return view ('dataRegister',['register_users'=>$register_users]);
  }

  public function edit($id)
  {
      $register = Register::FindOrFail($id);
      //return to edit view
      return view('register.editRegister',compact('register'));
  }


  public function update(Request $request, $id)
  {
      //
      $this->validate($request,[
        'username'=>'required',
        'email'=>'required|email',
        'tanggallahir'=>'required',
        'tempatlahir'=>'required',
        'asalsekolah'=>'required',
      ]);

      $register = Register::FindOrFail($id);
      $register->username = $request->username;
      $register->email = $request->email;
      $register->tanggallahir = $request->tanggallahir;
      $register->tempatlahir = $request->tempatlahir;
      $register->asalsekolah = $request->asalsekolah;
      $register->save();
      return Redirect::to ('show');

  }

  public function destroy($id)
  {
      //delete data
      $register = Register::FindOrFail($id);
      $register->delete();
      return Redirect::to ('show');

  }

  public function show($id)
  {
      //
  }

}
