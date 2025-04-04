@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Genre</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Genres</li>
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

                // Ensure the modal opens when the button is clicked
                document.querySelector('[data-toggle="modal"]').addEventListener('click', function() {
                    $('#modal-lg').modal('show');
                });
            });
        </script>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                <i class="fas fa-plus"></i> Add New Genre
                            </button>
                        </div>
                        {{-- <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 4.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td> 4</td>
                                  <td>X</td>
                                </tr>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 5.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 5.5
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5.5</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 6
                                  </td>
                                  <td>Win 98+</td>
                                  <td>6</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet Explorer 7</td>
                                  <td>Win XP SP2+</td>
                                  <td>7</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Trident</td>
                                  <td>AOL browser (AOL desktop)</td>
                                  <td>Win XP</td>
                                  <td>6</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 1.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 1.5</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 2.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 3.0</td>
                                  <td>Win 2k+ / OSX.3+</td>
                                  <td>1.9</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Camino 1.0</td>
                                  <td>OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Camino 1.5</td>
                                  <td>OSX.3+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Netscape 7.2</td>
                                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Netscape Browser 8</td>
                                  <td>Win 98SE+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Netscape Navigator 9</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.1</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.1</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.2</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.2</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.3</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.3</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.4</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.4</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.5</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.5</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.6</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.6</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.7</td>
                                  <td>Win 98+ / OSX.1+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.8</td>
                                  <td>Win 98+ / OSX.1+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Seamonkey 1.1</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Gecko</td>
                                  <td>Epiphany 2.20</td>
                                  <td>Gnome</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>Safari 1.2</td>
                                  <td>OSX.3</td>
                                  <td>125.5</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>Safari 1.3</td>
                                  <td>OSX.3</td>
                                  <td>312.8</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>Safari 2.0</td>
                                  <td>OSX.4+</td>
                                  <td>419.3</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>Safari 3.0</td>
                                  <td>OSX.4+</td>
                                  <td>522.1</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>OmniWeb 5.5</td>
                                  <td>OSX.4+</td>
                                  <td>420</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>iPod Touch / iPhone</td>
                                  <td>iPod</td>
                                  <td>420.1</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Webkit</td>
                                  <td>S60</td>
                                  <td>S60</td>
                                  <td>413</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 7.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 7.5</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 8.0</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 8.5</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 9.0</td>
                                  <td>Win 95+ / OSX.3+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 9.2</td>
                                  <td>Win 88+ / OSX.3+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera 9.5</td>
                                  <td>Win 88+ / OSX.3+</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Opera for Wii</td>
                                  <td>Wii</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Nokia N800</td>
                                  <td>N800</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Presto</td>
                                  <td>Nintendo DS browser</td>
                                  <td>Nintendo DS</td>
                                  <td>8.5</td>
                                  <td>C/A<sup>1</sup></td>
                                </tr>
                                <tr>
                                  <td>KHTML</td>
                                  <td>Konqureror 3.1</td>
                                  <td>KDE 3.1</td>
                                  <td>3.1</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>KHTML</td>
                                  <td>Konqureror 3.3</td>
                                  <td>KDE 3.3</td>
                                  <td>3.3</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>KHTML</td>
                                  <td>Konqureror 3.5</td>
                                  <td>KDE 3.5</td>
                                  <td>3.5</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Tasman</td>
                                  <td>Internet Explorer 4.5</td>
                                  <td>Mac OS 8-9</td>
                                  <td>-</td>
                                  <td>X</td>
                                </tr>
                                <tr>
                                  <td>Tasman</td>
                                  <td>Internet Explorer 5.1</td>
                                  <td>Mac OS 7.6-9</td>
                                  <td>1</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>Tasman</td>
                                  <td>Internet Explorer 5.2</td>
                                  <td>Mac OS 8-X</td>
                                  <td>1</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>NetFront 3.1</td>
                                  <td>Embedded devices</td>
                                  <td>-</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>NetFront 3.4</td>
                                  <td>Embedded devices</td>
                                  <td>-</td>
                                  <td>A</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>Dillo 0.8</td>
                                  <td>Embedded devices</td>
                                  <td>-</td>
                                  <td>X</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>Links</td>
                                  <td>Text only</td>
                                  <td>-</td>
                                  <td>X</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>Lynx</td>
                                  <td>Text only</td>
                                  <td>-</td>
                                  <td>X</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>IE Mobile</td>
                                  <td>Windows Mobile 6</td>
                                  <td>-</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>Misc</td>
                                  <td>PSP browser</td>
                                  <td>PSP</td>
                                  <td>-</td>
                                  <td>C</td>
                                </tr>
                                <tr>
                                  <td>Other browsers</td>
                                  <td>All others</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>U</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform(s)</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                                </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div> --}}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Genre Management</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="ordersTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($genres as $genre)
                                            <tr>
                                                <td>{{ $genre->id }}</td>
                                                <td>{{ $genre->name }}</td>
                                                <td>{{ $genre->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('genre.edit', $genre->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a type="button" class="btn btn-danger btn-sm delete-btn"
                                                        data-id="{{ $genre->id }}"
                                                        data-url="{{ route('genre.destroy', $genre->id) }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
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

    <!-- Create Genre Modal -->
    @include('backend.genre.create')


    <script>
        var deleteButtons = document.querySelectorAll('.delete-btn');

        // Add click event listener to each button
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const genreId = this.getAttribute('data-id');
                const deleteUrl = this.getAttribute('data-url');

                // Show SweetAlert2 confirmation
                Swal.fire({
                    title: 'Delete Genre',
                    text: 'Are you sure you want to delete this genre?',
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
    </script>
@endsection
