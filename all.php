<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
if(!$con)
{
echo" Not Connected";
}
else
{
$sql="SELECT * FROM kyc_account k,contact c ,bank_account b
       WHERE k.kyc_no=c.kyc_no AND k.kyc_no=b.kyc_no";
$qry = mysqli_query($con,$sql);
if(!$qry) 
{
    echo"failed";
} 
else {
echo"KYC DETAILS";

while($val=mysqli_fetch_array($qry))
{
$fn=$val['firstname'];
$ln=$val['lastname'];
$kyc=$val['kyc_no'];
$cusid=$val['cus_id'];
$bno=$val['bank_no'];
$type=$val['acc_type'];
$occ=$val['occupation'];
$home=$val['home_name'];
$area=$val['area'];
$lm=$val['land_mark'];
$town=$val['town'];
$city=$val['city'];
$c1=$val['cont_1'];
$c2=$val['cont_2'];
$e=$val['email'];

echo"......................................................................";
echo "<br>";
echo"KYC ID: ". $kyc;
       echo"<br>";
echo"FIRST NAME: ". $fn;
       echo"<br>";
echo"LAST NAME: ". $ln;
       echo"<br>";
echo"CUSTOMER ID: ". $cusid;
       echo"<br>";
echo"BANK ACC:". $bno;
       echo"<br>";
echo"ACC TYPE: ". $type;
       echo"<br>";
echo"OCCUPATION: ".$occ;
       echo"<br>";
echo"ADDRESS INFORMATION";
  echo"<br>";
echo "HOME :".  $home;
       echo"<br>";
echo "AREA:". $area;
       echo"<br>";
echo"LAND MARK: ".$lm;
       echo"<br>";
echo"TOWN: ". $town;
       echo"<br>";
echo"CITY: ". $city;
       echo"<br>";
echo"CONTACT 1: ".$c1;
       echo"<br>";
echo"CONTACT 2: ".$c2;
       echo"<br>";
echo"EMAIL :".$e;
       echo"<br>";

}
}
}
?>
<html>
<body bgcolor="skyblue">
</html>
