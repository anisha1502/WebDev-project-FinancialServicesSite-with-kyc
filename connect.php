<?php
$dbhost="localhost:3307";
$username="root";
$password="";
$dbname="sign";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$firstname=filter_input(INPUT_POST, 'firstname');
$lastname=filter_input(INPUT_POST, 'lastname');
if(!$con)
{
echo" Not Connected";
}
else
{
$sql="INSERT INTO form(firstname,lastname) values('$firstname','$lastname')";
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