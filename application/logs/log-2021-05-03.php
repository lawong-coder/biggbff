<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-03 16:49:55 --> Query error: Duplicate column name 'contact_sec_title' - Invalid query: 
ALTER TABLE theme_settings ADD COLUMN contact_sec_title VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_us_slug_title;

ERROR - 2021-05-03 16:49:55 --> Array
ERROR - 2021-05-03 16:49:55 --> Query error: Duplicate column name 'contact_sec_subtitle' - Invalid query: 
ALTER TABLE theme_settings ADD COLUMN contact_sec_subtitle TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_sec_title;

ERROR - 2021-05-03 16:49:55 --> Array
ERROR - 2021-05-03 16:49:55 --> Query error: Duplicate column name 'contact_us_email' - Invalid query: 
ALTER TABLE theme_settings ADD COLUMN contact_us_email VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_sec_subtitle;

ERROR - 2021-05-03 16:49:55 --> Array
ERROR - 2021-05-03 16:49:55 --> Query error: Duplicate column name 'contact_banner_image' - Invalid query: 
ALTER TABLE theme_settings ADD COLUMN contact_banner_image VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER contact_us_iframe;

ERROR - 2021-05-03 16:49:55 --> Array
ERROR - 2021-05-03 16:49:55 --> Unable to delete cache file for http://jackstore.co/
ERROR - 2021-05-03 21:13:17 --> 404 Page Not Found: 
ERROR - 2021-05-03 22:47:29 --> 404 Page Not Found: 
ERROR - 2021-05-03 23:00:56 --> 404 Page Not Found: 
