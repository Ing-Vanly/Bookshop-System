        @extends('backend.layouts.app')

        @section('content')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Books</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ route('book.index') }}">Books</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Flash Message Display -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Check for flash messages
                        @if (session('success'))
                            showSuccessToast("{{ session('success') }}");
                        @endif

                        @if (session('error'))
                            showErrorToast("{{ session('error') }}");
                        @endif
                    });
                </script>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end mb-2">
                                    <a href="{{ route('book.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Add New Book
                                    </a>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Book Management</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Price</th>
                                                    <th>Author</th> 
                                                    <th>Genre</th>
                                                    <th>Cover Image</th>
                                                    <th>Stock Quantity</th>
                                                    <th>Rating</th>
                                                    {{-- <th>Description</th> --}}
                                                    <th>Release Date</th>
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($books as $book)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $book->title }}</td>
                                                        <td>{{ number_format($book->price, 2) }}$</td>
                                                        <td>{{ $book->author->first_name ?? 'N/A' }}{{ $book->author->last_name ?? 'N/A' }}
                                                        </td>
                                                        <td>{{ $book->genre->name ?? 'N/A' }}</td>
                                                        <td>
                                                            @if ($book->cover_image)
                                                                <img src="{{ asset($book->cover_image) }}" width="50"
                                                                    alt="Cover image">
                                                            @else
                                                                <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}"
                                                                    width="50" class="img-circle elevation-2"
                                                                    alt="User Image">
                                                            @endif

                                                        </td>
                                                        </td>
                                                        <td>{{ $book->stock_quantity }} Books</td>
                                                        <td>
                                                            @if ($book->rating)
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <i
                                                                        class="fas fa-star {{ $i <= $book->rating ? 'text-warning' : 'text-secondary' }}"></i>
                                                                @endfor
                                                            @else
                                                                N/A
                                                            @endif
                                                        </td>
                                                        {{-- <td>{{ $book->description ?? 'N/A' }}</td> --}}
                                                        <td>
                                                            {{ $book->publication_date ? \Carbon\Carbon::parse($book->publication_date)->format('M d, Y') : 'N/A' }}
                                                        </td>

                                                        </td>
                                                        <td>{{ $book->created_at ? $book->created_at->format('M d, Y') : 'N/A' }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('book.show', $book->id) }}" class="btn btn-info btn-sm">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>

                                                            <a href="{{ route('book.edit', $book->id) }}"
                                                                class="btn btn-primary btn-sm">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                            <a href="#" class="btn btn-danger btn-sm delete-btn"
                                                                data-id="{{ $book->id }}"
                                                                data-url="{{ route('book.destroy', $book->id) }}">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="12" class="text-center">No books found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var deleteButtons = document.querySelectorAll('.delete-btn');

                    // Add click event listener to each button
                    deleteButtons.forEach(function(button) {
                        button.addEventListener('click', function(e) {
                            e.preventDefault();
                            const bookId = this.getAttribute('data-id');
                            const deleteUrl = this.getAttribute('data-url');

                            // Show SweetAlert2 confirmation
                            Swal.fire({
                                title: 'Delete Book',
                                text: 'Are you sure you want to delete this book?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Create a form element
                                    const form = document.createElement('form');
                                    form.method = 'POST';
                                    form.action = deleteUrl;
                                    form.style.display = 'none';

                                    // Add CSRF token
                                    const csrfToken = document.createElement('input');
                                    csrfToken.type = 'hidden';
                                    csrfToken.name = '_token';
                                    csrfToken.value = '{{ csrf_token() }}';
                                    form.appendChild(csrfToken);

                                    // Add method spoofing for DELETE
                                    const methodField = document.createElement('input');
                                    methodField.type = 'hidden';
                                    methodField.name = '_method';
                                    methodField.value = 'DELETE';
                                    form.appendChild(methodField);

                                    // Append form to body, submit it, then remove it
                                    document.body.appendChild(form);
                                    form.submit();
                                }
                            });

                        });
                    });
                });
            </script>
        @endsection
