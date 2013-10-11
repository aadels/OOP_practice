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


		echo "Stephan's Full Name: " . $stephan->get_name();
		?>
	<br/><br/>
	<?php 
		echo "Jimmy's Full Name: " . $Jimmy->get_name();
	?>
	<br/><br/>
	<?php 
		echo "---> " . $james->get_name();
	?>

</body>
</html>