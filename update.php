<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$kyc=filter_input(INPUT_POST, 'ky');
if(!$con)
{
echo" Not Connected";
}
else
{
$sql="SELECT * FROM kyc_account k,contact c WHERE k.kyc_no=c.kyc_no AND k.kyc_no='$kyc'";
$qry=mysqli_query($con,$sql);
if(!$qry) 
{
    echo "fail";
} 
else {

$val=mysqli_fetch_array($qry);
$fn=$val['firstname'];
$ln=$val['lastname'];
$occ=$val['occupation'];
$home=$val['home_name'];
$area=$val['area'];
$lm=$val['land_mark'];
$town=$val['town'];
$city=$val['city'];
$c1=$val['cont_1'];
$c2=$val['cont_2'];
session_start();
$_SESSION['no']=$kyc;
echo"THE KYC NUMBER IS: "."$kyc";
echo"<br>";
echo "NAME:"."$fn"."$ln";
}
}
?>
<html>
<br>
<body bocolor="dodgerblue">
<form action="newup.php" method="post">
<label for="occu"><b>OCCUPATION</b></label>
<input type="text" placeholder="Enter Occupation" name="occu" ><br><br>
<label for="home"><b>HOME</b></label>
<input type="text" placeholder="Enter Home" name="home" ><br><br>
<label for="area"><b>AREA</b></label>
<input type="text" placeholder="Enter Area" name="area" ><br><br>
<label for="lm"><b>LAND MARK</b></label>
<input type="text" placeholder="Enter Land Mark" name="lm" ><br><br>
<label for="town"><b>TOWN</b></label>
<input type="text" placeholder="Enter Town" name="town" ><br><br>
<label for="city"><b>City</b></label>
<input type="text" placeholder="Enter Town" name="city" ><br><br>
<label for="country"><b>Country</b></label>
<input type="text" placeholder="Enter Town" name="country" ><br><br>
<label for="c1"><b>CONTACT_1</b></label>
<input type="text" placeholder="Enter Town" name="c1" ><br><br>
<label for="c2"><b>CONTACT_2</b></label>
<input type="text" placeholder="Enter Town" name="c2" ><br><br>
<button type="submit">UPDATE</button>
</form>
</html>





