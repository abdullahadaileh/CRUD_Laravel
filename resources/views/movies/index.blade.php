@extends('layout')

@section('content')
    <h1 class="mb-4">Movies List</h1>

    <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">Add New Movie</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Movie Name</th>
                <th>Description</th> <!-- Add this column header -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach($movies as $movie)
                <tr>
                    <!-- <td>{{ $movie->id }}</td> -->
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movie->movie_name }}</td>
                    <td>{{ $movie->movie_description }}</td> <!-- Add this column data -->
                    <td>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>


                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
@endsection

