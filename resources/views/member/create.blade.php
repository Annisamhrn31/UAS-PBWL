@extends('layouts.app')
@section('content')
<form action="{{route('member_store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "nama">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">No hp</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "no_hp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name = "alamat">
      </div>
  
    <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
  </form>
@endsection
