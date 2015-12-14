<?php defined('SYSPATH') OR die('No direct access allowed.');

$config['(.*)/store-product-item-details/(.*)/(.*).html'] = "/leo/details_product/$1/$2/$3"; 
$config['(.*)/store-deal-item-details/(.*)/(.*).html'] = "/leo/details_deals/$1/$2/$3"; 
$config['(.*)/store-auction-item-details/(.*)/(.*).html'] = "/leo/details_auction/$1/$2/$3"; 
$config['leo_sign.html'] = '/welcome/leo_sign';
$config['leo_login.html'] = '/welcome/leo_login';
$config['leo_zenith.html'] = '/welcome/leo_zenith';
$config['leo_logout.html'] = '/welcome/leo_logout';

//Musty-Electronics-XYZT start
$config['Musty-Electronics-XYZT'] ="/leo/stores_home_page/Musty-Electronics-XYZT";
$config['Musty-Electronics-XYZT/products.html'] = "/leo/product_list/Musty-Electronics-XYZT";
$config['Musty-Electronics-XYZT/today-deals.html'] = "/leo/deal_list/Musty-Electronics-XYZT";
$config['Musty-Electronics-XYZT/auction.html'] = "/leo/auction_list/Musty-Electronics-XYZT";
$config['Musty-Electronics-XYZT/products/c/(.*)/(.*).html'] = "/leo/product_list/Musty-Electronics-XYZT";
$config['Musty-Electronics-XYZT/deal/c/(.*)/(.*).html'] = "/leo/deal_list/Musty-Electronics-XYZT";
$config['Musty-Electronics-XYZT/auction/c/(.*)/(.*).html'] = "/leo/auction_list/Musty-Electronics-XYZT/$1/$2";
//Musty-Electronics-XYZT end
