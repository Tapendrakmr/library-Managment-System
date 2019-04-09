<?php
session_start();
error_reporting(0);  //to remove error or warning 

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

$type=$_SESSION['TYPE'];
$userprofile = $_SESSION['usern'];
if($userprofile==true)//IF SESSION NOT CREATED THEN IT AUTOMATICALLY REDIRECT TO SIGININ PAGE
{
  
}
else{
  header('location:Ssignin.html');
}


$query ="SELECT * FROM sfsignin WHERE Reg_NO='$userprofile'";
  $data = mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<style>

.navigation{
  width:80%;
  height: 150px;
  position: relative;
  margin-bottom: 5rem;
  margin-top: -50px;
} 

h1{
  font-family: 'Pacifico';
  font-size: 40px;
} 
form{
  margin-top: 100px;
}
.log{
  float: right;
}
</style>




<body>
  <div class="container">
     <div class="jumbotron">


         <div class="navigation_new">
              
            <a href="searchbook.php"><img src="images/logo.png" width="200rem" height="150px"></a>
             <h1>LIBRARY MANAGMENT SYSTEM</h1>    
             
           
               
                <div class="upperheading">
                   <div class="row">
                        <div class="col-sm-8"><center><h1>BOOK SEARCH<h1></center></div>
                      
                           <div class="col-md-3 ml-md-auto">
                            <br><label class="log"><?php echo $result['NAME'];?><label><br></div>
                        <a href="profile.php"><img src='<?php echo $result['IMAGE'];?>' class="log" width="80px"height="80px" ></a>     
                             
                             
                              <div class="col-md-3 ml-md-auto">  
                              <a href="Logout.php" class="btn btn-primary log">SIGN OUT</a>
                            </div>

                         
                      
                        
                     </div>
                 </div>


                
                     
                     <div class="row">
                      
                      <div class="col-10 six_wid" style="border:2px solid DodgerBlue;" >


                        <form>
                                <table class="table table-bordered">
    <th>
        BOOK ID
    </th>
    <th>
        BOOK NAME
    </th>
    <th>
       AUTHOR
    </th>
    <th>
       PUBLICATION
    </th>
    <th>
        AMOUNT
    </th>
    <th>
        IMAGE
    </th>
    

    <?php

  
$Id=$_POST["BOOKID"];
$Bname =$_POST["BOOKNAME"];
$Author = $_POST["BOOKAUTHOR"];
$Pub =$_POST["BOOKPUBLISHER"];



$sql="select * from book where ID ='$Id' OR NAME='$Bname' OR AUTHOR='$Author' OR PUBLICATION='$Pub'";


    $res = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>";
        echo $row["ID"];
        echo "</td>";
        echo "<td>";
        echo $row["NAME"];
        echo "</td>";
        echo "<td>";
        echo $row["AUTHOR"];
        echo "</td>";
        echo "<td>";
        echo $row["PUBLICATION"];
        echo "</td>";
         echo "<td>";
        echo $row["AMNT"];
        echo "</td>";
        echo "<td>";
        echo '<img src="'.$row["IMAGE"].'" alt="HTML5 Icon" 
               style="width:128px;height:128px">';
        
        echo "</td>";
       
        
    }
    ?>
</table>




                        </form>

                      </div>  
                    </div>
                </div>
             
             
       </div>
    </div>




</body>
</html>             

