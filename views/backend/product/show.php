<?php
use App\Models\Product;

//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc

$list = product::where('status','!=',0)->orderBy('Created_at','DESC')->get();

?>

<?php require_once "../views/backend/header.php";?>

      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Chi tiết sản phẩm</h1>
                  </div>
               </div>
            </div>
         </section>

         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header text-right">
                  <a href="index.php?option=product" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                  </a>
               </div>
               <div class="card-body p-2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th style="width:30%">Tên trường</th>
                           <th>Giá trị</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                        <tr>
                           <th>ID</th>
                           <td>1</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>
