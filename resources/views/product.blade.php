@extends('layouts.app')
@section('title', 'Halaman Product')
@section('content')
    <h1>Ini adalah halaman produk</h1>
    <h1>Selamat datang {{$nama}}</h1>
    <x-Alert type="{{$alertType}}" message="{{$alertMessage}}"/>
@endsection