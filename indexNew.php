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
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Drag -->
	<script src= "js/click.js"></script>
	<script>
	function passArray() {

		var foodArray = document.getElementsByClassName("food-control");
		var drinkArray = document.getElementsByClassName("drink-control");
		var courseArray = document.getElementsByClassName("fg-line");
		var courseList = new Array();
		var passFood = new Array();
		var passDrink = new Array();
		var foodStr = "";
		var drinkStr = "";
	
		for(i=0; i<courseArray.length; i++)
		{
			passFood[i] = foodArray[i].innerHTML;
			passDrink[i] = drinkArray[i].innerHTML;
			if(i!=courseArray.length-1)
			{
				foodStr += "x[]=" + passFood[i] + "&";
				drinkStr += "y[]=" + passDrink[i] + "&";	
			}
			else
			{
				 foodStr += "x[]=" + passFood[i] ;
				 drinkStr +="y[]=" + passDrink[i] ;
			}

			

		}


		var url = 'Print_pdf.php?' + foodStr + '&' + drinkStr;
		

		window.open(url);

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
                        <a href="index.html"><i class="fa fa-cutlery" style="font-size:15px;"></i>Menu</a>
                    </li>
                    <li>
                        <a href="about.html"><i class="fa fa-database" style="font-size:15px;"></i>Database</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
	<div class="box">
			 <div class="row">
				<div class="col-lg-6" id="course" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Course List</strong>
                    </h2>
                    <hr width="50%">
                  <?php 
					include('codes/config.php');
					$result="SELECT name FROM courses"; 
					$sql=mysql_query($result);
					while($query2=mysql_fetch_array($sql))
					{
						$foodoutput[] = '<p  class="food-display" style="cursor:pointer">'.$query2['name'].'</p>';
					}

						
						echo join('',$foodoutput);
						
					?>
					
                </div>
				<div class="col-lg-6" id="wine" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Wine List</strong>
                    </h2>
                    <hr width="50%">
                   <?php 
					include('codes/config.php');
					$query1=mysql_query("select wine from wines");

					while($query2=mysql_fetch_array($query1))
					{
						$drinkoutput[] = '<p  class="drink-display" style="cursor:pointer">'.$query2['wine'].'</p>';
					}

						
						echo join('',$drinkoutput);
						
					?>
				</div>
			</div>
`			<div class="row">			 
				<div class="col-lg-12" id="print" align="center">
                    <hr width="50%">
                    <h2 class="intro-text text-center">Print Layout Menu</strong>
                    </h2>
                    <hr width="50%">
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList1"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
								
							</div>		
							<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(1)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick=""><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(1)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						</div>
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList2"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control" draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(2)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(2)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(2)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList3"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control" draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(3)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(3)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(3)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>	
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList4"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(4)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(4)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(4)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>		
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList5"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(5)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(5)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(5)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>	
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList6"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(6)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(6)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(6)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList7"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(7)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(7)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(7)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList8"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(8)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(8)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(8)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList9"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick="goDown(9)"><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(9)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(9)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>
						<div class="lay">
							<div class="input-group">																						
								<div class="fg-line">
									<ul class="nav list-course" id="myList10"><li class="food-control"  draggable="true">drag to here...</li><li class="drink-control"  draggable="true">drag to here...</li> </ul>
								</div>
			
							</div>	
								<div>
								<button style="float: right;" class="btn btn-default hec-button waves-effect" onclick=""><i class="glyphicon glyphicon-chevron-down" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-default hec-button waves-effect control-btn" onclick="goUp(10)"><i class="glyphicon glyphicon-chevron-up" style="font-size:15px;"></i>	</button>
							<button style="float: right;" class="btn btn-danger hec-button waves-effect control-btn" onclick="clearList(10)"><i class="fa fa-times" style="font-size:15px;"></i>	</button>
						
								</div>							
						</div>
				</div>
				<br/>                  
				<div class="card-body card-padding" style="text-align:center;">				
					<button class="btn btn-success btn-lg hec-button waves-effect" onClick="passArray()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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
