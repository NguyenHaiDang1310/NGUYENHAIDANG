<?php

use App\Models\Order;
use App\Libraries\MyClass;

if(isset($_POST['THEM']))
{
    $order=new Order();
    //lấy từ form
    $brand->nuser_idame = $_POST['user_id'];
    
    $brand->deliveryname = $_POST['deliveryname'];
    $brand->deliveryphone = $_POST['deliveryphone'];
    $brand->deliveryemail = $_POST['deliveryemail'];
    $brand->deliveryaddress = $_POST['deliveryaddress'];
    $brand->note = $_POST['note'];

    $brand->status = $_POST['status'];
   
   
    //tư sinh ra
    $brand->created_at = date('Y-m-d-H:i:s');
   
    var_dump($brand);
    //luu vao csdl
    //ínet
    $brand->save();
    //
    header("location:index.php?option=brand");
}