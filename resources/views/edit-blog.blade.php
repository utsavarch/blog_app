@extends('layout2')
@section('title',"Edit Blog")
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
    <h4>Edit Blog</h4>
    <form action="/edit-blog/{{$blog->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$blog->title}}">
        <textarea name="body">{{$blog->body}}</textarea>
        <button class="button-link">Save Changes</button>
    </form>
@endsection
