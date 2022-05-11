<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmin</title>
    <link type="text/css" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('backend/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('backend/css/theme.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('backend/images/icons/css/font-awesome.css')}}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>

    @include('admin.body.navbar')
    <!-- /navbar -->

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    @include('admin.body.sidebar')
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->


                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Tables</h3>
                                <a href="{{route('user.add')}}" style="float:right;
                                position: relative;
                                top: -24px" class="btn btn-mini btn-success">Add User</a>
                            </div>
                            <div class="module-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Group</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allDataUser as $key => $user)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->usertype}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{route('user.edit', $user->id)}}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{route('user.delete', $user->id)}}" id="delete"
                                                    class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <br />
                                <!-- <hr /> -->
                                <br />
                            </div>
                        </div>
                        <!--/.module-->

                        <br />

                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->

    <div class="footer">
        <div class="container">


            <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
        </div>
    </div>

    <script src="{{asset('backend/scripts/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('backend/scripts/jquery-ui-1.10.1.custom.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/scripts/datatables/jquery.dataTables.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
        @endif

    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function () {
            $(document).on('click', '#delete', function (e) {
                e.preventDefault();
                var link = $(this).attr("href");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#790DEB',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href=link
                        Swal.fire(
                            'Your data has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });

    </script>

</body>
