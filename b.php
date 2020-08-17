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
$con=mysqli_connect("$dbhost","$username","$password","$dbname");
$sr="sell";
$location=filter_input(INPUT_POST, 'loc2');
$type2=filter_input(INPUT_POST, 'type2');
$budget=filter_input(INPUT_POST, 'bud2');
if(!$con)
{
echo" Not Connected";
}
else
{
$sql ="SELECT * FROM upload_img WHERE loc3='$location' AND sr='$sr' AND price<='$budget'  AND stype='$type2' ";
$qry   = mysqli_query($con,$sql);
if(!$qry) 
{
    die("Query Failed: ". mysqli_error());
} 
else {

while($val=mysqli_fetch_array($qry))
{
$loc=$val['loc3'];
$p=$val['price'];
$image = $val['image'];
$name= $val['name'];
$sq = $val['sqft'];
$des=$val['textarea'];
$cont=$val['contact'];
$name_src="$name";
$loc_src="$loc";
$p_src="$p";
$sq_src=$sq;
$des_src=$des;
$image_src = "$image";
       echo "<img src= '$image_src'>";
       echo"<br>";
       echo "SELLER NAME :"."$name_src";
       echo"<br>";
         echo "CONTACT :"."$cont";
       echo"<br>";
        echo "LOCATION:"."$loc_src";
         echo"<br>";
          echo "PRICE:"."$p_src";
           echo"<br>";
         echo "SQFT:"."$sq_src";
          echo"<br>";
         echo "DESCRIPTION:"."$des_src";
          echo"<br>";
          echo"<hr>";
}

}
}

?>
</div>
</div>
</body></center>