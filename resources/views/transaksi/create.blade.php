@extends('layouts.app')
@section('content')
<form action="{{route('transaksi_store')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="operator" class="col-sm-2 col-form-label">Operator</label>
        <div class="col-sm-10">
            <select class="form-select" name="operator_id" required>
                <option value="" selected disabled>Pilih Operator</option>
                @foreach ($operator as $op)
                    <option value="{{ $op->id }}">{{ $op->operator }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="member" class="col-sm-2 col-form-label">Member</label>
        <div class="col-sm-10">
            <select class="form-select" name="member_id" required>
                <option value="" selected disabled>Pilih Member</option>
                @foreach ($member as $mem)
                    <option value="{{ $mem->id }}">{{ $mem->member }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Barang</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "nama_barang">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">PCS</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "pcs">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name = "tgl_masuk">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Keluar</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name = "tgl_keluar">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name = "harga">
      </div>
  
    <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
  </form>
@endsection