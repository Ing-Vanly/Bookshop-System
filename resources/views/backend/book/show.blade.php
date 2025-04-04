@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Book Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('book.index') }}">Books</a></li>
                            <li class="breadcrumb-item active">View Book</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $book->title }}</h3>
                                <div class="float-right">
                                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <td>{{ $book->title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Price</th>
                                                <td>{{ number_format($book->price, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Author</th>
                                                <td>{{ $book->author->name ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Genre</th>
                                                <td>{{ $book->genre->name ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td>{{ $book->description ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Publication Date</th>
                                                <td>{{ $book->publication_date ? $book->publication_date->format('M d, Y') : 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Cover Image</th>
                                                <td>
                                                    @if ($book->cover_image)
                                                        <img src="{{ asset($book->cover_image) }}" width="100" alt="Cover image">
                                                    @else
                                                        <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" width="100" class="img-circle elevation-2" alt="Default Image">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stock Quantity</th>
                                                <td>{{ $book->stock_quantity }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rating</th>
                                                <td>{{ $book->rating ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Created At</th>
                                                <td>{{ $book->created_at->format('M d, Y') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-4 text-right">
                                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('book.index') }}" class="btn btn-secondary">Back to Books</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
