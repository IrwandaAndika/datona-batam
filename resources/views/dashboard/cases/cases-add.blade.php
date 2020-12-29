@extends('layouts.dashboard.admin-page')
@section('title', 'Datona Cases')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Cases Add</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Cases</li>
            <li class="breadcrumb-item active">Dashboard Cases Add</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection
@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cases Add</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('cases-store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Insert Name" aria-describedby="emailHelp">
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}" placeholder="Insert Description">
                      @error('description')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectBorder">Type</label>
                      <select class="custom-select form-control-border @error('type_id') is-invalid @enderror" name="type_id" id="exampleSelectBorder">
                        <option value="1">HR Management</option>
                        <option value="2">Industrial Relation</option>
                        <option value="3">Jobs</option>
                      </select>
                      @error('type_id')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="image">Content</label>
                      <div class="custom-file">
                        <input type="file" name="content" class="custom-file-input @error('content') is-invalid @enderror" value="{{ old('content') }}" id="content">
                        <label class="custom-file-label" for="image">Choose an Image</label>
                        @error('content')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>  
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
  <!-- Button trigger modal -->
@endsection