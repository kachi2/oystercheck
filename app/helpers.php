<?php

// use App\Models\User;

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

function executeCurl($data, $host, $method)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
     CURLOPT_URL => $host,
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 45,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => $method,
     CURLOPT_POSTFIELDS => $data,
     CURLOPT_FAILONERROR => 1,
     CURLOPT_HTTPHEADER => [
       "Content-Type: application/json",
       // "Token: zntFmihZ.g9gQAcMzK5st9Mb71uGxqi0H6hI19t3lsNjn"
    //    "Token: EAgjeZKG.Hazn4C1dhxI7ehgLJjYhLvJij182Ccc0UCTS"
    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
     ],
   ]);
   
   $response = curl_exec($curl);

   if(curl_errno($curl)){
     dd('error:'. curl_errno($curl));
   }else{
   $res = json_decode($response, true);
   
   curl_close($curl);
   return $res;
   }

}

function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    function generateReference($length)
    {
        $token = "";
        $codeAlphabet = "0123456789";
        $codeAlphabet .= "abcdefghkmnpqrstuvwxyz";
        $max = strlen($codeAlphabet); // edited

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[crypto_rand_secure(0, $max - 1)];
        }

        return $token;
    }










