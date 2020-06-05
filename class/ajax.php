<?php
if(!isset($_POST["val1"])){
    $value1 = random_int(2,10);
    $value2 = random_int(2,10);
    $result = $value1*$value2;
    echo json_encode(array("value1"=>$value1 , "value2"=>$value2 , "result"=>$result));
}
else{
    $valid = [];
    for($i=0 ; $i<5 ; $i++){
        if($_POST["reponse"][$i]==$_POST["result"][$i]){
            $valid[$i]=1;
        }
        else{
            $valid[$i]=0;
        }
    }
    echo json_encode(array("valid0"=>$valid[0] , "valid1"=>$valid[1] , "valid2"=>$valid[2] , "valid3"=>$valid[3] , "valid4"=>$valid[4] ,));
}