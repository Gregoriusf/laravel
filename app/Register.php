<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
//class Register extends Model{

    protected $table="register_users";
    public static function formstore ($data){
      //echo "here is the Model";
      $username=input::get('username');
      $email=Input::get('email');
      $password=Hash::make(Input::get('password'));
      $tanggallahir=Input::get('tanggallahir');
      $tempatlahir=Input::get('tempatlahir');
      $asalsekolah=Input::get('asalsekolah');

      $users=new Register();
      $users->username=$username;
      $users->email=$email;
      $users->password=$password;
      $users->tanggallahir=$tanggallahir;
      $users->tempatlahir=$tempatlahir;
      $users->asalsekolah=$asalsekolah;
      $users->save();
    }
}
