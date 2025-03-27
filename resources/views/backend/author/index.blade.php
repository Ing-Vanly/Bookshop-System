@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Authors</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Author</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Flash Message Display -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                <i class="fas fa-plus"></i> Add New Author
                            </button>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Author Management</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Profile Image</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($authors as $key => $author)
                                            <tr>
                                                <td>{{ ($authors->currentPage() - 1) * $authors->perPage() + $key + 1 }}
                                                </td>
                                                <td>{{ $author->first_name }} {{ $author->last_name }}</td>
                                                <td>{{ $author->email }}</td>
                                                <td>{{ $author->phone_number }}</td>
                                                <td>
                                                    @if ($author->profile_image)
                                                    <img src="{{ asset($author->profile_image) }}" width="50"
                                                            alt="Profile Photo">
                                                @else
                                                    <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" width="50" class="img-circle elevation-2" alt="User Image">
                                                @endif

                                                </td>
                                                <td>{{ $author->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm edit-btn"
                                                        data-id="{{ $author->id }}"
                                                        data-first_name="{{ $author->first_name }}"
                                                        data-last_name="{{ $author->last_name }}"
                                                        data-email="{{ $author->email }}"
                                                        data-phone_number="{{ $author->phone_number }}"
                                                        data-profile_image="{{ $author->profile_image }}"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                                        data-id="{{ $author->id }}"
                                                        data-url="{{ route('author.destroy', $author) }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No authors found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <!-- Add pagination footer -->
                            {{-- <div class="card-footer clearfix">
                                <div class="pagination pagination-sm m-0 float-right">
                                    {{ $authors->links() }}
                                </div>
                            </div> --}}

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

    @include('backend.author.create')
    @include('backend.author.edit')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-btn');

            // Add click event listener to each button
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const authorId = this.getAttribute('data-id');
                    const deleteUrl = this.getAttribute('data-url');

                    // Show SweetAlert2 confirmation
                    Swal.fire({
                        title: 'Delete Author',
                        text: 'Are you sure you want to delete this author?',
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
