<?php
session_start();
if (!isset($_SESSION["userRole"])) {
  header("location:../Auth/login.php");
}else {
  if ($_SESSION["userRole"] != "Admin") {
    header("location:../Auth/login.php");
  }}
   

?>



<!DOCTYPE html>
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

    <title>Add new Photo</title>

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
    <h4 class="fw-bold py-3 mb-4"> Add new Photo</h4>

    <div class="row">
      <!-- Basic -->
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Photo Details</h5>
          <div class="card-body demo-vertical-spacing demo-only-element">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon11">Photo Name</span>
              <input
                type="text"
                class="form-control"
               name="photo name"
                aria-label="Name"
                aria-describedby="basic-addon11"
              />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Category</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">one</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            
           
                 
            <div class="input-group">
              <span class="input-group-text">Details</span>
              <textarea class="form-control" name="details" aria-label="Details" placeholder="Write the details of this photo"></textarea>
            </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload photo</label>
                  <input class="form-control" type="file" id="formFile" name="Upload photo"/>
                </div>
        
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
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
