<?php
// Array of product URLs
$product_urls = array(
    'https://example.com/product-1/',
    'https://example.com/product-2/',
    'https://example.com/product-3/'
);

foreach ($product_urls as $url) {
    // Get product ID from URL
    $product_id = url_to_postid($url);

    // Check if the ID corresponds to a valid product
    if (wc_get_product($product_id)) {
        // Output product ID
        echo '<p>Product URL: ' . $url . ', Product ID: ' . $product_id . '</p>';
    } else {
        // Output error message if the product ID is not valid
        echo '<p>Invalid Product URL: ' . $url . '</p>';
    }
}
?>
