<?php
 
$con=mysqli_connect("localhost","id15395733_root","fJNL1_v0*ol$/2[G","id15395733_sparks");
if($con)
{
  echo "connection established<br>";
}
else{
  echo "fail";
}
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	//fetching data sender
$id=$_GET['id'];
$select_query="SELECT * FROM user_name WHERE user_name.id=$id";
$select_query_result=mysqli_query($con,$select_query);
$total_row_fetch=mysqli_num_rows($select_query_result);
$row=mysqli_fetch_array($select_query_result);
$var1=$row['balance'];

		//getting transfer amount data from previous page
 $email=$_POST["email"];
$amount=$_POST["amount"];
echo $email;

//decreasing the amount of sender bank balance
	$final_amount=$var1-$amount;
if ($final_amount<=0){
	echo "underloaded";
	$final_amount="0";
}

	$sql_1="UPDATE user_name SET balance=$final_amount WHERE id=$id";
	$result_1=mysqli_query($con,$sql_1);

$select_query="SELECT * FROM user_name WHERE user_name.id=$id";
$select_query_result=mysqli_query($con,$select_query);
$total_row_fetch=mysqli_num_rows($select_query_result);
$row=mysqli_fetch_array($select_query_result);
$var2=$row['balance'];
echo $var2;
	//header('location:product page.php');

// now updation in receiver banks
$select_query="SELECT balance FROM user_name WHERE user_name.email='$email'";
$select_query_result=mysqli_query($con,$select_query);
$total_row_fetch=mysqli_num_rows($select_query_result);
$row=mysqli_fetch_array($select_query_result);
$var3=$row['balance'];
$final_amount2=$var3+$amount;
$sql_2="UPDATE user_name SET balance=$final_amount2 WHERE email='$email'";
	$result_1=mysqli_query($con,$sql_2);

	if ($final_amount==0) {
		# code...
		$error="hello";
		$_SESSION['error']="$error";
		   header('location:data.php');

	}
	else{
		$success="hello";
		$_SESSION['success']="$success";
		   header('location:data.php');

	}
?>