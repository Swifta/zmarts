<?php defined('SYSPATH') OR die('No direct access allowed.');
$config['(.*)/store-product-item-details/(.*)/(.*).html'] = "/sasa/details_product/$1/$2/$3"; 
$config['(.*)/store-deal-item-details/(.*)/(.*).html'] = "/sasa/details_deals/$1/$2/$3"; 
$config['(.*)/store-auction-item-details/(.*)/(.*).html'] = "/sasa/details_auction/$1/$2/$3"; 
$config['leo_sign.html'] = '/welcome/leo_sign';
$config['leo_login.html'] = '/welcome/leo_login';
$config['leo_zenith.html'] = '/welcome/leo_zenith';
$config['leo_logout.html'] = '/welcome/leo_logout';



//ABC-Pvt-Ltd start
$config['ABC-Pvt-Ltd'] ="/sasa/stores_home_page/ABC-Pvt-Ltd";
$config['ABC-Pvt-Ltd/products.html'] = "/sasa/product_list/ABC-Pvt-Ltd";
$config['ABC-Pvt-Ltd/today-deals.html'] = "/sasa/deal_list/ABC-Pvt-Ltd";
$config['ABC-Pvt-Ltd/auction.html'] = "/sasa/auction_list/ABC-Pvt-Ltd";
$config['ABC-Pvt-Ltd/products/c/(.*)/(.*).html'] = "/sasa/product_list/ABC-Pvt-Ltd";
$config['ABC-Pvt-Ltd/deal/c/(.*)/(.*).html'] = "/sasa/deal_list/ABC-Pvt-Ltd";
$config['ABC-Pvt-Ltd/auction/c/(.*)/(.*).html'] = "/sasa/auction_list/ABC-Pvt-Ltd/$1/$2";
//ABC-Pvt-Ltd end
