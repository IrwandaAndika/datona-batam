@extends('layouts.dashboard.admin-page')
@section('title', 'Datona Testimonials')
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Testimonials</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add More
              </button>
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
                    <td class="">{{ $t->company }}</td>
                    <td class="">{{ $t->description }}</td>
                    <td>{{ $t->image }}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $t->id }}">
                        edit
                      </button><br>
												<br>
											<a href="/testimonials/delete/{{ $t->id }}" type="button" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  </tbody>    
                @endforeach
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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

  <!-- Modal Add -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add More Testimonials</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/testimonials/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" id="author" name="author" placeholder="Inserta Author Name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" class="form-control" id="company" name="company" placeholder="Inserta Company Name">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="description"></textarea>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="text" class="form-control" id="image" name="image" placeholder="Inserta Image">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  @foreach ($testimonials as $t)
  <div class="modal fade" id="editModal{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add More Testimonials</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/testimonials/update" method="post">
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
              <input type="text" class="form-control" id="image" name="image" placeholder="Inserta Image" value="{{ $t->image }}">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection