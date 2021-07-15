<?php
  session_start(); 

  include('../control/updatecheck.php');


  if(empty($_SESSION["username"])) // Destroying All Sessions
  {
    header("Location: ../control/login.php"); // Redirecting To Home Page
  }
   
?>
<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

<h3>Hi, <?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page<br><br>

<form action="" method="post">

Search by username : <br>
<input type='text' name='srch_username' value="" >
<input name='search' type='submit' value='search'> 
</form>
<form action='' method='post'>
<h2>Update Form</h2>
<p><?php echo $errorinfo; ?></p>
<input type="hidden" name="username" value="<?php echo $username; ?>">

First Name : <input type='text' name='firstname' value="<?php echo $firstname; ?>"> <br><br>

Email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>

DOB : <input type="date" placeholder="dd/mm/yyyy" name="dob" value="<?php echo $dob; ?>"> <br><br>

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