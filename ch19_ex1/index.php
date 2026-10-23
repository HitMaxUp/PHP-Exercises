<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data (sửa thành số 1 để lấy danh sách sản phẩm thuộc danh mục "Guitars")
$cat_id = 1;

// Get the products
$products = get_products_by_category($cat_id);

/***************************************
 * Delete a product
 ****************************************/

// Sample data
$product_name = 'Fender Telecaster';

// Delete the product and display an appropriate messge
// Tìm productID dựa vào tên bằng hàm get_product_by_name vừa viết
$product = get_product_by_name($product_name);
if ($product) {
    $product_id = $product['productID'];
    $rows_count = delete_product($product_id);
    if ($rows_count > 0) {
        $delete_message = "$rows_count row was deleted.";
    } else {
        $delete_message = "No rows were deleted.";
    }
} else {
    $delete_message = "There is no product with that name.";
}

/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'tele';
$name = 'Fender Telecaster';
$description = 'NA';
$price = '949.99';

// Insert the data
// Prepare and execute the statement
$product_id = add_product($category_id, $code, $name, $description, $price, 0);

// Display a message to the user
if ($product_id > 0) {
    $insert_message = "1 row was inserted with this ID: $product_id";
} else {
    $insert_message = "No rows were inserted.";
}

include 'home.php';
?>