@extends('welcome')

@section('judul halaman', 'DASHBOARD')

@section('konten')
    <p>TABEL KATALOG</p>
    @foreach ($katalogs as $katalog)
        <img src="{{ asset('katalogs/'.$katalog->image) }}" alt="" style="height: 100px">
    @endforeach

    <br>
    <br>
    
    <P>TABEL TEST</P>
    <img src="{{ asset('tests/'.$tests->image) }}" alt="" style="height: 50px;">

    <br>
    <br>

    <p>TABEL CLIENT</p>
    @foreach ($clients as $client)
        <img src="{{ asset('clients/'.$client->image) }}" alt="" style="height: 100px">
    @endforeach
    
    <br>
    <br>
    
    <p>TABEL BRAND</p>
    @foreach ($brands as $brand)
        <img src="{{ asset('brands/'.$brand->image) }}" alt="" style="height: 50px">
    @endforeach
@endsection