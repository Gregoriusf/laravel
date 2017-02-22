@extends('master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Create Data</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <form class="" action="{{route('register.store')}}" method="post">
      {{csrf_field()}}
      <div class="form-group{{($errors->has('username')) ? $errors->first('username') : '' }}">
        <input type="text" name="username" class="form-control" placeholder="Enter Name Here">
        {!! $errors->first('title','<p class="help-block">:message</p>') !!}

      </div>
      <div class="form-group {{($errors->has('email')) ? $errors->first('email') : '' }}">
        <input type="text" name="description" class="form-control" placeholder="Enter Description Here">
        {!! $errors->first('description','<p class="help-block">:message</p>') !!}

      </div>
      <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
      </div>
    </form>
  </div>
</div>
@stop
