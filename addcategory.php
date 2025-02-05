<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>K A Electricals</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/popup.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<script src="assets/js/popup.js"></script>

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">


<div id="password-modal" class="modal" style="display: none;">
        <div class="modal-content">
          <h2>Restricted Access</h2>
          <p id="report-name"></p>
          <p>Please enter the Admin password to access this section</p>
          <input type="password" id="admin-password" placeholder="Enter Admin Password" />
          <button id="submit-password" class="btn btn-primary">Submit</button>
          <button id="close-modal" class="btn btn-secondary">Cancel</button>
          <p id="error-message" style="display: none; color: red;">Incorrect Password. Try Again.</p>
        </div>
      </div>   

      <div class="header">

<div class="header-left active">
<a href="index.php" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="index.php" class="logo-small">
<img src="assets/img/logo-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">


<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
    <img src="assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">2</span>
    </a>
    <div class="dropdown-menu notifications">
    
    
    <div class="topnav-dropdown-footer">
    <a href="activities.php">View all Notifications</a>
    </div>
    </div>
    </li>

<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
</div>
</div>
</div>

<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="index.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="add-sales.php">New Sales</a></li>    
<li><a href="saleslist.php">Sales List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="addproduct.php">Add Product</a></li>    
<li><a href="productlist.php">Product List</a></li>
<li><a href="categorylist.php">Category List</a></li>
<li><a href="addcategory.php">Add Category</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/return1.svg" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="salesreturnlist.php">Sales Return List</a></li>
<li><a href="createsalesreturn.php">Add Sales Return </a></li>
<li><a href="purchasereturnlist.php">Purchase Return List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="newuser.php">New User </a></li>
<li><a href="userlists.php">Users List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
<ul id="report-links">
    <li><a href="inventoryreport.php" data-report="Inventory Report">Inventory Report</a></li>
    <li><a href="salesreport.php" data-report="Sales Report">Sales Report</a></li>
    <li><a href="purchasereport.php" data-report="Purchase Report">Purchase Report</a></li>
  </ul>
</li>
</div>
</div>
</div>
            
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Add Category</h4>
<h6>Create new product Category</h6>
</div>
</div>

<!-- Wrap the inputs in a form -->
<form action="" method="POST">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Category Name</label>
<input type="text" name="category_name" class="form-control">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Category Code</label>
<input type="text" name="category_code" class="form-control">
</div>
</div>
<div class="form-group">
<label>Add product</label>
<select class="select">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control" name="description"></textarea>
</div>
</div>
<div class="col-lg-12">
<!-- Update the submit button to a button type="submit" -->
<button type="submit" class="btn btn-submit me-2">Submit</button>
<a href="categorylist.html" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>
</form>

</div>
</div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventorydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form values and escape special characters
    $category_name = $conn->real_escape_string($_POST['category_name']);
    $category_code = $conn->real_escape_string($_POST['category_code']);
    $description = $conn->real_escape_string($_POST['description']);

    // Insert data into database
    $sql = "INSERT INTO categories (category_name, category_code, description) 
            VALUES ('$category_name', '$category_code', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New category added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }

    // Close connection
    $conn->close();
}
?>



</body>
</html>
