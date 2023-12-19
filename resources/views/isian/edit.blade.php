@extends('layout.clau')
@section('kontent')
<h3>Edit Data Donasi Uang Infaq</h3>
<form method="POST" action="{{'/isian/'.$data->nama}}" >
   @csrf  
   @method('put')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama lengkap" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas:</label>
        <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas" value="{{$data->kelas}}">
    </div>
    <div class="mb-3">
        <label for="nominal" class="form-label">Nominal Rp:</label>
        <input type="text" id="nominal" name="nominal" class="form-control" placeholder="Nominal infaq" value="{{$data->nominal}}">
    </div>
    <div class="mb-3"> 
        <button>Edit</button> <a class="btn btn-secondry" href="/isian">Kembali</a>
    </div>
</form>  
@endsection