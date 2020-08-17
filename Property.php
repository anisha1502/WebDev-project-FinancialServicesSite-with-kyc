<!DOCTYPE html>
<html>
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
    <script>
        function kyc(){
            location.href="kyc.php";
        }
        function insurance(){
            location.href="insurance.php";
        }
        function property(){
            location.href="Property.php";
        }
        function logout(){
            location.href="kyc.php";
        }
        function account(){
            location.href="kyc.php";
        }
    </script>
    <!-- End of Scripts -->
</head>

</head>

<body>
<div id="particles">
  <div id="webcoderskull">
  <header>
  <center><section>
    <button type="button" class="btn btn-primary btn-lg" onclick="kyc()">KYC</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="insurance()">Insurance</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="property()">Property</button>
    <button type="button" class="btn btn-primary btn-lg">Logout</button>
    </section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.plum-property.com.au/wp-content/uploads/2017/12/slider7-1.jpg" class="d-block w-100" alt="..." height="600px">
    </div>
    <div class="carousel-item">
      <img src="https://dp5zphk8udxg9.cloudfront.net/wp-content/uploads/2016/08/shutterstock_375747523-e1509351055304.jpg" class="d-block w-100" alt="..." height="600px">
    </div>
    <div class="carousel-item">
      <img src="https://www.accuplan.net/images/real-estate-ira.png" class="d-block w-100" alt="..." height="600px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>
<!-- RENT -->
<rent>
<form action="rent.php" method="post">
<h1>RENT</h1>
 <label for="location"><b>Location</b></label>
 <select name="loc1" id="loc1">
    <option value="vasai">Vasai</option>
    <option value="goraegoan">Goraegoan</option>
    <option value="borivili">Borivili</option>
    <option value="churchgate">Churchgate</option>
  </select>
<br><br>
<label for="budget"><b>Budget</b></label>
 <select name="bud1" id="bud1">
    <option value="1">10,000</option>
    <option value="2">20,000</option>
    <option value="3">30,000</option>
    <option value="4">40,000</option>
  </select>
<br><br>
<label for="type"><b>Preference</b></label>
 <select name="type1" id="type1">
    <option value="flat">Flat</option>
    <option value="villa">Villa</option>
    <option value="shop">Shop</option>
  </select><br><br>
 <button type="submit" class="btn btn-primary btn-lg btn-block">SEARCH</button>
</form>
</rent>

<buy>
<form action="b.php" method="post">
<h1>BUY</h1>
 <label for="loc2"><b>Location</b></label>
 <select name="loc2" id="loc2">
    <option value="vasai">vasai</option>
    <option value="goraegoan">goraegoan</option>
    <option value="borivili">borivili</option>
    <option value="churchgate">churchgate</option>
  </select>
<br><br>
<label for="bud2"><b>Budget</b></label>
 <select name="bud2" id="bud2">
    <option value="15,0000">15,0000</option>
    <option value="20,0000">20,0000</option>
    <option value="30,0000">30,0000</option>
    <option value="40,0000">40,0000</option>
    <option value="50,0000">50,0000</option>
  </select>
<br><br>
<label for="type2"><b>Preference</b></label>
 <select name="type2" id="type2">
    <option value="Flat">Flat</option>
    <option value="Villa">Villa</option>
    <option value="Shop">Shop</option>
  </select><br><br>
 <button type="submit" class="btn btn-primary btn-lg btn-block">SEARCH</button>
</form>
</buy>

<post>
<form action ="upload.php" method="post" enctype="multipart/form-data">
<h1>POST YOUR PROPERTY </h1>
Seller Name:<input type="text" name="name" placeholder="Enter your Name"><br><br>
Contact Number:<input type="text" name="contact" placeholder="Enter your Contact Number"><br><br>
<label for="sr"><b>Sell or Rent</b></label>
 <select name="sr" id="sr">
    <option value="sell">Sell</option>
    <option value="rent">Rent</option>
  </select><br><br>
<label for="loc3"><b>Location</b></label>
 <select name="loc3" id="loc3">
    <option value="vasai">Vasai</option>
    <option value="goraegoan">Goraegoan</option>
    <option value="borivili">Borivili</option>
    <option value="churchgate">Churchgate</option>
  </select><br><br>
Enter Type:<input type="text" name="stype" placeholder="Villa/Flat" id="stype"><br><br>
Enter Price:<input type="text" name="price" placeholder="Enter Listing Price" id="price"><br><br>
Enter Carpet Area:<input type="text" name="sqft" placeholder="Sq.ft" id="sqft"><br><br>
Upload Image:<input type="file" name="file" id="files"  ><br><br>
Enter Description:<input type="textarea" placeholder="Discribe about the place" name="textarea" rows="30" cols="20" /><br><br>
Enter KYC NUMBER (for verification of your property):<input type="text" name="kyc" placeholder="Enter your KYC Number"><br><br>
<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">POST</button>
<hr>
</form>
<form action="view.php" method="post">
<button type="submit" name="view" id="view" class="btn btn-primary btn-lg btn-block">VIEW YOUR PROPERTY</button>
</form>
</post>
<div>
<div>
</body>
</html>