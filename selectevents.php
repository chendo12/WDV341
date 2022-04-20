<!doctype html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="UTF-8">
<title>6-2 Create a Connection File</title>

<style>
	.display{
		display:block;
		margin-left: auto;
		margin-right: auto;
	}
</style>
	
	
<?php
	//connect to the database
	//create your sql command
	//prepare your statement
	//bind any variables if any
	//execute your statment
	//process your results

	//event ID
	include 'connectPDO2.php'; //brings in an external sheet

	$sql = "SELECT * FROM wdv341_events";

	$stmt = $conn->prepare($sql); //prepare statement

	$stmt->execute();

	$stmt->setFetchMode(PDO::FETCH_ASSOC);


		echo $row['event_id'];
		echo "<br>";

?>
	
</head>

<body>
	
	<?php
		while($row=$stmt->fetch()){
	?>
	
	<div class="container">
		
	<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
		<div class="card-header"><p>Day: <?php echo $row['event_id'];?></p></div>
  			<div class="card-body">
    			<h5 class="card-title"><?php echo $row['event_name'];?></h5>
    			<p class="card-text"><?php echo $row['event_description'];?></p>
				<p><?php echo $row['event_presenter'];?></p>
					 <ul>
						<li><?php echo $row['event_date'];?></li>
						<li><?php echo $row['event_time'];?></li>
						<li><?php echo $row['event_inserted'];?></li>
						<li><?php echo $row['event_updated'];?></li>
					  </ul>
  		</div>
	</div>
		
	</div>
<?php
		}
?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
