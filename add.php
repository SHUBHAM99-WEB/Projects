<?php
include_once("database.php");
if(isset($_POST['Submit'])){	
$name = $_POST['name'];
$email = $_POST['email'];
$designation =$_POST['designation'];
$salary = $_POST['salary'];
$date = $_POST['date'];


$result = mysqli_query($mysqli, "INSERT INTO users(name,email,designation,salary,date) VALUE
('$name','$email','$designation','$salary','$date')");
echo "<font color="black">Data added successfully.";
echo "<br><a href='index.php'>View Result";
}
}
?>