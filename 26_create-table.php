<?php
//Connecting to a server
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
} else {
    echo "Connection was Successful!<br>";
}
/*
//create a DB
$sql = "CREATE DATABASE dbharry26";
$result = mysqli_query($conn, $sql);

//Check for the database creation success
if($result){
    echo "The DB was created Sucessfully!<br>";
}else{
    echo "The DB was not created Sucessfully! beacuse ---> ". mysqli_error($conn);
}
*/

//create a table in DB
$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`));
";
$result = mysqli_query($conn, $sql);

//Check for the table creation success
if ($result) {
    echo "The table was created Sucessfully!<br>";
} else {
    echo "The table was not created Sucessfully! beacuse ---> " . mysqli_error($conn) . "<br>";
}
