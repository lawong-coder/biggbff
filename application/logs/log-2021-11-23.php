<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-23 00:27:36 --> 404 Page Not Found: 
ERROR - 2021-11-23 00:36:21 --> 404 Page Not Found: 
ERROR - 2021-11-23 00:36:21 --> 404 Page Not Found: 
ERROR - 2021-11-23 00:36:21 --> 404 Page Not Found: 
ERROR - 2021-11-23 01:39:39 --> 404 Page Not Found: 
ERROR - 2021-11-23 01:39:39 --> 404 Page Not Found: 
ERROR - 2021-11-23 01:39:39 --> 404 Page Not Found: 
ERROR - 2021-11-23 02:43:29 --> 404 Page Not Found: 
ERROR - 2021-11-23 02:43:29 --> 404 Page Not Found: 
ERROR - 2021-11-23 02:43:29 --> 404 Page Not Found: 
ERROR - 2021-11-23 03:47:08 --> 404 Page Not Found: 
ERROR - 2021-11-23 03:47:08 --> 404 Page Not Found: 
ERROR - 2021-11-23 03:47:08 --> 404 Page Not Found: 
ERROR - 2021-11-23 12:25:41 --> Query error: Unknown column 'membership_plans.id' in 'on clause' - Invalid query: SELECT
                countries.name as country_name,
                users.id, users.firstname,users.lastname,users.username,users.avatar,users.refid,
                membership_plans.name as plan_name
                FROM users
                LEFT JOIN countries ON countries.id = users.Country
                /*LEFT JOIN membership_plans ON membership_plans.id = users.assigned_plan*/
                LEFT JOIN membership_user ON membership_user.user_id = users.id AND membership_user.plan_id = membership_plans.id
                LEFT JOIN membership_plans ON membership_plans.id = membership_user.plan_id
                LEFT JOIN users up ON up.id = users.refid
                WHERE users.TYPE = "user" AND users.refid= 2
ERROR - 2021-11-23 12:38:52 --> Severity: error --> Exception: Class 'User' not found /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2862
ERROR - 2021-11-23 12:38:54 --> Severity: error --> Exception: Class 'User' not found /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2862
ERROR - 2021-11-23 12:41:35 --> Severity: error --> Exception: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`lastname,users`.`username,users`.`avatar,users`.`refid` from `users` where ...' at line 1 (SQL: select `users`.`id, users`.`firstname,users`.`lastname,users`.`username,users`.`avatar,users`.`refid` from `users` where (`type` = user and `refid` = 2)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 04:50:45 --> 404 Page Not Found: 
ERROR - 2021-11-23 04:50:45 --> 404 Page Not Found: 
ERROR - 2021-11-23 04:50:45 --> 404 Page Not Found: 
ERROR - 2021-11-23 05:38:26 --> 404 Page Not Found: 
ERROR - 2021-11-23 05:53:29 --> 404 Page Not Found: 
ERROR - 2021-11-23 05:53:29 --> 404 Page Not Found: 
ERROR - 2021-11-23 05:53:29 --> 404 Page Not Found: 
ERROR - 2021-11-23 07:06:21 --> 404 Page Not Found: 
ERROR - 2021-11-23 07:06:21 --> 404 Page Not Found: 
ERROR - 2021-11-23 07:06:21 --> 404 Page Not Found: 
ERROR - 2021-11-23 15:18:22 --> Severity: error --> Exception: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`lastname,users`.`username,users`.`avatar,users`.`refid` from `users` where ...' at line 1 (SQL: select `users`.`id, users`.`firstname,users`.`lastname,users`.`username,users`.`avatar,users`.`refid` from `users` where (`type` = user and `refid` = 2)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 15:18:58 --> Severity: error --> Exception: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`lastname,users`.`username,users`.`avatar,users`.`refid` from `users` where ...' at line 1 (SQL: select `users`.`id, users`.`firstname,users`.`lastname,users`.`username,users`.`avatar,users`.`refid` from `users` where (`type` = user and `refid` = 2)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 15:29:59 --> Severity: error --> Exception: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'countries.Country' in 'field list' (SQL: select `countries`.`Country` as `country_name` from `countries` where 0 = 1) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 15:30:02 --> Severity: error --> Exception: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'countries.Country' in 'field list' (SQL: select `countries`.`Country` as `country_name` from `countries` where 0 = 1) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 08:08:54 --> 404 Page Not Found: 
ERROR - 2021-11-23 08:08:54 --> 404 Page Not Found: 
ERROR - 2021-11-23 08:08:54 --> 404 Page Not Found: 
ERROR - 2021-11-23 16:28:55 --> Severity: error --> Exception: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'plan_id' in 'field list' (SQL: select `plan_id`, `title` from `membership_plans` where `membership_plans`.`id` in (1, 2, 3, 4)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 16:29:29 --> Severity: error --> Exception: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'plan_id' in 'field list' (SQL: select `plan_id`, `name` from `membership_plans` where `membership_plans`.`id` in (1, 2, 3, 4)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 16:29:31 --> Severity: error --> Exception: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'plan_id' in 'field list' (SQL: select `plan_id`, `name` from `membership_plans` where `membership_plans`.`id` in (1, 2, 3, 4)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 16:29:32 --> Severity: error --> Exception: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'plan_id' in 'field list' (SQL: select `plan_id`, `name` from `membership_plans` where `membership_plans`.`id` in (1, 2, 3, 4)) /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Connection.php 671
ERROR - 2021-11-23 09:12:48 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 09:12:49 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 09:12:49 --> 404 Page Not Found: 
ERROR - 2021-11-23 09:12:49 --> 404 Page Not Found: 
ERROR - 2021-11-23 09:12:49 --> 404 Page Not Found: 
ERROR - 2021-11-23 09:12:49 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 09:12:49 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 09:12:49 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 10:03:14 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 10:06:08 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2877
ERROR - 2021-11-23 18:10:51 --> Severity: error --> Exception: Call to a member function toArray() on null /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2866
ERROR - 2021-11-23 10:15:35 --> 404 Page Not Found: 
ERROR - 2021-11-23 10:15:35 --> 404 Page Not Found: 
ERROR - 2021-11-23 10:15:35 --> 404 Page Not Found: 
ERROR - 2021-11-23 18:18:04 --> Severity: error --> Exception: Method Illuminate\Database\Eloquent\Collection::isNotEmpt does not exist. /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/support/Traits/Macroable.php 103
ERROR - 2021-11-23 11:20:08 --> 404 Page Not Found: 
ERROR - 2021-11-23 11:20:08 --> 404 Page Not Found: 
ERROR - 2021-11-23 11:20:08 --> 404 Page Not Found: 
ERROR - 2021-11-23 11:31:49 --> Severity: error --> Exception: syntax error, unexpected ';' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2879
ERROR - 2021-11-23 11:32:41 --> Severity: error --> Exception: syntax error, unexpected ';' /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2879
ERROR - 2021-11-23 12:24:43 --> 404 Page Not Found: 
ERROR - 2021-11-23 12:24:43 --> 404 Page Not Found: 
ERROR - 2021-11-23 12:24:43 --> 404 Page Not Found: 
ERROR - 2021-11-23 13:31:00 --> 404 Page Not Found: 
ERROR - 2021-11-23 13:31:00 --> 404 Page Not Found: 
ERROR - 2021-11-23 13:31:00 --> 404 Page Not Found: 
ERROR - 2021-11-23 14:38:49 --> 404 Page Not Found: 
ERROR - 2021-11-23 14:38:49 --> 404 Page Not Found: 
ERROR - 2021-11-23 14:38:49 --> 404 Page Not Found: 
ERROR - 2021-11-23 15:57:25 --> 404 Page Not Found: 
ERROR - 2021-11-23 15:57:25 --> 404 Page Not Found: 
ERROR - 2021-11-23 15:57:25 --> 404 Page Not Found: 
ERROR - 2021-11-23 16:56:48 --> 404 Page Not Found: 
ERROR - 2021-11-23 16:56:48 --> 404 Page Not Found: 
ERROR - 2021-11-23 16:56:48 --> 404 Page Not Found: 
ERROR - 2021-11-23 18:07:15 --> 404 Page Not Found: 
ERROR - 2021-11-23 18:07:15 --> 404 Page Not Found: 
ERROR - 2021-11-23 18:07:15 --> 404 Page Not Found: 
ERROR - 2021-11-23 19:03:50 --> 404 Page Not Found: 
ERROR - 2021-11-23 19:03:50 --> 404 Page Not Found: 
ERROR - 2021-11-23 19:03:50 --> 404 Page Not Found: 
ERROR - 2021-11-23 20:01:05 --> 404 Page Not Found: 
ERROR - 2021-11-23 20:01:05 --> 404 Page Not Found: 
ERROR - 2021-11-23 20:01:05 --> 404 Page Not Found: 
ERROR - 2021-11-23 20:35:03 --> 404 Page Not Found: 
ERROR - 2021-11-23 20:35:03 --> 404 Page Not Found: 
ERROR - 2021-11-23 21:11:44 --> 404 Page Not Found: 
ERROR - 2021-11-23 21:11:44 --> 404 Page Not Found: 
ERROR - 2021-11-23 21:11:44 --> 404 Page Not Found: 
ERROR - 2021-11-23 22:28:25 --> 404 Page Not Found: 
ERROR - 2021-11-23 22:28:25 --> 404 Page Not Found: 
ERROR - 2021-11-23 22:28:25 --> 404 Page Not Found: 
ERROR - 2021-11-23 23:38:11 --> 404 Page Not Found: 
ERROR - 2021-11-23 23:38:11 --> 404 Page Not Found: 
ERROR - 2021-11-23 23:38:11 --> 404 Page Not Found: 
