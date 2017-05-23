<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Blue Harbour</title>

    <!-- Bootstrap Core CSS -->
	<link href="{{ asset("/loginpage/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- MetisMenu CSS -->
    <link href="{{ asset("/loginpage/vendor/metisMenu/metisMenu.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
	<link href="{{ asset("/loginpage/dist/css/sb-admin-2.css") }}" rel="stylesheet" type="text/css" />

    <!-- Custom Fonts -->
	<link href="{{ asset("/loginpage/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
						<?php if(count($errors)>0): ?>
					<div class="panel panel-danger">
                        <div class="panel-heading">
                                    <ul>
							<?php foreach($errors->all() as $error): ?>
							<li><?php echo e($error); ?></li>
							<?php endforeach; ?>
									</ul>
                        </div>
                    </div>
					        <?php endif; ?>
							<?php echo Form::open(['url'=>'login2','class'=>'form-horizontal']); ?>
                            <fieldset>
                                <div class="form-group">
									<?php echo Form::text('username','',['class'=>'form-control','placeholder'=>"Username"]); ?>
                                </div>
                                <div class="form-group">
                                <?php echo Form::password('password',['class'=>'form-control','placeholder'=>"Password"]); ?>
                                </div>
								<!--
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Tetap Masuk
                                    </label>
                                </div>--!>
                                <!-- Change this to a button or input when using this as a form -->
                               <button class="btn btn-lg btn-success btn-block">Masuk</button>
								<?php echo Form::close(); ?>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <!-- jQuery -->
	<script type="text/javascript" src="{{asset('loginpage/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="{{asset('loginpage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
	<script type="text/javascript" src="{{asset('loginpage/vendor/metisMenu/metisMenu.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
	<script type="text/javascript" src="{{asset('loginpage/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
