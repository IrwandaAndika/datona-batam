@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Expertises')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Expertise Add</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Expertise</li>
            <li class="breadcrumb-item active">Dashboard Expertise Add</li>
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
              <h3 class="card-title">Expertise Add</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('expertises.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input @error('title') class="form-control is-invalid" @enderror type="text" class="form-control" id="title" name="title" placeholder="Inserta Title" aria-describedby="emailHelp">
                      @error('title')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea @error('content') class="form-control is-invalid" @enderror class="form-control" id="content" name="content" rows="3" placeholder="Insert Content"></textarea>
                      @error('content')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <div class="custom-file">
                        <input @error('image') class="form-control is-invalid" @enderror type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose an Image</label>
                        @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="link">Link</label>
                      <input @error('link') class="form-control is-invalid" @enderror type="text" class="form-control" id="link" name="link" placeholder="Inserta Link">
                      @error('link')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
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

  <script>
    tinymce.init({
        selector:'#content',
        branding: false
    });
  </script>
@endsection