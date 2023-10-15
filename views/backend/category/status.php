<?php

use App\Models\Category;

$id = $_REQUEST['id'];
$Category =  Category::find($id);
if($Category==null){
    header("location:index.php?option=Category");
}
//
$Category->status =($Category->status == 1) ? 2 : 1;
$Category->updated_at = date('Y-m-d H:i:s');
$Category->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$Category->save();
header("location:index.php?option=Category");