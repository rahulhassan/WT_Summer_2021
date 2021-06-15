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
        $existingdata = file_get_contents('data.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("data.json", $jsondata)){
            echo 'Data successfully saved.';
        } else{
            echo "No data saved";
        }
        $data = file_get_contents("data.json");
        $mydata = json_decode($data);
       
        echo "<br> My Data: ".$mydata[0]->name;
        // foreach($mydata as $myobject)
        // {
        //     foreach($myobject as $key=>$value)
        //     {
        //         echo "Your ".$key." is ".$value."<br>";
        //     } 
        // }
    }
?>