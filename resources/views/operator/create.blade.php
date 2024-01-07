@extends('layouts.app')

@section('content')

<form action="{{route('operator_store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">No hp</label>
      <input type="email" class="form-control" id="exampleInputPassword1" name = "email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
      </div>
  
    <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
  </form>
@endsection
