@extends('backend.layouts.app')

@section('content')
<div class="container" style="margin-left: 400px;"> <!-- Add margin-left to shift content right -->
        <h3 class="text-center my-4">Books In Stock</h3>
        <div class="row">
            @foreach ($booksInStock as $book)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-light">
                        <img src="{{ $book->cover_image ? asset($book->cover_image) : asset('AdminLTE/dist/img/user2-160x160.jpg') }}"
                            class="card-img-top" alt="Cover image of {{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $book->title }}</h5>
                            <p class="card-text">Stock: <strong class="text-success">{{ $book->stock_quantity }}</strong>
                                Books</p>
                            <a href="{{ route('book.show', $book->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
