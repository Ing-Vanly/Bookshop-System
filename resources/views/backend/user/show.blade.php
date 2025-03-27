@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">View User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $user->name }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Profile Image -->
                                    <div class="col-md-4">
                                        @if ($user->profile_image)
                                            <img src="{{ asset($user->profile_image) }}" alt="{{ $user->name }}"
                                                class="img-fluid mb-3 rounded">
                                        @else
                                            <div class="alert alert-secondary text-center py-5">
                                                <i class="fas fa-user fa-5x mb-3"></i>
                                                <p>No profile photo available</p>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- User Information Table -->
                                    <div class="col-md-8">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Role</th>
                                                <td>
                                                    @if ($user->role)
                                                        <span class="badge badge-info">{{ ucfirst($user->role->name) }}</span>
                                                    @else
                                                        <span class="text-muted">No assigned role</span>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Phone Number</th>
                                                <td>{{ $user->phone_number ?? 'Not provided' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Created At</th>
                                                <td>{{ $user->created_at->diffForHumans() }}
                                                    ({{ $user->created_at->format('M d, Y H:i') }})</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('user.index') }}" class="btn btn-secondary">Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
