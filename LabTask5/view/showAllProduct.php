<?php
    include "../model/db.php";
	$connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->ShowAll($conobj,"product");
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Product Information
			</title>
		</head>
	<body>
    <a href="showProduct.php">Back</a>
	<form action="" method="post"> 
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
					while($row = $userQuery->fetch_assoc()){
				?>
				<tr>
					
					<td><?php echo $row['P_id']; ?></td>
					<td><?php echo $row['P_Name']; ?></td>
					<td><?php echo $row['P_Desc']; ?></td>
					<td><?php echo $row['P_Category']; ?></td>
					<td><?php echo $row['P_Price']; ?></td>
                    <td><img src="<?php echo $row['P_Picture']; ?>" width="40px" alt=""></td>
				</tr>
				<?php } ?>
			<tbody>
			
		</table>
	</body>
</html>