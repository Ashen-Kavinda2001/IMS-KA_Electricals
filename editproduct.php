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
<h4>Product Edit</h4>
<h6>Update your product</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Product Name</label>
<input type="text" value="Macbook pro">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Category</label>
<select class="select">
<option>Computers</option>
<option>Mac</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Sub Category</label>
<select class="select">
<option>None</option>
<option>option1</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Brand</label>
<select class="select">
<option>None</option>
<option>option1</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Unit</label>
<select class="select">
<option>Piece</option>
<option>Kg</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>SKU</label>
<input type="text" value="PT0002">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Minimum Qty</label>
<input type="text" value="5">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Quantity</label>
<input type="text" value="50">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</textarea>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Tax</label>
<select class="select">
<option>Choose Tax</option>
<option>2%</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Discount Type</label>
<select class="select">
<option>Percentage</option>
<option>10%</option>
<option>20%</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Price</label>
<input type="text" value="1500.00">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label> Status</label>
<select class="select">
<option>Active</option>
<option>Open</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label> Product Image</label>
<div class="image-upload">
<input type="file">
<div class="image-uploads">
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="product-list">
<ul class="row">
<li>
<div class="productviews">
<div class="productviewsimg">
<img src="assets/img/icons/macbook.svg" alt="img">
</div>
<div class="productviewscontent">
<div class="productviewsname">
<h2>macbookpro.jpg</h2>
<h3>581kb</h3>
</div>
<a href="javascript:void(0);" class="hideset">x</a>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-12">
<a href="javascript:void(0);" class="btn btn-submit me-2">Update</a>
<a href="productlist.html" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>

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
</body>
</html>