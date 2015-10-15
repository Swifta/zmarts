<?php defined('SYSPATH') OR die('No direct access allowed.');

/** BLOG FRONT END **/

$config['/blog'] = "/blog/index/1";
$config['blog/page/(.*)'] = "/blog/index/1/$1";
$config['blog/category/(.*).html'] = "/blog/index/0/$1";
$config['blog/category/(.*).html/page/(.*)'] = "/blog/index/0/$1/$2";
$config['blog/(.*).html'] = "/blog/blog_detail/$1";
$config['leo_sign.html'] = '/welcome/leo_sign';
$config['leo_login.html'] = '/welcome/leo_login';
$config['leo_zenith.html'] = '/welcome/leo_zenith';

