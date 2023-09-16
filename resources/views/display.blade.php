@extends('layout2')
@section('title',"Display Blogs")
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
    <div style="border: 3px dot-dash black;">
        <h4>Your Blogs:</h4><br>
        @foreach($blogs as $blog)
            <div style="background-color: gray; padding: 10px; margin: 10px;">
                <h6>{{$blog['title']}}</h6>
                {{$blog['body']}}
                <div style="margin-top: 10px; display: flex; align-items: center;">
                    <a href="/edit-blog/{{$blog->id}}" class="button-link">Edit</a>
                    <form action="/delete-blog/{{$blog->id}}" method="POST" style="margin-left: 10px;">
                        @csrf
                        @method('Delete')
                        <button class="button-link">Delete</button>
                    </form>
                </div>
            </div>

        @endforeach
    </div>
@endsection
