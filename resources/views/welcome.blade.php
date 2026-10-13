@extends('layouts.app')
@section('title','Welcome | PORTAL BERITA')
@section('content')
    <h4 class="text-center">List Berita</h4>
    <div class="row g-4">
        @forelse ($berita as $b )
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $b->gambar ) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">{{ Str::limit($b->judul,10,'...') }}</h4>
                        <p class="card-text">{{ Str::limit($b->isi,10,'...') }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('show', $b->id) }}" class="btn btn-sm btn-primary">Lihat Selengkapnya</a>
                            <p class="text-muted">{{ $b->tanggal }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Tidak Ada Berita</p>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $berita->links('pagination::bootstrap-5')}}
    </div>
@endsection