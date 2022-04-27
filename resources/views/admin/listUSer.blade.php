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
                                <a style="float:right;
                                position: relative;
                                top: -24px" class="btn btn-mini btn-success">Add User</a>
                            </div>
                            <div class="module-body">
                                <p>
                                    <strong>Bordered</strong>
                                    -
                                    <small>table class="table table-bordered"</small>
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allDataUser as $key => $user)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="" class="btn btn-info">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
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
</body>
