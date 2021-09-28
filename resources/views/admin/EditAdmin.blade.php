
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


 <div class="row">
    <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
                <h3 class="header-title">Update Admin</h3>
                
                <form method="POST" action="{{url('/update/admin/'.$admin->id)}}"   class="parsley-examples" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">User Name<span class="text-danger">*</span></label>
                        <input type="text" name="username" parsley-trigger="change" required placeholder="Enter user name" value="{{$admin->username}}" class="form-control" id="userName" />
                    </div>
                    <div class="mb-3">
                        <label for="FullName" class="form-label">Full Name<span class="text-danger">*</span></label>
                        <input type="text" name="fullname" value="{{$admin->fullname}}" parsley-trigger="change" required placeholder="Enter Full name" class="form-control" id="fullName" />
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                        <input type="email" name="email" value="{{$admin->email}}" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress" />
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                        <input type="file" name="image" parsley-trigger="change" required placeholder="Upload Image" class="form-control" id="image" />
                    </div>
                  
                
                    <div class="text-end">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->

 </div>
        </div>
    </div>
 </div>
@endsection