<?php
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
    <link href="css/bootstrap.css" rel="stylesheet">
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
	<script>
		function showResult(str)
		{
		var key = document.getElementById("search-type").value;
		var str1 = str + "1" + key;
		if (str.length==0)
		  {
		  document.getElementById("livesearch").innerHTML="";
		  document.getElementById("livesearch").style.border="0px";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
		    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
		    }
		  }
		xmlhttp.open("GET","searchlink.php?q="+str1,true);
		xmlhttp.send();
		}
	</script>
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
                <a class="navbar-brand" href="index.html">IGNI Menu System</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index2to.php"><i class="fa fa-cutlery" style="font-size:15px;"></i>Menu</a>
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
	<div class="box">
		<div class="row">			 
			<div class="col-lg-12" id="print" align="center">
                   	<hr width="50%">
                    	<h2 class="intro-text text-center">Search Customer History</strong>
                    	</h2>
                    	<hr width="50%">

				<br/>                  
				<div class="lcb-form">
					<div class="input-group m-b-20">
                        			<div class="fg-line">
							<select id="search-type" class="form-control">
				                        <option value="firstname" selected="selected">Firstname</option>
				                        <option value="lastname">Lastname</option>
				                        <option value="allergicinfo">Allergic Info</option>
				                        <option value="date">Date</option>
				                        <option value="food">Food</option>
				                        <option value="drink">Drink</option>
							</select>
							<br/>	
							<br/>							
							<input id="searchtext" class="login_input" type="text" placeholder="Search..." onkeyup="showResult(this.value);" />		
						</div>
							
			
						<div class="fg-line" id="livesearch">
                    				 

						</div>
						</div>
						<br/>
						
                        			
							<br />	
						
										
					</div>
				</div>
			</div>
	</div>	
	</div>
	<br/>
    <!-- /.container -->
    <footer style="background-color: #efefef;">
                <div class="col-lg-12 text-center" style="background-color: #efefef;">
                    <p style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; IGNI 2017</p>
                </div>
    </footer>

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
	
	function goUp(index){
		var foodlist = document.getElementsByClassName("food-control");
		var drinklist = document.getElementsByClassName("drink-control");
		var currentDrink = drinklist[index - 1].innerHTML;
		var currentFood = foodlist[index - 1].innerHTML;
		var lastDrink = drinklist[index - 2].innerHTML;
		var lastFood = foodlist[index - 2].innerHTML;
		
		//swap them
		drinklist[index - 1].innerHTML = lastDrink;
		foodlist[index - 1].innerHTML = lastFood;
		foodlist[index - 2].innerHTML = currentFood;
		drinklist[index - 2].innerHTML = currentDrink;
	}
	
	function goDown(index){
		var foodlist = document.getElementsByClassName("food-control");
		var drinklist = document.getElementsByClassName("drink-control");
		var currentDrink = drinklist[index - 1].innerHTML;
		var currentFood = foodlist[index - 1].innerHTML;
		var nextDrink = drinklist[index].innerHTML;
		var nextFood = foodlist[index].innerHTML;
		
		//swap them
		drinklist[index - 1].innerHTML = nextDrink;
		foodlist[index - 1].innerHTML = nextFood;
		foodlist[index].innerHTML = currentFood;
		drinklist[index].innerHTML = currentDrink;		
	}

    </script>

</body>

</html>
