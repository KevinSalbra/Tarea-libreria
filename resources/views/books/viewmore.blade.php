@extends('layouts.app')

@section('content')

<div style="max-width:900px; margin:auto;">

    <!-- Título -->
    <h1 style="text-align:center; margin-bottom:20px;">
        {{ $book['title'] }}
    </h1>

    <!-- Contenedor principal -->
    <div style="
        display:flex;
        gap:30px;
        align-items:flex-start;
        flex-wrap:wrap;
        justify-content:center;
        border:1px solid #ccc;
        border-radius:10px;
        padding:20px;
    ">

        <div style="text-align:center;">
            <img src="{{ $book['image'] }}" width="250" style="border-radius:8px;">
        </div>

        <div style="max-width:400px;">

            <p><strong>Edition:</strong> {{ $book['edition'] }}</p>
            <p><strong>Year:</strong> {{ $book['copyright'] }}</p>
            <p><strong>Language:</strong> {{ $book['language'] }}</p>
            <p><strong>Pages:</strong> {{ $book['pages'] }}</p>
            <p><strong>Description: <hr style="border:none;"> </strong> {{$book['description']}}</p>

            <p>
                <strong>Author:</strong><br>
                <a href="/?url=authors/{{ $book['author_id'] }}" style="color:#007BFF; text-decoration:none;">
                    {{ $book['author'] }}
                </a>
            </p>

            <p>
                <strong>Publisher:</strong><br>
                <a href="/?url=publishers/{{ $book['publisher_id'] }}" style="color:#007BFF; text-decoration:none;">
                    {{ $book['publisher'] }}
                </a>
            </p>
            
        </div>

    </div>

</div>

@endsection