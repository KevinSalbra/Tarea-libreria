@extends('layouts.app')

@section('content')

<h1 style="text-align:center; margin-bottom:30px;"> Publishers</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">

@foreach ($publishers as $publisher)
    <div style="border:1px solid #ccc; border-radius:10px; padding:15px; width:250px; text-align:center;">

        <img src="{{ $publisher['image'] }}" width="150" style="margin-bottom:10px; border-radius:8px;">

        <h3>{{ $publisher['name'] }}</h3>

        <p>{{ $publisher['country'] }}</p>

        <a href="/?url=publishers/{{ $publisher['id'] }}" style="
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