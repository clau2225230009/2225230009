@extends('layout.clau')
@section('kontent')
<a href="/">Tambah Data</a>
<table class=table border= "2" cellpadding="10" cellspacing="0" >
    <thead>
        <tr>
            <th>nama</th>
            <th>kelas</th>
            <th>nominal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->kelas}}</td>
            <td>{{$item->nominal}}</td>
            <td>
                <a class='btn btn-warning btn-sm' href="{{url('/isian/'.$item->nama.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah Yakin?')" action="{{'/isian/'.$item->nama}}" method="post"> @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection