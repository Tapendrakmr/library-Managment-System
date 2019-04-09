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

$user =$_POST["email"];
$pwd=$_POST['pass'];


	$query="SELECT * FROM librariansignin WHERE Reg_NO='$user' && PASSWORD='$pwd'";
   
	
	
	$data=mysqli_query($conn,$query);
	$total =mysqli_num_rows($data);
	if($total==1)
	  {
	    session_start();
		$_SESSION['usern']=$user;
		
       header('location:Librarianfunction.php');
	   }
	else
	   {
		
		echo "<script type='text/javascript'>alert('Something went wrong . Check Your Entries ');
          window.location='Lsignin.html';
	</script>";
	    
	    }


?> 