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


	
	

     $value = mysqli_query($conn,"SELECT TYPE FROM sfsignin WHERE REG_NO='$user' && PASSWORD='$pwd'");
    $result = mysqli_fetch_array($value);

    $c= $result['TYPE'];

	if($c=='S')
	  {
       session_start();
		$_SESSION['usern']=$user;
	    $_SESSION['TYPE']=$c;
       header('location:searchbook.php');
	   }
	else
	   {
		
		echo "<script type='text/javascript'>alert('Something went wrong . Check Your Entries ');
          window.location='Ssignin.html';
	</script>";
	    
	    }


?> 