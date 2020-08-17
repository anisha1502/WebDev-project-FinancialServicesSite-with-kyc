<?php
session_start();
?>
<html>
    <head>

    <link rel="stylesheet" type="text/css" href="ss.css">
<script src="modal.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel='stylesheet' type='text/css' media='screen' href='animate/animate.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src='animate/animate.js'></script>
</head>
<body bgcolor="sky blue">
    <div id="particles">
  <div id="webcoderskull">
<div class="container" style="width:700px;">  
              
              <?php  
              if(isset($_SESSION['kycno']))  
              {  
                
              ?>  
              
              <div align="center">  
                   <h1>Welcome <?php echo $_SESSION['kycno']; ?></h1><br />
                  
</h1>
    <script>




function GetSelectedItem(){
    
    var term = document.querySelector('#select1');
    var paymode = document.querySelector('#select2');
    
    if(term.options[term.selectedIndex].value=="10 years" && paymode.options[paymode.selectedIndex].value =="Single pay" )
    {

        
        var pre=10000;
        alert("Your Single Pay Premium is:Rs. 10,000") ;

    }

  else if(term.options[term.selectedIndex].value=="5 years" && paymode.options[paymode.selectedIndex].value =="Single pay" )
    {
        var pre=5000;
        alert("Your Single Pay Premium is:Rs. 5000");
    }

    else if(term.options[term.selectedIndex].value=="20 years" && paymode.options[paymode.selectedIndex].value =="Single pay" )
    {
        var pre=20000;
        alert("Your Single Pay Premium is:Rs. 20,000") ;
    }

   else  if(term.options[term.selectedIndex].value=="35 years" && paymode.options[paymode.selectedIndex].value =="Single pay" )
    {
        var pre=35*1000;
        alert( "Your Single Pay Premium is: Rs. 35,000") ;
    }

    else if(term.options[term.selectedIndex].value=="50 years" && paymode.options[paymode.selectedIndex].value =="Single pay" )
    {
        var pre=50000;
        alert("Your Single Pay Premium is: Rs.50,000") ;
    }
    
   else if((term.options[term.selectedIndex].value=="5 years" || term.options[term.selectedIndex].value=="10 years" || term.options[term.selectedIndex].value=="20 years" || term.options[term.selectedIndex].value=="35 years" 
|| term.options[term.selectedIndex].value=="50 years" )   && paymode.options[paymode.selectedIndex].value =="Annual Pay" )
    {
        var pre=1000;
        alert("Your Annual Pay Premium is: Rs. 1000") ;
    }

  else  if((term.options[term.selectedIndex].value=="5 years" || term.options[term.selectedIndex].value=="10 years" || term.options[term.selectedIndex].value=="20 years" || term.options[term.selectedIndex].value=="35 years" 
|| term.options[term.selectedIndex].value=="50 years" ) && paymode.options[paymode.selectedIndex].value =="Semi-Annual Pay" )
    {
        var pre=508;
        alert("Your Semi-Annual Pay Premium is : Rs. 508") ;
    }

  else  if((term.options[term.selectedIndex].value=="5 years" || term.options[term.selectedIndex].value=="10 years" || term.options[term.selectedIndex].value=="20 years" || term.options[term.selectedIndex].value=="35 years" 
|| term.options[term.selectedIndex].value=="50 years" )  && paymode.options[paymode.selectedIndex].value =="Monthly pay" )
    {
        var pre=83;
        alert("Your Monthly Pay Premium is: Rs. 83" );
    }



   
}


</script>
<h3>
<form method="post" action="extra.php" >
    <div id=form>
    Enter these details to get Life Isurance <br><br><br>

 
    Choose policy term: <select id="select1">
  <option value="5 years">5 years</option>
  <option value="10 years">10 years</option>
  <option value="20 years">20 years</option>
  <option value="35 years">35 years</option>
  <option value="50 years" selected>50 years</option>
</select> <br><br>
    Premium mode:<select id="select2">
  <option value="Single pay">Single pay</option>
  <option value="Annual Pay">Annual Pay</option>
  <option value="Semi-Annual Pay">Semi-Annual Pay</option>
  <option value="Monthly pay" selected>Monthly pay</option>
</select><br><br>
<button onClick="GetSelectedItem()">Calculate Premium</button> <br> <br>
<h3 id="demo">Payment mode: Net Banking </h3><br> <br>

Proceed to pay <input type="submit" name="pay" id="pay" onclick="extra.php">
</form>
</h3>


                   <a href="#" id="logout">Logout</a> 


                  

              <?php  
              }  
              else  
              {  
              ?>  
              <div align="center">  
                   <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Proceed</button>  
              </div>  
              <?php  
              }  
              ?>  
         </div>  
         <br />  
   
            </div>



<div id="loginModal" class="modal fade" role="dialog">  
    <div class="modal-dialog">  
 <!-- Modal content-->  
         <div class="modal-content">  
              <div class="modal-header">  
                   <button type="button" class="close" data-dismiss="modal">&times;</button>  
                   <h4 class="modal-title">Please Enter KYC no. to Proceed</h4>  
              </div>  
              <div class="modal-body">  
                   <label>KYC no.</label>  
                   <input type="text" name="kycno" id="kycno" class="form-control" />  
                   <br />  
                  
                   <button type="button" name="login_button" id="login_button" class="btn btn-warning">Proceed</button>  
                   <div class="modal-footer">
                 
                 <a class="btn btn-large btn-info" href="insurance.php">Haven't filled the kyc form yet? Do it here!</a>
              </div>

              </div>  
         </div>  
    </div>  
</div>  
<script>  
$(document).ready(function(){  
    $('#login_button').click(function(){  
         var kycno = $('#kycno').val();  
         
         if(kycno != '' )  
         {  
              $.ajax({  
                  
                   url:"action.php",  
                   method:"POST",  
                   data: {kycno:kycno},  
                   success:function(data)  
                   {  
                     
                        if(data == 'No')
                        {  
                             alert("Wrong Data"); 
                             
                        } 
                        else
                        {  
                             $('#loginModal').hide();  
                             location.reload();  
                        }  

                        
                   }  
              });  
         }  
         else  
         {  
              alert("Both Fields are required");  
         }  
    });  
    $('#logout').click(function(){  
         var action = "logout";  
         $.ajax({  
              url:"action.php",  
              method:"POST",  
              data:{action:action},  
              success:function()  
              {  
                   location.reload();  
              }  
         });  
    });  
});  
</script>  

</div>
</div>

</body>
</html>