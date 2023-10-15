<?php

use App\Models\banner;
use App\Libraries\MyClass;

if(isset($_POST['THEM']))
{
    $banner=new banner();
    //lấy từ form
    $banner->name = $_POST['name'];
    $banner->link = $_POST['link'];
    $banner->position = $_POST['position'];


    $banner->status = $_POST['status'];
    //Xử lí uploadfile
  
    //tư sinh ra
    $banner->created_at = date('Y-m-d-H:i:s');
    $banner->created_by = (isset($_SESSION['user_id']))? $_SESSION['user_id'] : 1;
    var_dump($banner);
    //luu vao csdl
    //ínet
    $banner->save();
    //
    header("location:index.php?option=banner");
}