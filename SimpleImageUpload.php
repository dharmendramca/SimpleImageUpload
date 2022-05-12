<?php 
/*
*************************************************
*************************************************
Author: Dharmendra Kumar

Description: SimpleImageUpload is a PHP class that validate and upload Image file on sever.

*************************************************
*/
class SimpleImageUpload{

public $image;
protected $file_ext;
protected $ext;

public function ImageUpload($image){

if(isset($image)){

$file_ext=array('png','jpeg', 'jpg', 'gif');
$ext=pathinfo($image['name'], PATHINFO_EXTENSION);

if(!in_array($ext, $file_ext)){
return "Please upload valid image file: png, jpeg, jpg, gif";
exit;
}

if(in_array($ext, $file_ext) && $image['name']!=""){

if(!file_exists('images')){
mkdir('images', 0777, true);

}

$newimage= __DIR__'/images/'.rand(1111, time()).$image['name'];
move_uploaded_file($image['tmp_name'], $newimage);
}

}


}


}
