
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Admin List</h4>
                           
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>User Name</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            
                            
                                <tbody>
                                    @foreach($admins as $admin)
                                    <tr>
                                        <td> 
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                    <img src="{{('/admin_img/'.$admin->image)}}" alt="" class="img-thumbnail rounded-circle">
                                                </span>
                                            </div>

                                
                                        </td>
                                        <td>{{$admin->username}}</td>
                                        <td>{{$admin->fullname}}</td>
                                        <td>{{$admin->email}}</td>
                                       
                                        <td>
                                    <a href="/edit/admin/{{$admin->id}}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/admin/{{$admin->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
    </div>
 </div>
@endsection