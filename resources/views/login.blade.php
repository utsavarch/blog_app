@extends('layout')
@section('title','Login')
@section('content')
    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
    @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection
