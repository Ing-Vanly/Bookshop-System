@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Book</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('book.index') }}">Books</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Book Details</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('book.update', $book->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Book Title</label>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                                    value="{{ old('title', $book->title) }}" placeholder="Enter book title">
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" name="price"
                                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                                    value="{{ old('price', $book->price) }}" placeholder="Enter price"
                                                    step="0.01">
                                                @error('price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="author_id">Author</label>
                                                <select name="author_id"
                                                    class="form-control @error('author_id') is-invalid @enderror"
                                                    id="author_id">
                                                    <option value="">Select an author</option>
                                                    @foreach ($authors as $author)
                                                        <option value="{{ $author->id }}"
                                                            {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                                                            {{ $author->first_name }} {{ $author->last_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('author_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="genre_id">Genre</label>
                                                <select name="genre_id"
                                                    class="form-control @error('genre_id') is-invalid @enderror"
                                                    id="genre_id">
                                                    <option value="">Select a genre</option>
                                                    @foreach ($genres as $genre)
                                                        <option value="{{ $genre->id }}"
                                                            {{ old('genre_id', $book->genre_id) == $genre->id ? 'selected' : '' }}>
                                                            {{ $genre->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('genre_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="publication_date">Publication Date</label>
                                                <input type="date" name="publication_date"
                                                    class="form-control @error('publication_date') is-invalid @enderror"
                                                    id="publication_date"
                                                    value="{{ old('publication_date', $book->publication_date) }}">
                                                @error('publication_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cover_image">Cover Image</label>
                                                <div class="custom-file">
                                                    <input type="file" name="cover_image"
                                                        class="custom-file-input @error('cover_image') is-invalid @enderror"
                                                        id="cover_image" accept="image/*" onchange="previewImage(event)">
                                                    <label class="custom-file-label" for="cover_image">Choose an
                                                        image</label>
                                                </div>
                                                {{-- @error('cover_image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                                <div class="mt-3">
                                                    <strong>Preview:</strong>
                                                    <br>
                                                    <img id="imagePreview"
                                                        src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : '#' }}"
                                                        alt="Cover Preview" class="img-thumbnail"
                                                        style="max-width: 200px; display: {{ $book->cover_image ? 'block' : 'none' }};">
                                                </div> --}}
                                            </div>



                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="stock_quantity">Stock Quantity</label>
                                                <input type="number" name="stock_quantity"
                                                    class="form-control @error('stock_quantity') is-invalid @enderror"
                                                    id="stock_quantity"
                                                    value="{{ old('stock_quantity', $book->stock_quantity) }}"
                                                    placeholder="Enter stock quantity">
                                                @error('stock_quantity')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rating">Rating</label>
                                                <input type="number" name="rating"
                                                    class="form-control @error('rating') is-invalid @enderror"
                                                    id="rating" value="{{ old('rating', $book->rating) }}"
                                                    placeholder="Enter rating" min="0" max="5"
                                                    step="0.1">
                                                @error('rating')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                                    rows="4" placeholder="Enter book description">{{ old('description', $book->description) }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Update Book</button>
                                        <a href="{{ route('book.index') }}" class="btn btn-secondary">Cancel</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
