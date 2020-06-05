<?php

    $value1 = random_int(2,10);
    $value2 = random_int(2,10);
    $result = $value1*$value2;
    echo json_encode(array("value1"=>$value1 , "value2"=>$value2 , "result"=>$result));