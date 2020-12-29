@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Expertises')
@section('header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Expertises</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Expertises</li>
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
              <h3 class="card-title">Data Expertise</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @include('layouts.alert')
              <a href="{{ route('expertises.add') }}" type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create More Expertise</a>
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 pt-3"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                <thead>
                  <tr>
                    <th rowspan="1" colspan="1" class="text-center">Title</th>
                    <th rowspan="1" colspan="1" class="text-center">Content</th>
                    <th rowspan="1" colspan="1" class="text-center">Image</th>
                    <th rowspan="1" colspan="1" class="text-center">Link</th>
                    <th rowspan="1" colspan="1" class="text-center">Option</th>
                  </tr>
                </thead>
                @foreach ($expertises as $e)
                <tbody>
                  <tr role="row" class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{ $e->title }}</td>
                    <td>{!! $e->content !!}</td>
                    <td><img src="{{ asset('storage/' . $e->image) }}" width="100px" height="100px"></td>
                    <td>{{ $e->link }}</td>
                    <td class="margin-auto align-middle">
                      <a href="/expertises-edit/{{ $e->id }}" type="button" class="btn btn-success btn-sm"><i class="far fa-edit"></i> Edit</a><br>
                        <br>
                      <a href="/expertises-delete/{{ $e->id }}" type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</a>
                    </td>
                  </tr>
                  </tbody>    
                @endforeach
              </table></div></div><div class="row"><div class="col-sm-12 col-md-7">{{ $expertises->links() }}</div></div></div>
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
@endsection