@extends('master2')
@section('content')
  <h2>Form</h2>

  @if(Session::has('success'))
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
    </div>
  </div>
  @endif

  <form action="register_action" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" name="username" class="form-control" id="name" placeholder="Enter name">
      @if($errors->has('username'))
        <p class="help-block">
          {{$errors->first('username')}}
        </p>
      @endif
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
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
      <div class="form-group">
        <label for="cfpwd">Confirm Password:</label>
        <input type="password" name="cpassword" class="form-control" id="cfpwd" placeholder="Confirm password">
        @if($errors->has('cpassword'))
          <p class="help-block">
            {{$errors->first('cpassword')}}
          </p>
        @endif
  </div>
  <div class="form-group">
    <label for="tglhr">Tanggal Lahir:</label>
    <input type="text" name="tanggallahir" class="form-control" id="tglhr" placeholder="Tanggal lahir">
    @if($errors->has('tanggallahir'))
      <p class="help-block">
        {{$errors->first('tanggallahir')}}
      </p>
    @endif
</div>
  <div class="form-group">
    <label for="tplhr">Tempat Lahir:</label>
    <input type="text" name="tempatlahir" class="form-control" id="tplhr" placeholder="Tempat lahir">
    @if($errors->has('tempatlahir'))
      <p class="help-block">
        {{$errors->first('tempatlahir')}}
      </p>
    @endif
</div>
  <div class="form-group">
    <label for="assk">Asal Sekolah:</label>
    <input type="text" name="asalsekolah" class="form-control" id="assk" placeholder="Confirm password">
    @if($errors->has('asalsekolah'))
      <p class="help-block">
        {{$errors->first('asalsekolah')}}
      </p>
    @endif
</div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection
