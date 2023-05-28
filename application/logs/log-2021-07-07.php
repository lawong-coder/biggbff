<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-07 00:41:09 --> 404 Page Not Found: 
ERROR - 2021-07-07 00:41:09 --> 404 Page Not Found: 
ERROR - 2021-07-07 00:41:09 --> 404 Page Not Found: 
ERROR - 2021-07-07 02:12:25 --> 404 Page Not Found: 
ERROR - 2021-07-07 02:12:25 --> 404 Page Not Found: 
ERROR - 2021-07-07 02:12:25 --> 404 Page Not Found: 
ERROR - 2021-07-07 03:52:10 --> 404 Page Not Found: 
ERROR - 2021-07-07 03:52:10 --> 404 Page Not Found: 
ERROR - 2021-07-07 03:52:18 --> 404 Page Not Found: 
ERROR - 2021-07-07 05:37:49 --> 404 Page Not Found: 
ERROR - 2021-07-07 05:48:46 --> 404 Page Not Found: 
ERROR - 2021-07-07 05:48:46 --> 404 Page Not Found: 
ERROR - 2021-07-07 05:48:46 --> 404 Page Not Found: 
ERROR - 2021-07-07 06:27:58 --> 404 Page Not Found: 
ERROR - 2021-07-07 07:35:00 --> 404 Page Not Found: 
ERROR - 2021-07-07 07:35:00 --> 404 Page Not Found: 
ERROR - 2021-07-07 07:35:00 --> 404 Page Not Found: 
ERROR - 2021-07-07 09:19:56 --> 404 Page Not Found: 
ERROR - 2021-07-07 09:19:56 --> 404 Page Not Found: 
ERROR - 2021-07-07 09:20:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 09:27:50 --> Severity: error --> Exception: App\User::plan must return a relationship instance. /home/u637289510/domains/jackstore.co/public_html/application/core/orm/vendor/illuminate/database/Eloquent/Concerns/HasAttributes.php 443
ERROR - 2021-07-07 10:02:17 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2780
ERROR - 2021-07-07 10:02:17 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2780
ERROR - 2021-07-07 10:02:18 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2780
ERROR - 2021-07-07 10:02:18 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2780
ERROR - 2021-07-07 10:15:29 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2779
ERROR - 2021-07-07 10:15:31 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2779
ERROR - 2021-07-07 10:15:32 --> Severity: error --> Exception: syntax error, unexpected '',users.lastname) as name, use' (T_CONSTANT_ENCAPSED_STRING) /home/u637289510/domains/jackstore.co/public_html/application/models/Product_model.php 2779
ERROR - 2021-07-07 10:16:38 --> Query error: Not unique table/alias: 'up' - Invalid query: SELECT
                countries.name as country_name,
                users.id, users.firstname,users.lastname, users.avatar,users.refid,
                membership_plans.name as plan_name
                FROM users
                LEFT JOIN countries ON countries.id = users.Country
                LEFT JOIN membership_plans up ON membership_plans.id = users.assigned_plan
                LEFT JOIN users up ON up.id = users.refid
                WHERE users.TYPE = "user" AND refid= 2
ERROR - 2021-07-07 10:16:58 --> Query error: Column 'refid' in where clause is ambiguous - Invalid query: SELECT
                countries.name as country_name,
                users.id, users.firstname,users.lastname, users.avatar,users.refid,
                membership_plans.name as plan_name
                FROM users
                LEFT JOIN countries ON countries.id = users.Country
                LEFT JOIN membership_plans ON membership_plans.id = users.assigned_plan
                LEFT JOIN users up ON up.id = users.refid
                WHERE users.TYPE = "user" AND refid= 2
ERROR - 2021-07-07 10:17:06 --> Query error: Column 'refid' in where clause is ambiguous - Invalid query: SELECT
                countries.name as country_name,
                users.id, users.firstname,users.lastname, users.avatar,users.refid,
                membership_plans.name as plan_name
                FROM users
                LEFT JOIN countries ON countries.id = users.Country
                LEFT JOIN membership_plans ON membership_plans.id = users.assigned_plan
                LEFT JOIN users up ON up.id = users.refid
                WHERE users.TYPE = "user" AND refid= 2
ERROR - 2021-07-07 10:40:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 10:40:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 10:40:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 11:13:19 --> 404 Page Not Found: 
ERROR - 2021-07-07 11:14:30 --> Severity: error --> Exception: Call to a member function chartUser() on null /home/u637289510/domains/jackstore.co/public_html/application/controllers/Usercontrol.php 927
ERROR - 2021-07-07 11:14:32 --> Severity: error --> Exception: Call to a member function chartUser() on null /home/u637289510/domains/jackstore.co/public_html/application/controllers/Usercontrol.php 927
ERROR - 2021-07-07 11:15:44 --> Query error: Unknown column 'as' in 'field list' - Invalid query: SELECT sum(commission) as total_commission, sum(total) as total_sale, count(id) as total_order, `as` `groupby`
FROM `integration_orders`
WHERE 1 = 1 
AND `user_id` = 2
ORDER BY `created_at` DESC
ERROR - 2021-07-07 11:30:52 --> Query error: Unknown column 'op.id' in 'field list' - Invalid query: SELECT count(op.id) as total_users, MONTH(created_at) as groupby
FROM `users`
WHERE YEAR(created_at) = 2021
AND `type` = 'user'
AND `refid` = 2
GROUP BY MONTH(created_at)
ORDER BY `created_at` DESC
ERROR - 2021-07-07 11:30:54 --> Query error: Unknown column 'op.id' in 'field list' - Invalid query: SELECT count(op.id) as total_users, MONTH(created_at) as groupby
FROM `users`
WHERE YEAR(created_at) = 2021
AND `type` = 'user'
AND `refid` = 2
GROUP BY MONTH(created_at)
ORDER BY `created_at` DESC
ERROR - 2021-07-07 12:03:41 --> 404 Page Not Found: 
ERROR - 2021-07-07 12:03:41 --> 404 Page Not Found: 
ERROR - 2021-07-07 12:03:41 --> 404 Page Not Found: 
ERROR - 2021-07-07 12:38:10 --> Severity: error --> Exception: Too few arguments to function Total_model::getTeamReferals(), 0 passed in /home/u637289510/domains/jackstore.co/public_html/application/models/Total_model.php on line 1175 and exactly 1 expected /home/u637289510/domains/jackstore.co/public_html/application/models/Total_model.php 1108
ERROR - 2021-07-07 12:38:43 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT id FROM users WHERE type='user' AND refid=Array
ERROR - 2021-07-07 12:47:50 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::whereIn() /home/u637289510/domains/jackstore.co/public_html/application/models/Total_model.php 1182
ERROR - 2021-07-07 13:45:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 13:45:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 13:45:01 --> 404 Page Not Found: 
ERROR - 2021-07-07 15:28:38 --> 404 Page Not Found: 
ERROR - 2021-07-07 15:28:38 --> 404 Page Not Found: 
ERROR - 2021-07-07 15:28:38 --> 404 Page Not Found: 
ERROR - 2021-07-07 17:00:21 --> 404 Page Not Found: 
ERROR - 2021-07-07 17:00:21 --> 404 Page Not Found: 
ERROR - 2021-07-07 17:00:21 --> 404 Page Not Found: 
ERROR - 2021-07-07 18:47:42 --> 404 Page Not Found: 
ERROR - 2021-07-07 18:47:42 --> 404 Page Not Found: 
ERROR - 2021-07-07 18:47:42 --> 404 Page Not Found: 
ERROR - 2021-07-07 20:51:00 --> 404 Page Not Found: 
ERROR - 2021-07-07 20:51:00 --> 404 Page Not Found: 
ERROR - 2021-07-07 20:51:00 --> 404 Page Not Found: 
ERROR - 2021-07-07 22:16:15 --> 404 Page Not Found: 
ERROR - 2021-07-07 22:17:36 --> 404 Page Not Found: 
ERROR - 2021-07-07 22:17:36 --> 404 Page Not Found: 
ERROR - 2021-07-07 22:17:36 --> 404 Page Not Found: 
ERROR - 2021-07-07 23:39:09 --> 404 Page Not Found: 
ERROR - 2021-07-07 23:39:09 --> 404 Page Not Found: 
ERROR - 2021-07-07 23:39:09 --> 404 Page Not Found: 
