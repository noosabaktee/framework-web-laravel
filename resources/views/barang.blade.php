@extends('utama')
@section('judul-menu')
    <p>Ini tampilan dari section judul-menu dengan data: {{$isi_data}}</p>
    @if ($isi_data>20)
        <p>Isi data lebih dari 20</p>
    @elseif($isi_data>15)
        <p>Isi data lebih dari 25</p>
    @else
        <p>Isi data kurang dari 20</p>
    @endif
@endsection
@section('isi-menu')
    <p>Ini isi dari section isi</p>
@endsection