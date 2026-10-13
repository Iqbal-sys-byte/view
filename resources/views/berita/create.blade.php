@extends('layouts.app')
@section('title','CREATE BERITA | PORTAL BERITA')
@section('content')

<h2 class="my-4">Tambah berita</h2>
    <form action="{{route('berita.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">isi</label>
                <textarea name="isi" id="isi" class="form-control" placeholder="Masukan Konten"></textarea>
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            @error('kategori_id')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            <select name="kategori_id" id="kategori_id" class="form-select" required>
                <option selected disabled>Pilih Kategori</option>
                @foreach ( $kategoris as $kategori )
                    
                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Image</label>
                <input type="file" name="gambar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection