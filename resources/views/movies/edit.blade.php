@extends('layout')

@section('content')
    <h1 class="mb-4">Edit Movie</h1>
    <form action="{{ route('movies.update', $koko->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="movie_name" class="form-label">Movie Name:</label>
            <input type="text" name="movie_name" id="movie_name" class="form-control" value="{{ $koko->movie_name }}">
        </div>
        <div class="form-group mb-3">
            <label for="movie_description" class="form-label">Movie Description:</label>
            <textarea name="movie_description" id="movie_description" class="form-control">{{ $koko->movie_description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="movie_gener" class="form-label">Movie Gener:</label>
            <input type="text" name="movie_gener" id="movie_gener" class="form-control" value="{{ $koko->movie_gener }}">
        </div>
        <button type="submit" class="btn btn-success">Update Movie</button>
    </form>
@endsection