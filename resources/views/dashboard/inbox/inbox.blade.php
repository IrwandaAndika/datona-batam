@extends('layouts.dashboard.admin-page')
@section('title','Dashboard Inbox')
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
                <li class="breadcrumb-item active">Inbox</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
      <div class="row">
          <div class="col-sm-3">
            <a href="#" class="btn btn-primary btn-block mb-3">Compose</a>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Inbox</h3>
                </div>
                <div class="card-body">
                    <div class="card-tools">
                        <form action="{{ route('admin.inbox.search') }}" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>    
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 pt-3"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr>
                            <th rowspan="1" colspan="1" class="text-center">Name</th>
                            <th rowspan="1" colspan="1" class="text-center">Message</th>
                            <th rowspan="1" colspan="1" class="text-center">Email</th>
                            <th rowspan="1" colspan="1" class="text-center">Time</th>
                            <th rowspan="1" colspan="1" class="text-center">Option</th>
                        </tr>
                        </thead>
                        @foreach ($contact as $c)
                        <tbody>
                            <tr role="row" class="odd">
                            <td class="text-center" tabindex="0">{{ $c->title }}</td>
                            <td class="text-justify">{{ $c->message }}</td>
                            <td class="text-center">{{ $c->email }}</td>
                            <td class="text-center">{{ $c->created_at->diffForHumans() }}</td>
                            <td class="align-middle">
                                <a href="/inbox-delete/{{ $c->id }}" type="button" method="delete" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                            </td>
                            </tr>
                        </tbody>    
                        @endforeach
                    </table></div></div><div class="row"><div class="col-sm-12 col-md-7">{{ $contact->links() }}</div></div></div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     </div> 
    </section>
    <!-- /.content -->
@endsection
