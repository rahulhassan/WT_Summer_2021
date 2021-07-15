<?php
    session_start();
    include "../model/db.php";
 
	if(empty($_SESSION["username"])) // Destroying All Sessions
	{
		header("Location: ../control/login.php"); // Redirecting To Home Page
	}

    error_reporting(0);
	$connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery1=$connection->showProduct($conobj,"product",$_REQUEST["srch_product"]);
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Product Information
			</title>
		</head>
	<body>
    <a href="pageone.php">Back</a>
   	<a href="showAllProduct.php"> <input type="button" value="Show All Product" ></a>
	   
	<br><br>
	<form action="" method="post">

        Search by Category : <br>
        <input type='text' name='srch_product' value="" >
        <input name='search' type='submit' value='search'> 
    </form>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Product Name</th>
					<th>Description </th>
					<th>Category</th>
					<th>Price</th>
                    <th>Image</th>
				</tr>
			</thead>
			
			<tbody>
                <?php
					while($row = $userQuery1->fetch_assoc()){
				?>
				<tr>
					
					<td><?php echo $row['P_id']; ?></td>
					<td><?php echo $row['P_Name']; ?></td>
					<td><?php echo $row['P_Desc']; ?></td>
					<td><?php echo $row['P_Category']; ?></td>
					<td><?php echo $row['P_Price']; ?></td>
                    <td><img src="<?php echo $row['P_Picture'];?>" width="40px" alt=""> </td>
				</tr>
				<?php } ?>
			<tbody>
			
		</table>
	</body>
</html>