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
.bru{
  border-radius: 20px;
  margin:5px;
}
.wid{
  height: 100px;
}
.six_wid{
  width: 100%;
}
.ram{
  width: 90rem;
  margin-left: -10rem;
}
</style>




<body>
  <div class="container">
     <div class="jumbotron">


         <div class="navigation_new">
              
            <a href="admincollection.php"><img src="images/logo.png" width="200rem" height="150px"></a>
             <h1>LIBRARY MANAGMENT SYSTEM</h1>    
             

         </div>

	
            <div class="upperheading">
                   <div class="row">
                        <div class="col-sm-8"><center><h1>ADMIN<h1></center></div>
                      
                             
                              <div class="col-md-3 ml-md-auto">  
                              <a href="Logout.php" class="btn btn-primary log">SIGN OUT</a>
                            </div>

                         
                      
                        
                     </div>
                 </div>
                
   <br><br>
 



     <div class="shownarea">
             
   

      <table class="table table-bordered">
    <th>
        LIBRARIAN NAME
    </th>
    <th>
        LIBRARIAN EMAIL
    </th>
    <th>
       LIBRARIAN REG_NO
    </th>
    <th>
        LIBRARIAN PHONE
    </th>
    <th>
        LIBRARIAN IMAGE
    </th>
    <th>
        LIBRARIAN PASSWORD
    </th>
    <th>
        CONFIRM
    </th>
    <th>
        REQUEST DATE
    </th>

    <?php

  
  


    $res = mysqli_query($conn, "select * from admin ");
    while ($row = mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>";
        echo $row["LIB_NAME"];
        echo "</td>";
        echo "<td>";
        echo $row["LIB_EMAIL"];
        echo "</td>";
        echo "<td>";
        echo $row["LReg_NO"];
        echo "</td>";
        echo "<td>";
        echo $row["LIB_PHONE"];
        echo "</td>";
        echo "<td>";
        echo '<img src="'.$row["LIB_IMAGE"].'" alt="HTML5 Icon" style="width:128px;height:128px">';
        
        echo "</td>";
        echo "<td>";
        echo $row["LIB_PASSWORD"];
        echo "</td>";
        
        echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["LReg_NO"]; ?>"><?php echo $row["CONFIRM"];?></a> <?php  echo "</td>";
        
        echo "<td>";
        echo $row["Request_date"];
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>




           </div>









 </div>
</div>
</body>

</html>


