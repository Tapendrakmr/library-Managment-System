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
      //echo "Connected successfully";

       //getting other filed

  
 $Id=$_POST["id"];
$Bname =$_POST["name"];
$Author = $_POST["author"];
$Pub =$_POST["pubname"];
$Date=$_POST["dopur"];
$Amnt= $_POST["amnt"];


//for getting image   
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="piclib/".$filename;
move_uploaded_file($tempname, $folder);
$sql="INSERT INTO book (ID,NAME,AUTHOR,PUBLICATION,PURCHASE_DATE,AMNT,IMAGE)
VALUES ('$Id','$Bname','$Author','$Pub','$Date',$Amnt,'$folder')";

  
 

  if (mysqli_query($conn, $sql)) 
   {
    echo "<script type='text/javascript'>alert('BOOK ADDED SUCESSFULLY');
          window.location='Librarianfunctionbook.php';
  </script>";
     }



    else {

          echo "<script type='text/javascript'>alert('Sorry,BOOK ID ALREADY EXIST');
          window.location='Librarianfunctionbook.php';
  </script>";
      }



     } 





?> 
