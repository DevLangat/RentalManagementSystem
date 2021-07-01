@extends('admin.layouts.app')

@section('dashboard')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rental Management System</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tenants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
              <div class="card-header">
                <h3 class="card-title">RMS Tenants</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Full Name</th>
                    <th>Phone </th>
                    <th>ID Number</th>
                    <th>Email Address</th>
                    <th>Occupation</th>
                    <th>County</th>
                    <th>Location</th>
                    {{-- <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th> --}}
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($tenants as $tenant)
                        <tr>
                            <td>{{$tenant->name}}</td>
                            <td>{{$tenant->phone}}</td>
                            <td>{{$tenant->idnumber}}</td>
                            <td>{{$tenant->email}}</td>
                            <td>{{$tenant->occupation}}</td>
                            <td>{{$tenant->county}}</td>
                            <td>{{$tenant->location}}</td>
                            {{-- <td>{{$tenant->address}}</td>
                            <td>{{$tenant->gender}}</td>
                            <td>{{$tenant->dob}}</td> --}}
                            <td>{{$tenant->created_at->format('d/m/Y')}}</td>
                            <td >
                                 <a href="#" title="View Details"><span class="right badge badge-info"><i class="fa fa-eye"></i></span></a>
                                 <a href="{{ route('tenants.edit',$tenant->id) }}" title="Edit Details"><span class="right badge badge-success"><i class="fa fa-edit"></i></span></a>
                                 {{-- <a href="{{ route('tenants.destroy',$tenant->id) }}" title="Delete tenant"> @method('DELETE')<span class="right badge badge-warning"><i class="fas fa-trash"></i></span></a> --}}
                                 <form action="{{ route('tenants.destroy',$tenant->id) }}" method="POST" class="float-right">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> Full Name</th>
                    <th>Phone </th>
                    <th>ID Number</th>
                    <th>Email Address</th>
                    <th>Occupation</th>
                    <th>County</th>
                    <th>Location</th>
                    {{-- <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th> --}}
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
