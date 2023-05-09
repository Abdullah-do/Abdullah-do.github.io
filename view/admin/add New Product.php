<?php
/*session_start();
if(!isset($_SESSION["Admin_check"]))
{
header("locaion:../index.php");
}
if(!$_SESSION["Admin_check"]){
header("location:../index.php");
}*/
require_once '../../controller/ProductController.php';
require_once 'D:\xam\htdocs\Abdullah-do.github.io\module\product.php';
$productController= new ProductController;
$categories=$productController->getCategories();

if(isset($_POST['name'])&&isset($_POST['quantity'])&&isset($_POST['price'])&&(isset($_POST['state1'])||isset($_POST['state2']))&&isset($_POST['details'])&&isset($_POST['category'])&&isset($_FILES["image"])){

  if(!empty($_POST['name'])&&!empty($_POST['quantity'])&&!empty($_POST['price'])&&(!empty($_POST['state1'])||!empty($_POST['state2']))&&!empty($_POST['details'])&&!empty($_POST['category']))
{
 
$product=new Product;
$product->setProductName($_POST['name']);
$product->setproductQuantity($_POST['quantity']);
$product->setproductPrice($_POST['price']);
$product->setproductDescription($_POST['details']);
$product->setProductCategory($_POST['category']);
$location = "shopimages/".$_FILES["image"]["name"];
if(move_uploaded_file($_FILES["image"]["tmp_name"],$location)){
$product->image=$location;
if($productController->addproduct($product))
{

  header("location:index.php");
}
else{

  echo "failed";

}
}
else{
  echo "file upload failed";

}

}
if(isset($_POST['state1']))
{
  $product->setProductstate('in stock');
}
else if(isset($_POST['state2']))
{
  $product->setProductstate('out of stock');
}
if( $productController->addproduct($product))
{
 header("location:add New Product.php");
}
else {
  header("location:index.php");

}
}


?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Add new product</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <ul class="menu-inner py-1">
           <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="add New session.php" class="menu-link">
                    <div data-i18n="Without menu">New Session</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add New Product.php" class="menu-link">
                    <div data-i18n="Without navbar">New Product</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add New photo.php" class="menu-link">
                    <div data-i18n="Container">New Photo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add New exibit.php" class="menu-link">
                    <div data-i18n="Fluid">New Exibit</div>
                  </a>
                </li>
                  
              </ul>
           <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">view</div>
              </a>
             <ul class="menu-sub">
              <li class="menu-item">
                <a href="member List.php" class="menu-link">
                  <div data-i18n="Without menu">members</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="purchased tickets.php" class="menu-link">
                  <div data-i18n="Without navbar">purchased tickets</div>
                </a>
              </li>
              
              <li class="menu-item">
                <a href="reserved tables.php" class="menu-link">
                  <div data-i18n="Without navbar">booked tables</div>
                </a>
              </li>
            </li> 
            </li> 
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"> Add new Product</h4>

    <div class="row">
      <!-- Basic -->
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Product Details</h5>
          <div class="card-body demo-vertical-spacing demo-only-element">
          <form method="post" enctype ="multipart/form-data">
          <div class="input-group">
          <form action="add New Product.php" method="post" enctype='multipart/form-data'>
              <span class="input-group-text" id="basic-addon11">Product Name</span>
              <input
                type="text"
                class="form-control"
               name="name"
                aria-label="Name"
                aria-describedby="basic-addon11"
              />
            </div>
           
           
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label" >Category</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"name="Category">
            
               <option value="replica">replica</option>
               <option value="jewellery">jewellery</option>
               <option value="clothing">clothing</option>
              </select>
              </div>
            <?PHP
          
            
            
            ?>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon11">Quantity</span>
              <input
                type="text"
                name="quantity"
                class="form-control"
                aria-label="Quantity"
                aria-describedby="basic-addon11"
              />
            </div>

            <div class="input-group">
              <span class="input-group-text">€</span>
              <input
                type="text"
                class="form-control"
                placeholder="Amount"
                name="price"
                aria-label="Amount (to the nearest dollar)"
              />
              <span class="input-group-text">.00</span>
            </div>
            <div class="col-md">
              <small class="text-light fw-semibold">State</small>
              <div class="form-check mt-3">
                <input
                  name="default-radio-1"
                  class="form-check-input"
                  type="radio"
                  name="state1"
                  value=""
                  id="defaultRadio1"
                />
                <label class="form-check-label" for="defaultRadio1"> In Stock </label>
              </div>
              <div class="form-check">
                <input
                  name="default-radio-1"
                  class="form-check-input"
                  type="radio"
                  name="stat2"
                  value=""
                  id="defaultRadio2"
                  checked
                />
                <label class="form-check-label" for="defaultRadio2"> Out of Stock</label>
              </div>
              
            </div>           
            <div class="input-group">
              <span class="input-group-text">Details</span>
              <textarea class="form-control" aria-label="Details" placeholder="Write the details of this product"name="details"></textarea>
            </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload product's photo</label>
                  <input class="form-control" type="file" id="formFile" name="image" />
                </div>
          
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
              </form>
    <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
