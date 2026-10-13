@extends('layouts.app')
@section('title','Show | PORTAL BERITA')
@section('content')

    <h1>{{$berita->judul}}</h1>
    <p>{{$berita->isi}}</p>
    <img src="{{asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" style="widht: 300px;">
    <p>tanggal: {{$berita->tanggal}}</p>

    @endsection
