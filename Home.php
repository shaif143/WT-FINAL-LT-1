<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion Site</title>
</head>
<body>
	
<label> <h2>Page 1 Home: Conversion Site</h2> </label><br>

<p><span class="error">* required field</span></p>


<form method = "post" action="HomeAction.php" enctype="application/x-www-form-urlencoded" novalidate>
    

    <label for="select">Select category:</label>

<select name="select a value" id="select a value">

</select>
<?php echo isset($_SESSION['category_msg']) ? $_SESSION['category_msg'] : ""; ?><br><br>
	
	
	<label for = "value">Value:</label><br>
	<input type="text" name="value" id="value" > 
	<?php echo isset($_SESSION['value_msg']) ? $_SESSION['value_msg'] : ""; ?>
		
	<input type="submit" name= "submit" value="Submit"><br><br>

	<label for = "result">Result:</label><br>
	<input type="text" name="result" id="result"> <br><br>
	<?php echo isset($_SESSION['result_msg']) ? $_SESSION['result_msg'] : ""; ?><br><br>

	

	
	
	

	
	

</form>

		

</body>
</html>