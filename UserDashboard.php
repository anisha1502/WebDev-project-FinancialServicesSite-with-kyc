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
<body>
<div id="particles">
  <div id="webcoderskull">
    <!-- Start of PHP code -->
    <header>
        <h3 style="color:white;"><?php
            session_start();
            echo "Welcome  ".$_SESSION['nname'];
            ?>
            </h3>
    </header>
    <!-- The end of the PHP Code -->

    <center><section>
    <button type="button" class="btn btn-primary btn-lg" onclick="kyc()">KYC</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="insurance()">Insurance</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="property()">Property</button>
    <button type="button" class="btn btn-primary btn-lg">Logout</button>
    </section>
    </div>
    </div>
</center>
</body>
</html>