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
<h4>Edit Create Sales Return</h4>
<h6>Add/Update Sales Return</h6>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Customer Name</label>
<div class="row">
<div class="col-lg-10 col-sm-10 col-10">
<select class="select ">
<option>Thomas</option>
<option>Customer</option>
</select>
</div>
<div class="col-lg-2 col-sm-2 col-2 ps-0">
<div class="add-icon">
<a href="javascript:void(0);"><img src="assets/img/icons/plus1.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Quotation Date</label>
<div class="input-groupicon">
<input type="text" placeholder="2/27/2022" class="datetimepicker">
<div class="addonset">
<img src="assets/img/icons/calendars.svg" alt="img">
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Reference No.</label>
<input type="text" placeholder="555444">
</div>
</div>
<div class="col-lg-12 col-sm-6 col-12">
<div class="form-group">
<label>Product</label>
<div class="input-groupicon">
<input type="text" placeholder="Scan/Search Product by code and select...">
<div class="addonset">
<img src="assets/img/icons/scanners.svg" alt="img">
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>Product Name</th>
<th>Net Unit Price($)	</th>
<th>Stock</th>
<th>QTY	</th>
<th>Discount($)	</th>
<th>Tax % </th>
<th>Subtotal ($)	</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td class="productimgname">
<a class="product-img">
<img src="assets/img/product/product7.jpg" alt="product">
</a>
<a href="javascript:void(0);">Apple Earpods</a>
</td>
<td>150</td>
<td>500</td>
<td>500</td>
<td>100</td>
<td>50</td>
<td>250</td>
<td>
<a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
</td>
</tr>
<tr>
<td class="productimgname">
<a class="product-img">
<img src="assets/img/product/product6.jpg" alt="product">
</a>
<a href="javascript:void(0);">Macbook Pro</a>
</td>
<td>150</td>
<td>500</td>
<td>500</td>
<td>100</td>
<td>50</td>
<td>250</td>
<td>
<a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-lg-12 float-md-right">
<div class="total-order">
<ul>
<li>
<h4>Order Tax</h4>
<h5>$ 0.00 (0.00%)</h5>
</li>
<li>
<h4>Discount	</h4>
<h5>$ 0.00</h5>
</li>
<li>
<h4>Shipping</h4>
<h5>$ 0.00</h5>
</li>
<li class="total">
<h4>Grand Total</h4>
<h5>$ 20000.00</h5>
</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Order Tax</label>
<input type="text" placeholder="0">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Discount</label>
<input type="text" placeholder="0">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Shipping</label>
<input type="text" placeholder="0">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Status</label>
<select class="select">
<option>Choose Status</option>
<option>Completed</option>
<option>Inprogress</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-lg-12">
<a class="btn btn-submit me-2">Update</a>
<a href="salesreturnlist.html" class="btn btn-cancel">Cancel</a>
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

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>