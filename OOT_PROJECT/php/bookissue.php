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




$bookid =$_POST["BOOKID"];
$userid=$_POST['USERID'];
    

     $value = mysqli_query($conn,"SELECT ID FROM book WHERE ID='$bookid'");
    $result = mysqli_fetch_array($value);

   $c= $result['ID'];

   if($c==$bookid){
      

        $value = mysqli_query($conn,"SELECT REG_NO FROM sfsignin WHERE REG_NO='$userid'");
        $result = mysqli_fetch_array($value);

        $c= $result['REG_NO'];
       
        if($c==$userid)
          {
           
     // $A = "SELECT ID ,NAME,AUTHOR,PUBLICATION FROM book WHERE ID='$bookid'";
       // echo $A;
          $issue_date=date("Y/m/d");
          $return_date=Date('y:m:d', strtotime("+15 days"));
         $query2="INSERT INTO issuebook(USERID, BID,STATUS,ISSUED_DATE,RETURN_DATE)
          VALUES ('$userid','$bookid','YES','$issue_date','$return_date')";
          mysqli_query($conn,$query2); 
         // echo $query2;
          
             
        $value = mysqli_query($conn,"update book set AMNT=AMNT-1 where ID='$bookid'");
        

             echo "<script type='text/javascript'>alert('BOOK ISSUED SUCCESSFULLY');
			      window.location='Librarianfunction.php';
			     </script>"; 
         }
         else{
              echo "<script type='text/javascript'>alert('USER DOESN'T EXIST);
            window.location='Librarianfunction.php';
           </script>"; 
         }
     	    

     }
     else{
     	 
    	  echo "<script type='text/javascript'>alert('NO SUCH BOOK EXIST');
			      window.location='Librarianfunction.php';
			     </script>";  
     }



?> 