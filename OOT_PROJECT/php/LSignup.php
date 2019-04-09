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

$sql="INSERT INTO admin (LIB_NAME,LIB_EMAIL,LReg_NO,LIB_PHONE,LIB_IMAGE,LIB_PASSWORD,CONFIRM,Request_date)
VALUES ('$Name','$Email','$Reg','$Phone','$folder','$Pass','N','$date')";

  

  
  

  if (mysqli_query($conn, $sql)) 
   {
    echo "<script type='text/javascript'>alert('Account Request Has Been Sent successfully');
          window.location='Lsignin.html';
  </script>";
     }



    else {
        
         echo "<script type='text/javascript'>alert('Sorry,Something is Wrong');
          window.location='Lsignin.html';
  </script>";
      }



     } 





?> 
