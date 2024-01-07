@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{route('member_create')}}"class ="btn" style="background-color: #F08080">tambah data</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">NO</th>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
            <?php $no =1; ?>
            @foreach ($data as $d)
          <tr>
            <td>{{ $no++}}</td>
            <td>{{ $d->nama}}</td>
            <td>{{ $d->no_hp}}</td>
            <td>{{ $d->alamat}}</td>
            <td>
                <a href="{{route('member_edit', ['id' => $d->id])}}"class = "btn btn-warning"><i class="fas fa-edit"></i></a>
                <form action="{{ route('member_delete', ['id' => $d->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
           
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>
@endsection