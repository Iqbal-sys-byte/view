@extends('layouts.app')
@section('title','Edit Berita | PORTAL BERITA')
@section('content')

        <h2 class="mt-4">   Edit Berita  </h2>
        <form action="{{route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>judul</label>
            <input type="text"name="judul" class="form-control" value="{{ old('judul',$berita->judul) }}">
    </div>

    <div class="mb-3">
            <label for="isi" class="form-label">isi</label>
                <textarea name="isi" id="isi" class="form-control" placeholder="Masukan Konten">{{ old('isi',$berita)}}</textarea>
        </div>

    <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-select" required>
                <option disabled>Pilih Kategori</option>
                @foreach ( $kategoris as $kategori )
                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                @endforeach
            </select>
    </div>

        <div class="mb-3"> 
        <label>image</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection   