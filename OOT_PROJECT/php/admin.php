 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="library";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
  else{
  	 //echo "Connected successfully";


  	    $username = $_POST["regno"];
		$password = $_POST["pwd"];
     
       echo $username;
        if($username=='admin' && $password=='admin')

          {

		     $query = "SELECT * FROM admin";

		     $data = mysqli_query($conn,$query);
		     //$total= mysqli_num_rows($data);
				
					
			header("location:admincollection.php");
				
		  }	

		else
		{
			echo "<script type='text/javascript'>alert('Please Check Entry ! ADMIN');
			window.location='admin.html';
			</script>";
		}
	} 

?> 
