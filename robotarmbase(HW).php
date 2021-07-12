<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm_base";

// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql2 = "SELECT id,R,L,F,B,S FROM base ";
$query = mysqli_query($conn,$sql2);
while($fetch = mysqli_fetch_assoc($query))
  {
    echo " ".$fetch['id'] ."<br>";
    echo " ".$fetch['R'] ."<br>";
    echo " ".$fetch['L'] ."<br>";
    echo " ".$fetch['F'] ."<br>";
    echo " ".$fetch['B'] ."<br>";
    echo " ".$fetch['S'] ."<br>";
    echo "<br>";
    }

mysqli_close($conn);
?>