@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Testimonials')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Testimonials Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Testimonials Page</li>
            <li class="breadcrumb-item active">Testimonials Edit</li>
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
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Testimonials Edit</h3>
            </div>
            <!-- /.card-header -->
            @foreach ($testimonials as $t)
            <div class="card-body">
              <form action="{{ route('testimonials.update') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $t->id }}">
                </div>
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" class="form-control" id="author" name="author" placeholder="Inserta Author Name" value="{{ $t->author }}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="company">Company</label>
                  <input type="text" class="form-control" id="company" name="company" placeholder="Inserta Company Name" value="{{ $t->company }}">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" placeholder="description">{{ $t->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="Insert Image" value="{{ $t->image }}">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>   
            @endforeach 
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