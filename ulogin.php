<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$name=filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$psw=filter_input(INPUT_POST, 'psw');
$pswr=filter_input(INPUT_POST, 'psw_repeat');
if(!$con)
{
echo" Not Connected";
}
else
{
$sql="INSERT INTO ulog(name,email,psw,psw_repeat) values('$name','$email','$psw','$pswr')";
if($con->query($sql))
{
echo"New Record Inserted";
}
else
{
echo"Cannot be";
}
}
?>