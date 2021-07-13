<?php
session_start(); 

include ("../control/addproductcheck.php");


if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Add New Product</h2>

<?php echo $error; ?>

<form action="" method="post"  enctype="multipart/form-data">
Product Name: 
<input type="text" name="pname"><br><br>
Product Description: 
<textarea name="pdesc"></textarea><br><br>
Product category: 
<input type="text" name="pcategory"><br><br>
Product Price: 
<input type="number" name="pprice"><br><br>
Product Image: 
<input type="file" name="pimage"><br><br>
<br>
<br>
<input type="submit" name="add" value="ADD PRODUCT">
</form>
<h5> <a href="pageone.php">GO back</a></h5>
</body>
</html>