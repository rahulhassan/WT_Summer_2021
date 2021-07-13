<?php
  session_start(); 

  include('../control/updatecheck.php');


  if(empty($_SESSION["username"])) // Destroying All Sessions
  {
    header("Location: ../control/login.php"); // Redirecting To Home Page
  }
  echo $error; 
?>
<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page<br><br>
<?php
error_reporting(0);
$radio1=$radio2=$radio3="";
$firstname=$email=$dob="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery1=$connection->CheckUser1($conobj,"student",$_REQUEST["srch_username"]);

if ($userQuery1->num_rows!=null) {
  if ($userQuery1->num_rows > 0) {

      while($row = $userQuery1->fetch_assoc()) {
        $username=$row["username"];
        $firstname=$row["firstname"];
        $email=$row["email"];
        $dob =$row["dob"];
        if(  $row["gender"]=="female" )
        { $radio1="checked"; }
        else if($row["gender"]=="male")
        { $radio2="checked"; }
        else{$radio3="checked";}  
    
    } 
  }
}


?>
<form action="" method="post">

Search by username : <br>
<input type='text' name='srch_username' value="" >
<input name='search' type='submit' value='search'> 
</form>
<form action='' method='post'>
<h2>Update Form</h2>
  <input type="hidden" name="username">
  First Name : <input type='text' name='firstname' value="<?php echo $firstname; ?>"> <br><br>

  Email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>

  DOB : <input type="date" name="dob" value="<?php echo $dob; ?>"> <br><br>

  Gender:
  <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
  <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
  <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other
  <br><br>

  <input name='update' type='submit' value='Update'>  
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>