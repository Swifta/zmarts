-- phpMyAdmin SQL Dump
-- version 4.5.0-beta2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 09:58 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emarketplace_asoebi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_moderator_privileges_map`
--

CREATE TABLE `admin_moderator_privileges_map` (
  `privileges_id` int(11) NOT NULL,
  `moderator_id` int(11) NOT NULL,
  `privileges_dashboard` int(1) NOT NULL DEFAULT '1',
  `privileges_deals` int(1) NOT NULL,
  `privileges_deals_add` int(1) NOT NULL,
  `privileges_deals_edit` int(1) NOT NULL,
  `privileges_deals_block` int(1) NOT NULL,
  `privileges_products` int(1) NOT NULL,
  `privileges_products_add` int(1) NOT NULL,
  `privileges_products_edit` int(1) NOT NULL,
  `privileges_products_block` int(1) NOT NULL,
  `privileges_auctions` int(1) NOT NULL,
  `privileges_auctions_add` int(1) NOT NULL,
  `privileges_auctions_edit` int(1) NOT NULL,
  `privileges_auctions_block` int(1) NOT NULL,
  `privileges_customer` int(1) NOT NULL,
  `privileges_customer_add` int(1) NOT NULL,
  `privileges_customer_edit` int(1) NOT NULL,
  `privileges_customer_block` int(1) NOT NULL,
  `privileges_merchant` int(1) NOT NULL,
  `privileges_merchant_add` int(1) NOT NULL,
  `privileges_merchant_edit` int(1) NOT NULL,
  `privileges_merchant_block` int(1) NOT NULL,
  `privileges_transactions` int(1) NOT NULL,
  `privileges_blogs` int(1) NOT NULL,
  `privileges_blogs_add` int(1) NOT NULL,
  `privileges_blogs_edit` int(1) NOT NULL,
  `privileges_blogs_block` int(1) NOT NULL,
  `privileges_cms` int(1) NOT NULL,
  `privileges_cms_add` int(1) NOT NULL,
  `privileges_cms_edit` int(1) NOT NULL,
  `privileges_cms_block` int(1) NOT NULL,
  `privileges_attributs` int(1) NOT NULL,
  `privileges_attributs_add` int(1) NOT NULL,
  `privileges_attributs_edit` int(1) NOT NULL,
  `privileges_attributs_block` int(1) NOT NULL,
  `privileges_categories` int(1) NOT NULL,
  `privileges_categories_add` int(1) NOT NULL,
  `privileges_categories_edit` int(1) NOT NULL,
  `privileges_categories_block` int(1) NOT NULL,
  `privileges_country` int(1) NOT NULL,
  `privileges_country_add` int(1) NOT NULL,
  `privileges_country_edit` int(1) NOT NULL,
  `privileges_country_block` int(1) NOT NULL,
  `privileges_city` int(1) NOT NULL,
  `privileges_city_add` int(1) NOT NULL,
  `privileges_city_edit` int(1) NOT NULL,
  `privileges_city_block` int(1) NOT NULL,
  `privileges_fundrequest` int(1) NOT NULL,
  `privileges_fundrequest_edit` int(1) NOT NULL,
  `privileges_daily_newsletter` int(1) NOT NULL,
  `privileges_storecredit` int(1) NOT NULL,
  `privileges_customercare` int(1) NOT NULL,
  `privileges_customercare_add` int(1) NOT NULL,
  `privileges_customercare_edit` int(1) NOT NULL,
  `privileges_customercare_block` int(1) NOT NULL,
  `privileges_banner` int(1) NOT NULL,
  `privileges_banner_add` int(1) NOT NULL,
  `privileges_banner_edit` int(1) NOT NULL,
  `privileges_banner_block` int(1) NOT NULL,
  `privileges_specification` int(1) NOT NULL,
  `privileges_specification_add` int(1) NOT NULL,
  `privileges_specification_edit` int(1) NOT NULL,
  `privileges_specification_block` int(1) NOT NULL,
  `privileges_sector` int(1) NOT NULL,
  `privileges_sector_add` int(1) NOT NULL,
  `privileges_sector_edit` int(1) NOT NULL,
  `privileges_sector_block` int(1) NOT NULL,
  `privileges_ads` int(1) NOT NULL,
  `privileges_ads_add` int(1) NOT NULL,
  `privileges_ads_edit` int(1) NOT NULL,
  `privileges_ads_block` int(1) NOT NULL,
  `privileges_faq` int(1) NOT NULL,
  `privileges_faq_add` int(1) NOT NULL,
  `privileges_faq_edit` int(1) NOT NULL,
  `privileges_faq_block` int(1) NOT NULL,
  `privileges_newsletter` int(1) NOT NULL,
  `privileges_newsletter_add` int(1) NOT NULL,
  `privileges_newsletter_edit` int(1) NOT NULL,
  `privileges_newsletter_block` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_moderator_privileges_map`
--

INSERT INTO `admin_moderator_privileges_map` (`privileges_id`, `moderator_id`, `privileges_dashboard`, `privileges_deals`, `privileges_deals_add`, `privileges_deals_edit`, `privileges_deals_block`, `privileges_products`, `privileges_products_add`, `privileges_products_edit`, `privileges_products_block`, `privileges_auctions`, `privileges_auctions_add`, `privileges_auctions_edit`, `privileges_auctions_block`, `privileges_customer`, `privileges_customer_add`, `privileges_customer_edit`, `privileges_customer_block`, `privileges_merchant`, `privileges_merchant_add`, `privileges_merchant_edit`, `privileges_merchant_block`, `privileges_transactions`, `privileges_blogs`, `privileges_blogs_add`, `privileges_blogs_edit`, `privileges_blogs_block`, `privileges_cms`, `privileges_cms_add`, `privileges_cms_edit`, `privileges_cms_block`, `privileges_attributs`, `privileges_attributs_add`, `privileges_attributs_edit`, `privileges_attributs_block`, `privileges_categories`, `privileges_categories_add`, `privileges_categories_edit`, `privileges_categories_block`, `privileges_country`, `privileges_country_add`, `privileges_country_edit`, `privileges_country_block`, `privileges_city`, `privileges_city_add`, `privileges_city_edit`, `privileges_city_block`, `privileges_fundrequest`, `privileges_fundrequest_edit`, `privileges_daily_newsletter`, `privileges_storecredit`, `privileges_customercare`, `privileges_customercare_add`, `privileges_customercare_edit`, `privileges_customercare_block`, `privileges_banner`, `privileges_banner_add`, `privileges_banner_edit`, `privileges_banner_block`, `privileges_specification`, `privileges_specification_add`, `privileges_specification_edit`, `privileges_specification_block`, `privileges_sector`, `privileges_sector_add`, `privileges_sector_edit`, `privileges_sector_block`, `privileges_ads`, `privileges_ads_add`, `privileges_ads_edit`, `privileges_ads_block`, `privileges_faq`, `privileges_faq_add`, `privileges_faq_edit`, `privileges_faq_block`, `privileges_newsletter`, `privileges_newsletter_add`, `privileges_newsletter_edit`, `privileges_newsletter_block`) VALUES
(2, 24, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 80, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(5) NOT NULL,
  `ads_title` varchar(100) NOT NULL,
  `ads_code` text NOT NULL,
  `ads_position` varchar(10) NOT NULL,
  `page_position` varchar(10) NOT NULL,
  `redirect_url` text NOT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_title`, `ads_code`, `ads_position`, `page_position`, `redirect_url`, `status`) VALUES
(1, 'Home', '', 'hs1', '1', 'https://www.google.co.in/', 1),
(2, 'Home', '', 'hs2', '1', 'https://www.google.co.in/', 1),
(3, 'deal', '', 'hr', '2', 'https://www.google.co.in/', 1),
(4, 'Auction', '', 'hr', '4', 'https://www.google.co.in/', 1),
(5, 'Home', '', 'ls', '1', 'https://www.google.co.in/', 1),
(6, 'product', '', 'ls', '3', 'https://www.google.co.in/', 1),
(7, 'deal', '', 'ls', '2', 'https://www.google.co.in/', 1),
(8, 'Auction', '', 'ls', '4', 'https://www.google.co.in/', 1),
(10, 'Auction', '', 'bf', '4', 'https://www.google.co.in/', 1),
(11, 'product', '', 'bf', '3', 'https://www.google.co.in/', 0),
(12, 'deal', '', 'bf', '2', 'https://www.google.co.in/', 0),
(13, 'test1', '', 'hr2', '1', 'http://www.ggg.com', 1),
(14, 'test2', '', 'hr1', '1', 'http://www.ggg.com', 1),
(17, 'Home Position', '', 'hs3', '1', 'https://www.google.co.in/', 1),
(15, 'Home Position', '', 'hs4', '1', 'https://www.google.co.in/', 1),
(16, 'Home Position', '', 'hs5', '1', 'https://www.google.co.in/', 1),
(18, 'Home Position', '', 'hc1', '1', 'https://www.google.co.in/', 1),
(19, 'Home Position', '', 'hc2', '1', 'https://www.google.co.in/', 1),
(20, 'Home Position', '', 'hb1', '1', 'https://www.google.co.in/', 1),
(21, 'Home Position', '', 'hb2', '1', 'https://www.google.co.in/', 1),
(22, 'Product Page', '', 'rs1', '3', 'https://www.google.co.in/', 1),
(23, 'Product Page', '', 'rs2', '3', 'https://www.google.co.in/', 1),
(24, 'Deal page', '', 'rs1', '2', 'https://www.google.co.in/', 1),
(25, 'Deal page', '', 'rs2', '2', 'https://www.google.co.in/', 1),
(26, 'Auction Page', '', 'rs1', '4', 'https://www.google.co.in/', 1),
(27, 'Auction Page', '', 'rs2', '4', 'https://www.google.co.in/', 1),
(28, 'Header position', '', 'hs6', '1', 'https://www.google.co.in/', 1),
(29, 'Home Position', '', 'hs7', '1', 'https://www.google.co.in/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attribute_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `attribute_group` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_group`
--

CREATE TABLE `attribute_group` (
  `attribute_group_id` int(11) NOT NULL,
  `groupname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sort_order` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute_group`
--

INSERT INTO `attribute_group` (`attribute_group_id`, `groupname`, `sort_order`) VALUES
(2, 'hi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `deal_id` int(11) NOT NULL,
  `deal_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `url_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `deal_key` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deal_description` text COLLATE utf8_unicode_ci NOT NULL,
  `fineprints` text COLLATE utf8_unicode_ci NOT NULL,
  `highlights` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sec_category_id` int(11) NOT NULL,
  `third_category_id` int(11) NOT NULL,
  `deal_type` int(1) NOT NULL COMMENT '1-deals, 2-products, 3 - Auction',
  `merchant_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_value` double NOT NULL,
  `deal_value` double NOT NULL,
  `deal_price` double NOT NULL,
  `deal_savings` double NOT NULL,
  `user_limit_quantity` int(5) NOT NULL,
  `bid_increment` double NOT NULL,
  `bid_count` int(11) NOT NULL,
  `shipping_fee` double NOT NULL,
  `shipping_info` text COLLATE utf8_unicode_ci NOT NULL,
  `startdate` int(10) NOT NULL,
  `enddate` int(10) NOT NULL,
  `created_date` int(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deal_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active,0-deactive',
  `winner` int(11) NOT NULL,
  `auction_status` int(11) NOT NULL,
  `commission_status` int(1) NOT NULL DEFAULT '1',
  `view_count` int(11) NOT NULL,
  `deal_feature` int(1) NOT NULL,
  `for_store_cred` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event` varchar(225) NOT NULL,
  `timing` int(10) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `more_info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `admin_id`, `user_id`, `event`, `timing`, `ip`, `more_info`) VALUES
(1, 14, 88, 'Un-Blocked', 1456612620, '', ''),
(2, 14, 88, 'Blocked', 1456612761, '', ''),
(3, 14, 73, 'Approved', 1456649649, '', ''),
(4, 14, 88, 'Un-Blocked', 1456649931, '', ''),
(5, 14, 88, 'Blocked', 1456650332, '', ''),
(6, 14, 88, 'Un-Blocked', 1456650407, '', ''),
(7, 14, 88, 'Blocked', 1456650416, '', ''),
(8, 14, 76, 'Un-Blocked', 1456650704, '', ''),
(9, 14, 76, 'Blocked', 1456650711, '', ''),
(10, 14, 76, 'Un-Blocked', 1456758636, '', ''),
(11, 14, 74, 'Approved', 1456911027, '', ''),
(12, 14, 74, 'Approved', 1456911063, '', ''),
(13, 14, 74, 'Approved', 1456911065, '', ''),
(14, 14, 74, 'Approved', 1456911071, '', ''),
(15, 14, 74, 'Approved', 1456911072, '', ''),
(16, 14, 74, 'Approved', 1456911230, '', ''),
(17, 14, 88, 'Un-Blocked', 1457348146, '::1', ''),
(18, 14, 15, 'Product Modified', 1457429049, '::1', 'Price Change: 6500->6500 , Discount Change: 5000->6500 , Club Price: 4800->4800'),
(19, 14, 15, 'Product Added', 1457429451, '::1', 'Added product ''Gats choose''');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `banner_id` int(11) NOT NULL,
  `image_title` varchar(256) NOT NULL,
  `redirect_url` text NOT NULL,
  `position` int(3) NOT NULL,
  `product` int(5) NOT NULL,
  `deal` int(5) NOT NULL,
  `auction` int(5) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1-Active,0-Deactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`banner_id`, `image_title`, `redirect_url`, `position`, `product`, `deal`, `auction`, `status`) VALUES
(25, 'next Generation Storage', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 1),
(26, 'Dress Sale for Men And Women', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 1),
(4, 'computers', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 1),
(5, 'Dell XPS 12 Ultrabook', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 1),
(20, 'Get New Phone With The Best Quality', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 1),
(21, 'HP Printer and Scanner ', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 1),
(22, 'For Employee Benefits', 'http://demo.uniecommerce.com/', 0, 1, 0, 0, 1),
(23, 'For Job Seekers', 'http://demo.uniecommerce.com/', 0, 1, 0, 0, 1),
(24, 'books', 'http://demo.uniecommerce.com/', 0, 1, 1, 1, 0),
(28, 'Special Zenith Offers', 'http://localhost/zmart', 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `bid_id` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `auction_title` varchar(264) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bid_amount` double NOT NULL,
  `shipping_amount` int(11) NOT NULL,
  `bidding_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `winning_status` int(1) NOT NULL DEFAULT '0' COMMENT '0-Not win,1-Win,2-Action bought',
  `mail_alert` int(1) NOT NULL COMMENT '1-winng,2-1st-alert,3-2nd-alert'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `auction_id`, `auction_title`, `user_id`, `bid_amount`, `shipping_amount`, `bidding_time`, `end_time`, `winning_status`, `mail_alert`) VALUES
(1, 3, '2014 spring and autumn Fashion single shoes Women Shoes Beaded fashion leisure casual shoes', 31, 570, 10, 1442844354, 1446143400, 0, 0),
(2, 3, '2014 spring and autumn Fashion single shoes Women Shoes Beaded fashion leisure casual shoes', 31, 587, 10, 1442844387, 1446143400, 0, 0),
(3, 2, 'Moto G(3rd gen)', 39, 8000, 25, 1452675488, 1459100820, 0, 0),
(4, 2, 'Moto G(3rd gen)', 75, 8100, 25, 1452675669, 1459100820, 0, 0),
(5, 2, 'Moto G(3rd gen)', 75, 8400, 25, 1452675921, 1459100820, 2, 1),
(6, 4, 'Lenovo Essential G500s Laptop', 75, 4000, 110, 1452764264, 1459100820, 1, 1),
(7, 3, '2014 spring and autumn Fashion single shoes Women Shoes Beaded fashion leisure casual shoes', 39, 1000, 10, 1452846274, 1459100820, 1, 1),
(8, 1, 'LG Wonder Door Refrigerator', 75, 7500, 10, 1452846710, 1459100820, 2, 1),
(9, 6, 'Auction Tester', 39, 6200, 200, 1455876510, 1459378800, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(256) NOT NULL,
  `url_title` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_description` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `meta_title` varchar(256) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `meta_keywords` varchar(256) NOT NULL,
  `tags` varchar(256) NOT NULL,
  `allow_comments` int(1) NOT NULL DEFAULT '1' COMMENT '1=>yes, 0=>no',
  `comments_count` int(11) NOT NULL,
  `blog_views` int(11) NOT NULL,
  `blog_date` int(11) NOT NULL,
  `publish_status` int(1) NOT NULL DEFAULT '1' COMMENT '1=> published, 2=>draft',
  `blog_status` int(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>deactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `url_title`, `user_id`, `blog_description`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `tags`, `allow_comments`, `comments_count`, `blog_views`, `blog_date`, `publish_status`, `blog_status`) VALUES
(1, 'NCR based Unicommerce launches Uniware, a SAAS based order management system for ecommerce companies', 'NCR-based-Unicommerce-launches-Uniware-a-SAAS-based-order-management-system-for-ecommerce-companies', 0, '  Real-time Management of order fulfillment processes has always been one of the key challenges for etailers in India. Handling procurement, goods receipt, quality assurance, pick and pack, invoicing, shipping, comprehensive return/replacements handling and inventory play critical role in making a successful ecommerce venture.', 1, 'NCR based Unicommerce launches Uniware, a SAAS based order management system for ecommerce companies', 'NCR based Unicommerce launches Uniware, a SAAS based order management system for ecommerce companies', 'NCR based Unicommerce launches Uniware, a SAAS based order management system for ecommerce companies', '3', 1, 0, 0, 1351515029, 1, 1),
(2, 'Unicommerce services provide to etailers in managing test', 'Unicommerce-services-provide-to-etailers-in-managing-test', 0, '     Inventory serialization (Bar-coding) – In Uniware we provide support for assigning unique serial number to every unit even of the same product. This enables us to capture various details like vendor, purchase date, product expiry, sent-to customer and unit specific information like IMEI (mobiles) which we believe is essential to control several common issues like wrong product shipments, ensuring inventory FIFO, pilferage, inventory ageing and timely returns to vendor. This feature has helped us deliver flawless inventory management and eliminate some of the problems completely. We have shipped more than a million shipments across all clients and yet to see our first incorrect shipment.', 4, 'advantages Unicommerce ', 'advantages Unicommercesdfsa', 'advantages Unicommerce ', '6', 1, 5, 0, 1351515133, 1, 1),
(3, 'Should You Show Cart Total In Checkout?', 'Should-You-Show-Cart-Total-In-Checkout', 0, ' I recently listened in on a web clinic from Marketing Experiments titled Optimizing Shopping Carts for the Holidays. One of the case studies presented was particularly intriguing. If you read the title of this post you guessed the subject of the test — showing cart totals in checkout. Cart totals in checkout – best practice? Back in 2007, Elastic Path conducted an audit of the Internet Retailer Top 100 for our Ecommerce Checkout Report. At that time, only 14% of checkouts displayed cart review boxes in checkout. Conversion rates were 60% higher for the sites that didn’t show cart totals.', 4, 'Should You Show ', 'Should You Show ', 'Should You Show ', '3', 1, 2, 0, 1357359276, 1, 1),
(4, 'Email  And Social Habits Of Holiday Shoppers [Research]', 'Email-And-Social-Habits-Of-Holiday-Shoppers-Research', 0, '                  &lt;ul&gt;&lt;li style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(51, 102, 255); font-size: 10pt; &quot;&gt;Email marketing software provider Yesmail Interactive conducted an interesting study, combining dafdsfsdfasdf&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(51, 102, 255); font-size: 10pt; &quot;&gt;a consumer survey on general and holiday shopping habits with analysis of the digital marketing campaigns (email and social) of 20 of &lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(51, 102, 255); font-size: 10pt; &quot;&gt;the top ecommerce brands in the US. Over 500 consumers were surveyed for Consumer Online Behavior Report: Developing Informed Digital Marketing Strategies for &lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(51, 102, 255); font-size: 10pt; &quot;&gt;Holiday Success about general shopping habits and holiday-specific ones. Ecommerce brands studied include traditional retail like Amazon, Apple, Best Buy, &lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(51, 102, 255); font-size: 10pt; &quot;&gt;Crate and Barrel, Dell, JC Penney, Macy’s, Nordstrom, &lt;/span&gt;&lt;/li&gt;&lt;/ul&gt; ', 1, 'advantages Unicommerce ', 'advantages Unicommerce ', 'advantages Unicommerce', '6', 0, 2, 0, 1357359381, 1, 1),
(13, 'This is blog post for VIVAshop', 'This-is-blog-post-for-VIVAshop', 0, ' &lt;font face=&quot;Arial, Verdana&quot; size=&quot;2&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing lit. Aliquam iaculis egestas laoreet. ...&lt;/font&gt;', 4, '', '', '', '', 1, 0, 0, 1438609377, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `comments_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `blogg_id` int(11) NOT NULL,
  `approve_status` int(1) NOT NULL DEFAULT '0' COMMENT '1=>approved,0=>disapproved',
  `comments_date` int(11) NOT NULL,
  `notify_comments` int(1) NOT NULL DEFAULT '0' COMMENT '1=>yes,0=>no',
  `comments_status` int(1) NOT NULL DEFAULT '1' COMMENT '1=>active,0=>deactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_settings`
--

CREATE TABLE `blog_settings` (
  `blog_settings_id` int(11) NOT NULL,
  `allow_comment_posting` int(1) NOT NULL DEFAULT '1' COMMENT '1=>yes, 2=>no',
  `require_adminapproval_comments` int(1) NOT NULL DEFAULT '1' COMMENT '1=>yes, 2=>no',
  `posts_per_page` int(5) NOT NULL DEFAULT '4'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_settings`
--

INSERT INTO `blog_settings` (`blog_settings_id`, `allow_comment_posting`, `require_adminapproval_comments`, `posts_per_page`) VALUES
(1, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(3) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_mapping` text COLLATE utf8_unicode_ci NOT NULL,
  `category_status` int(1) NOT NULL DEFAULT '1',
  `deal` int(1) NOT NULL,
  `product` int(1) NOT NULL,
  `auction` int(1) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 - main , 2- 2layer , 3 - 3layer , 4 - 4layer',
  `order_by` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `main_category_id`, `sub_category_id`, `category_name`, `category_url`, `category_mapping`, `category_status`, `deal`, `product`, `auction`, `type`, `order_by`) VALUES
(1, 0, 0, 'Electronics', 'Electronics', '', 1, 1, 1, 1, 1, 0),
(2, 0, 0, 'Men', 'Men', '', 1, 1, 1, 1, 1, 3),
(3, 0, 0, 'Women', 'Women', '', 1, 1, 1, 1, 1, 0),
(4, 0, 0, 'Baby & Kids', 'Baby-Kids', '', 1, 1, 1, 1, 1, 4),
(5, 0, 0, 'Books & Media', 'Books-Media', '', 1, 1, 1, 0, 1, 2),
(6, 0, 0, 'Home & Kitchen', 'Home-Kitchen', '', 1, 1, 1, 1, 1, 6),
(7, 0, 0, 'Sports & Fitness', 'Sports-Fitness', '', 1, 1, 1, 1, 1, 0),
(8, 0, 0, 'Personal Care & Health', 'Personal-Care-Health', '', 1, 1, 1, 0, 1, 0),
(9, 0, 0, 'Gifts & Flowers', 'Gifts-Flowers', '', 1, 1, 1, 0, 1, 7),
(10, 4, 4, 'Boys Clothing', 'Boys_Clothing', '', 1, 0, 0, 0, 2, 0),
(11, 4, 4, 'Girls Clothing', 'Girls_Clothing', '', 1, 0, 0, 0, 2, 0),
(12, 4, 4, 'Infants Clothing', 'Infants_Clothing', '', 1, 0, 0, 0, 2, 0),
(13, 4, 4, 'Boys Footwear', 'Boys_Footwear', '', 1, 0, 0, 0, 2, 0),
(14, 4, 4, 'Girls Footwear', 'Girls_Footwear', '', 1, 0, 0, 0, 2, 0),
(15, 4, 4, 'Toys & Games', 'Toys_Games', '', 1, 0, 0, 0, 2, 0),
(16, 4, 10, 'T-Shirts', 'T-Shirts', '', 1, 0, 0, 0, 3, 0),
(17, 4, 10, 'Shirts', 'Shirts', '', 1, 0, 0, 0, 3, 0),
(18, 4, 10, 'Jeans', 'Jeans', '', 1, 0, 0, 0, 3, 0),
(19, 4, 13, 'Flip Flops', 'Flip_Flops', '', 1, 0, 0, 0, 3, 0),
(20, 4, 13, 'Sandals ', 'Sandals', '', 1, 0, 0, 0, 3, 0),
(21, 4, 13, 'Casual Shoes', 'Casual_Shoes', '', 1, 0, 0, 0, 3, 0),
(22, 4, 11, 'Tees & Tops', 'Tees_Tops', '', 1, 0, 0, 0, 3, 0),
(23, 4, 11, 'Dresses & Skirts', 'Dresses_Skirts', '', 1, 0, 0, 0, 3, 0),
(24, 4, 11, 'Shorts & Capries', 'Shorts_Capries', '', 1, 0, 0, 0, 3, 0),
(25, 4, 12, 'Baby Boys Clothing', 'Baby_Boys_Clothing', '', 1, 0, 0, 0, 3, 0),
(26, 4, 12, 'Baby Girls Clothing', 'Baby_Girls_Clothing', '', 1, 0, 0, 0, 3, 0),
(27, 4, 14, 'Girls Sandals', 'Girls_Sandals', '', 1, 0, 0, 0, 3, 0),
(28, 4, 14, 'Girls Casual Shoes', 'Girls_Casual_Shoes', '', 1, 0, 0, 0, 3, 0),
(29, 4, 14, 'Clogs', 'Clogs', '', 1, 0, 0, 0, 3, 0),
(30, 4, 15, 'Baby Toys', 'Baby_Toys', '', 1, 0, 0, 0, 3, 0),
(31, 4, 15, 'Board Games', 'Board_Games', '', 1, 0, 0, 0, 3, 0),
(32, 4, 15, 'Card Games', 'Card_Games', '', 1, 0, 0, 0, 3, 0),
(33, 4, 15, 'Cars Trains & Bikes', 'Cars_Trains_Bikes', '', 1, 0, 0, 0, 3, 0),
(34, 5, 5, 'Books', 'Books', '', 1, 0, 0, 0, 2, 0),
(35, 5, 5, 'eBooks', 'eBooks', '', 1, 0, 0, 0, 2, 0),
(36, 5, 5, 'Music', 'Music', '', 1, 0, 0, 0, 2, 0),
(37, 5, 5, 'Movies & TV Shows', 'Movies_TV_Shows', '', 1, 0, 0, 0, 2, 0),
(38, 5, 37, 'Pre-Orders', 'Pre-Orders', '', 1, 0, 0, 0, 3, 0),
(39, 5, 37, 'New Releases', 'New_Releases', '', 1, 0, 0, 0, 3, 0),
(40, 5, 37, 'Blu-Rays and 3D', 'Blu-Rays_and_3D', '', 1, 0, 0, 0, 3, 0),
(41, 5, 37, 'DVDs', 'DVDs', '', 1, 0, 0, 0, 3, 0),
(42, 5, 37, 'Health & Wellness', 'Health_Wellness', '', 1, 0, 0, 0, 3, 0),
(43, 5, 35, 'Literature & Fiction', 'Literature_Fiction', '', 1, 0, 0, 0, 3, 0),
(44, 5, 35, 'Science & Technology', 'Science_Technology', '', 1, 0, 0, 0, 3, 0),
(45, 5, 35, 'Biographies & Autobiography', 'Biographies_Autobiography', '', 1, 0, 0, 0, 3, 0),
(46, 5, 34, 'Business Investing & Mgmt', 'Business_Investing_Mgmt', '', 1, 0, 0, 0, 3, 0),
(47, 5, 34, 'Academic & Professional', 'Academic_Professional', '', 1, 0, 0, 0, 3, 0),
(48, 5, 34, 'Entrance Exam', 'Entrance_Exam', '', 1, 0, 0, 0, 3, 0),
(49, 5, 34, 'Literature & Books Fiction', 'Literature_Books_Fiction', '', 1, 0, 0, 0, 3, 0),
(50, 5, 34, 'New Releases Books', 'New_Releases_Books', '', 1, 0, 0, 0, 3, 0),
(51, 5, 36, 'Pre-Orders Music', 'Pre-Orders_Music', '', 1, 0, 0, 0, 3, 0),
(52, 5, 36, 'New Releases Music', 'New_Releases_Music', '', 1, 0, 0, 0, 3, 0),
(53, 5, 36, 'Devotional & Spiritual', 'Devotional_Spiritual', '', 1, 0, 0, 0, 3, 0),
(54, 3, 3, 'Clothing', 'Clothing', '', 1, 0, 0, 0, 2, 0),
(55, 3, 3, 'Footwear', 'Footwear', '', 1, 0, 0, 0, 2, 0),
(56, 3, 3, 'Watches', 'Watches', '', 1, 0, 0, 0, 2, 0),
(57, 3, 3, 'Bags  Belts and wallets', 'Bags_Belts_and_wallets', '', 1, 0, 0, 0, 2, 0),
(58, 3, 3, 'Beauty and Wellness', 'Beauty_and_Wellness', '', 1, 0, 0, 0, 2, 0),
(59, 3, 57, 'Handbags', 'Handbags', '', 1, 0, 0, 0, 3, 0),
(60, 3, 57, 'Totes', 'Totes', '', 1, 0, 0, 0, 3, 0),
(61, 3, 57, 'Backpacks', 'Backpacks', '', 1, 0, 0, 0, 3, 0),
(62, 3, 57, 'Sling Bags', 'Sling_Bags', '', 1, 0, 0, 0, 3, 0),
(63, 3, 58, 'Skin Care', 'Skin_Care', '', 1, 0, 0, 0, 3, 0),
(64, 3, 58, 'Make Up', 'Make_Up', '', 1, 0, 0, 0, 3, 0),
(65, 3, 58, 'Hair Care', 'Hair_Care', '', 1, 0, 0, 0, 3, 0),
(66, 3, 58, 'Bath & Spa', 'Bath_Spa', '', 1, 0, 0, 0, 3, 0),
(67, 3, 58, 'Oral Care', 'Oral_Care', '', 1, 0, 0, 0, 3, 0),
(68, 1, 1, 'Mobiles', 'Mobiles', '', 1, 0, 0, 0, 2, 0),
(69, 1, 1, 'Tablets', 'Tablets', '', 1, 0, 0, 0, 2, 0),
(70, 1, 1, 'Computer Accessories', 'Computer_Accessories', '', 1, 0, 0, 0, 2, 0),
(71, 1, 1, 'Mobiles Accessories', 'Mobiles_Accessories', '', 1, 0, 0, 0, 2, 0),
(72, 1, 1, 'Laptops', 'Laptops', '', 1, 0, 0, 0, 2, 0),
(73, 1, 1, 'Cameras', 'Cameras', '', 1, 0, 0, 0, 2, 0),
(74, 1, 73, 'Nikon', 'Nikon', '', 1, 0, 0, 0, 3, 0),
(75, 1, 73, 'Canon', 'Canon', '', 1, 0, 0, 0, 3, 0),
(76, 1, 73, 'Sony', 'Sony', '', 1, 0, 0, 0, 3, 0),
(77, 1, 73, 'Samsung', 'Samsung', '', 1, 0, 0, 0, 3, 0),
(78, 1, 68, 'Samsung Mobiles', 'Samsung_Mobiles', '', 1, 0, 0, 0, 3, 0),
(79, 1, 68, 'Nokia', 'Nokia', '', 1, 0, 0, 0, 3, 0),
(80, 1, 68, 'XOLO', 'XOLO', '', 1, 0, 0, 0, 3, 0),
(81, 1, 68, 'Sony Mobiles', 'Sony_Mobiles', '', 1, 0, 0, 0, 3, 0),
(82, 1, 69, 'iPad', 'iPad', '', 1, 0, 0, 0, 3, 0),
(83, 1, 69, 'Tablets with Call Facility', 'Tablets_with_Call_Facility', '', 1, 0, 0, 0, 3, 0),
(84, 1, 69, 'Tablets without Call Facility', 'Tablets_without_Call_Facility', '', 1, 0, 0, 0, 3, 0),
(85, 1, 71, 'Cases & Covers', 'Cases_Covers', '', 1, 0, 0, 0, 3, 0),
(86, 1, 71, 'Headphones', 'Headphones', '', 1, 0, 0, 0, 3, 0),
(87, 1, 71, 'Bluetooth Headsets', 'Bluetooth_Headsets', '', 1, 0, 0, 0, 3, 0),
(88, 1, 70, 'Laptop Accessories', 'Laptop_Accessories', '', 1, 0, 0, 0, 3, 0),
(89, 1, 70, 'Storage', 'Storage', '', 1, 0, 0, 0, 3, 0),
(90, 1, 70, 'Networking Components', 'Networking_Components', '', 1, 0, 0, 0, 3, 0),
(91, 1, 70, 'Computer Components', 'Computer_Components', '', 1, 0, 0, 0, 3, 0),
(92, 1, 70, 'Computer Peripherals', 'Computer_Peripherals', '', 1, 0, 0, 0, 3, 0),
(93, 1, 72, 'Apple', 'Apple', '', 1, 0, 0, 0, 3, 0),
(94, 1, 72, 'Dell', 'Dell', '', 1, 0, 0, 0, 3, 0),
(95, 1, 72, 'HP', 'HP', '', 1, 0, 0, 0, 3, 0),
(96, 1, 72, 'Lenovo', 'Lenovo', '', 1, 0, 0, 0, 3, 0),
(97, 6, 6, 'Home Furnishing', 'Home_Furnishing', '', 1, 0, 0, 0, 2, 0),
(98, 6, 6, 'Kitchen', 'Kitchen', '', 1, 0, 0, 0, 2, 0),
(99, 6, 6, 'Bath', 'Bath', '', 1, 0, 0, 0, 2, 0),
(101, 6, 6, 'Kitchen Appliances', 'Kitchen_Appliances', '', 1, 0, 0, 0, 2, 0),
(102, 6, 99, 'Bath Towels', 'Bath_Towels', '', 1, 0, 0, 0, 3, 0),
(103, 6, 99, 'Mats', 'Mats', '', 1, 0, 0, 0, 3, 0),
(109, 6, 101, 'Electric Cookers', 'Electric_Cookers', '', 1, 0, 0, 0, 3, 0),
(104, 6, 97, 'Vacuum Cleaners', 'Vacuum_Cleaners', '', 1, 0, 0, 0, 3, 0),
(105, 6, 97, 'Emergency Lights', 'Emergency_Lights', '', 1, 0, 0, 0, 3, 0),
(106, 6, 97, 'Water Purifiers', 'Water_Purifiers', '', 1, 0, 0, 0, 3, 0),
(107, 6, 101, 'Sandwich and Rotimakers', 'Sandwich_and_Rotimakers', '', 1, 0, 0, 0, 3, 0),
(108, 6, 101, 'Mixer Juicer Grinders', 'Mixer_Juicer_Grinders', '', 1, 0, 0, 0, 3, 0),
(110, 6, 98, 'Table Covers', 'Table_Covers', '', 1, 0, 0, 0, 3, 0),
(111, 6, 98, 'Table Placemats', 'Table_Placemats', '', 1, 0, 0, 0, 3, 0),
(112, 2, 2, 'Men Clothing', 'Men_Clothing', '', 1, 0, 0, 0, 2, 0),
(113, 2, 2, 'Men Footwear', 'Men_Footwear', '', 1, 0, 0, 0, 2, 0),
(114, 2, 2, 'Men Watches', 'Men_Watches', '', 1, 0, 0, 0, 2, 0),
(115, 2, 2, 'Mens Accessories', 'Mens_Accessories', '', 1, 0, 0, 0, 2, 0),
(116, 2, 2, 'Men Bags Belts and wallets', 'Men_Bags_Belts_and_wallets', '', 1, 0, 0, 0, 2, 0),
(117, 2, 116, 'Men Backpacks', 'Men_Backpacks', '', 1, 0, 0, 0, 3, 0),
(118, 2, 116, 'Laptop Bags', 'Laptop_Bags', '', 1, 0, 0, 0, 3, 0),
(119, 2, 116, 'Messenger Bags', 'Messenger_Bags', '', 1, 0, 0, 0, 3, 0),
(120, 2, 116, 'Gym Bags', 'Gym_Bags', '', 1, 0, 0, 0, 3, 0),
(121, 2, 112, 'Casual & Party Wear Shirts', 'Casual_Party_Wear_Shirts', '', 1, 0, 0, 0, 3, 0),
(122, 2, 112, 'Men Jeans', 'Men_Jeans', '', 1, 0, 0, 0, 3, 0),
(123, 2, 112, 'Formal Shirts', 'Formal_Shirts', '', 1, 0, 0, 0, 3, 0),
(124, 2, 112, 'Sports & Active Wear', 'Sports_Active_Wear', '', 1, 0, 0, 0, 3, 0),
(125, 2, 112, 'Inner Wear & Sleep Wear', 'Inner_Wear_Sleep_Wear', '', 1, 0, 0, 0, 3, 0),
(126, 2, 113, 'Sports Shoes', 'Sports_Shoes', '', 1, 0, 0, 0, 3, 0),
(127, 2, 113, 'Men Casual Shoes', 'Men_Casual_Shoes', '', 1, 0, 0, 0, 3, 0),
(128, 2, 113, 'Formal Shoes', 'Formal_Shoes', '', 1, 0, 0, 0, 3, 0),
(129, 2, 113, 'Sandals & Floaters', 'Sandals_Floaters', '', 1, 0, 0, 0, 3, 0),
(130, 2, 114, 'Watches Fashion Sale', 'Watches_Fashion_Sale', '', 1, 0, 0, 0, 3, 0),
(131, 2, 114, 'Titan', 'Titan', '', 1, 0, 0, 0, 3, 0),
(132, 2, 114, 'Fastrack', 'Fastrack', '', 1, 0, 0, 0, 3, 0),
(133, 2, 115, 'Chains', 'Chains', '', 1, 0, 0, 0, 3, 0),
(134, 2, 115, 'Bracelets', 'Bracelets', '', 1, 0, 0, 0, 3, 0),
(135, 2, 115, 'Wrist Bands', 'Wrist_Bands', '', 1, 0, 0, 0, 3, 0),
(136, 2, 115, 'Cufflinks', 'Cufflinks', '', 1, 0, 0, 0, 3, 0),
(153, 8, 8, 'Beauty & Personal Care', 'Beauty_Personal_Care', '', 1, 0, 0, 0, 2, 0),
(138, 7, 7, 'Team Sports', 'Team_Sports', '', 1, 0, 0, 0, 2, 0),
(139, 7, 7, 'Outdoor Adventure', 'Outdoor_Adventure', '', 1, 0, 0, 0, 2, 0),
(140, 7, 7, 'Indoor Games', 'Indoor_Games', '', 1, 0, 0, 0, 2, 0),
(141, 7, 7, 'Other Sports', 'Other_Sports', '', 1, 0, 0, 0, 2, 0),
(142, 7, 141, 'Boxing', 'Boxing', '', 1, 0, 0, 0, 3, 0),
(143, 7, 141, 'Golf', 'Golf', '', 1, 0, 0, 0, 3, 0),
(144, 7, 141, 'Swimming', 'Swimming', '', 1, 0, 0, 0, 3, 0),
(145, 7, 140, 'Chess', 'Chess', '', 1, 0, 0, 0, 3, 0),
(146, 7, 140, 'Darts', 'Darts', '', 1, 0, 0, 0, 3, 0),
(147, 7, 139, 'Camping & Hiking', 'Camping_Hiking', '', 1, 0, 0, 0, 3, 0),
(148, 7, 139, 'Cycling', 'Cycling', '', 1, 0, 0, 0, 3, 0),
(149, 7, 139, 'Running', 'Running', '', 1, 0, 0, 0, 3, 0),
(150, 7, 138, 'Basketball', 'Basketball', '', 1, 0, 0, 0, 3, 0),
(151, 7, 138, 'Cricket', 'Cricket', '', 1, 0, 0, 0, 3, 0),
(152, 7, 138, 'Other Ball Sports', 'Other_Ball_Sports', '', 1, 0, 0, 0, 3, 0),
(154, 8, 8, 'Perfume Shop', 'Perfume_Shop', '', 1, 0, 0, 0, 2, 0),
(155, 8, 8, 'Health & Fitness', 'Health_Fitness', '', 1, 0, 0, 0, 2, 0),
(156, 8, 153, 'Mens Grooming', 'Mens_Grooming', '', 1, 0, 0, 0, 3, 0),
(157, 8, 153, 'Make Up & Cosmetics', 'Make_Up_Cosmetics', '', 1, 0, 0, 0, 3, 0),
(158, 8, 153, 'Grooming Accessories', 'Grooming_Accessories', '', 1, 0, 0, 0, 3, 0),
(159, 8, 153, 'Hand and Foot', 'Hand_and_Foot', '', 1, 0, 0, 0, 3, 0),
(160, 8, 155, 'Health Monitors', 'Health_Monitors', '', 1, 0, 0, 0, 3, 0),
(161, 8, 155, 'Medicines & Supplements', 'Medicines_Supplements', '', 1, 0, 0, 0, 3, 0),
(162, 8, 155, 'Homeopathic Treatment', 'Homeopathic_Treatment', '', 1, 0, 0, 0, 3, 0),
(163, 9, 9, 'Gifts', 'Gifts', '', 1, 0, 0, 0, 2, 0),
(164, 9, 9, 'Flowers', 'Flowers', '', 1, 0, 0, 0, 2, 0),
(165, 9, 163, 'Cakes', 'Cakes', '', 1, 0, 0, 0, 3, 0),
(166, 9, 163, 'Gift Hamper', 'Gift_Hamper', '', 1, 0, 0, 0, 3, 0),
(167, 9, 163, 'Assorted Gifts', 'Assorted_Gifts', '', 1, 0, 0, 0, 3, 0),
(168, 9, 163, 'Gifts for Him', 'Gifts_for_Him', '', 1, 0, 0, 0, 3, 0),
(169, 9, 163, 'Gifts for Her', 'Gifts_for_Her', '', 1, 0, 0, 0, 3, 0),
(170, 9, 163, 'Birthday Gifts', 'Birthday_Gifts', '', 1, 0, 0, 0, 3, 0),
(171, 9, 163, 'Anniversary Gifts', 'Anniversary_Gifts', '', 1, 0, 0, 0, 3, 0),
(172, 9, 163, 'Wedding Gifts', 'Wedding_Gifts', '', 1, 0, 0, 0, 3, 0),
(173, 9, 163, 'Valentines day gifts', 'Valentines_day_gifts', '', 1, 0, 0, 0, 3, 0),
(174, 9, 164, 'Occasion', 'Occasion', '', 1, 0, 0, 0, 3, 0),
(175, 9, 164, 'Specials', 'Specials', '', 1, 0, 0, 0, 3, 0),
(176, 9, 164, 'Combos', 'Combos', '', 1, 0, 0, 0, 3, 0),
(177, 9, 164, 'Designer Arrangements', 'Designer_Arrangements', '', 1, 0, 0, 0, 3, 0),
(178, 9, 164, 'Remote Delivery', 'Remote_Delivery', '', 1, 0, 0, 0, 3, 0),
(179, 3, 54, 'Shirts Tops & Tunics', 'Shirts_Tops_Tunics', '', 1, 0, 0, 0, 3, 0),
(180, 3, 54, 'Ethnic Wear', 'Ethnic_Wear', '', 1, 0, 0, 0, 3, 0),
(181, 3, 54, 'Women T-Shirts', 'Women_T-Shirts', '', 1, 0, 0, 0, 3, 0),
(182, 3, 54, 'Jeans & Shorts', 'Jeans_Shorts', '', 1, 0, 0, 0, 3, 0),
(183, 8, 159, 'Japanese Restaurant', 'Japanese_Restaurant', '', 1, 0, 0, 0, 4, 0),
(184, 8, 155, 'Yogo', 'Yogo', '', 1, 0, 0, 0, 3, 0),
(188, 1, 1, 'Watch', 'Watch', '', 1, 0, 0, 0, 2, 0),
(186, 3, 55, 'FlipFlop', 'FlipFlop', '', 1, 0, 0, 0, 3, 0),
(187, 3, 55, 'Heels', 'Heels', '', 1, 0, 0, 0, 3, 0),
(189, 1, 188, 'Smart Watches', 'Smart_Watches', '', 1, 0, 0, 0, 3, 0),
(190, 1, 188, 'Wrist Watch', 'Wrist_Watch', '', 1, 0, 0, 0, 3, 0),
(191, 3, 3, 'Women Jewellery', 'Women_Jewellery', '', 1, 0, 0, 0, 2, 0),
(192, 3, 191, ' Bangles', 'Bangles', '', 1, 0, 0, 0, 3, 0),
(193, 3, 191, 'Rings', 'Rings', '', 1, 0, 0, 0, 3, 0),
(194, 3, 191, 'Earrings', 'Earrings', '', 1, 0, 0, 0, 3, 0),
(195, 0, 0, 'Neww11', 'Neww11', '', 1, 1, 1, 1, 1, 0),
(196, 195, 195, 'New2', 'New2', '', 1, 0, 0, 0, 2, 0),
(197, 195, 195, 'new3', 'new3', '', 1, 0, 0, 0, 2, 0),
(198, 195, 196, 'newwss', 'newwss', '', 1, 0, 0, 0, 3, 0),
(199, 195, 196, 'newwww', 'newwww', '', 1, 0, 0, 0, 3, 0),
(200, 195, 198, 'dfgdf', 'dfgdf', '', 1, 0, 0, 0, 4, 0),
(202, 0, 0, 'Kiddooos', 'Kiddooos', '', 1, 1, 1, 1, 1, 0),
(203, 202, 202, 'Kiddo1', 'Kiddo1', '', 1, 0, 0, 0, 2, 0),
(204, 202, 202, 'Kiddo2', 'Kiddo2', '', 1, 0, 0, 0, 2, 0),
(205, 202, 203, 'Kiddoo3', 'Kiddoo3', '', 1, 0, 0, 0, 3, 0),
(206, 202, 204, 'Kiddo4', 'Kiddo4', '', 1, 0, 0, 0, 3, 0),
(207, 202, 205, 'Kiddor', 'Kiddor', '', 1, 0, 0, 0, 4, 0),
(208, 0, 0, 'Health & Beauty', 'Health-Beauty', '', 1, 1, 1, 1, 1, 0),
(209, 208, 208, 'Fragances', 'Fragances', '', 1, 0, 0, 0, 2, 0),
(210, 208, 208, 'Skin Care', 'Skin-Care', '', 1, 0, 0, 0, 2, 0),
(211, 208, 208, 'Make-Up', 'Make-Up', '', 1, 0, 0, 0, 2, 0),
(212, 208, 208, 'Hair and Hair Care', 'Hair-and-Hair-Care', '', 1, 0, 0, 0, 2, 0),
(213, 208, 208, 'Health & Wellbeing', 'Health-Wellbeing', '', 1, 0, 0, 0, 2, 0),
(214, 208, 212, 'Extensions and Wigs', 'Extensions-and-Wigs', '', 1, 0, 0, 0, 3, 0),
(215, 208, 212, 'Hair Care', 'Hair-Care', '', 1, 0, 0, 0, 3, 0),
(216, 208, 212, 'Hair Tools', 'Hair-Tools', '', 1, 0, 0, 0, 3, 0),
(217, 208, 211, 'Eye', 'Eye', '', 1, 0, 0, 0, 3, 0),
(218, 208, 211, 'Lips', 'Lips', '', 1, 0, 0, 0, 3, 0),
(219, 208, 211, 'Face', 'Face', '', 1, 0, 0, 0, 3, 0),
(220, 208, 211, 'Tools', 'Tools', '', 1, 0, 0, 0, 3, 0),
(221, 208, 210, 'Women Body', 'Women-Body', '', 1, 0, 0, 0, 3, 0),
(222, 208, 210, 'Women Face', 'Women-Face', '', 1, 0, 0, 0, 3, 0),
(223, 208, 210, 'Natural Products', 'Natural-Products', '', 1, 0, 0, 0, 3, 0),
(224, 0, 0, 'Musty', 'Musty', '', 1, 1, 1, 1, 1, 0),
(225, 0, 0, 'Testing', 'Testing', '', 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `from1` varchar(255) NOT NULL DEFAULT '',
  `to1` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `buyerimage` varchar(50) NOT NULL,
  `sellerimage` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `sellerid` int(11) NOT NULL,
  `chat_type` int(1) NOT NULL COMMENT '1-customer care,2-seller'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chat_offline`
--

CREATE TABLE `chat_offline` (
  `offline_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` mediumtext NOT NULL,
  `customer_careid` int(11) NOT NULL,
  `seller_chatid` int(11) NOT NULL,
  `chat_type` int(1) NOT NULL COMMENT '1-customercare,2-seller',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1-Active , 0- InActive',
  `reply_id` int(11) NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE `chat_users` (
  `chat_id` int(11) NOT NULL,
  `chat_name` varchar(256) NOT NULL,
  `chat_email` varchar(256) NOT NULL,
  `chat_userid` int(11) NOT NULL,
  `chat_user_type` int(1) NOT NULL COMMENT '1-Guest customer,2-Website customer',
  `chat_user_status` int(1) NOT NULL COMMENT '1-online,2-offline',
  `last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`chat_id`, `chat_name`, `chat_email`, `chat_userid`, `chat_user_type`, `chat_user_status`, `last_update`) VALUES
(1, 'Mustafa Segun A', 'smustafa@swifta.com', 39, 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(5) NOT NULL,
  `country_id` int(3) NOT NULL,
  `city_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city_latitude` varchar(15) CHARACTER SET latin1 NOT NULL,
  `city_longitude` varchar(15) CHARACTER SET latin1 NOT NULL,
  `default` int(1) NOT NULL DEFAULT '0',
  `city_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active, 0-deactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `city_name`, `city_url`, `city_latitude`, `city_longitude`, `default`, `city_status`) VALUES
(1, 3, 'califorina', 'califorina', '36.66842', '-120.14648', 0, 1),
(13, 25, 'Lagos', 'Lagos', '6.5243793', '3.3792057000000', 0, 1),
(14, 25, 'Ikeja', 'Ikeja', '6.601838', '3.3514863000000', 0, 1),
(15, 25, 'Lekki', 'Lekki', '6.4589849', '3.6015207000000', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `cms_id` int(11) NOT NULL,
  `cms_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cms_url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cms_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  `cms_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active, 0-deactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`cms_id`, `cms_title`, `cms_url`, `cms_desc`, `type`, `cms_status`) VALUES
(33, 'About Us', 'about-us', '\n<h1>This is a Heading</h1>\n<p>This is a paragraph.</p>\n\n', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `color_name` varchar(128) NOT NULL,
  `color_code_name` varchar(64) NOT NULL,
  `color_code_id` int(11) NOT NULL,
  `color_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `deal_id`, `color_name`, `color_code_name`, `color_code_id`, `color_status`) VALUES
(2, 5, '4C4F56', 'Abbey', 22, 0),
(3, 5, '0076A3', 'Allports', 35, 0),
(4, 5, '00FF00', 'Green', 2, 0),
(5, 6, '7CB0A1', 'Acapulco', 29, 0),
(6, 6, '326749', 'Killarney', 52, 0);

-- --------------------------------------------------------

--
-- Table structure for table `color_code`
--

CREATE TABLE `color_code` (
  `id` int(11) NOT NULL,
  `color_code` varchar(64) NOT NULL,
  `color_name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_code`
--

INSERT INTO `color_code` (`id`, `color_code`, `color_name`) VALUES
(1, '194CA4', 'Fun Blue'),
(2, '00FF00', 'Green'),
(3, 'FFFF00', 'Yellow'),
(4, '0000FF', 'Blue'),
(5, '90B6F9', 'Malibu'),
(7, '044022', 'Zuccini'),
(15, '10264C', 'Blue Zodiac'),
(17, '7DA1DE', 'Chetwode Blue'),
(18, 'F07C60', 'Burnt Sienna'),
(19, 'ED61D5', 'Lavender Magenta'),
(22, '4C4F56', 'Abbey'),
(29, '7CB0A1', 'Acapulco'),
(31, 'AF8F2C', 'Alpine'),
(32, '3B7A57', 'Amazon'),
(33, '1B1404', 'Acadia'),
(35, '0076A3', 'Allports'),
(51, '333333', 'Mine Shaft'),
(52, '326749', 'Killarney'),
(53, 'DF93BF', 'Shocking'),
(54, 'E32636', 'Alizarin Crimson');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1-Active , 0- InActive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phone_number`, `message`, `status`) VALUES
(0, 'tkepiqsw', 'sample@email.tst', '555-666-0606', '20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(3) NOT NULL,
  `country_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `country_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active,0-deactive',
  `currency_symbol` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_url`, `country_name`, `country_code`, `country_status`, `currency_symbol`, `currency_code`) VALUES
(3, 'us', 'US', 'US', 1, '$', 'USD'),
(25, 'Nigeria', 'Nigeria', 'NG', 1, '₦', 'NGN');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `deal_id` int(11) NOT NULL,
  `deal_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `url_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `deal_key` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deal_description` text COLLATE utf8_unicode_ci NOT NULL,
  `fineprints` text COLLATE utf8_unicode_ci NOT NULL,
  `highlights` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sec_category_id` int(11) NOT NULL,
  `third_category_id` int(11) NOT NULL,
  `deal_type` int(1) NOT NULL COMMENT '1-deals, 2-products, 3 - Auction',
  `merchant_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `deal_value` double NOT NULL,
  `deal_price` double NOT NULL,
  `deal_savings` double NOT NULL,
  `deal_percentage` float NOT NULL,
  `purchase_count` int(11) NOT NULL,
  `minimum_deals_limit` int(11) NOT NULL,
  `maximum_deals_limit` int(11) NOT NULL,
  `user_limit_quantity` int(5) NOT NULL,
  `bid_increment` double NOT NULL,
  `startdate` int(10) NOT NULL,
  `enddate` int(10) NOT NULL,
  `expirydate` int(10) NOT NULL,
  `created_date` int(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deal_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active,0-deactive',
  `commission_status` int(1) NOT NULL DEFAULT '1',
  `view_count` int(11) NOT NULL,
  `deal_feature` int(1) NOT NULL,
  `for_store_cred` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discussion_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` int(10) NOT NULL,
  `discussion_status` int(1) NOT NULL DEFAULT '1',
  `delete_status` int(2) NOT NULL DEFAULT '1' COMMENT '1-Active,0-Inactive',
  `type` int(1) NOT NULL COMMENT '1-deal,2-product,3-auction'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_likes`
--

CREATE TABLE `discussion_likes` (
  `likes_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-deal,2-product,3-auction'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_unlike`
--

CREATE TABLE `discussion_unlike` (
  `unlike_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-deal,2-product,3-auction'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `duration_id` int(11) NOT NULL,
  `duration_period` int(11) NOT NULL,
  `duration_merchantid` int(11) NOT NULL,
  `duration_status` int(1) NOT NULL COMMENT '0-block,1-unblock'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`duration_id`, `duration_period`, `duration_merchantid`, `duration_status`) VALUES
(16, 2, 15, 1),
(17, 4, 15, 1),
(18, 6, 15, 1),
(19, 8, 17, 1),
(20, 3, 66, 1),
(21, 4, 66, 0);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `receivers_id` varchar(256) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `email_subject` varchar(256) NOT NULL,
  `email_message` text NOT NULL,
  `email_template` int(1) NOT NULL,
  `type` int(1) NOT NULL,
  `send_time` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `settings_id` int(11) NOT NULL,
  `sendgrid_host` varchar(150) NOT NULL,
  `sendgrid_port` int(10) NOT NULL,
  `sendgrid_username` varchar(256) NOT NULL,
  `sendgrid_password` varchar(50) NOT NULL,
  `smtp_host` varchar(150) NOT NULL,
  `smtp_port` int(10) NOT NULL,
  `smtp_username` varchar(256) NOT NULL,
  `smtp_password` varchar(50) NOT NULL,
  `api_key` varchar(256) NOT NULL,
  `list_id` varchar(256) NOT NULL,
  `replay_to_mail` varchar(150) NOT NULL,
  `from_name` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `newsletter_email` varchar(100) NOT NULL,
  `newsletter_name` varchar(50) NOT NULL,
  `newsletter_test_email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`settings_id`, `sendgrid_host`, `sendgrid_port`, `sendgrid_username`, `sendgrid_password`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `api_key`, `list_id`, `replay_to_mail`, `from_name`, `status`, `newsletter_email`, `newsletter_name`, `newsletter_test_email`) VALUES
(1, 'smtp.sendgrid.net', 587, 'requin', 'S123123278755r', 'smtp.gmail.com', 465, 'jira@swifta.com', 'afrintegra4jira', 'd3b197b0bcbafbf04f9d4710a885a4af-us6', 'd6e121b6da', 'contact-sales@ndot.in', 'uniecommerce', 1, 'pkigozi@swifta.com', 'support@zmart', 'pkigozi@swifta.com');

-- --------------------------------------------------------

--
-- Table structure for table `email_subscribe`
--

CREATE TABLE `email_subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `suscribe_city_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-Subscribe,0-Unsbscribe',
  `suscribe_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-subscribe,0-unsubscribe',
  `is_deleted` int(1) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(2) NOT NULL,
  `question` varchar(164) NOT NULL,
  `answer` text NOT NULL,
  `faq_status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active,0-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`, `faq_status`) VALUES
(5, 'How much does it cost to create check-in deals?', 'Check-in Deals are currently free to create. In the future, the product, product availability, and pricing are all subject to change.', 1),
(6, 'I found a deal I like - how do I buy it?', 'It''s simple. Just click the green "Get It" button for the deal you wish to purchase. You’ll then be directed to a third-party site to complete your purchase.', 1),
(7, 'Wait, why did I leave Metromix when I clicked “Get It”?', 'We aggregate deals from across the web to help you find the best and most exciting offers. When you click the “Get It” button from a deal that originated somewhere other than Metromix, you’ll be taken to that provider’s website to complete your purchase.', 1),
(8, 'What if I have an issue with the deal I purchased?', 'Any purchases you choose to make are from the deal sites themselves. If you have a question or concern, each site has a customer service phone number or email address so you can quickly address any issues. Please be sure to read and follow the terms and conditions of each site and offer.', 1),
(9, 'What is the new Deals section on Metromix?', 'Not only is Metromix your trusted resource for places to go and things to do, now, with Metromix Deals, you can also find extraordinary deals and specials available in your city.', 1),
(10, 'How can I feature my business on Metromix Deals?', 'To be considered for a listing on Metromix Deals, please complete our Deal Inquiry Form.', 1),
(11, 'How long does my Deal last?', 'Your Deal will remain available for consumers to purchase indefinitely unless you indicate a maximum number available or remove your Deal via biz.yelp.com.', 1),
(12, 'How are refunds handled?', 'If Yelp issues a refund to a customer, you owe Yelp your 70% share of the customer''s payment. Yelp will deduct this amount from future payments owed to you. In general, we believe that Yelp Deals should always be a great experience for the customer. So when a customer is unhappy or believes that a Deal was difficult to redeem at your business, we will refund their payment right away.', 1),
(13, 'I created my Deal, now what?', 'Watch this video to learn more about how your deal will appear on the Yelp web site and in mobile apps. Also learn how to redeem customer deals, and how to get paid.', 1),
(14, 'How do I track who purchased my Deal?', 'Once your Deal is created there will be a dedicated area within the "Yelp Deals" section where you will find a list of purchasers, as well as their unique redemption codes. When someone redeems their Deal you can electronically check them off by hitting "redeem" next to their name.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `free_gift`
--

CREATE TABLE `free_gift` (
  `gift_id` int(11) NOT NULL,
  `gift_name` varchar(256) NOT NULL,
  `gift_key` varchar(16) NOT NULL,
  `gift_description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` int(8) NOT NULL,
  `purchased_quantity` int(8) NOT NULL,
  `gift_type` int(1) NOT NULL,
  `gift_Amount` double NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `gift_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active 2-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `free_gift`
--

INSERT INTO `free_gift` (`gift_id`, `gift_name`, `gift_key`, `gift_description`, `category_id`, `quantity`, `purchased_quantity`, `gift_type`, `gift_Amount`, `merchant_id`, `time`, `gift_status`) VALUES
(1, 'Diwali Offer', 'ufsX2N2b', 'Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offer Diwali Offerimg.imageResizerActiveClass{cursor:nw-resize !important;outline:1px dashed black !important;}            img.imageResizerChangedClass{z-index:300 !important;max-width:none !important;max-height:none !important;}            img.imageResizerBoxClass{margin:auto; z-index:99999 !important; position:fixed; top:0; left:0; right:0; bottom:0; border:1px solid white; outline:1px solid black;}        ', 224, 100, 5, 0, 0, 15, 1440506231, 1);

-- --------------------------------------------------------

--
-- Table structure for table `image_resize`
--

CREATE TABLE `image_resize` (
  `id` int(11) NOT NULL,
  `list_width` int(5) NOT NULL,
  `list_height` int(5) NOT NULL,
  `detail_width` int(5) NOT NULL,
  `detail_height` int(5) NOT NULL,
  `thumb_width` int(5) NOT NULL,
  `thumb_height` int(5) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_resize`
--

INSERT INTO `image_resize` (`id`, `list_width`, `list_height`, `detail_width`, `detail_height`, `thumb_width`, `thumb_height`, `type`) VALUES
(1, 290, 41, 15, 15, 215, 165, 1),
(2, 216, 251, 393, 400, 82, 61, 2),
(3, 171, 132, 393, 400, 82, 61, 3),
(4, 200, 108, 393, 400, 82, 61, 4),
(5, 210, 75, 244, 150, 100, 100, 5),
(6, 50, 50, 170, 165, 648, 335, 6),
(7, 100, 128, 0, 0, 0, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `merchant_attribute`
--

CREATE TABLE `merchant_attribute` (
  `merchant_attribute_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `bg_color` varchar(8) NOT NULL,
  `font_color` varchar(8) NOT NULL,
  `font_size` int(3) NOT NULL,
  `banner_1_link` varchar(512) NOT NULL,
  `banner_2_link` varchar(512) NOT NULL,
  `banner_3_link` varchar(512) NOT NULL,
  `ads_1_link` varchar(512) NOT NULL,
  `ads_2_link` varchar(512) NOT NULL,
  `ads_3_link` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant_attribute`
--

INSERT INTO `merchant_attribute` (`merchant_attribute_id`, `merchant_id`, `storeid`, `bg_color`, `font_color`, `font_size`, `banner_1_link`, `banner_2_link`, `banner_3_link`, `ads_1_link`, `ads_2_link`, `ads_3_link`) VALUES
(1, 15, 1, '#45818e', '#000000', 12, 'http://www.google.com', 'http://www.google.com', 'http://www.google.com', '', '', ''),
(2, 17, 2, '#ffffff', '#ff0000', 12, 'http://emarket.know3.com/', 'http://emarket.know3.com/', 'http://emarket.know3.com/', 'http://emarket.know3.com/', 'http://emarket.know3.com/', 'http://emarket.know3.com/'),
(3, 32, 3, '', '', 0, '', '', '', '', '', ''),
(4, 34, 4, '', '', 0, '', '', '', '', '', ''),
(5, 36, 5, '#ffffff', '#38761d', 7, '', '', '', '', '', ''),
(6, 40, 6, '', '', 0, '', '', '', '', '', ''),
(7, 43, 7, '', '', 0, '', '', '', '', '', ''),
(8, 46, 8, '#0000ff', '#38761d', 9, '', '', '', '', '', ''),
(9, 47, 9, '', '', 0, '', '', '', '', '', ''),
(10, 48, 10, '', '', 0, '', '', '', '', '', ''),
(11, 49, 11, '', '', 0, '', '', '', '', '', ''),
(12, 50, 12, '', '', 0, '', '', '', '', '', ''),
(13, 52, 13, '', '', 0, '', '', '', '', '', ''),
(14, 54, 14, '', '', 0, '', '', '', '', '', ''),
(15, 57, 15, '', '', 0, '', '', '', '', '', ''),
(16, 59, 16, '', '', 0, '', '', '', '', '', ''),
(17, 60, 17, '', '', 0, '', '', '', '', '', ''),
(18, 62, 18, '', '', 0, '', '', '', '', '', ''),
(19, 64, 19, '', '', 0, '', '', '', '', '', ''),
(20, 66, 20, '', '', 0, '', '', '', '', '', ''),
(21, 15, 21, '#ffff00', '#d9ead3', 9, '', '', '', '', '', ''),
(22, 15, 22, '#00ffff', '#d5a6bd', 11, '', '', '', '', '', ''),
(23, 71, 23, '', '', 0, '', '', '', '', '', ''),
(24, 72, 24, '', '', 0, '', '', '', '', '', ''),
(25, 73, 25, '', '', 0, '', '', '', '', '', ''),
(26, 74, 26, '', '', 0, '', '', '', '', '', ''),
(27, 76, 27, '#0000ff', '#00ffff', 7, '', '', '', '', '', ''),
(28, 88, 28, '#d9ead3', '#93c47d', 9, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `moderator_privileges_map`
--

CREATE TABLE `moderator_privileges_map` (
  `privileges_id` int(11) NOT NULL,
  `moderator_id` int(11) NOT NULL,
  `privileges_dashboard` int(1) NOT NULL DEFAULT '1',
  `privileges_deals` int(1) NOT NULL,
  `privileges_deals_add` int(1) NOT NULL,
  `privileges_deals_edit` int(1) NOT NULL,
  `privileges_deals_block` int(1) NOT NULL,
  `privileges_products` int(1) NOT NULL,
  `privileges_products_add` int(1) NOT NULL,
  `privileges_products_edit` int(1) NOT NULL,
  `privileges_products_block` int(1) NOT NULL,
  `privileges_auctions` int(1) NOT NULL,
  `privileges_auctions_add` int(1) NOT NULL,
  `privileges_auctions_edit` int(1) NOT NULL,
  `privileges_auctions_block` int(1) NOT NULL,
  `privileges_transactions` int(1) NOT NULL,
  `privileges_fundrequest` int(1) NOT NULL,
  `privileges_fundrequest_edit` int(1) NOT NULL,
  `privileges_shop` int(1) NOT NULL,
  `privileges_shop_add` int(1) NOT NULL,
  `privileges_shop_edit` int(1) NOT NULL,
  `privileges_shop_block` int(1) NOT NULL,
  `privileges_shipping` int(1) NOT NULL,
  `privileges_shipping_edit` int(1) NOT NULL,
  `privileges_tac` int(1) NOT NULL,
  `privileges_tac_edit` int(1) NOT NULL,
  `privileges_return_policy` int(1) NOT NULL,
  `privileges_return_policy_edit` int(1) NOT NULL,
  `privileges_about_us` int(1) NOT NULL,
  `privileges_about_us_edit` int(1) NOT NULL,
  `privileges_personalized_store` int(1) NOT NULL,
  `privileges_personalized_store_edit` int(1) NOT NULL,
  `privileges_newsletter` int(1) NOT NULL,
  `privileges_newsletter_add` int(1) NOT NULL,
  `privileges_attributs` int(1) NOT NULL,
  `privileges_attributs_add` int(1) NOT NULL,
  `privileges_attributs_edit` int(1) NOT NULL,
  `privileges_categories` int(1) NOT NULL,
  `privileges_categories_add` int(1) NOT NULL,
  `privileges_categories_edit` int(1) NOT NULL,
  `privileges_specification` int(1) NOT NULL,
  `privileges_specification_add` int(1) NOT NULL,
  `privileges_specification_edit` int(1) NOT NULL,
  `privileges_gift` int(1) NOT NULL,
  `privileges_gift_add` int(1) NOT NULL,
  `privileges_gift_edit` int(1) NOT NULL,
  `privileges_gift_block` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator_privileges_map`
--

INSERT INTO `moderator_privileges_map` (`privileges_id`, `moderator_id`, `privileges_dashboard`, `privileges_deals`, `privileges_deals_add`, `privileges_deals_edit`, `privileges_deals_block`, `privileges_products`, `privileges_products_add`, `privileges_products_edit`, `privileges_products_block`, `privileges_auctions`, `privileges_auctions_add`, `privileges_auctions_edit`, `privileges_auctions_block`, `privileges_transactions`, `privileges_fundrequest`, `privileges_fundrequest_edit`, `privileges_shop`, `privileges_shop_add`, `privileges_shop_edit`, `privileges_shop_block`, `privileges_shipping`, `privileges_shipping_edit`, `privileges_tac`, `privileges_tac_edit`, `privileges_return_policy`, `privileges_return_policy_edit`, `privileges_about_us`, `privileges_about_us_edit`, `privileges_personalized_store`, `privileges_personalized_store_edit`, `privileges_newsletter`, `privileges_newsletter_add`, `privileges_attributs`, `privileges_attributs_add`, `privileges_attributs_edit`, `privileges_categories`, `privileges_categories_add`, `privileges_categories_edit`, `privileges_specification`, `privileges_specification_add`, `privileges_specification_edit`, `privileges_gift`, `privileges_gift_add`, `privileges_gift_edit`, `privileges_gift_block`) VALUES
(14, 81, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(15, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_settings`
--

CREATE TABLE `module_settings` (
  `module_id` int(11) NOT NULL,
  `is_deal` int(1) NOT NULL,
  `is_product` int(1) NOT NULL,
  `is_auction` int(1) NOT NULL,
  `is_blog` int(1) NOT NULL,
  `is_paypal` int(1) NOT NULL DEFAULT '1',
  `is_credit_card` int(1) NOT NULL DEFAULT '1',
  `is_authorize` int(1) NOT NULL DEFAULT '1',
  `is_cash_on_delivery` int(1) NOT NULL,
  `is_shipping` int(1) NOT NULL COMMENT '1- Free Shipping ,  2- Flat Shipping, 3- Per Product Shipping , 4- Per Item Shipping',
  `is_map` int(1) NOT NULL,
  `is_store_list` int(1) NOT NULL,
  `is_past_deal` int(1) NOT NULL,
  `is_faq` int(1) NOT NULL,
  `is_city` int(1) NOT NULL,
  `is_cms` int(1) NOT NULL COMMENT '1-header position,0-footer position',
  `is_newsletter` int(1) NOT NULL,
  `free_shipping` int(1) NOT NULL,
  `flat_shipping` int(1) NOT NULL,
  `per_product` int(1) NOT NULL,
  `per_quantity` int(1) NOT NULL,
  `aramex` int(1) NOT NULL,
  `is_pay_later` int(1) NOT NULL,
  `is_interswitch` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_settings`
--

INSERT INTO `module_settings` (`module_id`, `is_deal`, `is_product`, `is_auction`, `is_blog`, `is_paypal`, `is_credit_card`, `is_authorize`, `is_cash_on_delivery`, `is_shipping`, `is_map`, `is_store_list`, `is_past_deal`, `is_faq`, `is_city`, `is_cms`, `is_newsletter`, `free_shipping`, `flat_shipping`, `per_product`, `per_quantity`, `aramex`, `is_pay_later`, `is_interswitch`) VALUES
(1, 1, 1, 1, 1, 0, 0, 0, 1, 3, 1, 1, 1, 1, 0, 0, 4, 1, 1, 1, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_title` varchar(252) NOT NULL,
  `newsletter_url` varchar(252) NOT NULL,
  `newsletter_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `newsletter_title`, `newsletter_url`, `newsletter_status`) VALUES
(13, 'T2', 'T2', 1),
(12, 'T1', 'T1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `deal_id` int(11) NOT NULL,
  `deal_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `url_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `deal_key` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bulk_discount_buy` int(11) NOT NULL,
  `bulk_discount_get` int(11) NOT NULL,
  `deal_description` text COLLATE utf8_unicode_ci NOT NULL,
  `fineprints` text COLLATE utf8_unicode_ci NOT NULL,
  `highlights` text COLLATE utf8_unicode_ci NOT NULL,
  `color` int(1) NOT NULL DEFAULT '0' COMMENT '0 - No , 1 - Yes',
  `size` int(1) NOT NULL,
  `shipping_amount` double NOT NULL,
  `terms_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sec_category_id` int(11) NOT NULL,
  `third_category_id` int(11) NOT NULL,
  `deal_type` int(1) NOT NULL COMMENT '1-deals, 2-products, 3 - Auction',
  `merchant_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `deal_value` double NOT NULL,
  `deal_price` double NOT NULL,
  `deal_prime_value` double NOT NULL,
  `deal_prime_savings` double NOT NULL,
  `deal_prime_percentage` float NOT NULL,
  `deal_savings` double NOT NULL,
  `deal_percentage` float NOT NULL,
  `weight` double NOT NULL,
  `height` double NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `purchase_count` int(11) NOT NULL,
  `user_limit_quantity` int(5) NOT NULL,
  `created_date` int(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deal_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active,0-deactive',
  `commission_status` int(1) NOT NULL DEFAULT '1',
  `delivery_period` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `attribute` int(1) NOT NULL COMMENT '1-Yes,0-No',
  `deal_feature` int(1) NOT NULL,
  `Including_tax` int(1) NOT NULL,
  `shipping` int(1) NOT NULL,
  `product_duration` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `gift_offer` int(11) NOT NULL,
  `product_offer` int(1) NOT NULL COMMENT '1- bulk discount 2- Gift',
  `for_store_cred` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_policy`
--

CREATE TABLE `product_policy` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `product_size_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `size_name` varchar(64) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rate_id` int(11) NOT NULL,
  `rating` double NOT NULL,
  `type_id` int(11) NOT NULL,
  `module_id` int(1) NOT NULL COMMENT '1-deal,2-product,3-auction',
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_fund`
--

CREATE TABLE `request_fund` (
  `request_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-merchant request, 2-affiliate amount request',
  `user_id` int(11) NOT NULL,
  `payment_comments` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `date_time` int(10) NOT NULL,
  `request_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-pending, 2-approved, 3-Rejected',
  `payment_status` int(1) NOT NULL DEFAULT '0' COMMENT '1-success, 2-Failure',
  `transaction_date` int(10) NOT NULL,
  `transaction_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `error_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `error_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `error_message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_id` int(11) NOT NULL,
  `sector_name` varchar(64) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `sector_status` int(1) NOT NULL DEFAULT '1',
  `main_sector_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1- Sector 2- Subsector'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_id`, `sector_name`, `categoryid`, `sector_status`, `main_sector_id`, `type`) VALUES
(1, 'Electronics', 0, 1, 0, 1),
(3, 'Fashion', 0, 1, 0, 1),
(11, 'Aviation', 0, 1, 0, 1),
(21, 'Entertainment', 0, 1, 0, 1),
(31, 'Food', 0, 1, 0, 1),
(41, 'Gaming', 0, 1, 0, 1),
(51, 'Healthcare', 0, 1, 0, 1),
(61, 'Hospitality', 0, 1, 0, 1),
(71, 'Manufacturing', 0, 1, 0, 1),
(116, 'store', 0, 1, 94, 2),
(94, 'Agriculture', 0, 1, 0, 1),
(115, 'store', 0, 1, 71, 2),
(114, 'store', 0, 1, 61, 2),
(113, 'store', 0, 1, 51, 2),
(112, 'store', 0, 1, 41, 2),
(111, 'store', 0, 1, 31, 2),
(110, 'store', 0, 1, 21, 2),
(109, 'store', 0, 1, 3, 2),
(108, 'store', 0, 1, 11, 2),
(107, 'store', 0, 1, 1, 2),
(34, 'store', 0, 1, 33, 2),
(33, 'Generic', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(3) NOT NULL,
  `site_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `default_language` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'english',
  `contact_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `webmaster_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `noreply_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_page` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_page` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_page` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `instagram_page` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `android_page` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `iphone_page` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_fanpage` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `youtube_url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `analytics_code` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_app_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_secret_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_api_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_secret_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gmap_api_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram_user_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `instagram_user_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_payment_mode` int(1) NOT NULL COMMENT ' 0 - test account 1 - live account',
  `paypal_account_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_api_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_api_signature` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `authorizenet_transaction_key` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `authorizenet_api_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `min_fund_request` double NOT NULL,
  `max_fund_request` double NOT NULL,
  `deal_commission` int(2) NOT NULL,
  `currency_symbol` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `referral_amount` float NOT NULL,
  `site_mode` int(1) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1',
  `latitude` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email_type` int(1) NOT NULL DEFAULT '1' COMMENT '1-Sendgrid,2-Smtp,3-Mailchimp',
  `flat_shipping` int(5) NOT NULL,
  `tax_percentage` int(3) NOT NULL,
  `auction_extend_day` int(3) NOT NULL,
  `auction_alert_day` int(3) NOT NULL,
  `pay_later` text COLLATE utf8_unicode_ci NOT NULL,
  `monthly_storecredit` int(30) NOT NULL,
  `z_test_endpoint` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Zenith test api endpoint',
  `z_test_user` varchar(36) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Zenith test user',
  `z_test_pass` varchar(36) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Zenith test password',
  `webpay_mac_key` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `webpay_product_id` int(3) NOT NULL,
  `webpay_staging_url` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `webpay_site_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `webpay_pay_item_id` int(5) NOT NULL,
  `webpay_pay_item_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `send_error_log` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `meta_keywords`, `meta_description`, `title`, `theme`, `default_language`, `contact_name`, `contact_email`, `webmaster_email`, `noreply_email`, `phone1`, `phone2`, `facebook_page`, `twitter_page`, `linkedin_page`, `instagram_page`, `android_page`, `iphone_page`, `facebook_fanpage`, `youtube_url`, `analytics_code`, `facebook_app_id`, `facebook_secret_key`, `twitter_api_key`, `twitter_secret_key`, `gmap_api_key`, `instagram_user_name`, `instagram_user_id`, `paypal_payment_mode`, `paypal_account_id`, `paypal_api_password`, `paypal_api_signature`, `authorizenet_transaction_key`, `authorizenet_api_id`, `min_fund_request`, `max_fund_request`, `deal_commission`, `currency_symbol`, `currency_code`, `country_code`, `referral_amount`, `site_mode`, `status`, `latitude`, `longitude`, `email_type`, `flat_shipping`, `tax_percentage`, `auction_extend_day`, `auction_alert_day`, `pay_later`, `monthly_storecredit`, `z_test_endpoint`, `z_test_user`, `z_test_pass`, `webpay_mac_key`, `webpay_product_id`, `webpay_staging_url`, `webpay_site_name`, `webpay_pay_item_id`, `webpay_pay_item_name`, `send_error_log`) VALUES
(1, 'AsoEbi', 'deals, daily deals, group deals,', 'sell services using multiple ways like group deals, coupons, and social media.', 'Everything Aso Ebi', 'default', 'english', 'Adebola', 'asanni@swifta.com', 'asanni@swifta.com', 'noreply@swifta.com', '+2348135285042', '+2348135285042', 'https://www.facebook.com/pages/Swifta-Systems-and-Services/697969463605870', 'http://twitter.com/SwiftaSystems', 'http://www.linkedin.com/company/269461', 'https://instagram.com/bellanaija', 'https://play.google.com/store/apps/details?id=com.uniecommerce.uninew.ecommerce', 'https://itunes.apple.com/us/app/uniecommercenew/id592052500?ls=1&mt=8', 'https://www.facebook.com/pages/Swifta-Systems-and-Services/697969463605870', 'http://www.youtube.com/watch?v=QhzrdsS5J9w', '<script type="text/javascript">\n  var _gaq = _gaq || [];\n  _gaq.push([''_setAccount'', ''UA-20025738-1'']);\n  _gaq.push([''_trackPageview'']);\n  (function() {\n    var ga = document.createElement(''script''); ga.type = ''text/javascript''; ga.async = true;\n    ga.src = (''https:'' == document.location.protocol ? ''https://ssl'' : ''http://www'') + ''.google-analytics.com/ga.js'';\n    var s = document.getElementsByTagName(''script'')[0]; s.parentNode.insertBefore(ga, s);\n  })();\n</script>             ', '1729227420656572', 'e70b239e38700770f35e509601981435', '291719054236926', 'b24927947a1adc1cff504bd4cbb16968', 'b24927947a1adc1cff504bd4cbb16968', 'bellanaija', '1fe23d57a0', 0, 'haripr_1357394973_biz_api1.gmail.com', '1357395004', 'AVn.D2cvC.MsQAvZRc6lx0CJVtKGAIuUArsExV4UM81uJVNdHaQrEddJ', '8J3z97W3zB85qtKe', '5rBy75ZQDAk9t', 12, 150, 0, '₦', 'NGN', 'NG', 2000, 1, 1, '6.5243793', '3.3792057000', 2, 5, 0, 7, 2, 'Branch payment: Pay at any bank branch closest to you\n\nMobile payment: Log in to mobile app and select bill payment\n\nInternet banking: Pay from internet banking application; select bill payment', 1000, 'https://41.203.113.12/OnlineAcct/Service.asmx?WSDL', 'TestUser', '*pass1234*', 'E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4', 6204, 'https://stageserv.interswitchng.com/test_paydirect/', 'https://zmart.com.ng', 101, 'Payment Name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_info`
--

CREATE TABLE `shipping_info` (
  `shipping_id` int(11) NOT NULL,
  `shipping_type` int(1) NOT NULL DEFAULT '1' COMMENT '1- product , 2 auction',
  `transaction_id` int(11) NOT NULL,
  `tracking` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `adderss1` varchar(256) NOT NULL,
  `address2` varchar(256) NOT NULL,
  `city` int(11) NOT NULL,
  `state` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `shipping_date` varchar(15) NOT NULL,
  `delivery_status` int(1) NOT NULL DEFAULT '0' COMMENT '0-Pending,1-order packed,2-Shipped to center,3-Out of delivery,4-Delivered,5-Failed'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_module_settings`
--

CREATE TABLE `shipping_module_settings` (
  `ship_module_id` int(11) NOT NULL,
  `ship_user_id` int(11) NOT NULL,
  `free` int(1) NOT NULL DEFAULT '1',
  `flat` int(1) NOT NULL DEFAULT '1',
  `per_product` int(1) NOT NULL DEFAULT '1',
  `per_quantity` int(1) NOT NULL DEFAULT '1',
  `aramex` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_module_settings`
--

INSERT INTO `shipping_module_settings` (`ship_module_id`, `ship_user_id`, `free`, `flat`, `per_product`, `per_quantity`, `aramex`) VALUES
(69, 15, 1, 1, 1, 1, 0),
(70, 17, 1, 1, 1, 1, 0),
(71, 32, 1, 1, 1, 1, 0),
(72, 34, 1, 1, 1, 1, 0),
(73, 36, 1, 1, 1, 1, 0),
(74, 40, 1, 1, 1, 1, 0),
(75, 43, 1, 1, 1, 1, 0),
(76, 45, 1, 1, 1, 1, 0),
(77, 46, 1, 1, 1, 1, 0),
(78, 47, 1, 1, 1, 1, 0),
(79, 48, 1, 1, 1, 1, 0),
(80, 49, 1, 1, 1, 1, 0),
(81, 50, 1, 1, 1, 1, 0),
(82, 52, 1, 1, 1, 1, 0),
(83, 54, 1, 1, 1, 1, 0),
(84, 57, 1, 1, 1, 1, 0),
(85, 59, 1, 1, 1, 1, 0),
(86, 60, 1, 1, 1, 1, 0),
(87, 62, 1, 1, 1, 1, 0),
(88, 64, 1, 1, 1, 1, 0),
(89, 66, 1, 1, 1, 1, 0),
(90, 71, 1, 1, 1, 1, 0),
(91, 72, 1, 1, 1, 1, 0),
(92, 73, 1, 1, 1, 1, 0),
(93, 74, 1, 1, 1, 1, 0),
(94, 76, 1, 1, 1, 1, 0),
(95, 88, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`) VALUES
(10, '77'),
(2, '8'),
(3, '9'),
(4, '10'),
(5, '11'),
(6, '32'),
(8, '46'),
(9, '36'),
(1, 'None'),
(20, 'm'),
(19, 's'),
(17, '50'),
(21, 'l'),
(22, 'XXL'),
(25, 'XL'),
(26, 'XL'),
(27, 'TEST'),
(28, '78');

-- --------------------------------------------------------

--
-- Table structure for table `storecredit_shipping_info`
--

CREATE TABLE `storecredit_shipping_info` (
  `shipping_id` int(11) NOT NULL,
  `shipping_type` int(1) NOT NULL DEFAULT '1' COMMENT '1- product , 2 auction',
  `transaction_id` int(11) NOT NULL,
  `tracking` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `adderss1` varchar(256) NOT NULL,
  `address2` varchar(256) NOT NULL,
  `city` int(11) NOT NULL,
  `state` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `shipping_date` varchar(15) NOT NULL,
  `delivery_status` int(1) NOT NULL DEFAULT '0' COMMENT '0-Pending,1-order packed,2-Shipped to center,3-Out of delivery,4-Delivered,5-Failed'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storecredit_transaction`
--

CREATE TABLE `storecredit_transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `payer_id` varchar(25) NOT NULL,
  `payer_status` varchar(25) NOT NULL,
  `country_code` varchar(15) NOT NULL,
  `currency_code` varchar(10) NOT NULL,
  `transaction_date` int(10) NOT NULL,
  `correlation_id` varchar(50) NOT NULL,
  `acknowledgement` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `recipt_id` varchar(50) NOT NULL,
  `transaction_type` varchar(25) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `order_date` int(10) NOT NULL,
  `amount` double NOT NULL,
  `referral_amount` double NOT NULL,
  `bid_amount` double NOT NULL,
  `shipping_amount` double NOT NULL,
  `shipping_methods` int(1) NOT NULL,
  `tax_amount` float NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `pending_reason` varchar(100) NOT NULL,
  `reason_code` varchar(50) NOT NULL,
  `paypal_email` varchar(256) NOT NULL,
  `quantity` int(5) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-CREDITCARD,2-PAYPAL, 3- REFER PAY, 4 - AUTHORIZE.NET , 5 - COD , 6 - Pay Later,7-Interswitch',
  `captured` int(1) NOT NULL COMMENT '0-NO,1-YES',
  `captured_transaction_id` varchar(50) NOT NULL,
  `captured_date` int(10) NOT NULL,
  `captured_correlation_id` varchar(50) NOT NULL,
  `captured_ack` varchar(50) NOT NULL,
  `captured_payment_type` varchar(100) NOT NULL,
  `captured_payment_status` varchar(100) NOT NULL,
  `captured_pending_reason` text NOT NULL,
  `friend_gift_status` int(1) NOT NULL DEFAULT '0',
  `deal_merchant_commission` int(11) NOT NULL,
  `coupon_mail_sent` int(1) NOT NULL DEFAULT '0',
  `product_size` int(11) NOT NULL,
  `product_color` int(11) NOT NULL,
  `aramex_currencycode` varchar(3) NOT NULL,
  `aramex_value` double NOT NULL,
  `ip` varchar(16) NOT NULL,
  `ip_country_code` varchar(3) NOT NULL,
  `ip_country_name` varchar(32) NOT NULL,
  `ip_city_name` varchar(32) NOT NULL,
  `bulk_discount` int(11) NOT NULL,
  `bulk_buy` int(11) NOT NULL,
  `total_discount` int(11) NOT NULL,
  `gift_id` int(11) NOT NULL,
  `store_credit_id` int(11) NOT NULL,
  `store_credit_period` int(11) NOT NULL,
  `prime_customer` int(1) NOT NULL COMMENT '1- prime_customer 0- not a prime customer',
  `file_name` text NOT NULL,
  `main_storecreditid` int(11) NOT NULL,
  `storecredit_amount` double NOT NULL,
  `storecredit_transaction_date` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storecredit_transaction_mapping`
--

CREATE TABLE `storecredit_transaction_mapping` (
  `id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `coupon_code` varchar(11) NOT NULL,
  `transaction_date` int(10) NOT NULL,
  `coupon_code_status` int(1) NOT NULL DEFAULT '1',
  `friend_name` varchar(64) NOT NULL,
  `friend_email` varchar(64) NOT NULL,
  `product_size` int(11) NOT NULL,
  `product_color` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `store_url_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `store_key` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `phone_number` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions_status` int(1) NOT NULL,
  `return_policy` text COLLATE utf8_unicode_ci NOT NULL,
  `return_policy_status` int(1) NOT NULL,
  `about_us` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_status` int(1) NOT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `store_type` int(1) NOT NULL COMMENT '1-Main, 2 - Branch',
  `merchant_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` int(10) NOT NULL,
  `store_status` int(1) NOT NULL DEFAULT '1',
  `warranty` text COLLATE utf8_unicode_ci NOT NULL,
  `warranty_status` int(1) NOT NULL,
  `store_admin_id` int(11) NOT NULL,
  `store_sector_id` int(11) NOT NULL,
  `store_subsector_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_credit_save`
--

CREATE TABLE `store_credit_save` (
  `storecredit_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `product_value` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `sizeid` int(11) NOT NULL,
  `colorid` int(11) NOT NULL,
  `durationid` int(11) NOT NULL,
  `duration_period` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `shipping_amount` int(11) NOT NULL,
  `merchantid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `credit_status` int(1) NOT NULL,
  `installments_paid` int(11) NOT NULL,
  `document_no` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(15) NOT NULL,
  `tags_name` varchar(300) NOT NULL,
  `module_type` int(11) NOT NULL,
  `tags_count` varchar(300) NOT NULL DEFAULT '0',
  `tags_status` int(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>deactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `payer_id` varchar(25) NOT NULL,
  `payer_status` varchar(25) NOT NULL,
  `country_code` varchar(15) NOT NULL,
  `currency_code` varchar(10) NOT NULL,
  `transaction_date` int(10) NOT NULL,
  `correlation_id` varchar(50) NOT NULL,
  `acknowledgement` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `recipt_id` varchar(50) NOT NULL,
  `transaction_type` varchar(25) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `order_date` int(10) NOT NULL,
  `amount` double NOT NULL,
  `referral_amount` double NOT NULL,
  `bid_amount` double NOT NULL,
  `shipping_amount` double NOT NULL,
  `shipping_methods` int(1) NOT NULL,
  `tax_amount` float NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `pending_reason` varchar(100) NOT NULL,
  `reason_code` varchar(50) NOT NULL,
  `paypal_email` varchar(256) NOT NULL,
  `quantity` int(5) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-CREDITCARD,2-PAYPAL, 3- REFER PAY, 4 - AUTHORIZE.NET , 5 - COD , 6 - Pay Later,7-Interswitch',
  `captured` int(1) NOT NULL COMMENT '0-NO,1-YES',
  `captured_transaction_id` varchar(50) NOT NULL,
  `captured_date` int(10) NOT NULL,
  `captured_correlation_id` varchar(50) NOT NULL,
  `captured_ack` varchar(50) NOT NULL,
  `captured_payment_type` varchar(100) NOT NULL,
  `captured_payment_status` varchar(100) NOT NULL,
  `captured_pending_reason` text NOT NULL,
  `friend_gift_status` int(1) NOT NULL DEFAULT '0',
  `deal_merchant_commission` int(11) NOT NULL,
  `coupon_mail_sent` int(1) NOT NULL DEFAULT '0',
  `product_size` int(11) NOT NULL,
  `product_color` int(11) NOT NULL,
  `aramex_currencycode` varchar(3) NOT NULL,
  `aramex_value` double NOT NULL,
  `ip` varchar(16) NOT NULL,
  `ip_country_code` varchar(3) NOT NULL,
  `ip_country_name` varchar(32) NOT NULL,
  `ip_city_name` varchar(32) NOT NULL,
  `bulk_discount` int(11) NOT NULL,
  `bulk_buy` int(11) NOT NULL,
  `total_discount` int(11) NOT NULL,
  `gift_id` int(11) NOT NULL,
  `store_credit_id` int(11) NOT NULL,
  `store_credit_period` int(11) NOT NULL,
  `prime_customer` int(1) NOT NULL COMMENT '1- prime_customer 0- not a prime customer',
  `file_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_mapping`
--

CREATE TABLE `transaction_mapping` (
  `id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `coupon_code` varchar(11) NOT NULL,
  `transaction_date` int(10) NOT NULL,
  `coupon_code_status` int(1) NOT NULL DEFAULT '1',
  `friend_name` varchar(64) NOT NULL,
  `friend_email` varchar(64) NOT NULL,
  `product_size` int(11) NOT NULL,
  `product_color` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `club_member` tinyint(1) NOT NULL COMMENT '1-Club Member, 0-Not Club Member',
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname_url` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1-male,2-female',
  `age_range` int(1) NOT NULL COMMENT '1->17 and below,2->18-25,3->26-35,4->36-45,5->46-65,6->66 and above',
  `fb_user_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `fb_session_key` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_access_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_secret_token` int(100) NOT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(5) NOT NULL DEFAULT '0',
  `country_id` int(5) NOT NULL,
  `phone_number` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `my_favouites` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `payment_account_id` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `user_referral_balance` double NOT NULL,
  `merchant_account_balance` double NOT NULL,
  `merchant_commission` double NOT NULL COMMENT 'merchant commission',
  `referral_id` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `referred_user_id` int(11) NOT NULL,
  `deal_bought_count` int(5) NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT '4' COMMENT '1-Website-Admin, 2-CityAdmin, 3-Merchant, 4-users, 7- Customer care , 8-Merchant moderator , 9 - store admin',
  `user_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active,0-deactive',
  `login_type` int(1) NOT NULL DEFAULT '1' COMMENT '1-direct, 2-admin, 3-facebook, 4-twitter',
  `joined_date` int(10) NOT NULL,
  `last_login` int(10) NOT NULL,
  `facebook_update` int(1) NOT NULL DEFAULT '0' COMMENT '1-active 0-Dactive',
  `approve_status` int(1) NOT NULL DEFAULT '1' COMMENT '1-approve,0-disapprove',
  `wishlist` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ship_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ship_address1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ship_address2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ship_state` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ship_country` int(11) NOT NULL,
  `ship_city` int(11) NOT NULL,
  `ship_mobileno` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `ship_zipcode` bigint(11) NOT NULL,
  `AccountCountryCode` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `AccountEntity` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `AccountNumber` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `AccountPin` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ShippingPassword` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `flat_amount` double NOT NULL,
  `unique_identifier` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_sector_id` int(11) NOT NULL,
  `user_auto_key` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_sub_sector_id` int(11) NOT NULL,
  `merchantid` int(11) NOT NULL,
  `monthly_installment_amt` decimal(10,3) NOT NULL,
  `online_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nuban` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Zenith customer back account'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `club_member`, `firstname`, `lastname`, `nickname`, `nickname_url`, `email`, `password`, `gender`, `age_range`, `fb_user_id`, `fb_session_key`, `twitter_id`, `twitter_access_token`, `twitter_secret_token`, `address1`, `address2`, `city_id`, `country_id`, `phone_number`, `my_favouites`, `payment_account_id`, `user_referral_balance`, `merchant_account_balance`, `merchant_commission`, `referral_id`, `referred_user_id`, `deal_bought_count`, `created_by`, `user_type`, `user_status`, `login_type`, `joined_date`, `last_login`, `facebook_update`, `approve_status`, `wishlist`, `ship_name`, `ship_address1`, `ship_address2`, `ship_state`, `ship_country`, `ship_city`, `ship_mobileno`, `ship_zipcode`, `AccountCountryCode`, `AccountEntity`, `AccountNumber`, `AccountPin`, `UserName`, `ShippingPassword`, `flat_amount`, `unique_identifier`, `user_sector_id`, `user_auto_key`, `user_sub_sector_id`, `merchantid`, `monthly_installment_amt`, `online_status`, `nuban`) VALUES
(14, 0, 'Adminn', '', NULL, NULL, 'a@swifta.com', 'd4b51eb6e66aed18646c01569119304c', 0, 0, '0', '0', '', '', 0, '42 Boston Street', 'Boston', 1, 3, '+1 (323) 982-894', '', 'admin@ndot.in', 0, 381706, 0, '', 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, '', 0, 'SA', 'JED', '6004985', '553654', 'eng_ibrahim@hk301.com', 'amih2363439', 0, '', 3, '', 12, 0, '0.000', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `view_count_location`
--

CREATE TABLE `view_count_location` (
  `view_id` int(11) NOT NULL,
  `deal_key` varchar(32) NOT NULL,
  `product_key` varchar(32) NOT NULL,
  `auction_key` varchar(35) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `city` varchar(64) NOT NULL,
  `country` varchar(64) NOT NULL,
  `date` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_moderator_privileges_map`
--
ALTER TABLE `admin_moderator_privileges_map`
  ADD PRIMARY KEY (`privileges_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`),
  ADD KEY `add_id` (`ads_id`),
  ADD KEY `add_id_2` (`ads_id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`attribute_group_id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`blog_settings_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_offline`
--
ALTER TABLE `chat_offline`
  ADD PRIMARY KEY (`offline_id`);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `color_code`
--
ALTER TABLE `color_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`discussion_id`);

--
-- Indexes for table `discussion_likes`
--
ALTER TABLE `discussion_likes`
  ADD PRIMARY KEY (`likes_id`);

--
-- Indexes for table `discussion_unlike`
--
ALTER TABLE `discussion_unlike`
  ADD PRIMARY KEY (`unlike_id`);

--
-- Indexes for table `duration`
--
ALTER TABLE `duration`
  ADD PRIMARY KEY (`duration_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `email_subscribe`
--
ALTER TABLE `email_subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `free_gift`
--
ALTER TABLE `free_gift`
  ADD PRIMARY KEY (`gift_id`);

--
-- Indexes for table `image_resize`
--
ALTER TABLE `image_resize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_attribute`
--
ALTER TABLE `merchant_attribute`
  ADD PRIMARY KEY (`merchant_attribute_id`);

--
-- Indexes for table `moderator_privileges_map`
--
ALTER TABLE `moderator_privileges_map`
  ADD PRIMARY KEY (`privileges_id`);

--
-- Indexes for table `module_settings`
--
ALTER TABLE `module_settings`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_policy`
--
ALTER TABLE `product_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`product_size_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `request_fund`
--
ALTER TABLE `request_fund`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_info`
--
ALTER TABLE `shipping_info`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `shipping_module_settings`
--
ALTER TABLE `shipping_module_settings`
  ADD PRIMARY KEY (`ship_module_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `storecredit_shipping_info`
--
ALTER TABLE `storecredit_shipping_info`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `storecredit_transaction`
--
ALTER TABLE `storecredit_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storecredit_transaction_mapping`
--
ALTER TABLE `storecredit_transaction_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `store_credit_save`
--
ALTER TABLE `store_credit_save`
  ADD PRIMARY KEY (`storecredit_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_mapping`
--
ALTER TABLE `transaction_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `view_count_location`
--
ALTER TABLE `view_count_location`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_moderator_privileges_map`
--
ALTER TABLE `admin_moderator_privileges_map`
  MODIFY `privileges_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `attribute_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `blog_settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
--
-- AUTO_INCREMENT for table `chat_users`
--
ALTER TABLE `chat_users`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `cms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `color_code`
--
ALTER TABLE `color_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `duration`
--
ALTER TABLE `duration`
  MODIFY `duration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `free_gift`
--
ALTER TABLE `free_gift`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `image_resize`
--
ALTER TABLE `image_resize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `merchant_attribute`
--
ALTER TABLE `merchant_attribute`
  MODIFY `merchant_attribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `moderator_privileges_map`
--
ALTER TABLE `moderator_privileges_map`
  MODIFY `privileges_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `module_settings`
--
ALTER TABLE `module_settings`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shipping_module_settings`
--
ALTER TABLE `shipping_module_settings`
  MODIFY `ship_module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
