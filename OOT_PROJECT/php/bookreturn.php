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
      

           
     // $A = "SELECT ID ,NAME,AUTHOR,PUBLICATION FROM book WHERE ID='$bookid'";
       // echo $A;
    /*     $value = mysqli_query($conn,"SELECT RETURN_DATE FROM book WHERE ID='$bookid'");
        $result = mysqli_fetch_array($value);

        $c= $result['RETURN_DATE'];  
         

     $now = time(); // or your date as well
     $your_date = strtotime($c);
     $datediff = $now - $your_date;

       round($datediff / (60 * 60 * 24));

*/


         $query2="update issuebook set STATUS='NO' where BID='$bookid' and USERID='$userid'";
          mysqli_query($conn,$query2); 
         // echo $query2;
          
             
         mysqli_query($conn,"update book set AMNT=AMNT+1 where ID='$bookid'");
        

             echo "<script type='text/javascript'>alert('BOOK RETURN SUCCESSFULLY');
			      window.location='Librarianfunction.php';
			     </script>"; 
         
        
     	    

     }
     else{
     	 
    	  echo "<script type='text/javascript'>alert('NO SUCH BOOK EXIST');
			      window.location='Librarianfunction.php';
			     </script>";  
     }



?> 