@extends('layouts.app')
@section('content')
<form action="{{ route('transaksi_update', ['id' => $data->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
            <select class="form-select" name="operator_id" required>
                @foreach ($operator as $ope)
                    <option value="{{ $ope->id }}" {{ $data->operator->id == $ope->id ? 'selected' : '' }}>
                        {{ $ope->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
            <select class="form-select" name="member_id" required>
                @foreach ($member as $mem)
                    <option value="{{ $mem->id }}" {{ $data->member->id == $mem->id ? 'selected' : '' }}>
                        {{ $mem->nama }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="nama_barang" class="form-label">Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $data->nama_barang }}">
    </div>

    <div class="mb-3">
        <label for="pcs" class="form-label">PCS</label>
        <input type="text" class="form-control" id="pcs" name="pcs" value="{{ $data->pcs }}">
    </div>

    <div class="mb-3">
        <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="{{ $data->tgl_masuk }}">
    </div>

    <div class="mb-3">
        <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="{{ $data->tgl_keluar }}">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
    </div>

    <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
</form>
@endsection
