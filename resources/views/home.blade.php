@extends('layouts.app')

@section('content')

<h1 style="text-align:center;"> Computer Science Books</h1>

<p style="text-align:center; max-width:600px; margin:auto;">
    This website offers information about computer science books, their authors, 
    and publishers. Explore the collection and discover key resources in the field.
</p>

<hr style="margin:30px 0;">

<div style="display:flex; justify-content:space-around; flex-wrap:wrap; gap:20px;">

    <!-- BOOKS -->
    <div style="border:1px solid #ccc; padding:20px; width:250px; text-align:center; border-radius:10px;">
        <img src="/images/books/computernetworks.jpg" width="120" style="margin-bottom:10px;">
        <h3>Books</h3>
        <p>Browse all available books and see their details.</p>
        <a href="/?url=books" style="background:#007BFF;color:white;border-radius:5px;text-decoration:none; display:inline-block;margin-top:10px;padding:8px 12px;">View Books</a>
    </div>

    <!-- AUTHORS -->
    <div style="border:1px solid #ccc; padding:20px; width:250px; text-align:center; border-radius:10px;">
        <img src="/images/authors/Abrahamsilberschatz.jpg" width="120" style="margin-bottom:10px;">
        <h3>Authors</h3>
        <p>Learn more about the authors and their works.</p>
        <a href="/?url=authors" style="background:#007BFF;color:white;border-radius:5px;text-decoration:none; display:inline-block;margin-top:10px;padding:8px 12px;">View Authors</a>
    </div>

    <!-- PUBLISHERS -->
    <div style="border:1px solid #ccc; padding:20px; width:250px; text-align:center; border-radius:10px;">
        <img src="/images/publishers/john-wiley-sons-ltd.svg" width="120" style="margin-bottom:10px;">
        <h3>Publishers</h3>
        <p>Explore the publishers behind these books.</p>
        <a  href="/?url=publishers" style="background:#007BFF;color:white;border-radius:5px;text-decoration:none; display:inline-block;margin-top:10px;padding:8px 12px;">View Publishers </a>
    </div>

</div>

<hr style="margin:40px 0;">

<div style="text-align:center;">
    <h2> About this project</h2>
    <p style="max-width:600px; margin:auto;">
        This project demonstrates a simple MVC architecture using PHP and Blade templates.
        It allows navigation between books, authors, and publishers without using a database.
    </p>
</div>

@endsection