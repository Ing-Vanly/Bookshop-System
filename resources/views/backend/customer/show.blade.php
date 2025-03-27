@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customers</a></li>
                            <li class="breadcrumb-item active">Show Customer</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <p>{{ $customer->name }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <p>{{ $customer->email }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <p>{{ $customer->address }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <p>{{ $customer->phone }}</p>
                                </div>

                                <div class="form-group">
                                    <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back to Customers</a>
                                </div>
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
@endsection
