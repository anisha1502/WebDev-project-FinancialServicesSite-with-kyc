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
if (isset($_POST['submit']))
$dbhost="localhost";
$username="root";
$password="";
$dbname="project";
$image=$_FILES['file']['name'];
$target ="images/".basename($image);
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$name=filter_input(INPUT_POST, 'name');
$contact=filter_input(INPUT_POST, 'contact');
$sr=filter_input(INPUT_POST, 'sr');
$location=filter_input(INPUT_POST, 'loc3');
$stype=filter_input(INPUT_POST, 'stype');
$price=filter_input(INPUT_POST, 'price');
$sqft=filter_input(INPUT_POST, 'sqft');
$textarea=filter_input(INPUT_POST, 'textarea');
$kyc=filter_input(INPUT_POST, 'kyc');
session_start();
 
$_SESSION['kyc']= $kyc;
if(!$con)
{
echo" Not Connected";
}
else
{
$sql="INSERT INTO upload_img(name,contact,sr,loc3,stype,price,sqft,image,kyc,textarea) values('$name','$contact','$sr','$location','$stype','$price','$sqft','$target','$kyc','$textarea')";
if($con->query($sql))
{
echo"Thanks For Choosing us";
}
else
{
echo"Cannot be";
}
}
$sq = "select * from upload_img where loc3='$location' AND name='$name' AND contact='$contact' AND sr='$sr' AND price='$price' AND image='$target'";
$result = mysqli_query($con,$sq);
$row = mysqli_fetch_array($result);
$loc=$row['loc3'];
$name_src=$row['name'];
$cont=$row['contact'];
$p=$row['price'];
$image = $row['image'];
$loc_src="$loc";
$price_src="$p";
$image_src = "$image";
?>
<br>
<img src='<?php echo $image_src;?>' >
<br>
<?php echo $name_src;?>
<br>
<?php echo $cont;?>
<br>
<?php echo $loc_src;?>
<br>
<?php echo $price_src;?>



</div>
</div>
</body></center>