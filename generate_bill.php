<?php
require('fpdf.php');
require_once('includes/load.php'); // Load database connection

$page_title = 'Sales Receipt';
include_once('layouts/header.php');

// Get sale details from URL
$product_id = isset($_GET['s_id']) ? $_GET['s_id'] : '';
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '';
$total = isset($_GET['total']) ? $_GET['total'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';

// Fetch product details
$product = find_by_id('products', $product_id);

// Check if product exists to avoid undefined index errors
$product_name = $product ? $product['name'] : 'Unknown Product';

?>

<div class="receipt-container">
    <h2>Sales Receipt</h2>
    <p><strong>Item:</strong> <?php echo htmlspecialchars($product_name); ?></p>
    <p><strong>Quantity:</strong> <?php echo htmlspecialchars($quantity); ?></p>
    <p><strong>Total Price:</strong> <?php echo htmlspecialchars($total); ?> LKR</p>
    <p><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></p>

    <!-- Link to generate the PDF -->
    <a href="generate_pdf.php?s_id=<?php echo $product_id; ?>&quantity=<?php echo $quantity; ?>&total=<?php echo $total; ?>&date=<?php echo $date; ?>" 
       class="btn btn-success" target="_blank">
       Generate PDF Receipt
    </a>
</div>


<style>
  .receipt-container {
    width: 350px;
    margin: 20px auto;
    padding: 20px;
    border: 2px solid #333;
    background-color: #fff;
    text-align: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  .receipt-container h2 {
    font-size: 20px;
    color: #333;
  }

  .receipt-container p {
    font-size: 16px;
    margin: 5px 0;
    color: #555;
  }

  .receipt-container button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    margin-top: 10px;
    cursor: pointer;
  }

  .receipt-container button:hover {
    background-color: #218838;
  }
</style>

<?php include_once('layouts/footer.php'); ?>
