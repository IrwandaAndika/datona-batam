@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Cases')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Cases Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Cases Page</li>
            <li class="breadcrumb-item active">Cases Edit</li>
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
              <h3 class="card-title">Cases Edit</h3>
            </div>
            <!-- /.card-header -->
            @foreach ($cases as $c)
            <div class="card-body">
              <form action="{{ route('cases-update') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $c->id }}">
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Inserta Name" value="{{ $c->name }}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="dercription" name="description" placeholder="Inserta Description" value="{{ $c->description }}">
                </div>
                <div class="form-group">
                    <label for="exampleSelectBorder">Type</label>
                    <select class="custom-select form-control-border" name="type_id" id="exampleSelectBorder" value="{{ $c->type_id }}">
                      <option value="1">HR Management</option>
                      <option value="2">Industrial Relation</option>
                      <option value="3">Jobs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="file" class="form-control" id="content" name="content" placeholder="Insert image">
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