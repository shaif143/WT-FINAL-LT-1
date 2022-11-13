<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion Rate</title>
</head>
<body>
	
<label> <h2>Page 2: Conversion Rate</h2> </label><br>

<p><span class="error">* required field</span></p>


<form method = "post" action="ConversionRateAction.php" enctype="application/x-www-form-urlencoded" novalidate>
    

    
	<label for = "category">Category:</label><br>
	<input type="text" name="category" id="category" > <br><br>
	<?php echo isset($_SESSION['category_msg']) ? $_SESSION['category_msg'] : ""; ?><br><br>
		
	
	<label for = "unit">Unit:</label><br>
	<input type="text" name="unit" id="unit"> <br><br>
	<?php echo isset($_SESSION['unit_msg']) ? $_SESSION['unit_msg'] : ""; ?><br><br>
	
	
	<label for = "rate">Rate:</label><br>
	<input type="text" name="rate" id="rate"> <br><br>
	<?php echo isset($_SESSION['rate_msg']) ? $_SESSION['rate_msg'] : ""; ?><br><br>

	

	
	
	<input type="submit" name= "submit" value="Submit">

	
	

</form>

		

</body>
</html>