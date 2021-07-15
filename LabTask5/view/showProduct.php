<?php
    session_start();
    include "../control/showProductCheck.php";
 
	if(empty($_SESSION["username"])) // Destroying All Sessions
	{
		header("Location: ../control/login.php"); // Redirecting To Home Page
	}
	
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
        <input type='text' name='srch_product'>
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
				<tr>
					
					<td><?php echo $pid; ?></td>
					<td><?php echo $pnmae; ?></td>
					<td><?php echo $pdesc; ?></td>
					<td><?php echo $pcategoy; ?></td>
					<td><?php echo $pprice; ?></td>
                    <td><img src="<?php echo $ppicture;?>" width="40px" alt=""> </td>
				</tr>
			<tbody>
			
		</table>
	</body>
</html>