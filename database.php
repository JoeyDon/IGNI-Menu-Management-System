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
                    <li>
                        <a href="search.php"><i class="fa fa-database" style="font-size:15px;"></i>Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
		<?php
			include('codes/config.php');
			if(isset($_POST['submit']))
			{
			$name=mysql_real_escape_string($_POST['name']);
			$age=mysql_real_escape_string($_POST['age']);
			$query1=mysql_query("insert into courses values('$name','$age')");
			echo "insert into courses values('$name','$age')";

			if($query1)
			{
			header("location:database.php");
			}
			}
		?>
		<?php
			include('codes/config.php');
			if(isset($_POST['sub']))
			{
			$id=mysql_real_escape_string($_POST['id']);
			$wine=mysql_real_escape_string($_POST['wine']);
			$query1=mysql_query("insert into wines values('$id','$wine')");
			echo "insert into wines values('$id','$wine')";

			if($query1)
			{
			header("location:database.php");
			}
			}
		?>
		
		
		
		
		
			<div class="box">
<div class="row">
				<div class="col-lg-6" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Add Course</strong>
                    </h2>
                    <hr width="50%">
					<div class="lcb-form">
					<form method="post" action="">	

						<div class="input-group m-b-20">
                        <div class="fg-line">
							<h4>ID:</h4>
							<input type="text" class="form-control" name="name">
						</div>
						</div>
							<br />
						<div class="input-group m-b-20">
                        <div class="fg-line">
							<h4>Course Name:</h4>
							<input type="text" class="form-control" name="age">
						</div>
						</div>
						<br/>
						<div class="input-group m-t-0">
							<button class="btn btn-danger btn-lg btn-block waves-effect" type="submit" name="submit"><span>
							Add <i class="fa fa-plus"></i></span>
							</button>   
						</div>
					</form>
					</div>
					<br />
				</div>
				<div class="col-lg-6" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Add Wine</strong>
                    </h2>
                    <hr width="50%">
					<div class="lcb-form">
					<form method="post" action="">	

						<div class="input-group m-b-20">
                        <div class="fg-line">
							<h4>ID:</h4>
							<input type="text" class="form-control" name="id">
						</div>
						</div>
							<br />
						<div class="input-group m-b-20">
                        <div class="fg-line">
							<h4>Wine:</h4>
							<input type="text" class="form-control" name="wine">
						</div>
						</div>
						<br/>
						<div class="input-group m-t-0">
							<button class="btn btn-danger btn-lg btn-block waves-effect" type="submit" name="sub"><span>
							Add <i class="fa fa-plus"></i></span>
							</button>   
						</div>
					</form>
					
					
					
					</div>
					
                </div>
			</div>			 
				<br/>
				<div class="row">
				<div class="col-lg-12" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Edit / Delete Menu</strong>
                    </h2>
                    <hr width="50%">

				</div>
				</div>
				<div class="row">
				<div class="col-lg-12" align="center">

					</div>
					</div>
					<br/>
					
					<div class="row">
					<div class="col-lg-4" align="center">
					
					<?php
					include('codes/config.php');
					$query1=mysql_query("select id, name from courses");
					echo"<p>food table</P>";
echo '<form action="activetest.php" method="post" enctype="multipart/form-data"> ';
					echo "<table width='300' style='box-shadow: 3px 3px 3px rgba(0,0,0,.15);' border='0' bgcolor='#9fa89f' cellpadding='5' cellspacing='1'><tr bgcolor='#6FA89C'><td width='75'style='color:#fff' style=' border-collapse: separate; border-spacing: 2px;'>ID</td><td colspan='4'>Course</td><td></td><td></td><td></td></tr>";
					while($query3=mysql_fetch_array($query1))
					{
					echo "<tr><td>".$query3['id']."</td>";

	echo '<td><input type="checkbox" name="chk[]" value="'.$query3['name'].'">'.$query3['name'].'</td>';
	echo "<td><a href='edit.php?id=".$query3['id']."'>Edit</a></td><td>&nbsp;&nbsp;</td>";
					echo "<td><a href='delete.php?id=".$query3['id']."'>Delete</a></td><tr>";
					
					}
					echo "</table>";
					echo '<tr><input type="submit" name ="subfood" value="update"></tr>';
					
echo"</form>";
					?>
					</div>
					<div class="col-lg-4" align="center">
						<?php
					include('codes/config.php');
					$query1=mysql_query("select id, wine from wines");
					echo"<p>drink table</P>";
					echo '<form action="activetest.php" method="post" enctype="multipart/form-data"> ';
					echo "<table width='300' style='box-shadow: 3px 3px 3px rgba(0,0,0,.15);' border='0' bgcolor='#9fa89f' cellpadding='5' cellspacing='1'><tr bgcolor='#6FA89C'><td width='75'style='color:#fff' style=' border-collapse: separate; border-spacing: 2px;'>ID</td><td colspan='4'>Wines</td><td></td><td></td><td></td></tr>";
					while($query3=mysql_fetch_array($query1))
					{
					echo "<tr><td>".$query3['id']."</td>";

	echo '<td><input type="checkbox" name="chk[]" value="'.$query3['wine'].'">'.$query3['wine'].'</td>';
					echo "<td><a href='edit.php?id=".$query3['id']."'>Edit</a></td><td>&nbsp;&nbsp;</td>";
					echo "<td><a href='delete1.php?id=".$query3['id']."'>Delete</a></td><tr>";
					}
					echo "</table>";
					echo '<tr><input type="submit" name ="subdrink" value="update"></tr>';
echo"</form>";
					?>
					</div>
					<div class="col-lg-4" align="center">
							<?php
					include('codes/config.php');
					$query1=mysql_query("select id, name from active");
					echo"<p>Active table</P>";

					echo "<table width='300' style='box-shadow: 3px 3px 3px rgba(0,0,0,.15);' border='0' bgcolor='#9fa89f' cellpadding='5' cellspacing='1'><tr bgcolor='#6FA89C'><td width='75'style='color:#fff' style=' border-collapse: separate; border-spacing: 2px;'>ID</td><td colspan='3'>Courses and Wines</td><td></td><td></td></tr>";
					while($query2=mysql_fetch_array($query1))
					{
					echo "<tr><td>".$query2['id']."</td>";
echo "<td>".$query2['name']."</td>";
echo "<td><a href='delete2.php?id=".$query2['id']."'>Delete</a></td><tr>";
					
					
					}
					
					if($query2)
			{
			header("location:database.php");
			}
					echo "</table>";

					?>
					
					</div>
					</div>
				
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
