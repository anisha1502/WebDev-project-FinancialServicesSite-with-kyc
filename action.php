 <?php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 if(isset($_POST["kycno"]))  
 {  
      $query = "  
      SELECT * FROM kyc_account 
      WHERE kyc_no = '".$_POST["kycno"]."' ";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      
      { 
      
           $_SESSION['kycno'] = $_POST['kycno'];  
           echo 'Yes';  
           
          
      }  
      else  
      {  
           echo 'No';
             
           
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["kycno"]);  
 }  
 ?>  