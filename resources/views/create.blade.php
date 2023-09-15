@extends('layout2')
@section('title',"Create")
@section('content')
    <div class="mb-3">
        @csrf
        &nbsp&nbsp&nbsp<label for="formGroupExampleInput" class="form-label">Blog Title</label>
        &nbsp&nbsp&nbsp<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Give a title to your blog">
    </div>
    <div class="mb-auto">
        @csrf
        &nbsp&nbsp&nbsp<label for="formGroupExampleInput2" class="form-label">Blog Content</label>
        &nbsp&nbsp&nbsp<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Write your blog">
    </div>
@endsection
