<?php defined('SYSPATH') OR die('No direct access allowed.');
$config['(.*)/store-product-item-details/(.*)/(.*).html'] = "/leo/details_product/$1/$2/$3"; 
$config['(.*)/store-deal-item-details/(.*)/(.*).html'] = "/leo/details_deals/$1/$2/$3"; 
$config['(.*)/store-auction-item-details/(.*)/(.*).html'] = "/leo/details_auction/$1/$2/$3"; 
$config['leo_sign.html'] = '/welcome/leo_sign';
$config['leo_login.html'] = '/welcome/leo_login';
$config['leo_zenith.html'] = '/welcome/leo_zenith';
$config['leo_logout.html'] = '/welcome/leo_logout';

 

//Just-in-times start
$config['Just-in-times'] ="/leo/stores_home_page/Just-in-times";
$config['Just-in-times/products.html'] = "/leo/product_list/Just-in-times";
$config['Just-in-times/today-deals.html'] = "/leo/deal_list/Just-in-times";
$config['Just-in-times/auction.html'] = "/leo/auction_list/Just-in-times";
$config['Just-in-times/products/c/(.*)/(.*).html'] = "/leo/product_list/Just-in-times";
$config['Just-in-times/deal/c/(.*)/(.*).html'] = "/leo/deal_list/Just-in-times";
$config['Just-in-times/auction/c/(.*)/(.*).html'] = "/leo/auction_list/Just-in-times/$1/$2";
//Just-in-times end
