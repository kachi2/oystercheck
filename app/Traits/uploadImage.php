<?php 
namespace App\Traits;


trait uploadImage{


    public function UploadImage($image){
        if($image){
            $name = $image->getClientOriginalName();
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            $fileName = $name.'.'.$ext;
            $image->move('assets/images',$fileName);
        }
        return $fileName;
    }


    public function UploadDoc($image){
        if($image){
            $name = $image->getClientOriginalName();
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            $fileName = $name.'.'.$ext;
            $image->move('assets/doc',$fileName);
            $data = $fileName;
        }
        return $data;
    }


}