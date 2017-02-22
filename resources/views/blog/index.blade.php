@extends('master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Simple CRUD Laravel
      <form class="navbar-form navbar-left pull-right">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        </div>
          <button type="submit" class="btn btn-default" name="submit"
          >Submit</button>
        </form>
    </h1>

  </div>

</div>
<div class="row">

  <table class="table table-striped">

    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
    <?php $no=1; ?>



    @foreach ($blogs as $blog)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->description}}</td>
        <td>
          <form class="" action="{{route('blog.destroy',$blog->id)}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
            <input type="submit" class="btn btn-warning" onclick="return confirm('Are you sure to delete this data');" name="delete" value="delete">
          </form>
        </td>
      </tr>
    @endforeach
  </table>
    <a href="{{route('blog.create')}}" class="btn btn-success">Create New Data</a>
</div>

@stop
