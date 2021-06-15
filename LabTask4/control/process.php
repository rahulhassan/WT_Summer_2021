<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $formdata = array(
        'name'=> $_POST['fname'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'comment'=> $_POST['comment'],
        'gender'=> $_POST['gender'],
        'hobby1' => $_POST['hobby1'],
        'hobby2' => $_POST['hobby2'],
        'hobby3' => $_POST['hobby3'],
    );
   
	$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

    if(file_put_contents("data.json", $jsondata)){
        echo 'Data successfully saved.';
    } else{

        echo "No data saved";
    }

 }
?>