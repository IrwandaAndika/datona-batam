@extends('layouts.dashboard.admin-page')
@section('title', 'Dashboard Testimonials')
@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Testimonials</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Testimonials</li>
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
              <h3 class="card-title">Data Testimonials</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @include('layouts.alert')
                <a href="{{ route('testimonials.add') }}" type="button" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Create More Testimonial</a>
                <form action="/testimonials-search" method="GET">
                  <div class="input-group col-sm-6">
                      <input type="search" class="form-control form-control-md" name="cari" placeholder="Search here..." value="{{ old('cari') }}">
                      <div class="input-group-append">
                          <button type="submit" value="CARI" class="btn btn-md btn-default">
                              <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </div>
                </form>
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 pt-3"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                <thead>
                  <tr>
                    <th rowspan="1" colspan="1" class="text-center">Author</th>
                    <th rowspan="1" colspan="1" class="text-center">Company</th>
                    <th rowspan="1" colspan="1" class="text-center">Description</th>
                    <th rowspan="1" colspan="1" class="text-center">Image</th>
                    <th rowspan="1" colspan="1" class="text-center">Option</th>
                  </tr>
                </thead>
                @foreach ($testimonials as $t)
                  <tbody>
                    <tr role="row" class="odd">
                      <td class="dtr-control sorting_1" tabindex="0">{{ $t->author }}</td>
                      <td>{{ $t->company }}</td>
                      <td>{{ $t->description }}</td>
                      <td class="align-middle"><img src="{{asset('storage/' . $t->image)}}" width="100px" height="100px"></td>
                      <td class="align-middle text-center">
                        <a href="/testimonials-edit/{{ $t->id }}" type="button" class="btn btn-success btn-sm"><i class="far fa-edit"></i> Edit</a><br>
                          <br>
                        <a href="/testimonials-delete/{{ $t->id }}" type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</a>
                      </td>
                    </tr>
                  </tbody>    
                @endforeach
              </table></div></div><div class="row"><div class="col-sm-12 col-md-7">{{ $testimonials->links() }}</div></div></div>
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