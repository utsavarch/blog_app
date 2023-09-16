@extends('layout2')
@section('title',"Create")
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
    <div class="mb-3">
        <form action="/create_blog" method="POST">
        @csrf
       <label for="formGroupExampleInput" class="form-label">Blog Title</label>
       <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Give a title to your blog">
            <br>
        <label for="formGroupExampleInput2" class="form-label">Blog Content</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="body" placeholder="Write your blog">
        <br>
            <button class="button-link"> Save Post</button>
        </form>
    </div>
@endsection
