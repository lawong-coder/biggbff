SET @ORIGINAL_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS,
    FOREIGN_KEY_CHECKS = 0;
SET @ORIGINAL_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @ORIGINAL_SQL_MODE = @@SQL_MODE,
    SQL_MODE = 'ALLOW_INVALID_DATES,NO_AUTO_VALUE_ON_ZERO';

-----------------create all tables if not exists--------------------

#
# TABLE STRUCTURE FOR: affiliate_action
#

CREATE TABLE IF NOT EXISTS `affiliate_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text CHARACTER SET utf8 DEFAULT NULL,
  `country_code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `commission` double NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: affiliateads
#

CREATE TABLE IF NOT EXISTS `affiliateads` (
  `affiliateads_id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliateads_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_metadata` longtext CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_ipaddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_created_by` int(11) DEFAULT NULL,
  `affiliateads_updated_by` int(11) DEFAULT NULL,
  `affiliateads_created` datetime DEFAULT NULL,
  `affiliateads_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`affiliateads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: cart
#

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_id` varchar(200) CHARACTER SET utf8 NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_variation` text CHARACTER SET utf8 NOT NULL,
  `refer_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `coupon_code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `coupon_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `coupon_discount` double DEFAULT 0,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: categories
#

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `color` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '#000000',
  `parent_id` int(11) NOT NULL,
  `tag` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: cities
#

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: clicks_views
#

CREATE TABLE IF NOT EXISTS `clicks_views` (
  `clicks_views_id` int(11) NOT NULL AUTO_INCREMENT,
  `clicks_views_refuser_id` int(11) DEFAULT NULL,
  `clicks_views_action_id` int(11) DEFAULT NULL,
  `clicks_views_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_status` int(11) DEFAULT NULL,
  `clicks_views_click` int(11) DEFAULT NULL,
  `clicks_views_view` int(11) NOT NULL,
  `clicks_views_sale` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_referrer` text CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_user_agent` text CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_os` text CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_browser` text CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_isp` text CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_ipaddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_created_by` int(11) DEFAULT NULL,
  `clicks_views_updated_by` int(11) DEFAULT NULL,
  `clicks_views_created` datetime DEFAULT NULL,
  `clicks_views_updated` datetime DEFAULT NULL,
  `clicks_views_click_commission` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_sale_commission` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_data_commission` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_view_commission` int(11) NOT NULL,
  PRIMARY KEY (`clicks_views_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: countries
#

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `phonecode` int(11) NOT NULL,
  `lat` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `lng` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: coupon
#

CREATE TABLE IF NOT EXISTS `coupon` (
  `coupon_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 NOT NULL,
  `type` char(1) CHARACTER SET utf8 NOT NULL,
  `discount` decimal(15,4) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `uses_total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `products` text CHARACTER SET utf8 DEFAULT NULL,
  `vendor_id` int(11) DEFAULT 0,
  `allow_for` varchar(1) CHARACTER SET utf8 NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: currency
#

CREATE TABLE IF NOT EXISTS `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) CHARACTER SET utf8 NOT NULL,
  `code` varchar(3) CHARACTER SET utf8 NOT NULL,
  `symbol_left` varchar(12) CHARACTER SET utf8 NOT NULL,
  `symbol_right` varchar(12) CHARACTER SET utf8 NOT NULL,
  `decimal_place` char(1) CHARACTER SET utf8 NOT NULL,
  `value` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_default` int(11) NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: form
#

CREATE TABLE IF NOT EXISTS `form` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `seo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fevi_icon` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sale_commision_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sale_commision_value` double DEFAULT 0,
  `click_commision_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `click_commision_ppc` double DEFAULT 0,
  `click_commision_per` double DEFAULT 0,
  `comment` text CHARACTER SET utf8 DEFAULT NULL,
  `form_recursion_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `form_recursion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `recursion_custom_time` bigint(20) NOT NULL,
  `recursion_endtime` datetime DEFAULT NULL,
  `product` text CHARACTER SET utf8 DEFAULT NULL,
  `coupon` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `allow_for` text CHARACTER SET utf8 NOT NULL,
  `footer_title` text CHARACTER SET utf8 NOT NULL,
  `google_analitics` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: form_action
#

CREATE TABLE IF NOT EXISTS `form_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: form_coupon
#

CREATE TABLE IF NOT EXISTS `form_coupon` (
  `form_coupon_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 NOT NULL,
  `type` char(1) CHARACTER SET utf8 NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `discount` decimal(15,4) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `uses_total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`form_coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_admin_clicks_action
#

CREATE TABLE IF NOT EXISTS `integration_admin_clicks_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `product_id` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `commission` int(11) DEFAULT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_id` int(11) NOT NULL,
  `tools_id` int(11) NOT NULL,
  `country_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `script_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_action` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_category
#

CREATE TABLE IF NOT EXISTS `integration_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_clicks_action
#

CREATE TABLE IF NOT EXISTS `integration_clicks_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `product_id` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `commission` int(11) DEFAULT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_id` int(11) NOT NULL,
  `tools_id` int(11) NOT NULL,
  `country_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `script_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_action` int(11) NOT NULL,
  `custom_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_clicks_logs
#

CREATE TABLE IF NOT EXISTS `integration_clicks_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `base_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `browserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browserVersion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `systemString` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `osPlatform` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `osVersion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `osShortVersion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isMobile` int(11) NOT NULL,
  `mobileName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `osArch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isIntel` int(11) NOT NULL,
  `isAMD` int(11) NOT NULL,
  `isPPC` int(11) NOT NULL,
  `ip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `click_id` int(11) NOT NULL,
  `click_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_orders
#

CREATE TABLE IF NOT EXISTS `integration_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_ids` varchar(888) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double NOT NULL,
  `currency` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `commission_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` double NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_id` int(11) NOT NULL,
  `script_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `vendor_id` int(11) DEFAULT NULL,
  `admin_tran` int(11) DEFAULT NULL,
  `affiliate_tran` int(11) DEFAULT NULL,
  `custom_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_programs
#

CREATE TABLE IF NOT EXISTS `integration_programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_sale` double DEFAULT 0,
  `sale_status` int(11) DEFAULT NULL,
  `commission_number_of_click` int(11) DEFAULT NULL,
  `commission_click_commission` double DEFAULT 0,
  `click_status` int(11) DEFAULT NULL,
  `admin_commission_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_commission_sale` double DEFAULT 0,
  `admin_commission_number_of_click` int(11) DEFAULT NULL,
  `admin_commission_click_commission` double DEFAULT 0,
  `admin_click_status` int(11) DEFAULT NULL,
  `admin_sale_status` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `click_allow` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_refer_product_action
#

CREATE TABLE IF NOT EXISTS `integration_refer_product_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `script_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `base_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `count_for` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ads_id` int(11) NOT NULL,
  `is_action` int(11) NOT NULL,
  `tools_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_tools
#

CREATE TABLE IF NOT EXISTS `integration_tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) DEFAULT NULL,
  `program_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'program',
  `action_click` double NOT NULL,
  `action_amount` double NOT NULL,
  `general_click` double NOT NULL,
  `general_amount` double NOT NULL,
  `general_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_for` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recursion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recursion_custom_time` bigint(20) NOT NULL,
  `recursion_endtime` datetime DEFAULT NULL,
  `marketpostback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_action_click` int(11) DEFAULT NULL,
  `admin_action_amount` double DEFAULT 0,
  `admin_general_click` int(11) DEFAULT NULL,
  `admin_general_amount` double DEFAULT 0,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_tools_ads
#

CREATE TABLE IF NOT EXISTS `integration_tools_ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tools_id` int(11) NOT NULL,
  `ads_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: language
#

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `is_rtl` int(11) NOT NULL DEFAULT 0,
  `flag` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: last_seen
#

CREATE TABLE IF NOT EXISTS `last_seen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: mail_templates
#

CREATE TABLE IF NOT EXISTS `mail_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_subject` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_subject` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_text` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_text` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortcode` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: membership_buy_history
#

CREATE TABLE IF NOT EXISTS `membership_buy_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buy_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: membership_plans
#

CREATE TABLE IF NOT EXISTS `membership_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `billing_period` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `price` double DEFAULT 0,
  `special` double DEFAULT 0,
  `custom_period` double DEFAULT 0,
  `have_trail` int(11) DEFAULT NULL,
  `free_trail` double DEFAULT 0,
  `total_day` int(11) DEFAULT NULL,
  `bonus` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `description` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `label_text` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL,
  `label_background` varchar(50) CHARACTER SET utf8mb4 DEFAULT '#28A745',
  `label_color` varchar(50) CHARACTER SET utf8mb4 DEFAULT '#FFFFFF',
  `sort_order` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: membership_user
#

CREATE TABLE IF NOT EXISTS `membership_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_day` int(11) DEFAULT NULL,
  `expire_at` datetime DEFAULT NULL,
  `started_at` datetime NOT NULL,
  `status_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_lifetime` int(11) NOT NULL DEFAULT 0,
  `payment_method` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `payment_details` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `total` double DEFAULT 0,
  `bonus_commission` double DEFAULT 0,
  `expire_mail_sent` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: meta_data
#

CREATE TABLE IF NOT EXISTS `meta_data` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: notification
#

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_viewfor` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `notification_view_user_id` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `notification_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `notification_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notification_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notification_actionID` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notification_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `notification_is_read` int(11) NOT NULL,
  `notification_ipaddress` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notification_created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: order
#

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `txn_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `zip_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `payment_method` varchar(50) CHARACTER SET utf8 NOT NULL,
  `shipping_cost` double NOT NULL,
  `total` double NOT NULL,
  `coupon_discount` double NOT NULL,
  `total_commition` double NOT NULL,
  `shipping_charge` double NOT NULL,
  `currency_code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `allow_shipping` int(11) NOT NULL DEFAULT 1,
  `ip` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  `files` text CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: order_products
#

CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variation` text CHARACTER SET utf8 NOT NULL,
  `refer_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `form_id` int(11) NOT NULL,
  `msrp` double NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `commission` double NOT NULL,
  `commission_type` varchar(20) CHARACTER SET utf8 NOT NULL,
  `admin_commission` double DEFAULT 0,
  `admin_commission_type` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `vendor_commission` double DEFAULT 0,
  `vendor_commission_type` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `coupon_code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `coupon_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `coupon_discount` double NOT NULL DEFAULT 0,
  `allow_shipping` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: order_proof
#

CREATE TABLE IF NOT EXISTS `order_proof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `proof` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: orders_history
#

CREATE TABLE IF NOT EXISTS `orders_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_mode` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'paypal',
  `history_type` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'payment',
  `paypal_status` varchar(20) CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `order_status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: pagebuilder_theme
#

CREATE TABLE IF NOT EXISTS `pagebuilder_theme` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: pagebuilder_theme_page
#

CREATE TABLE IF NOT EXISTS `pagebuilder_theme_page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_tab` int(11) NOT NULL DEFAULT 0,
  `meta_tag_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `design` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_page` int(11) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: password_resets
#

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(555) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: payment_detail
#

CREATE TABLE IF NOT EXISTS `payment_detail` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_bank_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `payment_account_number` varchar(255) CHARACTER SET utf8 NOT NULL,
  `payment_account_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `payment_ifsc_code` varchar(255) CHARACTER SET utf8 NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_ipaddress` varchar(20) CHARACTER SET utf8 NOT NULL,
  `payment_created_date` datetime NOT NULL,
  `payment_updated_date` datetime NOT NULL,
  `payment_created_by` int(11) NOT NULL,
  `payment_updated_by` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: paypal_accounts
#

CREATE TABLE IF NOT EXISTS `paypal_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paypal_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product
#

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_description` text CHARACTER SET utf8 NOT NULL,
  `product_short_description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `product_tags` text CHARACTER SET utf8 NOT NULL,
  `product_msrp` double NOT NULL,
  `product_price` double NOT NULL,
  `product_sku` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_share_count` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_click_count` int(11) DEFAULT 0,
  `product_view_count` int(11) DEFAULT 0,
  `product_sales_count` int(11) DEFAULT 0,
  `product_featured_image` text CHARACTER SET utf8 NOT NULL,
  `product_banner` text CHARACTER SET utf8 NOT NULL,
  `product_video` text CHARACTER SET utf8 NOT NULL,
  `product_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_commision_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_commision_value` double NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_ipaddress` varchar(20) CHARACTER SET utf8 NOT NULL,
  `product_created_date` datetime NOT NULL,
  `product_updated_date` datetime NOT NULL,
  `product_created_by` int(11) NOT NULL,
  `product_updated_by` int(11) NOT NULL,
  `product_click_commision_type` varchar(10) CHARACTER SET utf8 NOT NULL,
  `product_click_commision_ppc` double NOT NULL,
  `product_click_commision_per` double NOT NULL,
  `product_total_commission` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `product_recursion_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_recursion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `recursion_custom_time` bigint(20) NOT NULL,
  `recursion_endtime` datetime DEFAULT NULL,
  `view` int(11) NOT NULL,
  `on_store` int(11) NOT NULL DEFAULT 0,
  `downloadable_files` text CHARACTER SET utf8 NOT NULL,
  `allow_shipping` int(11) NOT NULL DEFAULT 1,
  `allow_upload_file` int(11) NOT NULL,
  `allow_comment` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `product_avg_rating` int(11) NOT NULL DEFAULT 0,
  `product_variations` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_action
#

CREATE TABLE IF NOT EXISTS `product_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_action_admin
#

CREATE TABLE IF NOT EXISTS `product_action_admin` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_affiliate
#

CREATE TABLE IF NOT EXISTS `product_affiliate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `admin_commission_value` double DEFAULT 0,
  `admin_click_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `admin_click_amount` double DEFAULT 0,
  `admin_click_count` int(11) DEFAULT NULL,
  `affiliate_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `affiliate_commission_value` double DEFAULT 0,
  `affiliate_click_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `affiliate_click_count` int(11) DEFAULT NULL,
  `affiliate_click_amount` double DEFAULT 0,
  `comment` text CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_categories
#

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_media_upload
#

CREATE TABLE IF NOT EXISTS `product_media_upload` (
  `product_media_upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_media_upload_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_path` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_video_image` varchar(255) CHARACTER SET utf8 DEFAULT 'no-image.jpg',
  `product_media_upload_status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_ipaddress` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_created_date` datetime DEFAULT NULL,
  `product_media_upload_created_by` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_os` text CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_browser` text CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_isp` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`product_media_upload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: productslog
#

CREATE TABLE IF NOT EXISTS `productslog` (
  `productslog_id` int(11) NOT NULL AUTO_INCREMENT,
  `productslog_user_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `productslog_status` int(11) DEFAULT NULL,
  `productslog_click` int(11) DEFAULT NULL,
  `productslog_view` int(11) DEFAULT NULL,
  `productslog_referrer` text CHARACTER SET utf8 DEFAULT NULL,
  `productslog_user_agent` text CHARACTER SET utf8 DEFAULT NULL,
  `productslog_os` text CHARACTER SET utf8 DEFAULT NULL,
  `productslog_browser` text CHARACTER SET utf8 DEFAULT NULL,
  `productslog_isp` text CHARACTER SET utf8 DEFAULT NULL,
  `productslog_ipaddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `productslog_created_by` int(11) DEFAULT NULL,
  `productslog_updated_by` int(11) DEFAULT NULL,
  `productslog_created` datetime DEFAULT NULL,
  `productslog_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`productslog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: rating
#

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_user_id` int(11) DEFAULT NULL,
  `rating_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `rating_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `rating_status` int(11) DEFAULT NULL,
  `rating_number` int(11) NOT NULL,
  `rating_comments` text CHARACTER SET utf8 DEFAULT NULL,
  `rating_referrer` text CHARACTER SET utf8 DEFAULT NULL,
  `rating_user_agent` text CHARACTER SET utf8 DEFAULT NULL,
  `rating_os` text CHARACTER SET utf8 DEFAULT NULL,
  `rating_browser` text CHARACTER SET utf8 DEFAULT NULL,
  `rating_isp` text CHARACTER SET utf8 DEFAULT NULL,
  `rating_ipaddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `rating_created_by` int(11) DEFAULT NULL,
  `rating_updated_by` int(11) DEFAULT NULL,
  `rating_created` datetime DEFAULT NULL,
  `rating_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: refer_market_action
#

CREATE TABLE IF NOT EXISTS `refer_market_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text CHARACTER SET utf8 DEFAULT NULL,
  `commission` double NOT NULL DEFAULT 0,
  `count_for` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: refer_product_action
#

CREATE TABLE IF NOT EXISTS `refer_product_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `count_for` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: setting
#

CREATE TABLE IF NOT EXISTS `setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) CHARACTER SET utf8 NOT NULL,
  `setting_value` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `setting_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `setting_status` int(11) NOT NULL,
  `setting_ipaddress` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: shipping_address
#

CREATE TABLE IF NOT EXISTS `shipping_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `zip_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: slugs
#

CREATE TABLE IF NOT EXISTS `slugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: states
#

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_faq
#

CREATE TABLE IF NOT EXISTS `theme_faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_theme_id` int(11) NOT NULL,
  `faq_question` text COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `Created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_home_sections_setting
#

CREATE TABLE IF NOT EXISTS `theme_home_sections_setting` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `sec_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sec_position` tinyint(1) NOT NULL,
  `sec_is_enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_homecontent
#

CREATE TABLE IF NOT EXISTS `theme_homecontent` (
  `homecontent_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`homecontent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_links
#

CREATE TABLE IF NOT EXISTS `theme_links` (
  `tlink_id` int(11) NOT NULL AUTO_INCREMENT,
  `tlink_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tlink_url` text COLLATE utf8_unicode_ci NOT NULL,
  `tlink_position` tinyint(4) NOT NULL,
  `tlink_status` tinyint(1) NOT NULL DEFAULT 1,
  `tlink_target_blank` tinyint(1) NOT NULL DEFAULT 1,
  `tlink_created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`tlink_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_pages
#

CREATE TABLE IF NOT EXISTS `theme_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `page_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `top_banner_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `top_banner_sub_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_content_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `link_footer_section` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_recommendation
#

CREATE TABLE IF NOT EXISTS `theme_recommendation` (
  `recommendation_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`recommendation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_sections
#

CREATE TABLE IF NOT EXISTS `theme_sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_settings
#

CREATE TABLE IF NOT EXISTS `theme_settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `top_banner_slider` text COLLATE utf8_unicode_ci NOT NULL,
  `membership_top_title` text COLLATE utf8_unicode_ci NOT NULL,
  `membership_sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_t_title` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_slug_title` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_sec_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `contact_sec_subtitle` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_full_address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_iframe` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_banner_image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `youtube_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instegram_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp_default_msg` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `footer_about_title` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_about_text` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_menu_title_a` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_menu_title_b` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_menu_title_c` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_menu_title_d` text COLLATE utf8_unicode_ci NOT NULL,
  `banner_bottom_title` text COLLATE utf8_unicode_ci NOT NULL,
  `banner_bottom_slug` text COLLATE utf8_unicode_ci NOT NULL,
  `banner_button_text` text COLLATE utf8_unicode_ci NOT NULL,
  `banner_button_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `copyright` text COLLATE utf8_unicode_ci NOT NULL,
  `video_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `video_sub_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `login_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `reg_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `terms_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `login_content` text COLLATE utf8_unicode_ci NOT NULL,
  `reg_content` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_content` text COLLATE utf8_unicode_ci NOT NULL,
  `home_section_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `home_section_subtitle` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation_section_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation_section_subtitle` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `faq_banner_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `faq_section_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `faq_section_subtitle` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `faq_banner_image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `homepage_video_section_bg` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_sliders
#

CREATE TABLE IF NOT EXISTS `theme_sliders` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_videos
#

CREATE TABLE IF NOT EXISTS `theme_videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `video_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `video_sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `video_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: user_payment_request
#

CREATE TABLE IF NOT EXISTS `user_payment_request` (
  `user_payment_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_payment_request_user_id` int(11) DEFAULT NULL,
  `user_payment_request_amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_amount_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_amount_status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_payment_mode` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_ipaddress` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_created_date` datetime DEFAULT NULL,
  `user_payment_request_updated_date` datetime DEFAULT NULL,
  `user_payment_request_user_agent` text CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_os` text CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_browser` text CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_isp` text CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_created_by` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_payment_request_updated_by` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_payment_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: users
#

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL DEFAULT -1,
  `refid` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 DEFAULT 'user',
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `twaddress` text CHARACTER SET utf8 NOT NULL,
  `address1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ucity` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ucountry` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `state` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `uzip` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `online` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '1',
  `unique_url` text CHARACTER SET utf8 DEFAULT NULL,
  `bitly_unique_url` text CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `facebook_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `twitter_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `umode` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `PhoneNumber` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `Addressone` text CHARACTER SET utf8 DEFAULT NULL,
  `Addresstwo` text CHARACTER SET utf8 DEFAULT NULL,
  `City` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `Country` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `StateProvince` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `Zip` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `f_link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `t_link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `l_link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `products_wishlist` text CHARACTER SET utf8 DEFAULT NULL,
  `product_commission` double DEFAULT 0,
  `affiliate_commission` double DEFAULT 0,
  `product_commission_paid` double DEFAULT 0,
  `affiliate_commission_paid` double DEFAULT 0,
  `product_total_click` int(11) DEFAULT NULL,
  `product_total_sale` int(11) DEFAULT NULL,
  `affiliate_total_click` int(11) DEFAULT NULL,
  `sale_commission` double DEFAULT 0,
  `sale_commission_paid` double DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `reg_approved` tinyint(1) NOT NULL DEFAULT 1,
  `is_vendor` tinyint(1) NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL,
  `last_ping` datetime DEFAULT NULL,
  `install_location_details` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


#
# TABLE STRUCTURE FOR: vendor_setting
#

CREATE TABLE IF NOT EXISTS `vendor_setting` (
  `user_id` int(11) NOT NULL,
  `vendor_status` int(11) NOT NULL DEFAULT 0,
  `affiliate_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `affiliate_commission_value` double DEFAULT 0,
  `affiliate_click_count` int(11) DEFAULT NULL,
  `affiliate_click_amount` double DEFAULT 0,
  `form_affiliate_click_count` int(11) DEFAULT NULL,
  `form_affiliate_click_amount` double DEFAULT 0,
  `form_affiliate_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `form_affiliate_commission_value` double DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: version_update
#

CREATE TABLE IF NOT EXISTS `version_update` (
  `update_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`update_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet
#

CREATE TABLE IF NOT EXISTS `wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `amount` double NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dis_type` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `reference_id` int(11) NOT NULL,
  `reference_id_2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ip_details` text CHARACTER SET utf8 DEFAULT NULL,
  `comm_from` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'store',
  `domain_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `page_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_action` int(11) NOT NULL DEFAULT 0,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `group_id` double DEFAULT 0,
  `is_vendor` int(11) NOT NULL DEFAULT 0,
  `wv` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_recursion
#

CREATE TABLE IF NOT EXISTS `wallet_recursion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `custom_time` bigint(20) DEFAULT NULL,
  `next_transaction` datetime NOT NULL,
  `last_transaction` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_request
#

CREATE TABLE IF NOT EXISTS `wallet_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_requests
#

CREATE TABLE IF NOT EXISTS `wallet_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tran_ids` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prefer_method` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_requests_history
#

CREATE TABLE IF NOT EXISTS `wallet_requests_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `req_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `comment` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;






-------------------update sql start---------------------------------

CREATE TABLE IF NOT EXISTS membership_user
(
   id                  INT(11) NOT NULL AUTO_INCREMENT,
   plan_id             INT(11) NOT NULL,
   user_id             INT(11) NOT NULL,
   total_day           INT(11) NULL DEFAULT NULL,
   expire_at           DATETIME(0) NULL DEFAULT NULL,
   started_at          DATETIME(0) NOT NULL,
   status_id           INT(11) NOT NULL,
   is_active           INT(11) NOT NULL,
   is_lifetime         INT(11) NOT NULL DEFAULT 0,
   payment_method      VARCHAR(50)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NULL
                         DEFAULT NULL,
   payment_details     TEXT
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NULL
                         DEFAULT NULL,
   total               DOUBLE(22, 0) NULL DEFAULT 0,
   bonus_commission    DOUBLE(22, 0) NULL DEFAULT 0,
   expire_mail_sent    INT(11) NOT NULL DEFAULT 0,
   created_at          DATETIME(0) NULL DEFAULT NULL,
   PRIMARY KEY(id)
) ENGINE INNODB COLLATE 'utf8_unicode_ci' ROW_FORMAT DEFAULT;

ALTER TABLE categories MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE categories ADD COLUMN IF NOT EXISTS background_image VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER image;

ALTER TABLE categories
   ADD COLUMN IF NOT EXISTS color VARCHAR(50)
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NOT NULL
                DEFAULT '#000000'
   AFTER background_image;

ALTER TABLE categories
   ADD COLUMN IF NOT EXISTS tag INT(11) NOT NULL DEFAULT 0 AFTER parent_id;

ALTER TABLE form_coupon
   COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS theme_sliders
(
   slider_id      INT(11) NOT NULL AUTO_INCREMENT,
   theme_id       INT(11) NOT NULL,
   title          VARCHAR(200)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   description    TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
   image          VARCHAR(250)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   link           VARCHAR(200)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   button_text    VARCHAR(100)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   status         VARCHAR(50)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL
                    DEFAULT '1',
   created        DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(slider_id)
) ENGINE INNODB COLLATE 'utf8_unicode_ci' ROW_FORMAT DEFAULT;

ALTER TABLE integration_programs
   MODIFY COLUMN admin_sale_status INT(11) NULL DEFAULT NULL;

ALTER TABLE integration_programs
   MODIFY COLUMN commission_click_commission DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE integration_programs
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE integration_programs
   MODIFY COLUMN admin_commission_sale DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE integration_programs
   MODIFY COLUMN commission_sale DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE integration_programs
   MODIFY COLUMN click_status INT(11) NULL DEFAULT NULL;

ALTER TABLE integration_programs
   MODIFY COLUMN sale_status INT(11) NULL DEFAULT NULL;

ALTER TABLE integration_programs
   MODIFY COLUMN status INT(11) NULL DEFAULT 1;

ALTER TABLE integration_programs
   MODIFY COLUMN admin_commission_click_commission DOUBLE(22, 0)
                   NULL
                   DEFAULT 0;

ALTER TABLE integration_programs
   MODIFY COLUMN admin_click_status INT(11) NULL DEFAULT NULL;

ALTER TABLE integration_programs
   ADD COLUMN IF NOT EXISTS click_allow VARCHAR(30)
                CHARACTER SET utf8mb4
                COLLATE utf8mb4_unicode_ci
                NULL
                DEFAULT NULL
   AFTER comment;

ALTER TABLE integration_clicks_logs
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE integration_clicks_logs
   ADD COLUMN IF NOT EXISTS custom_data TEXT
                CHARACTER SET utf8mb4
                COLLATE utf8mb4_unicode_ci
                NULL
                DEFAULT NULL;

CREATE TABLE IF NOT EXISTS theme_faq
(
   faq_id          INT(11) NOT NULL AUTO_INCREMENT,
   faq_theme_id    INT(11) NOT NULL,
   faq_question    TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
   faq_answer      TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
   position        VARCHAR(50)
                     CHARACTER SET utf8
                     COLLATE utf8_unicode_ci
                     NOT NULL,
   status          VARCHAR(20)
                     CHARACTER SET utf8
                     COLLATE utf8_unicode_ci
                     NOT NULL
                     DEFAULT '1',
   `Created`       DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(faq_id)
)
ENGINE INNODB 
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

CREATE TABLE IF NOT EXISTS theme_homecontent
(
   homecontent_id    INT(11) NOT NULL AUTO_INCREMENT,
   theme_id          INT(11) NOT NULL,
   title             VARCHAR(200)
                       CHARACTER SET utf8
                       COLLATE utf8_unicode_ci
                       NOT NULL,
   description       LONGTEXT
                       CHARACTER SET utf8
                       COLLATE utf8_unicode_ci
                       NOT NULL,
   image             VARCHAR(250)
                       CHARACTER SET utf8
                       COLLATE utf8_unicode_ci
                       NOT NULL,
   position          VARCHAR(50)
                       CHARACTER SET utf8
                       COLLATE utf8_unicode_ci
                       NOT NULL,
   status            VARCHAR(20)
                       CHARACTER SET utf8
                       COLLATE utf8_unicode_ci
                       NOT NULL
                       DEFAULT '1',
   created           DATETIME(0) NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(homecontent_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE countries
   COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS membership_plans
(
   id                  INT(11) NOT NULL AUTO_INCREMENT,
   name                VARCHAR(200)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NOT NULL,
   type                VARCHAR(10)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NOT NULL,
   billing_period      VARCHAR(15)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NOT NULL,
   price               DOUBLE(22, 0) NULL DEFAULT 0,
   special             DOUBLE(22, 0) NULL DEFAULT 0,
   custom_period       DOUBLE(22, 0) NULL DEFAULT 0,
   have_trail          INT(11) NULL DEFAULT NULL,
   free_trail          DOUBLE(22, 0) NULL DEFAULT 0,
   total_day           INT(11) NULL DEFAULT NULL,
   bonus               DOUBLE(22, 0) NOT NULL,
   status              INT(11) NOT NULL DEFAULT 0,
   description         TEXT
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NULL
                         DEFAULT NULL,
   label_text          VARCHAR(80)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NULL
                         DEFAULT NULL,
   label_background    VARCHAR(50)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NULL
                         DEFAULT '#28A745',
   label_color         VARCHAR(50)
                         CHARACTER SET utf8mb4
                         COLLATE utf8mb4_general_ci
                         NULL
                         DEFAULT '#FFFFFF',
   sort_order          INT(11) NOT NULL,
   updated_at          DATETIME(0) NULL DEFAULT NULL,
   created_at          DATETIME(0) NULL DEFAULT NULL,
   PRIMARY KEY(id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE wallet_recursion
   MODIFY COLUMN endtime DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE wallet_recursion
   COLLATE 'utf8_unicode_ci';

ALTER TABLE refer_market_action
   MODIFY COLUMN commission DOUBLE(22, 0) NOT NULL DEFAULT 0;

ALTER TABLE refer_market_action
   COLLATE 'utf8_unicode_ci';

ALTER TABLE integration_category
   MODIFY COLUMN created_at DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE product
   MODIFY COLUMN recursion_endtime DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE product
   MODIFY COLUMN allow_upload_file INT(11) NOT NULL;

ALTER TABLE product
   MODIFY COLUMN allow_shipping INT(11) NOT NULL DEFAULT 1;

ALTER TABLE product
   MODIFY COLUMN allow_comment INT(11) NOT NULL;

ALTER TABLE product
   MODIFY COLUMN on_store INT(11) NOT NULL DEFAULT 0;

ALTER TABLE product
   ADD COLUMN IF NOT EXISTS product_tags TEXT
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NOT NULL
   AFTER product_short_description;

ALTER TABLE product
   ADD COLUMN IF NOT EXISTS product_msrp DOUBLE(22, 0) NOT NULL AFTER product_tags;

ALTER TABLE product
   ADD COLUMN IF NOT EXISTS product_avg_rating INT(11) NOT NULL DEFAULT 0 AFTER state_id;

ALTER TABLE product
   ADD COLUMN IF NOT EXISTS product_variations TEXT
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NOT NULL;

ALTER TABLE integration_admin_clicks_action
   MODIFY COLUMN commission INT(11) NULL DEFAULT NULL;

ALTER TABLE integration_admin_clicks_action
   MODIFY COLUMN product_id DOUBLE(22, 0) NOT NULL;

ALTER TABLE integration_admin_clicks_action
   MODIFY COLUMN created_at DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE integration_admin_clicks_action
   MODIFY COLUMN is_action INT(11) NOT NULL;

ALTER TABLE integration_admin_clicks_action
   COLLATE 'utf8_unicode_ci';

ALTER TABLE pagebuilder_theme_page
   MODIFY COLUMN new_tab INT(11) NOT NULL DEFAULT 0;

ALTER TABLE pagebuilder_theme_page
   MODIFY COLUMN status INT(11) NOT NULL;

ALTER TABLE pagebuilder_theme_page
   COLLATE 'utf8_unicode_ci';

ALTER TABLE form_action
   MODIFY COLUMN pay_commition INT(11) NOT NULL;

CREATE TABLE IF NOT EXISTS theme_settings
(
   settings_id                        INT(11) NOT NULL AUTO_INCREMENT,
   theme_id                           INT(11) NOT NULL,
   top_banner_slider                  TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   membership_top_title               TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   membership_sub_title               TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_us_t_title                 TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_us_slug_title              TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_sec_title                  VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_sec_subtitle               TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_us_email                   VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_us_full_address            TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_us_phone                   VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_us_iframe                  TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   contact_banner_image               VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   youtube_link                       VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   facebook_link                      VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   twitter_link                       VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   instegram_link                     VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   whatsapp_number                    VARCHAR(20)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   whatsapp_default_msg               VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   footer_about_title                 TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   footer_about_text                  TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   footer_menu_title_a                TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   footer_menu_title_b                TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   footer_menu_title_c                TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   footer_menu_title_d                TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   banner_bottom_title                TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   banner_bottom_slug                 TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   banner_button_text                 TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   banner_button_link                 VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   copyright                          TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   video_title                        VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   video_sub_title                    VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   login_img                          VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   reg_img                            VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   terms_img                          VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   login_content                      TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   reg_content                        TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   terms_content                      TEXT
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   home_section_title                 VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   home_section_subtitle              VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   recommendation_section_title       VARCHAR(200)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   recommendation_section_subtitle    VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   faq_banner_title                   VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   faq_section_title                  VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   faq_section_subtitle               VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   faq_banner_image                   VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   homepage_video_section_bg          VARCHAR(250)
                                        CHARACTER SET utf8
                                        COLLATE utf8_unicode_ci
                                        NOT NULL,
   PRIMARY KEY(settings_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE wallet_request
   MODIFY COLUMN status INT(11) NOT NULL;

ALTER TABLE wallet_request
   COLLATE 'utf8_unicode_ci';

ALTER TABLE wallet
   MODIFY COLUMN status INT(11) NOT NULL DEFAULT 1;

ALTER TABLE wallet
   MODIFY COLUMN is_action INT(11) NOT NULL DEFAULT 0;

ALTER TABLE wallet
   MODIFY COLUMN is_vendor INT(11) NOT NULL DEFAULT 0;

ALTER TABLE wallet
   MODIFY COLUMN group_id DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE wallet
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE product_action_admin
   MODIFY COLUMN pay_commition INT(11) NOT NULL;

ALTER TABLE integration_orders
   MODIFY COLUMN order_id VARCHAR(255)
                   CHARACTER SET utf8mb4
                   COLLATE utf8mb4_unicode_ci
                   NOT NULL;

ALTER TABLE integration_orders
   MODIFY COLUMN status INT(11) NOT NULL DEFAULT 0;

ALTER TABLE integration_orders
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE integration_orders
   ADD COLUMN IF NOT EXISTS custom_data TEXT
                CHARACTER SET utf8mb4
                COLLATE utf8mb4_unicode_ci
                NULL
                DEFAULT NULL;

ALTER TABLE integration_orders
   COLLATE 'utf8_unicode_ci';

ALTER TABLE password_resets
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE product_action
   MODIFY COLUMN pay_commition INT(11) NOT NULL;

CREATE TABLE IF NOT EXISTS theme_links
(
   tlink_id              INT(11) NOT NULL AUTO_INCREMENT,
   tlink_title           VARCHAR(250)
                           CHARACTER SET utf8
                           COLLATE utf8_unicode_ci
                           NOT NULL,
   tlink_url             TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
   tlink_position        TINYINT(4) NOT NULL,
   tlink_status          TINYINT(1) NOT NULL DEFAULT 1,
   tlink_target_blank    TINYINT(1) NOT NULL DEFAULT 1,
   tlink_created_on      TIMESTAMP(0)
                           NOT NULL
                           DEFAULT CURRENT_TIMESTAMP()
                           ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY(tlink_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

CREATE TABLE IF NOT EXISTS theme_pages
(
   page_id                 INT(11) NOT NULL AUTO_INCREMENT,
   theme_id                INT(11) NOT NULL,
   page_name               VARCHAR(255)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   slug                    VARCHAR(255)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   top_banner_title        VARCHAR(255)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   top_banner_sub_title    VARCHAR(255)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   page_content_title      VARCHAR(255)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   page_content            LONGTEXT
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   link_footer_section     VARCHAR(200)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   position                VARCHAR(50)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL,
   status                  VARCHAR(50)
                             CHARACTER SET utf8
                             COLLATE utf8_unicode_ci
                             NOT NULL
                             DEFAULT '1',
   created                 DATETIME(0) NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(page_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE cities
   COLLATE 'utf8_unicode_ci';

ALTER TABLE last_seen
   COLLATE 'utf8_unicode_ci';

ALTER TABLE affiliate_action
   MODIFY COLUMN commission DOUBLE(22, 0) NOT NULL DEFAULT 0;

ALTER TABLE affiliate_action
   COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS membership_buy_history
(
   id            INT(11) NOT NULL AUTO_INCREMENT,
   buy_id        INT(11) NOT NULL,
   status_id     INT(11) NOT NULL,
   comment       VARCHAR(255)
                   CHARACTER SET utf8mb4
                   COLLATE utf8mb4_general_ci
                   NOT NULL,
   created_at    DATETIME(0) NULL DEFAULT NULL,
   PRIMARY KEY(id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE integration_tools
   MODIFY COLUMN admin_action_amount DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE integration_tools
   MODIFY COLUMN recursion_endtime DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE integration_tools
   MODIFY COLUMN status INT(11) NOT NULL;

ALTER TABLE integration_tools
   MODIFY COLUMN admin_general_amount DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE integration_tools
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

CREATE TABLE IF NOT EXISTS theme_videos
(
   video_id           INT(11) NOT NULL AUTO_INCREMENT,
   theme_id           INT(11) NOT NULL,
   video_title        VARCHAR(200)
                        CHARACTER SET utf8
                        COLLATE utf8_unicode_ci
                        NOT NULL,
   video_sub_title    TEXT
                        CHARACTER SET utf8
                        COLLATE utf8_unicode_ci
                        NOT NULL,
   video_link         VARCHAR(200)
                        CHARACTER SET utf8
                        COLLATE utf8_unicode_ci
                        NOT NULL,
   position           VARCHAR(50)
                        CHARACTER SET utf8
                        COLLATE utf8_unicode_ci
                        NOT NULL,
   status             VARCHAR(50)
                        CHARACTER SET utf8
                        COLLATE utf8_unicode_ci
                        NOT NULL
                        DEFAULT '1',
   created            DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(video_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE setting
   MODIFY COLUMN setting_value MEDIUMTEXT
                   CHARACTER SET utf8
                   COLLATE utf8_general_ci
                   NULL
                   DEFAULT NULL;

ALTER TABLE `order`
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE `order`
   MODIFY COLUMN comment TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_general_ci
                   NOT NULL;

ALTER TABLE payment_detail
   COLLATE 'utf8_unicode_ci';

ALTER TABLE coupon
   COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS theme_recommendation
(
   recommendation_id    INT(11) NOT NULL AUTO_INCREMENT,
   theme_id             INT(11) NOT NULL,
   title                VARCHAR(200)
                          CHARACTER SET utf8
                          COLLATE utf8_unicode_ci
                          NOT NULL,
   occupation           VARCHAR(100)
                          CHARACTER SET utf8
                          COLLATE utf8_unicode_ci
                          NOT NULL,
   description          TEXT
                          CHARACTER SET utf8
                          COLLATE utf8_unicode_ci
                          NOT NULL,
   image                VARCHAR(250)
                          CHARACTER SET utf8
                          COLLATE utf8_unicode_ci
                          NOT NULL,
   position             VARCHAR(50)
                          CHARACTER SET utf8
                          COLLATE utf8_unicode_ci
                          NOT NULL,
   status               VARCHAR(20)
                          CHARACTER SET utf8
                          COLLATE utf8_unicode_ci
                          NOT NULL
                          DEFAULT '1',
   created              DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(recommendation_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

CREATE TABLE IF NOT EXISTS theme_home_sections_setting
(
   sec_id           INT(11) NOT NULL AUTO_INCREMENT,
   theme_id         INT(11) NOT NULL,
   sec_title        VARCHAR(100)
                      CHARACTER SET utf8
                      COLLATE utf8_unicode_ci
                      NOT NULL,
   sec_position     TINYINT(1) NOT NULL,
   sec_is_enable    TINYINT(1) NOT NULL,
   PRIMARY KEY(sec_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE users
   MODIFY COLUMN sale_commission_paid DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE users
   MODIFY COLUMN product_commission DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE users
   MODIFY COLUMN affiliate_commission_paid DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE users
   MODIFY COLUMN affiliate_commission DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE users
   MODIFY COLUMN product_commission_paid DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE users
   MODIFY COLUMN is_vendor TINYINT(1) NOT NULL;

ALTER TABLE users
   MODIFY COLUMN last_ping DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE users
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE users
   MODIFY COLUMN status INT(11) NOT NULL DEFAULT 1;

ALTER TABLE users
   MODIFY COLUMN sale_commission DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE users
   ADD COLUMN IF NOT EXISTS plan_id INT(11) NOT NULL DEFAULT -1 AFTER id;

ALTER TABLE users
   ADD COLUMN IF NOT EXISTS products_wishlist TEXT
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NULL
                DEFAULT NULL
   AFTER l_link;

ALTER TABLE users
   ADD COLUMN IF NOT EXISTS reg_approved TINYINT(1) NOT NULL DEFAULT 1 AFTER status;

ALTER TABLE users
   ADD COLUMN IF NOT EXISTS install_location_details TEXT
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NOT NULL
   AFTER last_ping;


ALTER TABLE form
   MODIFY COLUMN sale_commision_value DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE form
   MODIFY COLUMN click_commision_per DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE form
   MODIFY COLUMN recursion_endtime DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE form
   MODIFY COLUMN click_commision_ppc DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE form
   MODIFY COLUMN status INT(11) NOT NULL DEFAULT 1;

ALTER TABLE form
   COLLATE 'utf8_unicode_ci';

ALTER TABLE states
   COLLATE 'utf8_unicode_ci';

ALTER TABLE product_affiliate
   MODIFY COLUMN admin_commission_value DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE product_affiliate
   MODIFY COLUMN admin_click_amount DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE product_affiliate
   MODIFY COLUMN affiliate_commission_value DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE product_affiliate
   MODIFY COLUMN affiliate_click_amount DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE product_affiliate
   COLLATE 'utf8_unicode_ci';

ALTER TABLE vendor_setting
   MODIFY COLUMN affiliate_commission_value DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE vendor_setting
   MODIFY COLUMN form_affiliate_click_amount DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE vendor_setting
   MODIFY COLUMN vendor_status INT(11) NOT NULL DEFAULT 0;

ALTER TABLE vendor_setting
   MODIFY COLUMN form_affiliate_commission_value DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE vendor_setting
   MODIFY COLUMN affiliate_click_amount DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE vendor_setting
   COLLATE 'utf8_unicode_ci';

ALTER TABLE affiliateads
   COLLATE 'utf8_unicode_ci';

ALTER TABLE currency
   MODIFY COLUMN is_default INT(11) NOT NULL;

ALTER TABLE currency
   MODIFY COLUMN value DOUBLE(22, 0) NOT NULL;

ALTER TABLE currency
   COLLATE 'utf8_unicode_ci';

ALTER TABLE clicks_views
   COLLATE 'utf8_unicode_ci';

ALTER TABLE language
   MODIFY COLUMN status INT(11) NOT NULL;

ALTER TABLE language
   MODIFY COLUMN is_rtl INT(11) NOT NULL DEFAULT 0;

ALTER TABLE language
   COLLATE 'utf8_unicode_ci';

ALTER TABLE pagebuilder_theme
   COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS theme_sections
(
   section_id     INT(11) NOT NULL AUTO_INCREMENT,
   theme_id       INT(11) NOT NULL,
   title          VARCHAR(200)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   description    TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
   image          VARCHAR(250)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   link           VARCHAR(200)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   button_text    VARCHAR(100)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   position       VARCHAR(50)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL,
   status         VARCHAR(20)
                    CHARACTER SET utf8
                    COLLATE utf8_unicode_ci
                    NOT NULL
                    DEFAULT '1',
   created        DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(),
   PRIMARY KEY(section_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE refer_product_action
   MODIFY COLUMN pay_commition INT(11) NOT NULL;

CREATE TABLE IF NOT EXISTS meta_data
(
   meta_id         INT(11) NOT NULL AUTO_INCREMENT,
   meta_key        VARCHAR(50)
                     CHARACTER SET utf8mb4
                     COLLATE utf8mb4_unicode_ci
                     NOT NULL,
   meta_content    LONGTEXT
                     CHARACTER SET utf8mb4
                     COLLATE utf8mb4_unicode_ci
                     NOT NULL,
   PRIMARY KEY(meta_id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE version_update
   MODIFY COLUMN `date` DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE version_update
   COLLATE 'utf8_unicode_ci';

ALTER TABLE integration_refer_product_action
   MODIFY COLUMN is_action INT(11) NOT NULL;

ALTER TABLE integration_refer_product_action
   MODIFY COLUMN pay_commition INT(11) NOT NULL;

ALTER TABLE productslog
   COLLATE 'utf8_unicode_ci';

ALTER TABLE cart
   MODIFY COLUMN quantity INT(11) NOT NULL;

ALTER TABLE cart
   MODIFY COLUMN cart_id INT(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE cart
   MODIFY COLUMN date_added DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE cart
   ADD COLUMN IF NOT EXISTS product_variation TEXT
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NOT NULL
   AFTER product_id;

ALTER TABLE user_payment_request
   COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS slugs
(
   id            INT(11) NOT NULL AUTO_INCREMENT,
   user_id       INT(11) NOT NULL,
   related_id    INT(11) NOT NULL,
   type          VARCHAR(255)
                   CHARACTER SET utf8mb4
                   COLLATE utf8mb4_unicode_ci
                   NOT NULL,
   slug          TEXT
                   CHARACTER SET utf8mb4
                   COLLATE utf8mb4_unicode_ci
                   NOT NULL,
   created_at    DATETIME(0) NULL DEFAULT NULL,
   updated_at    DATETIME(0) NULL DEFAULT NULL,
   PRIMARY KEY(id)
)
ENGINE INNODB
COLLATE 'utf8_unicode_ci'
ROW_FORMAT DEFAULT;

ALTER TABLE integration_clicks_action
   MODIFY COLUMN product_id DOUBLE(22, 0) NOT NULL;

ALTER TABLE integration_clicks_action
   MODIFY COLUMN is_action INT(11) NOT NULL;

ALTER TABLE integration_clicks_action
   MODIFY COLUMN created_at DATETIME(0) NOT NULL DEFAULT CURRENT_TIMESTAMP();

ALTER TABLE integration_clicks_action
   MODIFY COLUMN commission INT(11) NULL DEFAULT NULL;

ALTER TABLE integration_clicks_action
   ADD COLUMN IF NOT EXISTS custom_data TEXT
                CHARACTER SET utf8mb4
                COLLATE utf8mb4_unicode_ci
                NULL
                DEFAULT NULL
   AFTER is_action;

ALTER TABLE wallet_requests_history
   MODIFY COLUMN created_at DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE rating
   COLLATE 'utf8_unicode_ci';

ALTER TABLE order_products
   MODIFY COLUMN allow_shipping INT(11) NOT NULL DEFAULT 1;

ALTER TABLE order_products
   MODIFY COLUMN admin_commission DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE order_products
   MODIFY COLUMN vendor_commission DOUBLE(22, 0) NULL DEFAULT 0;

ALTER TABLE order_products
   ADD COLUMN IF NOT EXISTS variation TEXT
                CHARACTER SET utf8
                COLLATE utf8_general_ci
                NOT NULL
   AFTER product_id;

ALTER TABLE order_products
   ADD COLUMN IF NOT EXISTS msrp DOUBLE(22, 0) NOT NULL AFTER form_id;

DROP TABLE IF EXISTS ci_sessions CASCADE;

-------------- ALETER QUERIES FOR 4.0.0.1 to 4.0.0.2 IGNOR STATMENTS---------------

ALTER TABLE theme_homecontent
   MODIFY COLUMN image VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_homecontent
   MODIFY COLUMN description LONGTEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_homecontent
   MODIFY COLUMN status VARCHAR(20)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL
                   DEFAULT '1';

ALTER TABLE theme_homecontent
   MODIFY COLUMN title VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_homecontent
   MODIFY COLUMN position VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_sections
   MODIFY COLUMN link VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_sections
   MODIFY COLUMN position VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_sections
   MODIFY COLUMN title VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_sections
   MODIFY COLUMN status VARCHAR(20)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL
                   DEFAULT '1';

ALTER TABLE theme_sections
   MODIFY COLUMN image VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_sections
   MODIFY COLUMN button_text VARCHAR(100)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_sections
   MODIFY COLUMN description TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_faq
   MODIFY COLUMN faq_question TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_faq
   MODIFY COLUMN status VARCHAR(20)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL
                   DEFAULT '1';

ALTER TABLE theme_faq
   MODIFY COLUMN position VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_faq
   MODIFY COLUMN faq_answer TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE cart
   MODIFY COLUMN cart_id INT(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE theme_pages
   MODIFY COLUMN status VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL
                   DEFAULT '1';

ALTER TABLE theme_pages
   MODIFY COLUMN position VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN slug VARCHAR(255)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN page_name VARCHAR(255)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN top_banner_sub_title VARCHAR(255)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN top_banner_title VARCHAR(255)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN page_content_title VARCHAR(255)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN page_content LONGTEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_pages
   MODIFY COLUMN link_footer_section VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_videos
   MODIFY COLUMN status VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL
                   DEFAULT '1';

ALTER TABLE theme_videos
   MODIFY COLUMN video_title VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_videos
   MODIFY COLUMN video_sub_title TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_videos
   MODIFY COLUMN position VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_videos
   MODIFY COLUMN video_link VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_recommendation
   MODIFY COLUMN position VARCHAR(50)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_recommendation
   MODIFY COLUMN status VARCHAR(20)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL
                   DEFAULT '1';

ALTER TABLE theme_recommendation
   MODIFY COLUMN image VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_recommendation
   MODIFY COLUMN occupation VARCHAR(100)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_recommendation
   MODIFY COLUMN description TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_recommendation
   MODIFY COLUMN title VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN contact_us_t_title TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN recommendation_section_subtitle VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN recommendation_section_title VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN faq_banner_image VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN faq_banner_title VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN twitter_link VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN reg_content TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN footer_about_text TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN youtube_link VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN footer_menu_title_a TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN video_sub_title VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN faq_section_subtitle VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN top_banner_slider TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN terms_img VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN banner_bottom_title TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN banner_bottom_slug TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN reg_img VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN contact_us_iframe TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN login_content TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN login_img VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN facebook_link VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN whatsapp_number VARCHAR(20)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN footer_menu_title_b TEXT
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN contact_us_phone VARCHAR(200)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings
   MODIFY COLUMN whatsapp_default_msg VARCHAR(250)
                   CHARACTER SET utf8
                   COLLATE utf8_unicode_ci
                   NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN footer_about_title TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN footer_menu_title_d TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN banner_button_link VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN contact_us_full_address TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN instegram_link VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN terms_content TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN home_section_title VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN homepage_video_section_bg VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN video_title VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN copyright TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN membership_top_title TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN faq_section_title VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN contact_us_slug_title TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN membership_sub_title TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN footer_menu_title_c TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN banner_button_text TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings MODIFY COLUMN home_section_subtitle VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_settings ADD COLUMN contact_sec_title VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_us_slug_title;

ALTER TABLE theme_settings ADD COLUMN contact_sec_subtitle TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_sec_title;

ALTER TABLE theme_settings ADD COLUMN contact_us_email VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_sec_subtitle;

ALTER TABLE theme_settings ADD COLUMN contact_banner_image VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_us_iframe;

ALTER TABLE theme_sliders MODIFY COLUMN image VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_sliders MODIFY COLUMN button_text VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_sliders MODIFY COLUMN description TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_sliders MODIFY COLUMN title VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE theme_sliders MODIFY COLUMN status VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1';

ALTER TABLE theme_sliders MODIFY COLUMN link VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

ALTER TABLE membership_user MODIFY COLUMN expire_at DATETIME(0) NULL DEFAULT NULL;

ALTER TABLE membership_user MODIFY COLUMN started_at DATETIME(0) NOT NULL;



--------------INSERT IGNOR STATMENTS---------------

INSERT IGNORE INTO currency SET `currency_id`= '1',`title`= 'US Dollar',`code`= 'USD',`symbol_left`= '$',`symbol_right`= '',`decimal_place`= '2',`value`= '1',`status`= '1',`is_default`= '1',`date_modified`= '2020-12-20 14:48:49';
INSERT IGNORE INTO language SET `id`= '1',`name`= 'English',`is_default`= '1',`is_rtl`= '1',`flag`= './assets/vertical/assets/images/flags/lr.png',`status`= '1';
INSERT IGNORE INTO users SET `id`= '1',`plan_id`= '-1',`refid`= '0',`type`= 'admin',`firstname`= 'Admin',`lastname`= 'Admin',`email`= 'example@gmail.com',`username`= 'admin',`password`= '7479305b3e914c467c0cb2eba57b352b58e1ff37',`phone`= '',`twaddress`= '',`address1`= '',`address2`= '',`ucity`= '',`ucountry`= '',`state`= '',`uzip`= '',`avatar`= NULL,`online`= '1',`unique_url`= '',`bitly_unique_url`= '',`updated_at`= '2021-01-22 10:31:00',`google_id`= '',`facebook_id`= '',`twitter_id`= '',`umode`= '',`PhoneNumber`= NULL,`Addressone`= '',`Addresstwo`= '',`City`= NULL,`Country`= NULL,`StateProvince`= NULL,`Zip`= NULL,`f_link`= '',`t_link`= '',`l_link`= '',`products_wishlist`= NULL,`product_commission`= '0',`affiliate_commission`= '0',`product_commission_paid`= '0',`affiliate_commission_paid`= '0',`product_total_click`= '0',`product_total_sale`= '0',`affiliate_total_click`= '0',`sale_commission`= '0',`sale_commission_paid`= '0',`status`= '1',`reg_approved`= '1',`is_vendor`= '0',`value`= '',`last_ping`= '2021-01-22 10:31:00',`install_location_details`= '',`created_at`= '2021-01-22 10:31:00';
DELETE FROM setting WHERE `setting_ipaddress`= '45.41.132.41';


ALTER TABLE `currency` CHANGE `value` `value` FLOAT DEFAULT 0;

ALTER TABLE `integration_clicks_action` CHANGE `commission` `commission` FLOAT DEFAULT 0;
ALTER TABLE `integration_admin_clicks_action` CHANGE `commission` `commission` FLOAT DEFAULT 0;

ALTER TABLE `form` CHANGE `sale_commision_value` `sale_commision_value` FLOAT DEFAULT 0;
ALTER TABLE `form` CHANGE `click_commision_ppc` `click_commision_ppc` FLOAT DEFAULT 0;
ALTER TABLE `form` CHANGE `click_commision_per` `click_commision_per` FLOAT DEFAULT 0;

ALTER TABLE `integration_programs` CHANGE `commission_sale` `commission_sale` FLOAT DEFAULT 0;
ALTER TABLE `integration_programs` CHANGE `commission_click_commission` `commission_click_commission` FLOAT DEFAULT 0;
ALTER TABLE `integration_programs` CHANGE `admin_commission_sale` `admin_commission_sale` FLOAT DEFAULT 0;
ALTER TABLE `integration_programs` CHANGE `admin_commission_click_commission` `admin_commission_click_commission` FLOAT DEFAULT 0;

ALTER TABLE `integration_tools` CHANGE `admin_action_amount` `admin_action_amount` FLOAT DEFAULT 0;
ALTER TABLE `integration_tools` CHANGE `admin_general_amount` `admin_general_amount` FLOAT DEFAULT 0;

ALTER TABLE `order_products` CHANGE `admin_commission` `admin_commission` FLOAT DEFAULT 0;
ALTER TABLE `order_products` CHANGE `vendor_commission` `vendor_commission` FLOAT DEFAULT 0;

ALTER TABLE `product_affiliate` CHANGE `admin_commission_value` `admin_commission_value` FLOAT DEFAULT 0;
ALTER TABLE `product_affiliate` CHANGE `admin_click_amount` `admin_click_amount` FLOAT DEFAULT 0;
ALTER TABLE `product_affiliate` CHANGE `affiliate_commission_value` `affiliate_commission_value` FLOAT DEFAULT 0;
ALTER TABLE `product_affiliate` CHANGE `affiliate_click_amount` `affiliate_click_amount` FLOAT DEFAULT 0;

ALTER TABLE `users` CHANGE `product_commission` `product_commission` FLOAT DEFAULT 0;
ALTER TABLE `users` CHANGE `affiliate_commission` `affiliate_commission` FLOAT DEFAULT 0;
ALTER TABLE `users` CHANGE `product_commission_paid` `product_commission_paid` FLOAT DEFAULT 0;
ALTER TABLE `users` CHANGE `affiliate_commission_paid` `affiliate_commission_paid` FLOAT DEFAULT 0;
ALTER TABLE `users` CHANGE `sale_commission` `sale_commission` FLOAT DEFAULT 0;
ALTER TABLE `users` CHANGE `sale_commission_paid` `sale_commission_paid` FLOAT DEFAULT 0;

ALTER TABLE `vendor_setting` CHANGE `affiliate_commission_value` `affiliate_commission_value` FLOAT DEFAULT 0;
ALTER TABLE `vendor_setting` CHANGE `affiliate_click_amount` `affiliate_click_amount` FLOAT DEFAULT 0;
ALTER TABLE `vendor_setting` CHANGE `form_affiliate_click_amount` `form_affiliate_click_amount` FLOAT DEFAULT 0;
ALTER TABLE `vendor_setting` CHANGE `form_affiliate_commission_value` `form_affiliate_commission_value` FLOAT DEFAULT 0;


ALTER TABLE `integration_tools` CHANGE `general_click` `general_click` INT(11) NOT NULL;
ALTER TABLE `integration_tools` CHANGE `action_click` `action_click` INT(11) NOT NULL;

ALTER TABLE `integration_tools` CHANGE `recursion_endtime` `recursion_endtime` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `product` CHANGE `recursion_endtime` `recursion_endtime` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `form` CHANGE `recursion_endtime` `recursion_endtime` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;



---------------------END OF FILE---------------------

SET FOREIGN_KEY_CHECKS = @ORIGINAL_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @ORIGINAL_UNIQUE_CHECKS;
SET SQL_MODE = @ORIGINAL_SQL_MODE;