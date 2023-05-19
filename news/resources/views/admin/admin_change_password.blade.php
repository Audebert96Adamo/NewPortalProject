@extends('admin.admin_dashboard')
@section('admin')
<div class="content">

  <!-- Start Content-->
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item active">Admin Change Password</li>
            </ol>
          </div>
          <h4 class="page-title">Admin Change Password</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-lg-8 col-xl-8">
        <div class="card">
          <div class="card-body">

            <form method="post" action="" enctype="multipart/form-data">
              @csrf

              <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Change Password</h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <label for=" old-password" class="form-label">Old Password</label>
                    <input type="password" name="old-password" class="form-control @error('old_password') is-invalid @enderror" id="current_password" value="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <label for="new-password" class="form-label">New Password</label>
                    <input type="password" name="new-password" class="form-control @error('new_password') is-invalid @enderror" id="new-password" value="">
                  </div>
                </div><!-- end col -->
                <div class="col-md-12">
                  <div class="mb-3">
                    @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <label for="confirm-password" class="form-label">Confirm New Password</label>
                    <input type="password" name="confirm-password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm-password" value="">
                  </div>
                </div> <!-- end col -->
              </div> <!-- end row -->


              <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
              </div>
            </form>

            <!-- end settings content-->

          </div>
        </div> <!-- end card-->

      </div> <!-- end col -->
    </div>
    <!-- end row-->

  </div> <!-- container -->

</div>

@endsection