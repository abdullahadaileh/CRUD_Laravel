@extends('layout')

@section('content')
    <h1 class="mb-4">Add New Movie</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="movie_name" class="form-label">Movie Name:</label>
            <input type="text" name="movie_name" id="movie_name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="movie_description" class="form-label">Movie Description:</label>
            <textarea name="movie_description" id="movie_description" class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="movie_gener" class="form-label">Movie Gener:</label>
            <input type="text" name="movie_gener" id="movie_gener" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add Movie</button>
    </form>
@endsection
