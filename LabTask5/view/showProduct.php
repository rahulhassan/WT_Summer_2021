<?php
    session_start();
    include "../model/db.php";
 
	if(empty($_SESSION["username"])) // Destroying All Sessions
	{
		header("Location: ../control/login.php"); // Redirecting To Home Page
	}
	
?>
<!DOCTYPE HTML>
<html>
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
		<!-- <table>
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
					
					<td><?php //echo $pid; ?></td>
					<td><?php //echo $pnmae; ?></td>
					<td><?php //echo $pdesc; ?></td>
					<td><?php //echo $pcategoy; ?></td>
					<td><?php //echo $pprice; ?></td>
                    <td><img src="<?php //echo $ppicture;?>" width="150px" alt=""> </td>
				</tr>
			<tbody>
			
		</table> -->
		<?php 
			$pid=$pname=$pdesc=$pcategoy=$pprice=$pimage=$rinfo="";
			if(isset($_POST['search'])){
				if(empty($_POST['srch_product'])){
					echo "Input Invalid <br>";
				}
				else{
					$connection = new db();
					$conobj=$connection->OpenCon();
					$userQuery1=$connection->showProduct($conobj,"product",$_REQUEST["srch_product"]);
					if ($userQuery1->num_rows > 0) {
						while($row = $userQuery1->fetch_assoc()){
							$pid = $row['P_id'];
							$pname = $row['P_Name'];
							$pdesc = $row['P_Desc'];
							$pcategoy = $row['P_Category'];
							$pprice = $row['P_Price'];
							$pimage=$row['P_Picture'];
							echo "<br>Name: ".$pname."<br>Description: ".$pdesc."<br>Category: ".$pcategoy."<br>Price: ".$pprice."<br><img src='".$pimage."'width='200'><br><br><br>";
						}
					}else{
						echo "No Result Found <br>";
					}
				}
			}	
		?>
	</body>
</html>