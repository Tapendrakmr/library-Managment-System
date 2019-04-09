<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname="library";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }

$id=$_GET["id"];

  $value = mysqli_query($conn,"SELECT CONFIRM FROM admin WHERE LReg_NO='$id'");
  $result = mysqli_fetch_array($value);

 $c= $result['CONFIRM'];

   if($c=="N"){
     	 $query="update admin set CONFIRM='Y' where LReg_NO='$id'";
     	  mysqli_query($conn,$query);

       $query2= "INSERT INTO librariansignin(NAME, EMAIL,Reg_NO,PHONE,IMAGE,PASSWORD)
                 SELECT LIB_NAME,LIB_EMAIL,LReg_NO,LIB_PHONE,LIB_IMAGE,LIB_PASSWORD  FROM admin where LReg_NO='$id'";

             mysqli_query($conn,$query2); 

             echo "<script type='text/javascript'>alert('LIBRARIAN ADDED SUCCESSFULLY');
			      window.location='admincollection.php';
			     </script>";    

     }
     else{
     	 $query="update admin set CONFIRM='N' where LReg_NO='$id'";
     	  mysqli_query($conn,$query);


         $query3= "DELETE  FROM librariansignin where Reg_NO='$id'";

             mysqli_query($conn,$query3); 

    	  echo "<script type='text/javascript'>alert('LIBRARIAN REMOVE SUCCESSFULLY');
			      window.location='admincollection.php';
			     </script>";  
     }

    
      
 
 
  

?>
<script type="text/javascript">
	window.location="admincollection.php";
</script>