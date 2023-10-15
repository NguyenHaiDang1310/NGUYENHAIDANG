<?php require_once "views/frontend/header.php";?>
   <section class="hdl-mainmenu bg-main">
      <div class="container">
         <div class="row">
            <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
               <div class="dropdown list-category">
                  <strong class="dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                     Danh mục sản phẩm
                  </strong>
                  <ul class="dropdown-menu w-100">
                     <li><a class="dropdown-item" href="product_category.html">Thời trang nam</a></li>
                     <li><a class="dropdown-item" href="product_category.html">Thời trang nữ</a></li>
                     <li><a class="dropdown-item" href="product_category.html">Thời trang trẻ em</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-12 col-md-9">
               <nav class="navbar navbar-expand-lg bg-main">
                  <div class="container-fluid">
                     <a class="navbar-brand d-block d-sm-none text-white" href="index.html">DIENLOISHOP</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                              <a class="nav-link text-white" aria-current="page" href="index.html">Trang chủ</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-white" href="post_page.html">Giới thiệu</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nam
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Quần jean nam</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Áo thun nam </a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nam</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nữ
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Váy</a></li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Đầm</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nữ</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="post_topic.html" class="nav-link text-white">Bài viết</a>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link text-white">Liên hệ</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-slideshow">
      <div id="carouselExample" class="carousel slide">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="./public/images/banner/slider_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="./public/images/banner/slider_2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="./public/images/banner/slider_3.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>
   <section class="hdl-maincontent">
      <div class="container">
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h1 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG NAM</h1>
                     <img class="img-fluid d-none d-md-block" src="./public/images/category/thoi-trang-nam.png"
                        alt="category.jpg">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h3 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG NỮ</h3>
                     <img class="img-fluid d-none d-md-block" src="./public/images/category/thoi-trang-nu.png" alt="">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h3 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG TRẺ EM</h3>
                     <img class="img-fluid d-none d-md-block" src="./public/images/category/thoi-trang-tre-em.png"
                        alt="">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h3 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG THỂ THAO</h3>
                     <img class="img-fluid d-none d-md-block" src="./public/images/category/thoi-trang-the-thao.png"
                        alt="">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="./public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="./public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-lastpost bg-main mt-3 py-4">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <h3>BÀI VIẾT MỚI</h3>
               <div class="row">
                  <div class="col-md-6">
                     <a href="post_detail.html">
                        <img class="img-fluid" src="./public/images/post/post-4.webp" />
                     </a>
                     <h3 class="post-title fs-4 py-2">
                        <a href="post_detail.html">
                           Tieu đề bài viết mói nhất 1
                        </a>
                     </h3>
                     <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài
                        viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất
                        1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                  </div>
                  <div class="col-md-6">
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="./public/images/post/post-1.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 2
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="./public/images/post/post-2.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 3
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="./public/images/post/post-3.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 4
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">FACEBOOK</div>
         </div>
      </div>
   </section>
  <?php require_once "views/frontend/footer.php";?>