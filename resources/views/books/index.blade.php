@extends('layouts.app')

@section('content')

<h1 style="text-align:center;"> Books</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">

    @foreach ($books as $book)
        <div style="
            border:1px solid #ccc;
            border-radius:10px;
            padding:15px;
            width:250px;
            text-align:center;
        ">

            <!-- Imagen -->
            <img src=" {{ $book['image'] }}" width="150" style="margin-bottom:10px;">

            <!-- Título -->
            <h3>{{ $book['title'] }}</h3>

            <!-- Info básica -->
            <p><strong>Edition:</strong> {{ $book['edition'] }}</p>
            <p><strong>Pages:</strong> {{ $book['pages'] }}</p>

            <!-- Botón -->
            <a href="/?url=books/{{ $book['id'] }}" style="
                display:inline-block;
                margin-top:10px;
                padding:8px 12px;
                background:#007BFF;
                color:white;
                border-radius:5px;
                text-decoration:none;
            ">
                View more
            </a>

        </div>
    @endforeach

</div>

@endsection