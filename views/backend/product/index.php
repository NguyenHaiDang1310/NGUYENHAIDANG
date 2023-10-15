<?php
use App\Models\Product;
use App\Models\Category;
use App\Models\brand;

//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc
/*
$list = Product::where('status','!=',0)->orderBy('Created_at','DESC')->get();
*/

$list = Product::join('category', 'product.category_id', '=', 'category.id')
 ->join('brand', 'product.brand_id', '=', 'brand.id')
 ->where('product.status', '!=', 0)
 ->orderBy('product.created_at', 'desc')
 ->select("product.*", "category.name as category_name", "brand.name as brand_name")
 ->get();

?>


<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
         <div class="content-wrapper">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả sản phẩm</h1>
                        <a href="index.php?option=product&cat=create" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Main content --> 
            <section class="content">
               <div class="card">
                  <div class="card-header">
                     <select name="" id="" class="form-control d-inline" style="width:100px;">
                        <option value="">Xoá</option>
                     </select>
                     <button class="btn btn-sm btn-success" type ="submit" name ="THEM">Áp dụng</button>

                  </div>
                  <div class="card-body">
                     <table class="table table-bordered" id="mytable">
                        <thead>
                           <tr>
                              <th class="text-center" style="width:30px;">
                                 <input type="checkbox">
                              </th>
                              <th class="text-center" style="width:130px;">Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th>Tên danh mục</th>
                              <th>Tên thương hiệu</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php if(count($list) > 0) : ?>
                              <?php foreach($list as $item   ):?>
                           <tr class="datarow">
                              <td>
                                 <input type="checkbox">
                              </td>
                              <td>
                              <img class="img-fluid" src="../public/images/product/<?=$item->image;?>" alt="<?$item->image;?>">
                              </td>
                              <td>
                                 <div class="name">
                                 <?= $item->name ; ?> 
                                    
                                 </div>
                                 <div class="function_style">
                                    <a href="#">Hiện</a> |
                                    <a href="#">Chỉnh sửa</a> |
                                    <a href="index.php?option=product&cat=show">Chi tiết</a> |
                                    <a href="#">Xoá</a>
                                 </div>
                              </td>
                           
                              <td><?= $item->category_name ; ?> </td>
                              <td><?= $item->brand_name ; ?> </td>
                           </tr>
                           <?php endforeach;?>
                              <?php endif;?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </form>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>