@extends('layout2')
@section('title', "Edit Blog")
@section('content')
    <style>
        /* Move the styles to your CSS file for better organization */
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button-link:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #fff;
        }

        /* Style for the form elements */
        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Container for the form */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>

    <div class="form-container">
        <h4>Edit Blog</h4>
        <form action="/edit-blog/{{$blog->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Blog Content</label>
                <textarea class="form-control" id="body" name="body">{{$blog->body}}</textarea>
            </div>

            <button class="button-link">Save Changes</button>
        </form>
    </div>
@endsection
