<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm_base";

$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];
$motor3=$_POST['motor3'];
$motor4=$_POST['motor4'];
$motor5=$_POST['motor5'];
$motor6=$_POST['motor6'];

//................................

$right=$_POST['right'];
$left=$_POST['left'];
$forward=$_POST['forward'];
$backward=$_POST['backward'];
$stop=$_POST['stop'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO run(id,On_Off,engine1,engine2,engine3,engine4,engine5,engine6)
 VALUES('','',$motor1,$motor2,$motor3,$motor4,$motor5,$motor6)";

$sql2 = "INSERT INTO base(id,R,L,F,B,S)
 VALUES('','$right','$left','$forward','$backward','$stop')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql2)) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
