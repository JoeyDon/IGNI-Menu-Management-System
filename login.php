<?php
require 'codes/config.php';
include_once 'logindb.php';
$user = new USER($dbo);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IGNI Menu System</title>
	<link rel="icon" href="https://www.restaurantigni.com/favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap1.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom CSS -->
    <link href="css/business-casual1.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Drag -->
	<script src= "js/click.js"></script>

</head>


<?php 

if($user->is_loggedin()!="")
{
 $user->redirect('index2to.php');
}

if(isset($_POST['btnLogin']))
{
 $Username = $_POST['Username'];
 $Password= $_POST['Password'];
  
 if($user->login($Username,$Password))
 {
  $user->redirect('index2to.php');
 }
 else
 {
  $error = "Wrong Details !";
 } 
}
?>
			
<body>
    <div class="brand">Menu Management System</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php
                ">IGNI Menu System</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
            </div>
        </div>
    </nav>
	<br/><br/><br/><br/>
    <div class="login">
	<div class="box">
			<div class="row">			 
				<div class="col-lg-12" id="print" align="center">
                    <hr>
                    <h2 class="intro-text text-center">LOGIN</strong>
                    </h2>
                    <hr>
				</div>
			</div>
			
			<div id="login">
				
				<form action="login.php" method="POST" autocomplete="off"> 
				            <?php
				            if(isset($error))
				            {
				                  ?>
				                  <div class="alert alert-danger">
				                      <i class="glyphicon glyphicon-warning-sign" align="center"></i> &nbsp; <?php echo $error; ?> !
				                  </div>
				                  <?php
				            }
				            ?>
					<div class="row">
						<div class="col-lg-12" id="login" align="center">
							<label class="login"><strong>Username:</strong></label>
							<input type="text" class="login_input" id="Username" name="Username" />
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12" id="login" align="center">
							<label class="login"><strong>Password:</strong></label>
							<input type="password" required autocomplete="off" class="login_input" id="Password" name="Password" />
						</div>	
					</div>		
					
					
					<div class="row" align="center">
						<button lass="btn btn-info btn-lg btn-block waves-effect" name="btnLogin" /> Log In</button>
					</div>		
				
					
				</form>
			</div>
			
			</div>
			<div class="row text-center">
				<p style="font-size:15px; color:#616366"><i>Copyright &copy; IGNI 2017</i></p>
			</div>
	</div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
