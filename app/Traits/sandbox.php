<?php 
namespace App\Traits;
use App\Models\{User};

trait sandbox{

    public function sandbox(){
        $user = User::where('id', auth()->user()->id)->first();
        if($user->client->is_activated == 0){
            $sandbox = 0;
            
        }else{
            $sandbox = 1;
        }
        return $sandbox;
    }

public function ReqUrl(){
    $user = User::where('id', auth()->user()->id)->first();
    if($user->client->is_activated == 0){
        $reqUrl = 'https://api.sandbox.youverify.co/v2/api/';
    }else{
        $reqUrl = 'https://api.youverify.co/v2/api/';
    }
    return $reqUrl;
}

public function ReqToken(){
    $user = User::where('id', auth()->user()->id)->first();
    if($user->client->is_activated == 1){
        $reqToken= 'N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL';
    }else{
        $reqToken = 'bEhEkBLt.wFmQBZLRLe4jCvLki16ic9oTB27lwMnq8q7s';
    }
    return $reqToken;
}
}