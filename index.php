<!DOCTYPE html>

<html>

<head>
	<meta charset="ytf-8">
	<title> OOP in PHP</title>

<?php include("class_lib.php"); ?>
</head>

<body>
	<?php 
		$stephan = new person();
		$jimmy = new person();

		$stephan->set_name("Stephan the Great");
		$jimmy->set_name("Jiminy Cricket");

		echo "Stephan's Full Name: " . $stephan->get_name()<br/><br/>;

		echo "Jimmy's Full Name: ". $jimmy->get_name();
	?>

</body>
</html>