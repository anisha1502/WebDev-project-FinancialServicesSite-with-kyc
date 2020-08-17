<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$occu=filter_input(INPUT_POST, 'occu');
$home=filter_input(INPUT_POST, 'home');
$area=filter_input(INPUT_POST, 'area');
$lm=filter_input(INPUT_POST, 'lm');
$town=filter_input(INPUT_POST, 'town');
$city=filter_input(INPUT_POST, 'city');
$country=filter_input(INPUT_POST, 'country');
$c1=filter_input(INPUT_POST, 'c1');
$c2=filter_input(INPUT_POST, 'c2');
session_start();
$kyc=$_SESSION['no'];
if(!$con)
{
echo" Not Connected";
}
else
{
$sql="UPDATE kyc_account
      SET occupation='$occu',home_name='$home',area='$area',land_mark='$lm',town='$town',city='$city',country='$country'
      WHERE kyc_no='$kyc'";
$sql2="UPDATE contact
       SET cont_1='c1',cont_2='$c2'
       WHERE kyc_no='$kyc'";
$qry=mysqli_query($con,$sql);
$qry2=mysqli_query($con,$sql2);
if(!$qry) 
{
    echo "Failed";
} 
else {
echo "Sucessful";
}
}
?>