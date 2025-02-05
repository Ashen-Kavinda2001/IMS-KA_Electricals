<?php
require('fpdf.php');

// Check if sale details are passed in the URL
if (isset($_GET['s_id'])) {
    $product_id = $_GET['s_id'];
    $quantity = $_GET['quantity'];
    $total = $_GET['total'];
    $date = $_GET['date'];

    // Fetch product details from the database
    require_once('includes/load.php');
    $product = find_by_id('products', $product_id);

    // Create PDF document
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set Font for Store Name (Top of the PDF)
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(190, 10, 'K A Electricals', 0, 1, 'C'); // Store name at the top
    $pdf->Ln(10); // Space between store name and receipt title

    // Set Font for Receipt Title
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(190, 10, 'Sales Receipt', 0, 1, 'C');
    $pdf->Ln(10);

    // Set Font for Sale Details
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(100, 10, "Item: " . $product['name']);
    $pdf->Ln(10);
    $pdf->Cell(100, 10, "Quantity: " . $quantity);
    $pdf->Ln(10);
    $pdf->Cell(100, 10, "Total: " . $total . " LKR");
    $pdf->Ln(10);
    $pdf->Cell(100, 10, "Date: " . $date);

    // Add "DevLink5" at the bottom of the PDF
    $pdf->Ln(20); // Space before bottom text
  

    // Add "Signature:" label without the line
    $pdf->Ln(10); // Space before signature label
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, 'Customer Name & Sign: ____________________ & ____________________');
    $pdf->Ln(10); // Space before signature label
    $pdf->Cell(40, 10, 'Sign By : ____________________ (Kavindu, K.A Electricals)'); // Signature label on the left


    // Output the PDF (download)
    $pdf->Output();
}
?>
