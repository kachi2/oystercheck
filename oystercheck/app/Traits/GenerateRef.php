<?php


namespace App\Traits;


trait GenerateRef{

    private function GenerateRef(){
        $ref = substr(str_replace(['+', '=', '/'], '', \base64_encode(random_bytes(15))), 0,20);
        $id = rand(0000,9999);
        $ref = $ref.$id;
        return $ref;
    }


}