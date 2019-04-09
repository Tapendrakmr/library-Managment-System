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

  $value = mysqli_query($conn,"SELECT Confirm FROM stduentinfo WHERE Reg_NO='$id'");
  $result = mysqli_fetch_array($value);

 $c= $result['Confirm'];

   if($c=="N"){
     	 $query="update stduentinfo set Confirm='Y' where Reg_NO='$id'";
     	  mysqli_query($conn,$query);

       $query2= "INSERT INTO sfsignin(NAME, EMAIL,REG_NO,PHONE,IMAGE,PASSWORD,TYPE)
                 SELECT NAME,EMAIL,Reg_NO,PHONE,IMAGE,PASSWORD,Type  FROM stduentinfo where Reg_NO='$id'";

             mysqli_query($conn,$query2); 

             echo "<script type='text/javascript'>alert('MEMBER ADDED SUCCESSFULLY');
			      window.location='Librarianfunctionmember.php';
			     </script>";    

     }
     else{
     	 $query="update stduentinfo set Confirm='N' where Reg_NO='$id'";
     	  mysqli_query($conn,$query);


         $query3= "DELETE  FROM sfsignin where Reg_NO='$id'";

             mysqli_query($conn,$query3); 

    	  echo "<script type='text/javascript'>alert('MEMBER REMOVE SUCCESSFULLY');
			      window.location='Librarianfunctionmember.php';
			     </script>";  
     }

    
      
 
 
  

?>
<script type="text/javascript">
	window.location="admincollection.php";
</script>