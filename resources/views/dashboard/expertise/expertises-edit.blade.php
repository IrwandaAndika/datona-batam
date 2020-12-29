@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Expertises')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Expertises Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Expertises Page</li>
            <li class="breadcrumb-item active">Expertises Edit</li>
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
              <h3 class="card-title">Expertise Edit</h3>
            </div>
            <!-- /.card-header -->
            @foreach ($expertises as $ex)
            <div class="card-body">
              <form action="{{ route('expertises.update', $ex->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $ex->id }}">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Inserta Title" value="{{ old('title') . $ex->title }}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" placeholder="Content">{{ old('content') . $ex->content }}</textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <div class="custom-file">
                    <label class="custom-file-label" for="image">Image</label>
                    <input type="file" class="custom-file-input" id="image" name="image" placeholder="Inserta Image" value="{{ old('image') . $ex->image }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" class="form-control" id="link" name="link" placeholder="Insert Link" value="{{ old('link') . $ex->link }}">
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <img class="img-thumbnail" src="{{ asset('storage/'. $ex->image) }}" width="30%" alt="">
                  </div>
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
  <script>
      tinymce.init({
        selector:'#content',
        branding: false
      });
  </script>
@endsection