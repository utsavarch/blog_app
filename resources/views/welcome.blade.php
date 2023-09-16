@extends('layout2')
@section('title',"Home")
@section('content')
    <style>
    .button-link {
    display: inline-block;
    padding: 10px 20px; /* Adjust padding as needed */
    background-color: #007bff; /* Button background color */
    color: #fff; /* Text color */
    text-decoration: none;
    border: 1px solid #007bff; /* Button border color */
    border-radius: 4px; /* Rounded corners */
    transition: background-color 0.3s, color 0.3s; /* Transition effect for hover */
    }

    .button-link:hover {
    background-color: #0056b3; /* New background color on hover */
    border-color: #0056b3; /* New border color on hover */
    color: #fff; /* New text color on hover */
    }
    </style>
    <br>
    <form>
        @csrf <!-- Include the CSRF token for security -->
        <a href="/create" class="button-link">
            Create New Blog
        </a>
    </form>
    <br>
    <a href="/display" class="button-link">
        See Your Blogs
    </a>

    <div style="border: 3px dot-dash black;">
        <br><h4>All Blogs:</h4><br>
        @foreach($blogs as $blog)
            <div style="background-color: gray; padding: 10px;margin: 10px; ">
                <h6>Title:&nbsp{{$blog['title']}}</h6>
                <p style="text-align: justify;">{{$blog['body']}}</p>

                <h6><br>By: {{ $blog->user->name }}</h6>
                </div>
        @endforeach
    </div>

@endsection
