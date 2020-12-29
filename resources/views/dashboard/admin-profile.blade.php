@extends('layouts.dashboard.admin-page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Dashboard Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard Admin</li>
                <li class="breadcrumb-item active">Admin Profile</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Admin Profile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.dashboard.upload') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input @error('name') class="form-control is-invalid" @enderror type="text" name="name" class="form-control" value="{{ old('name') . Auth::user()->name }}" id="exampleInputEmail1" placeholder="Name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label class="custom-file-label" for="exampleInputPassword1">Avatar</label>
                            <input @error('avatar') class="form-control is-invalid" @enderror type="file" name="avatar" class="custom-file-input" value="{{ old('avatar') . Auth::user()->avatar }}" id="exampleInputPassword1" placeholder="Avatar">
                            @error('avatar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
            </div>
            <!-- /.card -->
            </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection