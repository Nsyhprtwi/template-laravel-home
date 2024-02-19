@extends('home.master')

@section('h1')
Kelas
@section('content')
    <div>
        <h1>SPP</h1>
        <h3> Id : {{$kela->id_kelas}}</h3>
        <h3> Nama kelas : {{$kela->nama_kelas}}</h3>
        <h3> Kopetensi Keahlian: {{$kela->kopetensi_keahlian}}</h3>
    </div>

@endsection

