<?php
    $formdata = array(
        'firstName'=> $_POST['fname'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'comment'=> $_POST['comment']

    );

    $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
    if(file_put_contents("data.json", $jsondata)){
        echo 'Data successfully saved.';
    } else{

        echo "No data saved";
    }

?>