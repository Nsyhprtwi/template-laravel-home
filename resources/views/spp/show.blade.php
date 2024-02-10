@extends('home.master')

@section('h1')
SPP
@section('content')
    <div>
        <h1>SPP</h1>
        <h3> Id : {{$sppShow->id_spp}}</h3>
        <h3> Tahun : {{$sppShow->tahun}}</h3>
        <h3> Nominal : {{$sppShow->nominal}}</h3>
    </div>

@endsection

