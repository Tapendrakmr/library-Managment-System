 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="library";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
  else{
  	  echo "Connected successfully";


  	  $username = $_POST["email"];
		$password = $_POST["pass"];

		 $value = mysqli_query($conn,"SELECT TYPE FROM sfsignin WHERE REG_NO='$username' && PASSWORD='$password'");
    $result = mysqli_fetch_array($value);

    $c= $result['TYPE'];

	if($c=='F')
	  {    
	  	    session_start();
		$_SESSION['usern']=$username;
	    $_SESSION['TYPE']=$c;
			header("location:searchbook.php");
		}
		else
		{
			echo "<script type='text/javascript'>alert('Please Check Entries');
			window.location='Fsignin.html';
			</script>";
		}
		  } 





?> 
