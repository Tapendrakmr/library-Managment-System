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

       //getting other filed

$Name =$_POST["Name"];
$Email = $_POST["Email"];
$Reg =$_POST["Reg"];
$Pass= $_POST["Password"];
$Phone=$_POST["Phone"];
$date=date("Y/m/d");
//for getting image   

$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="piclib/".$filename;
move_uploaded_file($tempname, $folder);
$sql="INSERT INTO stduentinfo (NAME,EMAIL,Reg_NO,PHONE,IMAGE,PASSWORD,TYPE,Confirm,Request_date)
VALUES ('$Name','$Email','$Reg','$Phone','$folder','$Pass','S','N','$date')";

  

  
  

  if (mysqli_query($conn, $sql)) 
   {
    echo "<script type='text/javascript'>alert('Account Request Has Been Sent successfully');
          window.location='Ssignin.html';
  </script>";
     }



    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }



     } 





?> 
