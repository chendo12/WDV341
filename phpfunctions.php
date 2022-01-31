<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<title>Untitled Document</title>
	
	<?php
	
	//Create a function that will accept a timestamp and format it into mm/dd/yyyy format
		function todaysdate($date){
			
		echo date('n/d/Y', strtotime($date));
		}
	
	//Create a function that will accept a timestamp and format it into dd/mm/yyyy format to use when working with international dates.
		function internationdate($date){
			
		echo date ('d/n/Y',strtotime($date));
		}
	
	//Create a function that will accept a string input.  It will do the following things to the string:
		function stringinput($string){
			
			$stringlength = strlen($string);
			
			$trimwhitespace = trim($string);
			
			$lowercase = strtolower($string);
			
			 if(stripos($string, 'DMACC') !== false) {
        		$DMACC = "This String Contains DMACC";
    			} 
			 else {
        		$DMACC = "This String Does Not Contain DMACC";
    			}
			
			echo "<p>Display the number of characters in the string - $stringlength</p>";
			echo "<p>Trim any leading or trailing whitespace - $trimwhitespace</p>";
			echo "<p>Display the string as all lowercase characters - $lowercase</p>";
			echo "<p>Does this string contain DMACC? - $DMACC</p>";
		}
			
		//Create a function that will accept a number and display it as a formatted phone number.   Use 1234567890 for your testing.
    		function formattednumber($number){
				
			$number = preg_replace("/[^\d]/","",$number);
   	
			$length = strlen($number);
   
   			if($length == 10) {
			$number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
			}
	
			echo $number;
   
  
			}
	
		//Create a function that will accept a number and display it as US currency with a dollar sign.  Use 123456 for your testing.
			function formatMoney($money){

			$amount = number_format($money, 2, ".", ",");
			echo("$".$amount);
			}
	?>
</head>

<body>
	<h1>4-1 PHP Functions</h1>
	
	<ol>
		<li><?php echo todaysdate('today');?></li>
		
		<li><?php echo internationdate('today');?></li>
		
		<li><?php echo stringinput('Hello and Welcome to the "DmAcC" world of PHP!');?></li>
		
		<li><?php echo formattednumber(1234567890);?></li>
		
		<li><?php echo formatMoney('123456 ');?></li>
	</ol>
	
	
	
	
	
	
</body>
</html>