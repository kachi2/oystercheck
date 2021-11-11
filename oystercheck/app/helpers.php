<?php



function moneyFormat($data, $currency){
    $data = number_format($data);
    $currency = '₦';
    $data = $currency.$data;
    return $data;
}

 function naira(){
    $data = '₦';
    return $data;
}

function GenerateRefs(){
    $ref = substr(str_replace(['+', '=', '/'], '', \base64_encode(random_bytes(15))), 0,20);
    $id = rand(0000,9999);
    $ref = $ref.$id;
    return $ref;
}









