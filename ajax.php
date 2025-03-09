<?php
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false); }
?>

<?php
 // Auto suggestion
    $html = '';
   if(isset($_POST['product_name']) && strlen($_POST['product_name']))
   {
     $products = find_product_by_title($_POST['product_name']);
     if($products){
        foreach ($products as $product):
           $html .= "<li class=\"list-group-item\">";
           $html .= $product['name'];
           $html .= "</li>";
         endforeach;
      } else {
        $html .= '<li onClick=\"fill(\''.addslashes().'\')\" class=\"list-group-item\">';
        $html .= 'Not found';
        $html .= "</li>";
      }
      echo json_encode($html);
   }
 ?>
 
<?php
 // Find all products by name
 if(isset($_POST['p_name']) && strlen($_POST['p_name'])) {
   $product_title = remove_junk($db->escape($_POST['p_name']));
   if($results = find_all_product_info_by_title($product_title)){
      foreach ($results as $result) {
          $html .= "<tr>";

          // Product Name
          $html .= "<td id=\"s_name\">".$result['name']."</td>";
          $html .= "<input type=\"hidden\" name=\"s_id[]\" value=\"{$result['id']}\">";

          // Price Input
          $html .= "<td><input type=\"text\" class=\"form-control\" name=\"price[]\" value=\"{$result['sale_price']}\"></td>";

          // Quantity Input
          $html .= "<td><input type=\"text\" class=\"form-control\" name=\"quantity[]\" value=\"1\"></td>";

          // Total Input
          $html .= "<td><input type=\"text\" class=\"form-control\" name=\"total[]\" value=\"{$result['sale_price']}\"></td>";

          // Action Button
          $html .= "<td><button type=\"button\" class=\"btn btn-danger remove-item\">Remove</button></td>";

          $html .= "</tr>";
      }
   } else {
      $html = '<tr><td colspan="6">Product name not registered in the database</td></tr>';
   }

   echo json_encode($html);
 }
?>
