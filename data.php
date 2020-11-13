<?php 
$con=mysqli_connect("localhost","id15395733_root","fJNL1_v0*ol$/2[G","id15395733_sparks");
if($con)
{
	//echo "connection established<br>";
}
else{
	echo "fail";
}
if(!isset($_SESSION)) 
    { 
       session_start(); 
    }
$select_query="SELECT * FROM user_name";
$select_query_result=mysqli_query($con,$select_query);
$total_row_fetch=mysqli_num_rows($select_query_result);
//echo "total no of data<br>".$total_row_fetch;
//while($row=mysqli_fetch_array($select_query_result))
//{
 /*function sum($var1,$var2)
 {
 	$add=$var1+$var2;
 	return $add;
 }*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="style1.css">

         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
                   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <title>Sparks Foundation</title>
  </head>
  <body>
    <!--starting of navigaton bar-->
<nav style="">
  <div class="logo">
    <h1 >The Sparks</h1>
  </div>
  <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="data.php">View_all_customers</a></li>
  </ul>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
<script src="app.js"></script>
<!--Ending of navigaton bar-->
    <div class="container">
    	<div class="row">
    		
        <div class=" col-lg-12 mt-5 ">
          <h2><center>Transfering Details</center></h2>
        </div>
      </div>
      <div class="col-lg-12">
    		<table class="table table-responsive-md table-striped mt-5 ">
  <thead>
    <tr>
      <th scope="col">Si.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">View Details</th>
    </tr>
  </thead>
  <tbody>
  	<?php while($row=mysqli_fetch_array($select_query_result)) {?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['balance'];?></td>
      <td class="btn btn-success"> <a href="user.php?id=<?php echo $row['id'];?>" style="color: white; text-decoration: none;">Select and View</a></td>
    </tr>
<?php 

  }; ?>
  </tbody>
</table>

    	</div>
    </div>

         <?php

    if (isset($_SESSION['success'])) {

   ?> 
         <script>
            swal({
                  title: "Transsection Successfully!",
                  text: "Your amount is Successfully delevered!",
                  icon: "success",
              });
            <?php
            unset($_SESSION['success']);
        //session_unset();
        //session_destroy();
        ?>
        </script>

        


  <?php }  
    
  ?>

  <?php

    if (isset($_SESSION['error'])) {

   ?> 
         <script>
            swal({
                  title: "Oops!",
                  text: "You have not sufficient balance in your account!",
                  icon: "error",
              });
            <?php
            unset($_SESSION['error']);
          //session_unset();
         // session_destroy();
        ?>
        </script>


  <?php }  
  ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>