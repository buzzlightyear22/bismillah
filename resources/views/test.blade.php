@extends('welcome')

@section('judul halaman', 'DASHBOARD')

@section('konten')
    <p>TABEL KATALOG</p>
    @foreach ($katalogs as $katalog)
        <img src="{{ asset('katalogs/'.$katalog->image) }}" alt="">
    @endforeach

    <br>
    <br>
    
    <P>TABEL TEST</P>
    <img src="{{ asset('tests/'.$tests->image) }}" alt="" style="height: 100px;">
@endsection