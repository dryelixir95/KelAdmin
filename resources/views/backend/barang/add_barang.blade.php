<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
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
                    <!--/.span3 tempat form-->
                    <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add Barang</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="post" action="{{route('barang.store')}}">
                                        @csrf
                                        <div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" id="basicinput" name="id" placeholder="" class="span8">
											</div>
                                        </div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<input type="text" id="basicinput" name="nama" placeholder="" class="span8">
											</div>
                                        </div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Jumlah</label>
											<div class="controls">
                                                <input type="text" id="basicinput" name="jumlah" class="span8" aria-invalid="false">
											</div>
										</div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Harga</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput" name="harga" class="span8">
                                            </div>
                                        </div>
                            									
										<div class="control-group">
											<div class="controls">
												<button style="color: green;" type="submit" class="btn">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>					
					</div><!--/.content-->
				</div>

                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="{{asset('backend/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/scripts/common.js')}}" type="text/javascript"></script>
		
    </body>
