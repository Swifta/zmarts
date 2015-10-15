<?php defined('SYSPATH') OR die('No direct access allowed.');
$config['(.*)/store-product-item-details/(.*)/(.*).html'] = "/leo/details_product/$1/$2/$3"; 

 



//Simobre start
$config['Simobre'] ="/leo/stores_home_page/Simobre";
$config['Simobre/products.html'] = "/leo/product_list/Simobre";
$config['Simobre/today-deals.html'] = "/leo/deal_list/Simobre";
$config['Simobre/auction.html'] = "/leo/auction_list/Simobre";
$config['Simobre/products/c/(.*)/(.*).html'] = "/leo/product_list/Simobre";
$config['Simobre/deal/c/(.*)/(.*).html'] = "/leo/deal_list/Simobre";
$config['Simobre/auction/c/(.*)/(.*).html'] = "/leo/auction_list/Simobre/$1/$2";
//Simobre end
