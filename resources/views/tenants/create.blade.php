@extends('admin.layouts.app')

@section('dashboard')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New tenants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">Add New Tenant</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('tenants.store') }}" method="POST" >
                    @csrf

                    <div class="row">
                           <div class="col-md-6">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Number:</strong>
                                    <input type="number" name="idnumber" class="form-control" placeholder="ID Number" required>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email Address:</strong>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Occupation:</strong>
                                    <input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                        <div class="">
                          <div class="form-group">
                          <label for="571290b31b0a8d"><span class="required">
                               Gender<span class="error">*</span>
                              <select name="gender" required class="form-control" id="">
                                  <option value="" selected disabled>Select Your Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                              </select>
                          </div>
                        </div>
                        <div class="">
                        <div class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <label for="dob">Date Of Birth</label>
                            <input placeholder="Select date" type="date" id="dob" name="dob" class="form-control" required>
                          </div>
                        </div>


                      {{--  <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                          <label for="571290b31b0a8d"><span class="required">
                      Marital Status                           <span class="error">*</span>
                              <select name="m_status" required class="form-control" id="">
                                  <option value="" selected disabled>Select Your Status</option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Divorced">Divorced</option>
                              </select>
                          </div>
                      </div>  --}}
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                          <label for="571290b31b0a8d"><span class="required">
                      County                           <span class="error">*</span>
                              <select required class="form-control" name="county">
                                  <option value="Baringo">Baringo</option>
                                  <option value="Bomet">Bomet</option>
                                  <option value="Bungoma">Bungoma</option>
                                  <option value="Busia">Busia</option>
                                  <option value="Elgeyo marakwet">Elgeyo Marakwet</option>
                                  <option value="Embu">Embu</option>
                                  <option value="Garissa">Garissa</option>
                                  <option value="Homa bay">Homa Bay</option>
                                  <option value="Isiolo">Isiolo</option>
                                  <option value="Kajiado">Kajiado</option>
                                  <option value="Kakamega">Kakamega</option>
                                  <option value="Kericho">Kericho</option>
                                  <option value="Kiambu">Kiambu</option>
                                  <option value="Kilifi">Kilifi</option>
                                  <option value="Kirinyaga">Kirinyaga</option>
                                  <option value="Kisii">Kisii</option>
                                  <option value="Kisumu">Kisumu</option>
                                  <option value="Kitui">Kitui</option>
                                  <option value="Kwale">Kwale</option>
                                  <option value="Laikipia">Laikipia</option>
                                  <option value="Lamu">Lamu</option>
                                  <option value="Machakos">Machakos</option>
                                  <option value="Makueni">Makueni</option>
                                  <option value="Mandera">Mandera</option>
                                  <option value="Meru">Meru</option>
                                  <option value="Migori">Migori</option>
                                  <option value="Marsabit">Marsabit</option>
                                  <option value="Mombasa">Mombasa</option>
                                  <option value="Muranga">Muranga</option>
                                  <option value="Nairobi">Nairobi</option>
                                  <option value="Nakuru">Nakuru</option>
                                  <option value="Nandi">Nandi</option>
                                  <option value="Narok">Narok</option>
                                  <option value="Nyamira">Nyamira</option>
                                  <option value="Nyandarua">Nyandarua</option>
                                  <option value="Nyeri">Nyeri</option>
                                  <option value="Samburu">Samburu</option>
                                  <option value="Siaya">Siaya</option>
                                  <option value="Taita taveta">Taita Taveta</option>
                                  <option value="Tana river">Tana River</option>
                                  <option value="Tharaka nithi">Tharaka Nithi</option>
                                  <option value="Trans nzoia">Trans Nzoia</option>
                                  <option value="Turkana">Turkana</option>
                                  <option value="Uasin gishu">Uasin Gishu</option>
                                  <option value="Vihiga">Vihiga</option>
                                  <option value="Wajir">Wajir</option>
                                  <option value="Pokot">West Pokot</option>
                              </select>
                          </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Location:</strong>
                                <input type="text" name="location" class="form-control" placeholder="Location" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <input type="text" name="address" class="form-control" placeholder="Address"required>
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
