<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$database = 'student_db';
$conn = new mysqli($serverName,$username,$password,$database);
if($conn->connect_error)
{
    die("connection Failled : ".$conn->connect_error);
}
// getting data from form
$name = $_POST["name"];
$rollNo = $_POST["rollno"];
$age = $_POST["age"];
$grade = $_POST["grade"];
 
//  Sql to get user data 

$sql = "INSERT into student (name,rollNo,age,grade) VALUES ('$name','$rollNo','$age','$grade')";

if($conn->query($sql) == true) {
    echo "new record added succesfully";
}
else {
        echo "erorr";
}
?>