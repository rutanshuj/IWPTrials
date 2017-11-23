<!DOCTYPE html>
<html>
<head>
<title> <?php echo "PHP Playground" ?> </title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</p>
<?php
	$foo = 1;
	echo gettype($foo)."</br>";
	$var_name = 678;
	$var_name2 = "Hello";
	
	echo var_dump($var_name)."</br>";
	echo var_dump($var_name2)."</br>";
	
	$fruits = array("Banana", "Watermelon", "Mango", "Apple");
	print_r($fruits);
	var_dump($fruits);
	
	$datedisplay = date("y/m/d");
	$date2 = date("I, F, m, Y");
	print($datedisplay)."<br>";
	print($date2)."</br>";
	
	echo readfile("webdictionary.txt")."</br>";
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file");
	while(!feof($myfile)){
		echo fgets($myfile)."</br>";
	}
	$myfile2 = fopen("webdictionary.txt", "r") or die("Unable to open file");
	echo fread($myfile2, filesize("webdictionary.txt"))."</br>";
	fclose($myfile2);
	fclose($myfile);
	
	$myfile3 = fopen("test.txt", "w") or die("Unable to open file");
	$txt = "John Doe\n";
	fwrite($myfile3, $txt);
	$txt = "John Doe\n";
	fwrite($myfile3, $txt);
	echo file_get_contents("test.txt")."</br>";
	echo file_put_contents("test.txt", "Hello World")."</br>";
	echo file_get_contents("test.txt")."</br>";
	fclose($myfile3);
	echo phpversion();
	$creditcardletters  = "/^[0-9]-[0-9]-[0-9]-[0-9]$/"	;
	$ccn = "4444-4444-4444-3333";
	if(preg_match($creditcardletters, $ccn)){
		print($ccn)."</br>";

	}else{
		return false;
	}
	
?>


</html>