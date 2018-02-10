<?php 
include ('codes/config.php');
	$searchq =$_GET['q'];
	$searchArr = explode('1',$searchq);
	$searchOpt = $searchArr[1];
	$searchLine = $searchArr[0];
	
	

	//when customer select to 
	if($searchOpt =="firstname"){
	
		$sql = "SELECT * FROM customer WHERE first_name LIKE '%$searchLine%' ";
		$stmt = mysql_query($sql);
		if($stmt === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		while($result = mysql_fetch_array($stmt)){
		if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
						
				$firstname = $result['first_name'];
				$lastname = $result['last_name'];
				$allergicinfo = $result['allergic_info'];
				$date = $result['date'];
				$food= $result['food'];
				$drink= $result['drink'];
				echo'
				<div class="fg-line">
                        			<div class="fg-line">
                        			<p> customer firstname: '.$firstname.' </p>
                        			<p> customer lastname: '.$lastname.' </p>
                        			<p> customer allergic information: '.$allergicinfo.' </p>
                        			<p> date: '.$date.' </p>
                        			<p> food: '.$food.' </p>
                        			<p> drink: '.$drink.' </p>
                        			</div>
				</div>
				';
					  }

		
	}	


	//when customer select to 
	if($searchOpt =="lastname"){
	
		$sql = "SELECT * FROM customer WHERE last_name LIKE '%$searchLine%' ";
		$stmt = mysql_query($sql);
		if($stmt === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		while($result = mysql_fetch_array($stmt)){
		if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
						
				$firstname = $result['first_name'];
				$lastname = $result['last_name'];
				$allergicinfo = $result['allergic_info'];
				$date = $result['date'];
				$food= $result['food'];
				$drink= $result['drink'];
				echo'
				<div class="fg-line">
                        			<div class="fg-line">
                        			<p> customer firstname: '.$firstname.' </p>
                        			<p> customer lastname: '.$lastname.' </p>
                        			<p> customer allergic information: '.$allergicinfo.' </p>
                        			<p> date: '.$date.' </p>
                        			<p> food: '.$food.' </p>
                        			<p> drink: '.$drink.' </p>
                        			</div>
				</div>
				';
					  }

		
	}
	
		//when customer select to 
	if($searchOpt =="allergicinfo"){
	
		$sql = "SELECT * FROM customer WHERE allergic_info LIKE '%$searchLine%' ";
		$stmt = mysql_query($sql);
		if($stmt === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		while($result = mysql_fetch_array($stmt)){
		if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
						
				$firstname = $result['first_name'];
				$lastname = $result['last_name'];
				$allergicinfo = $result['allergic_info'];
				$date = $result['date'];
				$food= $result['food'];
				$drink= $result['drink'];
				echo'
				<div class="fg-line">
                        			<div class="fg-line">
                        			<p> customer firstname: '.$firstname.' </p>
                        			<p> customer lastname: '.$lastname.' </p>
                        			<p> customer allergic information: '.$allergicinfo.' </p>
                        			<p> date: '.$date.' </p>
                        			<p> food: '.$food.' </p>
                        			<p> drink: '.$drink.' </p>
                        			</div>
				</div>
				';
					  }

		
	}

		//when customer select to 
	if($searchOpt =="date"){
	
		$sql = "SELECT * FROM customer WHERE date LIKE '%$searchLine%' ";
		$stmt = mysql_query($sql);
		if($stmt === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		while($result = mysql_fetch_array($stmt)){
		if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
						
				$firstname = $result['first_name'];
				$lastname = $result['last_name'];
				$allergicinfo = $result['allergic_info'];
				$date = $result['date'];
				$food= $result['food'];
				$drink= $result['drink'];
				echo'
				<div class="fg-line">
                        			<div class="fg-line">
                        			<p> customer firstname: '.$firstname.' </p>
                        			<p> customer lastname: '.$lastname.' </p>
                        			<p> customer allergic information: '.$allergicinfo.' </p>
                        			<p> date: '.$date.' </p>
                        			<p> food: '.$food.' </p>
                        			<p> drink: '.$drink.' </p>
                        			</div>
				</div>
				';
					  }

		
	}
	
			//when customer select to 
	if($searchOpt =="food"){
	
		$sql = "SELECT * FROM customer WHERE food LIKE '%$searchLine%' ";
		$stmt = mysql_query($sql);
		if($stmt === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		while($result = mysql_fetch_array($stmt)){
		if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
						
				$firstname = $result['first_name'];
				$lastname = $result['last_name'];
				$allergicinfo = $result['allergic_info'];
				$date = $result['date'];
				$food= $result['food'];
				$drink= $result['drink'];
				echo'
				<div class="fg-line">
                        			<div class="fg-line">
                        			<p> customer firstname: '.$firstname.' </p>
                        			<p> customer lastname: '.$lastname.' </p>
                        			<p> customer allergic information: '.$allergicinfo.' </p>
                        			<p> date: '.$date.' </p>
                        			<p> food: '.$food.' </p>
                        			<p> drink: '.$drink.' </p>
                        			</div>
				</div>
				';
					  }

		
	}
	
			//when customer select to 
	if($searchOpt =="drink"){
	
		$sql = "SELECT * FROM customer WHERE drink LIKE '%$searchLine%' ";
		$stmt = mysql_query($sql);
		if($stmt === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		while($result = mysql_fetch_array($stmt)){
		if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
						
				$firstname = $result['first_name'];
				$lastname = $result['last_name'];
				$allergicinfo = $result['allergic_info'];
				$date = $result['date'];
				$food= $result['food'];
				$drink= $result['drink'];
				echo'
				<div class="fg-line">
                        			<div class="fg-line">
                        			<p> customer firstname: '.$firstname.' </p>
                        			<p> customer lastname: '.$lastname.' </p>
                        			<p> customer allergic information: '.$allergicinfo.' </p>
                        			<p> date: '.$date.' </p>
                        			<p> food: '.$food.' </p>
                        			<p> drink: '.$drink.' </p>
                        			</div>
				</div>
				';
					  }

		
	}	
?>