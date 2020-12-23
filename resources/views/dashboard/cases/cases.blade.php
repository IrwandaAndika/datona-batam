@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Cases')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Cases</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Cases</li>
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
              <h3 class="card-title">Data Cases</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if (session('massage'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5 class="mt-2"><i class="icon fas fa-check"></i>{{ session('massage') }}</h5>
                </div>
              @endif
              <a href="{{ route('cases-add') }}" type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add More Cases</a>
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 pt-3"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                <thead>
                  <tr>
                    <th rowspan="1" colspan="1" class="text-center">Name</th>
                    <th rowspan="1" colspan="1" class="text-center">Description</th>
                    <th rowspan="1" colspan="1" class="text-center">Type</th>
                    <th rowspan="1" colspan="1" class="text-center">Content</th>
                    <th rowspan="1" colspan="1" class="text-center">Option</th>
                  </tr>
                </thead>
                @foreach ($cases as $c)
                <tbody>
                  <tr role="row" class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{ $c->name }}</td>
                    <td class="">{{ $c->description }}</td>
                    <td class="">{{ $c->type_id }}</td>
                    <td class="">{{ $c->content }}</td>
                    <td>
                      <a href="/cases-edit/{{ $c->id }}" type="button" class="btn btn-success"><i class="far fa-edit"></i> Edit</a><br>
                        <br>
                      <a href="/cases-delete/{{ $c->id }}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</a>
                    </td>
                  </tr>
                  </tbody>    
                @endforeach
              </table></div></div><div class="row"><div class="col-sm-12 col-md-7">{{ $cases->links() }}</div></div></div>
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