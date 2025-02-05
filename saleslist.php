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
<h4>Sales List</h4>
<h6>Manage your sales</h6>
</div>
<div class="page-btn">
<a href="add-sales.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add Sales</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="assets/img/icons/filter.svg" alt="img">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
</li>
</ul>
</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Reference No">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Completed</option>
<option>Paid</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Date</th>
<th>Customer Name</th>
<th>Reference</th>
<th>Status</th>
<th>Payment</th>
<th>Total</th>
<th>Paid</th>
<th>Due</th>
<th>Biller</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td></td>
<td>19 Nov 2022</td>
<td>SL0101</td>
<td><span class="badges bg-lightgreen">Completed</span></td>
<td><span class="badges bg-lightgreen">Paid</span></td>
<td>0.00</td>
<td>0.00</td>
<td class="text-red">100.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0102</td>
<td><span class="badges bg-lightgreen">Completed</span></td>
<td><span class="badges bg-lightgreen">Paid</span></td>
<td>0.00</td>
<td>0.00</td>
<td class="text-red">100.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
 </li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0103</td>
<td><span class="badges bg-lightgreen">Completed</span></td>
<td><span class="badges bg-lightgreen">Paid</span></td>
<td>0.00</td>
<td class="text-green">100.00</td>
<td>0.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>Fred C. Rasmussen</td>
<td>19 Nov 2022</td>
<td>SL0104</td>
<td><span class="badges bg-lightred">Pending</span></td>
<td><span class="badges bg-lightred">Due</span></td>
<td>0.00</td>
<td class="text-green">100.00</td>
<td>0.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>Thomas M. Martin</td>
<td>19 Nov 2022</td>
<td>SL0105</td>
<td><span class="badges bg-lightred">Pending</span></td>
<td><span class="badges bg-lightred">Due</span></td><td>0.00</td>
<td>0.00</td>
<td class="text-green">100.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>Thomas M. Martin</td>
<td>19 Nov 2022</td>
<td>SL0106</td>
<td><span class="badges bg-lightgreen">Completed</span></td>
<td><span class="badges bg-lightgreen">Paid</span></td>
<td>0.00</td>
<td>0.00</td>
<td class="text-red">100.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0107</td>
<td><span class="badges bg-lightgreen">Completed</span></td>
<td><span class="badges bg-lightgreen">Paid</span></td>
<td>0.00</td>
<td>0.00</td>
<td class="text-red">100.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0108</td>
<td><span class="badges bg-lightred">Pending</span></td>
<td><span class="badges bg-lightred">Due</span></td>
<td>0.00</td>
<td class="text-green">100.00</td>
<td>0.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0109</td>
<td><span class="badges bg-lightred">Pending</span></td>
<td><span class="badges bg-lightred">Due</span></td>
<td>0.00</td>
<td class="text-green">100.00</td>
<td>0.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0110</td>
<td><span class="badges bg-lightred">Pending</span></td>
<td><span class="badges bg-lightred">Due</span></td>
<td>0.00</td>
<td class="text-green">100.00</td>
<td>0.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>walk-in-customer</td>
<td>19 Nov 2022</td>
<td>SL0111</td>
<td><span class="badges bg-lightred">Pending</span></td>
<td><span class="badges bg-lightred">Due</span></td>
<td>0.00</td>
<td>0.00</td>
<td>0.00</td>
<td>Admin</td>
<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="sales-details.html" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale Detail</a>
</li>
<li>
<a href="edit-sales.html" class="dropdown-item"><img src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item"><img src="assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
</li>
</ul>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Show Payments</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>Date</th>
<th>Reference</th>
<th>Amount	</th>
<th>Paid By	</th>
<th>Paid By	</th>
</tr>
</thead>
<tbody>
<tr class="bor-b1">
<td>2022-03-07	</td>
<td>INV/SL0101</td>
<td>$ 0.00	</td>
<td>Cash</td>
<td>
<a class="me-2" href="javascript:void(0);">
<img src="assets/img/icons/printer.svg" alt="img">
</a>
<a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-2 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Create Payment</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Customer</label>
<div class="input-groupicon">
<input type="text" value="2022-03-07" class="datetimepicker">
<div class="addonset">
<img src="assets/img/icons/calendars.svg" alt="img">
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Reference</label>
<input type="text" value="INV/SL0101">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Received Amount</label>
<input type="text" value="0.00">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Paying Amount</label>
<input type="text" value="0.00">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Payment type</label>
<select class="select">
<option>Cash</option>
<option>Online</option>
<option>Inprogress</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group mb-0">
<label>Note</label>
<textarea class="form-control"></textarea>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-submit">Submit</button>
<button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Payment</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Customer</label>
<div class="input-groupicon">
<input type="text" value="2022-03-07" class="datetimepicker">
<div class="addonset">
<img src="assets/img/icons/datepicker.svg" alt="img">
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Reference</label>
<input type="text" value="INV/SL0101">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Received Amount</label>
<input type="text" value="0.00">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Paying Amount</label>
<input type="text" value="0.00">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Payment type</label>
<select class="select">
<option>Cash</option>
<option>Online</option>
<option>Inprogress</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group mb-0">
<label>Note</label>
<textarea class="form-control"></textarea>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-submit">Submit</button>
<button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
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