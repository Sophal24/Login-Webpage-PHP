
<?php  
	
	$myfile = fopen("info.txt", "a") or die("Unable to open file!");
	$name = $_POST['name'].";";
	$sex = $_POST['sex'].";";
	$email = $_POST['email'].";";
	$pwd = $_POST['password'].";\n";
	
	// ------------------------

	fwrite($myfile, $name);
	fwrite($myfile, $sex);
	fwrite($myfile, $email);
	fwrite($myfile, $pwd);		

	fclose($myfile);
?>

<?php  

	ob_start();
	header("Location: http://localhost:8888/Lab3/signup.php");
	ob_end_clean();

?>

