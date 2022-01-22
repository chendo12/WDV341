<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>3-1 PHP Basics</title>
	
	<?php
	//Create a variable called yourName.  Assign it a value of your name.
		$yourName = "Hector Guerra";
	
	//Create the following variables:  number1, number2 and total.  Assign a value to them. 
		$number1 = "5";
		$number2 = "10";
		$total	= $number1+$number2;
	?>
</head>

<body>
	<?php
		//Display the assignment name in an h1 element on the page. Include the elements in your output. 
		echo "<h1>3-1 Assignment PHP Basics</h1>";
		
		//Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.
		echo "<h2>Greatings <em>$yourName!</em></h2>";
	
		//Display the value of each variable and the total variable when you add them together. 
		echo "<ul>
				<li>$number1</li>
				<li>$number2</li>
				<li>$total</li>
			  </ul>";
	?>
</body>
</html>