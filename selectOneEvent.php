<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>7-2 Assingment</title>

	<?php
	
		$eventId = 1;
	
		include 'connectPDO2.php'; //brings in an external sheet
		
		$sql = "SELECT * FROM wdv341_events WHERE event_id=2";
	
		$stmt = $conn->prepare($sql); //prepare statement
	
		$stmt->bindParam(':event_id',$eventId);
	
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);

	?>
</head>

<body>
	
	<?php
		while($row=$stmt->fetch()){
	
	?>
	
	<div class="container">
	
	<div class="card" style="width: 18rem;">
  <div class="card-header"><?php echo $row['event_id'];?>
    
  </div>
		<h5><?php echo $row['event_name'];?></h5>
		<p><?php echo $row['event_description']; ?></p>
		<h6><?php echo $row['event_presenter']; ?></h6>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $row['event_date']; ?></li>
    <li class="list-group-item"><?php echo $row['event_time']; ?></li>
    <li class="list-group-item"><?php echo $row['event_inserted']; ?></li>
	<li class="list-group-item"><?php echo $row['event_updated']; ?></li>
  </ul>
</div>
	
	<?php
			}
	
	?>
		
	</div>
</body>
</html>