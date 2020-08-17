<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='animate/animate.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src='animate/animate.js'></script>
    <!-- End of Imports and Metadata -->
</head>
<body><center>
<div id="particles">
  <div id="webcoderskull">
<?php
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
if (isset($_POST['submit']))
{

$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$ba=filter_input(INPUT_POST, 'anum');
$fn=filter_input(INPUT_POST, 'fname');
$ln=filter_input(INPUT_POST, 'lname');
$prefix=filter_input(INPUT_POST, 'prefix');
$home=filter_input(INPUT_POST, 'home');
$area=filter_input(INPUT_POST, 'area');
$lm=filter_input(INPUT_POST, 'lm');
$town=filter_input(INPUT_POST, 'town');
$city=filter_input(INPUT_POST, 'city');
$country=filter_input(INPUT_POST, 'country');
$pan=filter_input(INPUT_POST, 'pnum');
$adhar=filter_input(INPUT_POST, 'adhar');
$c1=filter_input(INPUT_POST, 'c1');
$c2=filter_input(INPUT_POST, 'c2');
$kyc=rand(1000,2000);
$oc=filter_input(INPUT_POST, 'occu');
$email=filter_input(INPUT_POST, 'email');
$type=filter_input(INPUT_POST, 'type');

if(!$con)
{
echo" Not Connected";
}
else
{

//$sql2="INSERT INTO bank_account (bank_no,acc_type,cus_id, kyc_no) values('$ba','$type','','$kyc')";
$sql="INSERT INTO kyc_account (bank_no,preffix,firstname,lastname,pan_no,adhar_no,home_name,area,land_mark,town,city,country,occupation,kyc_no) values('$ba','$prefix','$fn','$ln','$pan','$adhar','$home','$area','$lm','$town','$city','$country','$oc','$kyc')";
//$sql1="INSERT INTO contact (cont_1,cont_2,email,kyc_no) values('$c1','$c2','$email','$kyc')";

if($con->query($sql))
{
echo"Thanks For Choosing us";
}
else
{
echo"Cannot be";
}
}

}
?>
<html>
<body>
<style>
td {
padding :10px;
text-align: left;
}
</style>
<h1>KYC FORM </h1>
<hr>
<form action="kyc.php" method="POST">
<table>
<tr>
<td>
<label for="acc"><b>Bank Account Id</b></label>
<input type="text" placeholder="Enter Account Number" name="anum" id="anum" required>
</td>
</tr>
<tr>
<td>
 <select name="prefix" id="prefix">
    <option value="Mr">Mr</option>
    <option value="Ms">Ms</option>
    <option value="Mrs">Mrs</option>
  </select>
</td>
<td>
 <select name="type" id="type">
    <option value="savings">savings</option>
    <option value="balance">Balance</option>
  
  </select>
</td>
<td>
<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="Enter First Name" name="fname" id="fname"required>
</td>
<td>
<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Enter Last Name" name="lname" id="lname" required>
</td>
</tr>
<tr>
<td>
<label for="pnum"><b>Pan Number</b></label>
<input type="text" placeholder="Enter Pancard Number" name="pnum" id="pnum"required>
</td>
<td>
<label for="ph"><b>Adhar Number</b></label>
<input type="text" placeholder="Enter Contact Number" name="adhar" id="adhar" required>
</td>
</tr>
<tr>
<td>
<label for="house"><b>Home Name</b></label>
<input type="text" placeholder="Eg:-B-403,Anora Towers" name="home" id="home" required>
</td>
<td>
<label for="area"><b>Area</b></label>
<input type="text" placeholder="Enter Area" name="area" id="area" required>
</td>
<td>
<label for="lm"><b>Land Mark</b></label>
<input type="text" placeholder="Enter Land mark" name="lm" id="lm" required>
</td>
<td>
<label for="town"><b>Town</b></label>
<input type="text" placeholder="Enter town" name="town" id="town" required>
</td>
<td>
<label for="city"><b>City</b></label>
<input type="text" placeholder="Enter city" name="city" id="city" required>
</td>
<td>
<label for="ph"><b>Country</b></label>
<input type="text" placeholder="Country" name="country" id="country" required>
</td>
</tr>
<tr>
<td><label for="occu"><b>Occupation</b></label>
<input type="text" placeholder="Enter Occupation" name="occu" id="occu" required>
</td>
</tr>
<tr>
<td>
<label for="ph"><b>Contact Number1</b></label>
<input type="text" placeholder="Enter Contact Number" name="c1" id="c1" required>
</td>
<td>
<label for="ph"><b>Contact Number2</b></label>
<input type="text" placeholder="Enter Contact Number" name="c2" id="c2">
</td>
<td>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" id="email" >
</td>
</tr>
<tr>
<td>
<button type="submit" name="submit" >Submit</button>
</td>
</table>
</form>
</body>
</html>
</div>
</div>
</body></center>