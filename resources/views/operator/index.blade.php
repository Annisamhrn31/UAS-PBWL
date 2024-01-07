@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{route('operator_create')}}"class ="btn" style="background-color: #F08080">tambah data</a>
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th style="width: 10px">NO</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
            <?php $no =1; ?>
            @foreach ($data as $d)
          <tr>
            <td>{{ $no++}}</td>
            <td>{{ $d->name}}</td>
            <td>{{ $d->email}}</td>
            <td class="d-flex gap-3 justify-content-center"> 
                <a href="{{route('operator_edit', ['id' => $d->id])}}"class = "btn btn-warning"><i class="fas fa-edit"></i></a>
                <form action="{{ route('operator_delete', ['id' => $d->id]) }}" method="POST">
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