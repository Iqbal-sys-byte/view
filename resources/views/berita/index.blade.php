@extends('layouts.app')
@section('title','Index Berita | PORTAL BERITA')
@section('content')

<h2>Data Berita</h2>

<a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">
    + Tambah Berita  
</a>

    <form action="{{route('berita.index')}}" method="get" class="mb-3">
        @csrf
        <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Masukan Search...." value="{{ old('search') }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Tanggal</th>
                        <th>Image</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($berita as $index => $b)
                    <tr>
                        <td>{{$berita->firstItem() + $index}}</td>
                        <td>{{ $b->judul }}</td>
                        <td>{{ Str::limit($b->isi,'10','...') }}</td>
                        <td>{{ $b->tanggal }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $b->gambar)}}" width="100">
                        </td>
                        <td>
                            <a href="{{ route('berita.edit', $b->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('show', $b->id) }}" class="btn btn-success btn-sm">
                                Detail
                            </a>

                            <form action="{{ route('berita.destroy', $b->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {{$berita->links('pagination::bootstrap-5')}}
        </div>
    </div>
</div>

@endsection