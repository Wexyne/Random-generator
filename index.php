<?php

error_reporting(0);

$num1 = $_POST ['num1'];
$num2 = $_POST ['num2'];



?>


<html>
<body>

	<a href="http://localhost/Wexyne%20Site/login.php">Home</a>
	
<h1>This is your friendly neighborhood genius, Wexyne the CODE EXPERT,</h1><h2>mabey idk.</h2>
<p>This is my random number generator, gime tha CODE EXPERT ROLE pls. Enjoy!</p>

<form action="index.php" method="POST">
	Enter the minimum number: <input type="text" name="num1" Value="<?php echo $num1 ?>"><p>
	Enter the maximum number: <input type="text" name="num2" Value="<?php echo $num2 ?>"><p>
    
	<input type="submit" value="Randomize">

</form>

<?php

$random = rand($num1,$num2);

echo "The random number is... $random";

?>





<?php
	
if (isset ($_POST['submit']))
{
	$name1 = $_POST ['name1'];
	$name2 = $_POST ['name2'];
	$name3 = $_POST ['name3'];
	$name4 = $_POST ['name4'];
	
	$names = array("1" => "$name1",
				   "2" => "$name2",
				   "3" => "$name3",
				   "4" => "$name4");
	
	$random = rand (1,4);
}

	

?>

</body>
</html>



<html>
	<body>
		
		<h2>This is the random word generator, maximum of words is: "4"</h2>
		<form action="index.php" method="POST">
			Enter Name: <input type="text" name="name1" value="<?php echo $name1 ?>"><br>
			Enter Name: <input type="text" name="name2" value="<?php echo $name2 ?>"><br>
			Enter Name: <input type="text" name="name3" value="<?php echo $name3 ?>"><br>
			Enter Name: <input type="text" name="name4" value="<?php echo $name4 ?>"><p>
	
			<input type="submit" name="submit" value="Randomize">
</form>
		
		
		
	</body>
</html>

<?php

echo $names["$random"];

?>
















