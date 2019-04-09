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
                        <div class="col-sm-8"><center><h1>BOOK SEARCH<h1></center></div>
                      
                           <div class="col-md-3 ml-md-auto">
                            <br><label class="log"><?php echo $result['NAME'];?><label><br></div>
                  <a href="labprofile.php"><img src='<?php echo $result['IMAGE'];?>' class="log" width="80px"height="80px" ></a>
                              
                             
                             
                              <div class="col-md-3 ml-md-auto">  
                              <a href="Logout.php" class="btn btn-primary log">SIGN OUT</a>
                            </div>

                         
                      
                        
                     </div>
                 </div>
 
  <BR><HR>


                <div class="entries">
                   
               
                     <div class="row">
                      <div class="col-2 " style="border:2px solid DodgerBlue;" >
                        <br><br>
                         <button class='btn'  onclick="location.href = 'Librarianfunction.php';">SEARCH BOOK</button> 
                         <button class='btn' onclick="location.href = 'Librarianfunctionmember.php';">MEMBER VERIFICATION</button>
                          
                         <button class='btn' onclick="location.href = 'Librarianfunctionissue.php';">ISSUE BOOK</button> 

                         <button class='btn'  onclick="location.href = 'Librarianfunctionreturn.php';">  RETURN BOOK</button> 
                 
                          <button class='btn'>ADD BOOK</button> 
                          <button class='btn'  onclick="location.href = 'userbook.php';">Search Member</button> 
                      </div>



                      <div class="col-10 six_wid" style="border:2px solid DodgerBlue;" >

                        <form action="addbook.php" method="post" enctype="multipart/form-data">
                                   <div class="row">
                                    <div class="col-sm-3">
                                    
                                      
                         <h2></h2>
                       <p>Fill Up Informations</p>
                         <hr class="mb-3"> 
                           <label for="author"><b>BOOK ID</b></label>
                           <input class="form-control" type="text" name="id" required>
                                   
                            <label for="author"><b>BOOK Name</b></label>
                           <input class="form-control" type="text" name="name" required>

                           <label for="author"><b>Author Name</b></label>
                            <input class="form-control" type="text" name="author" required>

                            <label for="publication_name"><b>Publication Name</b></label>
                            <input class="form-control" type="text" name="pubname" required>

                            <label for="date_of_purchase"><b>Date Of Purchase</b></label>
                            <input class="form-control" type="Date" name="dopur" required>

                            <label for="book_price"><b>Amount</b></label>
                            <input class="form-control" type="number" min="0" name="amnt" required>
                           <label>Upload Image</label>
                            <br>
                           <input class="btn btn-primary"  type ="file" name ="uploadfile" accept="Image/*"><br><br>

                                                <hr class="mb-3">
                              <center><input class="btn btn-primary" type="submit" id="register" name="uploadfile" value="Add"></center>
                            </div>
                         </div> 


                               
                          </form>  

                                      

                      </div>  
                    </div>
                </div>


            
       </div>
    </div>




</body>
</html>             





  