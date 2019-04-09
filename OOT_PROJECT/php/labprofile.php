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


$userprofile = $_SESSION['usern'];
if($userprofile==true)//IF SESSION NOT CREATED THEN IT AUTOMATICALLY REDIRECT TO SIGININ PAGE
{
  
}
else{
  header('location:Lsignin.html');
}


$query ="SELECT * FROM librariansignin WHERE Reg_NO='$userprofile'";
  $data = mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="main.css">

<script type="text/javascript">



</script>

</head>
<style>
.block{
  margin:10px;
}
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
.btn{
   border-radius: 15px 50px;
   border: 2px solid green;
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
<body >


  <div class="container">

        <div class="jumbotron ram">
          
          
             <div class="navigation">
              
                <a href="Librarianfunction.php"><img src="images/logo.png" width="200rem" height="150px"></a>
                <h1>LIBRARY MANAGMENT SYSTEM</h1>    
                

             </div>
             <br><br>
             


                <div class="upperheading">
                   <div class="row">
                        <div class="col-sm-8"><center><h1>PROFILE<h1></center></div>
                      
                           <div class="col-md-3 ml-md-auto">
                            <br><label class="log"><?php echo $result['NAME'];?><label><br></div>
                        <a href="labprofile.php"><img src='<?php echo $result['IMAGE'];?>' class="log" width="80px"height="80px" ></a>     
                             
                             
                              <div class="col-md-3 ml-md-auto">  
                              <a href="Logout.php" class="btn btn-primary log">SIGN OUT</a>
                            </div>

                         
                      
                        
                     </div>
                 </div>
 
  <BR><HR>

      <DIV CLASS="PROFILEt">
        <center><img src='<?php echo $result['IMAGE'];?>' width="80rem" height="80px" alt="image"></center>
        <BR>
         <center> <h5>REG_NO:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $result['Reg_NO'];?></h5></center>
         <BR>
         <center> <h5>NAME:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $result['NAME'];?></h5></center>
         <BR>
         <center> <h5>EMAIL:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $result['EMAIL'];?></h5></center>
        <BR>
        <center> <h5>PHONE:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $result['PHONE'];?></h5></center>
        <BR>
        <center> <h5>PASSWORD:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $result['PASSWORD'];?></h5></center>
      </DIV>






  </div>
</div>
   

</body>
</html>             