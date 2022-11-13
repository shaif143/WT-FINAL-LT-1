<?php

$category = $unit = $rate = "";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "f1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		session_start();
		$isValid = true;

		if(empty($_POST["category"])) {
			
			$_SESSION['category_msg'] = "Please enter a category";
			$isValid = false;
			
						
	    } 
		
		if(empty($_POST["unit"])) {
			
			$_SESSION['unit_msg'] = "Please enter unit";
			$isValid = false;
			
						
	    } 
		if(empty($_POST["rate"])) {
			
			$_SESSION['rate_msg'] = "Please enter rate";
			$isValid = false;
			
						
	    } 
	
    

    if ($isValid) 
    {
    	
		$sql = "INSERT INTO conversionrate(category, unit, rate) VALUES ('$category', '$unit', '$rate')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "New record inserted successfully";
		}
		else {
			echo "Error occurred " . $sql . " " . mysqli_error($conn);
		}

		mysqli_close($conn);

     
    }

    else
    {
    	echo "here 2";
    	
    	$_SESSION['msg'] = "Please fill up the form properly";
    	header("Location: ConversionRate.php");
    }  

    
		}
		

	function sanitize($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	
?>