<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$email = $_POST['email'];
$pass  = $_POST['psw'];
$sql ="SELECT * FROM ulog WHERE email='$email' AND psw='$pass'";
$qry   = mysqli_query($con,$sql);
if(!$qry) {
    die("Query Failed: ". mysqli_error());
} else {

    $row=mysqli_fetch_array($qry);
session_start();
 
$_SESSION['nname']= $row['name'];

    if ($email==$row['email']) {
        if($email=='' || $pass=='') {
            echo"FIELDS ARE EMPTY";
        } else if($email==$row['email'] && $pass==$row['psw']) {
            header("Location: UserDashboard.php?id=$email");
        } else {
            echo "INVALID";
        }
    } 
}
?>