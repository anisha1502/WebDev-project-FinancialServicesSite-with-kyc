<html>
<!-- <body background="https://previews.123rf.com/images/phokin/phokin1809/phokin180900111/108510103-pastel-blue-brick-wall-texture-interiors-background-gray-cement-concrete-brushed-vintage-painted-ind.jpg"> -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src='animate/animate.js'></script>
<link rel='stylesheet' type='text/css' media='screen' href='animate/animate.css'>
<!-- <style>
header{
padding: 40px;
height: 350px;
background-color: dodgerblue;
}
hr
{
border: 5px solid dodgerblue;
}

</style> -->
</head>
<div id="particles">
  <div id="webcoderskull">
<header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.plum-property.com.au/wp-content/uploads/2017/12/slider7-1.jpg" class="d-block w-100" alt="..." height="300px";>
    </div>
    <div class="carousel-item">
      <img src="https://dp5zphk8udxg9.cloudfront.net/wp-content/uploads/2016/08/shutterstock_375747523-e1509351055304.jpg" class="d-block w-100" alt="..." height="300px">
    </div>
    <div class="carousel-item">
      <img src="https://www.accuplan.net/images/real-estate-ira.png" class="d-block w-100" alt="..." height="300px">
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
<!-- The End of Header Slideshow and the start of the forms -->


<center>
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
 <button type="submit" class="btn btn-primary">SEARCH</button>
</form>
</rent>
<hr>

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
 <button type="submit" class="btn btn-primary">SEARCH</button>
</form>
</buy>
<hr>

<post>
<html>
<body>
<form action ="upload.php" method="post" enctype="multipart/form-data">
<h1>POST YOUR PROPERTY </h1>
Enter Seller Name:<input type="text" name="name" value="name"><br><br>
Enter Contact Number:<input type="text" name="contact"><br><br>
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
Enter Type:<input type="text" name="stype" value="Flat,Villa,Shop" id="stype"><br><br>
Enter Price:<input type="text" name="price" value="price" id="price"><br><br>
Enter Sq.ft:<input type="text" name="sqft" value="sqft" id="sqft"><br><br>
Upload Image:<input type="file" name="file"  ><br><br>
Enter Description:<input type="textarea" name="textarea" rows="30" cols="20" /><br><br>
Enter KYC NUMBER (for verification of your property):<input type="text" name="kyc" value="kyc"><br><br>
<button type="submit" name="submit" class="btn btn-primary">POST</button>
<hr>
</form>
<form action="view.php" method="post">
<button type="submit" name="view" id="view" class="btn btn-primary">VIEW YOUR PROPERTY</button>
</form>
</body>
</html>
</post>
<center>
</div>
</div>
</body>
</html>