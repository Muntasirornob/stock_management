
@include('./body.header')

        <!-- Begin page -->
        <div id="wrapper">
       <!-- Topbar Start -->
        @include('./body.navbar')
        <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('./body.sidebar')
            <!-- Left Sidebar End -->
        </div>
        <!-- END wrapper -->
      @yield('admin')
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- {{ asset('backend/')}} -->

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Vendor js -->
        <script src=" {{ asset('/assets/js/vendor.min.js')}}"></script>
        <!-- Plugins js-->
        <script src="{{ asset('/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
        <!-- Dashboar 1 init js-->
        <script src="{{ asset('/assets/js/pages/dashboard-1.init.js')}}"></script>
           <!-- third party js -->
           <script src="{{ asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
           <script src="{{ asset('/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
           <!-- third party js ends -->
           <!-- Datatables init -->
           <script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>
        <!-- App js-->
        <script src="{{ asset('/assets/js/app.min.js')}}"></script>
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <!-- noster notify js function  start -->
        <script>

        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info')}}"
        switch (type) {

            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");


                  break;
                  default:
                break;
        }

        @endif

        </script>



         <script>
    $(function() {
        $(document).on('click', '#delete', function(e) {
            // e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085D6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }); // document end
    }); // main funcations end
</script>

<!-- noster notify js function  End -->

  </body>  <!-- end body-->
</html>
