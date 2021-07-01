@extends('admin.layouts.app')

@section('dashboard')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit tenants</h1>
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
              <div class="card-header">
                <h3 class="card-title">Edit Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('tenants.update',$id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                           <div class="col-md-6">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                            <input type="text" name="name" value="{{ $tenant->name }}" class="form-control" placeholder="Name" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Number:</strong>
                                    <input type="number" name="idnumber" value="{{ $tenant->idnumber }}" class="form-control" placeholder="ID Number" readonly>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="number" name="phone"  value="{{ $tenant->phone }}"class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email Address:</strong>
                                    <input type="email" name="email" value="{{ $tenant->email }}" class="form-control" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Occupation:</strong>
                                    <input type="text" name="occupation" value="{{ $tenant->occupation }}" class="form-control" placeholder="Occupation" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                        <div class="">
                          <div class="form-group">
                            <strong>Gender:</strong>
                            <input type="text" name="gender" value="{{ $tenant->gender }}" class="form-control"  readonly >

                          </div>
                        </div>
                        <div class="">
                        <div class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <label for="dob">Date Of Birth</label>
                            <input type="text" name="dob" class="form-control" value="{{ $tenant->dob }}"  readonly >
                          </div>
                        </div>

                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <label for="dob">County</label>
                            <input type="text" name="county" class="form-control"  value="{{ $tenant->county }}" readonly >
                          </div>
                      </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Location:</strong>
                                <input type="text" name="location" value="{{ $tenant->location }}" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <input type="text" name="address" value="{{ $tenant->address }}" class="form-control" required>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
                    </div>

                </form>
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
