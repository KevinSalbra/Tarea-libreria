@extends('layouts.app')

@section('content')

<div style="max-width:900px; margin:auto;">

    <div style="
        display:flex;
        gap:30px;
        align-items:flex-start;
        flex-wrap:wrap;
        margin-bottom:30px;
    ">

        <div>
            <img src="{{ $author['image'] }}" width="220" style="border-radius:10px;">
        </div>

        <div style="max-width:500px;">
            <h1 style="margin-bottom:15px;">{{ $author['name'] }}</h1>

            <p><strong>Nationality:</strong> {{ $author['nationality'] }}</p>
            <p><strong>Born:</strong> {{ $author['birth_year'] }}</p>
            <p><strong>Fields:</strong> {{ $author['fields'] }}</p>
        </div>

    </div>

    <div style="
        border:1px solid #ccc;
        border-radius:10px;
        padding:20px;
        margin-bottom:30px;
    ">
        <h2 style="margin-bottom:15px;">Biography</h2>

        <p style="line-height:1.6;">
            {{ $author['biography'] }}
        </p>
    </div>

    <div style="
        border:1px solid #ccc;
        border-radius:10px;
        padding:20px;
    ">
        <h2 style="margin-bottom:15px;">Books</h2>

        <ul style="padding-left:20px;">
            @foreach ($books as $book)
                <li style="margin-bottom:8px;">
                    <a href="/?url=books/{{ $book['id'] }}" style="color:#007BFF; text-decoration:none;">
                        {{ $book['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>

@endsection