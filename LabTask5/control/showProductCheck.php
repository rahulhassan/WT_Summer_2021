<?php
include('../model/db.php');

$pid=$pnmae=$pdesc=$pcategoy=$pprice=$ppicture="";
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
					$pnmae = $row['P_Name'];
					$pdesc = $row['P_Desc'];
					$pcategoy = $row['P_Category'];
					$pprice = $row['P_Price'];
					$ppicture=$row['P_Picture'];
				}
			}else{
				echo "No Result Found <br>";
			}
		}

	}
?>