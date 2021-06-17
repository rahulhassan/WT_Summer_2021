<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $formdata = array(
        'name'=> $_POST['fname'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'comment'=> $_POST['comment']
        );
        if(isset($_REQUEST["gender"])){
            $formdata['gender']=$_REQUEST["gender"];
        }

        if(isset($_REQUEST["hobby1"])){
            $formdata['hobby1']=$_REQUEST["hobby1"];
        }
        if(isset($_REQUEST["hobby2"])){
            $formdata['hobby2']=$_REQUEST["hobby2"];
        }
        if(isset($_REQUEST["hobby3"])){
            $formdata['hobby3']=$_REQUEST["hobby3"];
        }


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