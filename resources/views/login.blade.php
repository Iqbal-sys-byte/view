@extends('layouts.app')
@section('title','Login | PORTAL BERITA')
@section('content')
    <div class="container mt-4 w-25">
        <h2>Login</h2>
            <form action="{{route('login') }}" method="post">
                @csrf
                <input class="form-control mb-3" type="text" name="email" id="" placeholder="email" required>
                <input class="form-control mb-3" type="password" name="password" id="" placeholder="password" required>
                <button class="btn btn-primary form-control" type="submit">login</button>
            </form>
    </div>
@endsection