@extends('master')
@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>
        <div class="panel heading">REGISTRATION DATA</div>
        </h1>
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Asal Sekolah</th>
            <th>Aksi</th>
          </tr>
          <?php $no=1 ?>
              @foreach ($register_users as $register)
                <tr>
                <td>{{$no++}} </td>
                <td>{{$register->username}}</td>
                <td>{{$register->email}}</td>
                <td>{{$register->tanggallahir}}</td>
                <td>{{$register->tempatlahir}}</td>
                <td>{{$register->asalsekolah}}</td>
                <td>
                  <form action="{{route('register.destroy',$register->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{route('register.edit',$register->id)}}" class="btn btn-primary">Edit</a>
                    <input type="submit" class="btn btn-warning" onclick="return confirm('Are you sure to delete this data');" name="delete" value="delete">
                  </form>
                </td>
                </tr>
              @endforeach
        </table>
    </div

  </div>

</div>
@endSection
