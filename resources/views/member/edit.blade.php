@extends('layouts.app')

@section('content')
    <form action="{{ route('member_update', ['id' => $data->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
        </div>
        
        <div class="mb-3">
            <label for="no_hp" class="form-label">No hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $data->no_hp }}">
        </div>
        
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
        </div>
    
        <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
    </form>
@endsection
