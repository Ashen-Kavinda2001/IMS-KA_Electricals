<link rel="stylesheet" href="libs/css/pop.css">

<ul>
  <li>
    <a href="admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-credit-card"></i>
      <span>Sales</span>
    </a>
    <ul class="nav submenu">
      <li><a href="add_sale.php">Add Sale</a></li>
      <li><a href="sales.php">Manage Sales</a></li>
    </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Products</span>
    </a>
    <ul class="nav submenu">
      <li><a href="product.php">Manage Products</a></li>
      <li><a href="add_product.php">Add Products</a></li>
      <li><a href="categorie.php">Categories</a></li>
    </ul>
  </li>
  <li>
  <a href="#" class="submenu-toggle">
    <i class="glyphicon glyphicon-user"></i>
    <span>Customers</span>
  </a>
  <ul class="nav submenu">
    <li><a href="add_customer.php">Add Customer</a></li>
    <li><a href="customers_list.php">Customers List</a></li>
  </ul>
</li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-share-alt"></i>
      <span>Return</span>
    </a>
    <ul class="nav submenu">
      <li><a href="product.php">Sales Returnlist</a></li>
      <li><a href="add_product.php">Purchase Returnlist</a></li>
    </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle" id="userManagementLink">
      <i class="glyphicon glyphicon-user"></i>
      <span>Manage Users</span>
    </a>
    <ul class="nav submenu">
      <li><a href="#" onclick="restrictAccess('Users')">Manage Users</a></li>
    </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle" id="reportsLink">
      <i class="glyphicon glyphicon-duplicate"></i>
      <span>Reports</span>
    </a>
    <ul class="nav submenu">
      <li><a href="#" onclick="restrictAccess('Sales Report')">Sales by dates</a></li>
      <li><a href="#" onclick="restrictAccess('Monthly Sales')">Monthly sales</a></li>
      <li><a href="#" onclick="restrictAccess('Daily Sales')">Daily sales</a></li>
    </ul>
  </li>
</ul>

<!-- Restricted Access Popup -->
<div id="restrictedPopup" class="popup">
  <div class="popup-content">
    <h2>Restricted Access</h2>
    <p>You are trying to access: <span id="sectionName"></span></p>
    <label for="adminPassword">Please enter the Admin password to access this section:</label>
    <input type="password" id="adminPassword" placeholder="Enter password">
    <button id="submitPassword">OK</button>
    <button id="cancelPopup">Cancel</button>
  </div>
</div>

<script src="libs/js/pop.js"></script>
