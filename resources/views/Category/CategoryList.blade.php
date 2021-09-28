
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
                                       <th>Category name</th>
                                
                                   </tr>
                               </thead>
                           
                           
                               <tbody>
                                   @foreach($categories  as $cat)
                                   <tr>
                                      
                                       <td>{{$cat->category_name}}</td>
                                    
                                      
                                       <td>
                                   <a href="/edit/category/{{$cat->id}}" class="btn btn-primary">Edit</a>
                                   <a href="/delete/category/{{$cat->id}}" class="btn btn-danger">Delete</a>
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