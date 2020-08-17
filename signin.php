<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$id = $_POST['id'];
$pass  = $_POST['pass'];
$sql ="SELECT * FROM admin WHERE id='$id' AND pass='$pass'";
$qry   = mysqli_query($con,$sql);
 $row=mysqli_fetch_array($qry);
if(!$qry) {
  echo"fail";
} else {

    if ($id==$row['id']) {
        if($id=='' || $pass=='') {
            echo"FIELDS ARE EMPTY";
        } else if($id==$row['id'] && $pass==$row['pass']) {
            header("Location:awelcome.php?id=$id");
        } else {
            echo "INVALID";
        }
    } 
}
?>