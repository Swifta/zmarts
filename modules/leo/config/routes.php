<?php defined('SYSPATH') OR die('No direct access allowed.');
$config['(.*)/store-product-item-details/(.*)/(.*).html'] = "/leo/details_product/$1/$2/$3"; 
$config['(.*)/store-deal-item-details/(.*)/(.*).html'] = "/leo/details_deals/$1/$2/$3"; 
$config['(.*)/store-auction-item-details/(.*)/(.*).html'] = "/leo/details_auction/$1/$2/$3"; 
$config['leo_sign.html'] = '/welcome/leo_sign';
$config['leo_login.html'] = '/welcome/leo_login';
$config['leo_zenith.html'] = '/welcome/leo_zenith';
$config['leo_logout.html'] = '/welcome/leo_logout';

 

//Riverside-branch-C-Z start
$config['Riverside-branch-C-Z'] ="/leo/stores_home_page/Riverside-branch-C-Z";
$config['Riverside-branch-C-Z/products.html'] = "/leo/product_list/Riverside-branch-C-Z";
$config['Riverside-branch-C-Z/today-deals.html'] = "/leo/deal_list/Riverside-branch-C-Z";
$config['Riverside-branch-C-Z/auction.html'] = "/leo/auction_list/Riverside-branch-C-Z";
$config['Riverside-branch-C-Z/products/c/(.*)/(.*).html'] = "/leo/product_list/Riverside-branch-C-Z";
$config['Riverside-branch-C-Z/deal/c/(.*)/(.*).html'] = "/leo/deal_list/Riverside-branch-C-Z";
$config['Riverside-branch-C-Z/auction/c/(.*)/(.*).html'] = "/leo/auction_list/Riverside-branch-C-Z/$1/$2";
//Riverside-branch-C-Z end
