@extends('master2')
@section('content')
  <h2>Form</h2>
  <form action="login_check" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" "id="email" placeholder="Enter email">
      @if($errors->has('email'))
        <p class="help-block">
          {{$errors->first('email')}}
        </p>
      @endif
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
      @if($errors->has('password'))
        <p class="help-block">
          {{$errors->first('password')}}
        </p>
      @endif
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

@endsection
