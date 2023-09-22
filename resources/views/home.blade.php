@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 text-center">
                <h1>Welcome to Our Blog</h1>
                <p>This is a Blog posting app. LOGIN or REGISTER to get started.</p>
                <a href="/login" class="btn btn-primary">Login</a>
                <a href="/registration" class="btn btn-success">Register</a>
            </div>


        </div>
    </div>

    <style>
        body {
            background-color: #f0f0f0; /* Background color of the page */
        }

        .container {
            padding-top: 5px;
        }

    </style>
@endsection

