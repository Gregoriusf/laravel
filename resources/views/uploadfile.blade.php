@extends('master')
@section('content')


<div class="container">
  <h2>Single file upload</h2>
  {!! Form::open(array('url'=>'insertfile','method'=>'POST'
  ,'class'=>'form-horizontal','files'=>true)) !!}
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Title : </label>
      <div class="col-sm-10">
        <input type="text" name="filetitle" class="form-control file_title_c" id="file_title_id" placeholder="Enter title"
         value="{{Input::old('filetitle')}}">
        @if($errors->has('filetitle'))
          <p class="help-block">
            {{$errors->first('filetitle')}}
          </p>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload file :</label>
      <div class="col-sm-10">
        <input type="file" name="fileupl" class="filename">
        @if($errors->has('fileupl'))
          <p class="help-block">
            {{$errors->first('fileupl')}}
          </p>
        @endif
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  {!! Form::close() !!}
</div>
<script>
  @if(Session::has('message'))
  var type = "{{Session::get('alert-type','info')}}";
  switch(type){
    case 'success':
    toastr.success("{{Session::get('message')}}");
    break;

    case 'error':
    toastr.error("{{Session::get('message')}}");
    break;
  }
  @endif
</script>
@endsection
