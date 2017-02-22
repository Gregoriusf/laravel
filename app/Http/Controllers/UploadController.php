<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\FileModel;

class UploadController extends Controller
{
  public function getView(){
    return view('uploadfile');
  }

  public function insertFile(){
    $filetitle=Input::get('filetitle');
    $file=Input::file('fileupl');

  //echo $fileTitle;
  //echo $file;
    $rules = array (
      'filetitle' => 'required',
      'fileupl' => 'required|max:10000|mimes:doc,docx,jpeg,png,pdf'
    );

    $validator=Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
      $messages=$validator->messages();
      return Redirect::to('uploadfile')->withInput()->withErrors($validator);
    }
    else if ($validator->passes())
    {
      if (Input::file('fileupl')->isValid()){
        $extension=Input::file('fileupl')->getClientOriginalExtension();
        $filename=rand(11111,99999).'.'.$extension;
        $destinationPath='upfile';
        //laravel/public/upfile
        $file->move($destinationPath,$filename);

        $data=array(
          'file_title'=>$filetitle,
          'file'=>$filename
        );
        FileModel::insert($data);
        $notification = array(
          'message'=>'File uploaded succesfully !',
          'alert-type' => 'success' );
          return Redirect::to('uploadfile');


      }
      else {

        $notification = array(
          'message'=>'File is not valid !',
          'alert-type' => 'error' );
          return Redirect::to('uploadfile');
      }
    }

  }
}
?>
