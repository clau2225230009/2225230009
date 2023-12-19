@extends('layout.clau')
@section('kontent')
<h3 class="alma">Input Data Donasi Uang Infaq</h3>
<center>
<form class="wrapper" method="POST" action="/isian" >
   @csrf  
    <div class="mb-3 mama">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama lengkap" value="{{Session::get('nama')}}">
    </div>
    <div class="mb-3 mama">
        <label for="kelas" class="form-label">Kelas:</label>
        <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas" value="{{Session::get('kelas')}}">
    </div>
    <div class="mb-3 mama">
        <label for="nominal" class="form-label">Nominal Rp:</label>
        <input type="text" id="nominal" name="nominal" class="form-control" placeholder="Nominal infaq" value="{{Session::get('nominal')}}">
    </div>
    <div class="mb-3 mama"> 
        <button>Submit</button>
    </div>
</form>
</center>
@endsection