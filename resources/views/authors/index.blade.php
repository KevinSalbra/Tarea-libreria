@extends('layouts.app')

@section('content')

<h1 style="text-align:center;"> Authors</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">

    @foreach ($authors as $author)
        <div style="
            border:1px solid #ccc;
            border-radius:10px;
            padding:15px;
            width:250px;
            text-align:center;
        ">
        
            <!-- Imagen -->
            <img src="{{ $author['image'] }}" width="150" style="margin-bottom:10px; border-radius:8px;">

            <!-- Nombre -->
            <h3>{{ $author['name'] }}</h3>

            <!-- Info básica -->
            <p style="font-size:14px;">
                {{ $author['fields'] }}
            </p>

            <!-- Link -->
            <a href="/?url=authors/{{ $author['id'] }}" style="
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
