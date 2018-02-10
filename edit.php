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

<body>
    <div class="brand">Menu Management System</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">IGNI Menu System</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-cutlery" style="font-size:15px;"></i>Menu</a>
                    </li>
                    <li>
                        <a href="database.php"><i class="fa fa-database" style="font-size:15px;"></i>Database</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
		
			<div class="box">
			
				<?php
				include('config.php');
				if(isset($_GET['id']))
				{
				$id=$_GET['id'];
				if(isset($_POST['submit']))
				{
				$name=$_POST['name'];
				$age=$_POST['age'];
				$query3=mysql_query("update courses set id='$name', name='$age' where id='$id'");
				if($query3)
				{
				header('location:database.php');
				}
				}
				$query1=mysql_query("select * from courses where id='$id'");
				$query2=mysql_fetch_array($query1);
				?>
			
			<div class="row">
				<div class="col-lg-12" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Edit Menu</strong>
                    </h2>
                    <hr width="50%">
					<div class="lcb-form">
					<form method="post" action="">	

						<div class="input-group m-b-20">
                        <div class="fg-line">
							<h4>ID:</h4>
							<input type="text" class="form-control" name="name" value="<?php echo $query2['id']; ?>" /><br />
						</div>
						</div>
							<br />
						<div class="input-group m-b-20">
                        <div class="fg-line">
							<h4>Course Name:</h4>
							<input type="text" class="form-control" name="age" value="<?php echo $query2['name']; ?>" />
						</div>
						</div>
						<br/>
						<div class="input-group m-t-0">
							<button class="btn btn-primary btn-lg btn-block waves-effect" type="submit" name="submit" value="update"><span>
							Update
							</button>   
						</div>
					</form>
					</div>
					
                </div>
			</div>	

				<?php
				}
				?>
			
			
			
		</div>	
	</div>
	<br/>
    <!-- /.container -->
	<div class="row">
	<div class="col-lg-12" align="center">
    <footer style="background-color: #efefef;">
                <div class="col-lg-12 text-center" style="background-color: #efefef;">
                    <p style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; IGNI 2017</p>
                </div>
    </footer>
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
	
	function clearList(index) {

		var foodlist = document.getElementsByClassName("food-control");
		var drinklist = document.getElementsByClassName("drink-control");
		// clear drink list first and then clear food list

		drinklist[index - 1].innerHTML ="drag to here...";
		foodlist[index - 1].innerHTML ="drag to here...";
	
			
	}
	function clearDrinkList(index) {

		var list = document.getElementsByClassName("drink-control");

		list[index - 1].innerHTML ="";
	}

    </script>

</body>

</html>
