<!DOCTYPE html>

<html>

<head>
	<meta charset="ytf-8">
	<title> OOP in PHP</title>

<?php include("class_lib.php"); ?>
</head>

<body>
	<?php 
		$stephan = new person("Stephan the Great");
		$jimmy = new person("Jiminy Cricket");
		$james = new employee("Johnny Fingers");
		$larry = new person("Jimmy Two Guns");
		$ann = new employee ("Stephan Lamp");


		echo "Stephan's Full Name: " . $stephan->get_name();
		?>
	<br/><br/>
	<?php 
		echo "Jimmy's Full Name: " . $jimmy->get_name();
	?>
	<br/><br/>
	<?php 
		echo "James' Full Name: " . $james->get_name();
	?>
	<br/><br/>
 	<?php 
		echo "Larry's Full Name: " . $larry->get_name();
	?>
	<br/><br/>
	<?php 
		echo "Ann's Full Name: " . $ann->get_name();
	?>
</body>
</html>