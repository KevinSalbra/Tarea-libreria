@extends('layouts.app')

@section('content')

<div style="max-width:900px; margin:auto;">

    <!-- Header -->
    <div style="display:flex; gap:30px; flex-wrap:wrap; margin-bottom:30px;">

        <img src="{{ $publisher['image'] }}" width="220" style="border-radius:10px;">

        <div>
            <h1>{{ $publisher['name'] }}</h1>
            <p><strong>Country:</strong> {{ $publisher['country'] }}</p>
            <p><strong>Founded:</strong> {{ $publisher['foundation_year'] }}</p>
            <p><strong>Genre:</strong> {{ $publisher['genre'] }}</p>
        </div>

    </div>

    <!-- History -->
    <div style="border:1px solid #ccc; border-radius:10px; padding:20px; margin-bottom:30px;">
        <h2>History</h2>
        <p>{{ $publisher['history'] }}</p>
    </div>

    <!-- Books -->
    <div style="border:1px solid #ccc; border-radius:10px; padding:20px;">
        <h2>Books</h2>

        <ul>
            @foreach ($books as $book)
                <li>
                    <a href="/?url=books/{{ $book['id'] }}" style="color:#007BFF; text-decoration:none;">
                        {{ $book['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>

@endsection