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
	
	//php array (part of exercise 6 )
		$coding = array("PHP", "HTML", "Javascript");
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
	
		//Create a PHP variable that is an array containing the values 'PHP', 'HTML' and 'Javascript'. 
		//Then, use a PHP loop to iterate through the array and create a javascript array that contains those values. Lastly, 
		//write a javascript script that displays the values of the array on the page.
            $javascript = json_encode($coding);
            echo "<script>
                    let jsarray = $javascript;
                    for(let i = 0; i < jsarray.length; i++){
                        if(i < jsarray.length - 1){
                            document.write(jsarray[i] + ', ');
                        } else {
                            document.write(jsarray[i] + '.');
                        }
                    }
                </script>";
		
	?>
	
</body>
</html>