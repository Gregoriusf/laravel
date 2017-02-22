@extends('master')
@section('content')
<div class="row">
 <div class="col-md-12">
   <h1>Edit Data</h1>
 </div>
</div>

<div class="row">
 <form class="" action="{{route('register.update',$register->id)}}" method="post">
   <input name="_method" type="hidden" value="PATCH">
   {{csrf_field()}}
   <div class="form-group{{ ($errors->has('username')) ? $errors->first('username') : ''}}">
     <input type="text" name="username" class="form-control" placeholder="Enter Username Here" value="{{$register->username}}">
     {!! $errors->first('username','<p class="help-block">:message</p>') !!}

   </div>
   <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : ''}}">
     <input type="text" name="email" class="form-control" placeholder="Enter email Here" value="{{$register->email}}">
     {!! $errors->first('email','<p class="help-block">:message</p>') !!}

   </div>
   <div class="form-group{{ ($errors->has('tanggallahir')) ? $errors->first('tanggallahir') : ''}}">
     <input type="text" name="tanggallahir" class="form-control" placeholder="Enter Tanggal Lahir Here" value="{{$register->tanggallahir}}">
     {!! $errors->first('tanggallahir','<p class="help-block">:message</p>') !!}

   </div>
   <div class="form-group{{ ($errors->has('tempatlahir')) ? $errors->first('tempatlahir') : ''}}">
     <input type="text" name="tempatlahir" class="form-control" placeholder="Enter Tempat Lahir Here" value="{{$register->tempatlahir}}">
     {!! $errors->first('tempatlahir','<p class="help-block">:message</p>') !!}

   </div>
   <div class="form-group{{ ($errors->has('asalsekolah')) ? $errors->first('asalsekolah') : ''}}">
     <input type="text" name="asalsekolah" class="form-control" placeholder="Enter Asal Sekolah Here" value="{{$register->asalsekolah}}">
     {!! $errors->first('asalsekolah','<p class="help-block">:message</p>') !!}

   </div>
     <div class="form-group">
       <input type="submit" class="btn btn-primary" value="save">

   </div>
 </form>

</div>
@stop
