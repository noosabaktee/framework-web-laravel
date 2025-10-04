@extends('layouts.app')
@section('title', 'Halaman Product')
@section('content')
    <x-alert type="{{$alertType}}">{{$alertMessage}}</x-alert>
@endsection