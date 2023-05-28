#
# TABLE STRUCTURE FOR: affiliate_action
#

DROP TABLE IF EXISTS `affiliate_action`;

CREATE TABLE `affiliate_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text CHARACTER SET utf8 DEFAULT NULL,
  `country_code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `commission` double(22,0) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: affiliateads
#

DROP TABLE IF EXISTS `affiliateads`;

CREATE TABLE `affiliateads` (
  `affiliateads_id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliateads_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_metadata` longtext CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_ipaddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `affiliateads_created_by` int(11) DEFAULT NULL,
  `affiliateads_updated_by` int(11) DEFAULT NULL,
  `affiliateads_created` datetime NOT NULL,
  `affiliateads_updated` datetime NOT NULL,
  PRIMARY KEY (`affiliateads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: cart
#

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
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
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: categories
#

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `color` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '#000000',
  `parent_id` int(11) NOT NULL,
  `tag` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: cities
#

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: clicks_views
#

DROP TABLE IF EXISTS `clicks_views`;

CREATE TABLE `clicks_views` (
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
  `clicks_views_created` datetime NOT NULL,
  `clicks_views_updated` datetime NOT NULL,
  `clicks_views_click_commission` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_sale_commission` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_data_commission` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `clicks_views_view_commission` int(11) NOT NULL,
  PRIMARY KEY (`clicks_views_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: countries
#

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `phonecode` int(11) NOT NULL,
  `lat` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `lng` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (1, 'AF', 'Afghanistan', 93, '33.93911', '67.709953');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (2, 'AL', 'Albania', 355, '41.153332', '20.168331');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (3, 'DZ', 'Algeria', 213, '28.033886', '1.659626');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (4, 'AS', 'American Samoa', 1684, '-14.270972', '-170.132217');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (5, 'AD', 'Andorra', 376, '42.546245', '1.601554');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (6, 'AO', 'Angola', 244, '-11.202692', '17.873887');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (7, 'AI', 'Anguilla', 1264, '18.220554', '-63.068615');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (8, 'AQ', 'Antarctica', 0, '-75.250973', '-0.071389');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (9, 'AG', 'Antigua And Barbuda', 1268, '17.060816', '-61.796428');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (10, 'AR', 'Argentina', 54, '-38.416097', '-63.616672');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (11, 'AM', 'Armenia', 374, '40.069099', '45.038189');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (12, 'AW', 'Aruba', 297, '12.52111', '-69.968338');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (13, 'AU', 'Australia', 61, '-25.274398', '133.775136');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (14, 'AT', 'Austria', 43, '47.516231', '14.550072');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (15, 'AZ', 'Azerbaijan', 994, '40.143105', '47.576927');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (16, 'BS', 'Bahamas The', 1242, '25.03428', '-77.39628');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (17, 'BH', 'Bahrain', 973, '25.930414', '50.637772');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (18, 'BD', 'Bangladesh', 880, '23.684994', '90.356331');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (19, 'BB', 'Barbados', 1246, '13.193887', '-59.543198');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (20, 'BY', 'Belarus', 375, '53.709807', '27.953389');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (21, 'BE', 'Belgium', 32, '50.503887', '4.469936');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (22, 'BZ', 'Belize', 501, '17.189877', '-88.49765');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (23, 'BJ', 'Benin', 229, '9.30769', '2.315834');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (24, 'BM', 'Bermuda', 1441, '32.321384', '-64.75737');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (25, 'BT', 'Bhutan', 975, '27.514162', '90.433601');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (26, 'BO', 'Bolivia', 591, '-16.290154', '-63.588653');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (27, 'BA', 'Bosnia and Herzegovina', 387, '43.915886', '17.679076');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (28, 'BW', 'Botswana', 267, '-22.328474', '24.684866');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (29, 'BV', 'Bouvet Island', 0, '-54.423199', '3.413194');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (30, 'BR', 'Brazil', 55, '-14.235004', '-51.92528');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (31, 'IO', 'British Indian Ocean Territory', 246, '-6.343194', '71.876519');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (32, 'BN', 'Brunei', 673, '4.535277', '114.727669');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (33, 'BG', 'Bulgaria', 359, '42.733883', '25.48583');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (34, 'BF', 'Burkina Faso', 226, '12.238333', '-1.561593');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (35, 'BI', 'Burundi', 257, '-3.373056', '29.918886');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (36, 'KH', 'Cambodia', 855, '12.565679', '104.990963');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (37, 'CM', 'Cameroon', 237, '7.369722', '12.354722');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (38, 'CA', 'Canada', 1, '56.130366', '-106.346771');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (39, 'CV', 'Cape Verde', 238, '16.002082', '-24.013197');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (40, 'KY', 'Cayman Islands', 1345, '19.513469', '-80.566956');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (41, 'CF', 'Central African Republic', 236, '6.611111', '20.939444');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (42, 'TD', 'Chad', 235, '15.454166', '18.732207');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (43, 'CL', 'Chile', 56, '-35.675147', '-71.542969');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (44, 'CN', 'China', 86, '35.86166', '104.195397');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (45, 'CX', 'Christmas Island', 61, '-10.447525', '105.690449');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (46, 'CC', 'Cocos (Keeling) Islands', 672, '-12.164165', '96.870956');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (47, 'CO', 'Colombia', 57, '4.570868', '-74.297333');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (48, 'KM', 'Comoros', 269, '-11.875001', '43.872219');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (49, 'CG', 'Republic Of The Congo', 242, '-0.228021', '15.827659');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (50, 'CD', 'Democratic Republic Of The Congo', 242, '-4.038333', '21.758664');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (51, 'CK', 'Cook Islands', 682, '-21.236736', '-159.777671');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (52, 'CR', 'Costa Rica', 506, '9.748917', '-83.753428');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, '7.539989', '-5.54708');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (54, 'HR', 'Croatia (Hrvatska)', 385, '45.1', '15.2');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (55, 'CU', 'Cuba', 53, '21.521757', '-77.781167');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (56, 'CY', 'Cyprus', 357, '35.126413', '33.429859');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (57, 'CZ', 'Czech Republic', 420, '49.817492', '15.472962');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (58, 'DK', 'Denmark', 45, '56.26392', '9.501785');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (59, 'DJ', 'Djibouti', 253, '11.825138', '42.590275');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (60, 'DM', 'Dominica', 1767, '15.414999', '-61.370976');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (61, 'DO', 'Dominican Republic', 1809, '18.735693', '-70.162651');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (62, 'TP', 'East Timor', 670, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (63, 'EC', 'Ecuador', 593, '-1.831239', '-78.183406');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (64, 'EG', 'Egypt', 20, '26.820553', '30.802498');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (65, 'SV', 'El Salvador', 503, '13.794185', '-88.89653');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (66, 'GQ', 'Equatorial Guinea', 240, '1.650801', '10.267895');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (67, 'ER', 'Eritrea', 291, '15.179384', '39.782334');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (68, 'EE', 'Estonia', 372, '58.595272', '25.013607');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (69, 'ET', 'Ethiopia', 251, '9.145', '40.489673');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (70, 'XA', 'External Territories of Australia', 61, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (71, 'FK', 'Falkland Islands', 500, '-51.796253', '-59.523613');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (72, 'FO', 'Faroe Islands', 298, '61.892635', '-6.911806');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (73, 'FJ', 'Fiji Islands', 679, '-16.578193', '179.414413');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (74, 'FI', 'Finland', 358, '61.92411', '25.748151');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (75, 'FR', 'France', 33, '46.227638', '2.213749');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (76, 'GF', 'French Guiana', 594, '3.933889', '-53.125782');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (77, 'PF', 'French Polynesia', 689, '-17.679742', '-149.406843');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (78, 'TF', 'French Southern Territories', 0, '-49.280366', '69.348557');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (79, 'GA', 'Gabon', 241, '-0.803689', '11.609444');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (80, 'GM', 'Gambia The', 220, '13.443182', '-15.310139');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (81, 'GE', 'Georgia', 995, '42.315407', '43.356892');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (82, 'DE', 'Germany', 49, '51.165691', '10.451526');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (83, 'GH', 'Ghana', 233, '7.946527', '-1.023194');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (84, 'GI', 'Gibraltar', 350, '36.137741', '-5.345374');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (85, 'GR', 'Greece', 30, '39.074208', '21.824312');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (86, 'GL', 'Greenland', 299, '71.706936', '-42.604303');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (87, 'GD', 'Grenada', 1473, '12.262776', '-61.604171');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (88, 'GP', 'Guadeloupe', 590, '16.995971', '-62.067641');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (89, 'GU', 'Guam', 1671, '13.444304', '144.793731');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (90, 'GT', 'Guatemala', 502, '15.783471', '-90.230759');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (91, 'XU', 'Guernsey and Alderney', 44, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (92, 'GN', 'Guinea', 224, '9.945587', '-9.696645');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (93, 'GW', 'Guinea-Bissau', 245, '11.803749', '-15.180413');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (94, 'GY', 'Guyana', 592, '4.860416', '-58.93018');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (95, 'HT', 'Haiti', 509, '18.971187', '-72.285215');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (96, 'HM', 'Heard and McDonald Islands', 0, '-53.08181', '73.504158');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (97, 'HN', 'Honduras', 504, '15.199999', '-86.241905');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (98, 'HK', 'Hong Kong S.A.R.', 852, '22.396428', '114.109497');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (99, 'HU', 'Hungary', 36, '47.162494', '19.503304');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (100, 'IS', 'Iceland', 354, '64.963051', '-19.020835');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (101, 'IN', 'India', 91, '20.593684', '78.96288');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (102, 'ID', 'Indonesia', 62, '-0.789275', '113.921327');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (103, 'IR', 'Iran', 98, '32.427908', '53.688046');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (104, 'IQ', 'Iraq', 964, '33.223191', '43.679291');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (105, 'IE', 'Ireland', 353, '53.41291', '-8.24389');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (106, 'IL', 'Israel', 972, '31.046051', '34.851612');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (107, 'IT', 'Italy', 39, '41.87194', '12.56738');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (108, 'JM', 'Jamaica', 1876, '18.109581', '-77.297508');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (109, 'JP', 'Japan', 81, '36.204824', '138.252924');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (110, 'XJ', 'Jersey', 44, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (111, 'JO', 'Jordan', 962, '30.585164', '36.238414');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (112, 'KZ', 'Kazakhstan', 7, '48.019573', '66.923684');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (113, 'KE', 'Kenya', 254, '-0.023559', '37.906193');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (114, 'KI', 'Kiribati', 686, '-3.370417', '-168.734039');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (115, 'KP', 'Korea North', 850, '40.339852', '127.510093');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (116, 'KR', 'Korea South', 82, '35.907757', '127.766922');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (117, 'KW', 'Kuwait', 965, '29.31166', '47.481766');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (118, 'KG', 'Kyrgyzstan', 996, '41.20438', '74.766098');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (119, 'LA', 'Laos', 856, '19.85627', '102.495496');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (120, 'LV', 'Latvia', 371, '56.879635', '24.603189');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (121, 'LB', 'Lebanon', 961, '33.854721', '35.862285');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (122, 'LS', 'Lesotho', 266, '-29.609988', '28.233608');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (123, 'LR', 'Liberia', 231, '6.428055', '-9.429499');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (124, 'LY', 'Libya', 218, '26.3351', '17.228331');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (125, 'LI', 'Liechtenstein', 423, '47.166', '9.555373');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (126, 'LT', 'Lithuania', 370, '55.169438', '23.881275');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (127, 'LU', 'Luxembourg', 352, '49.815273', '6.129583');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (128, 'MO', 'Macau S.A.R.', 853, '22.198745', '113.543873');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (129, 'MK', 'Macedonia', 389, '41.608635', '21.745275');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (130, 'MG', 'Madagascar', 261, '-18.766947', '46.869107');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (131, 'MW', 'Malawi', 265, '-13.254308', '34.301525');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (132, 'MY', 'Malaysia', 60, '4.210484', '101.975766');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (133, 'MV', 'Maldives', 960, '3.202778', '73.22068');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (134, 'ML', 'Mali', 223, '17.570692', '-3.996166');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (135, 'MT', 'Malta', 356, '35.937496', '14.375416');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (136, 'XM', 'Man (Isle of)', 44, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (137, 'MH', 'Marshall Islands', 692, '7.131474', '171.184478');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (138, 'MQ', 'Martinique', 596, '14.641528', '-61.024174');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (139, 'MR', 'Mauritania', 222, '21.00789', '-10.940835');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (140, 'MU', 'Mauritius', 230, '-20.348404', '57.552152');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (141, 'YT', 'Mayotte', 269, '-12.8275', '45.166244');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (142, 'MX', 'Mexico', 52, '23.634501', '-102.552784');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (143, 'FM', 'Micronesia', 691, '7.425554', '150.550812');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (144, 'MD', 'Moldova', 373, '47.411631', '28.369885');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (145, 'MC', 'Monaco', 377, '43.750298', '7.412841');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (146, 'MN', 'Mongolia', 976, '46.862496', '103.846656');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (147, 'MS', 'Montserrat', 1664, '16.742498', '-62.187366');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (148, 'MA', 'Morocco', 212, '31.791702', '-7.09262');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (149, 'MZ', 'Mozambique', 258, '-18.665695', '35.529562');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (150, 'MM', 'Myanmar', 95, '21.913965', '95.956223');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (151, 'NA', 'Namibia', 264, '-22.95764', '18.49041');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (152, 'NR', 'Nauru', 674, '-0.522778', '166.931503');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (153, 'NP', 'Nepal', 977, '28.394857', '84.124008');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (154, 'AN', 'Netherlands Antilles', 599, '12.226079', '-69.060087');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (155, 'NL', 'Netherlands', 31, '52.132633', '5.291266');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (156, 'NC', 'New Caledonia', 687, '-20.904305', '165.618042');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (157, 'NZ', 'New Zealand', 64, '-40.900557', '174.885971');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (158, 'NI', 'Nicaragua', 505, '12.865416', '-85.207229');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (159, 'NE', 'Niger', 227, '17.607789', '8.081666');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (160, 'NG', 'Nigeria', 234, '9.081999', '8.675277');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (161, 'NU', 'Niue', 683, '-19.054445', '-169.867233');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (162, 'NF', 'Norfolk Island', 672, '-29.040835', '167.954712');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (163, 'MP', 'Northern Mariana Islands', 1670, '17.33083', '145.38469');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (164, 'NO', 'Norway', 47, '60.472024', '8.468946');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (165, 'OM', 'Oman', 968, '21.512583', '55.923255');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (166, 'PK', 'Pakistan', 92, '30.375321', '69.345116');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (167, 'PW', 'Palau', 680, '7.51498', '134.58252');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (168, 'PS', 'Palestinian Territory Occupied', 970, '31.952162', '35.233154');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (169, 'PA', 'Panama', 507, '8.537981', '-80.782127');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (170, 'PG', 'Papua new Guinea', 675, '-6.314993', '143.95555');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (171, 'PY', 'Paraguay', 595, '-23.442503', '-58.443832');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (172, 'PE', 'Peru', 51, '-9.189967', '-75.015152');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (173, 'PH', 'Philippines', 63, '12.879721', '121.774017');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (174, 'PN', 'Pitcairn Island', 0, '-24.703615', '-127.439308');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (175, 'PL', 'Poland', 48, '51.919438', '19.145136');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (176, 'PT', 'Portugal', 351, '39.399872', '-8.224454');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (177, 'PR', 'Puerto Rico', 1787, '18.220833', '-66.590149');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (178, 'QA', 'Qatar', 974, '25.354826', '51.183884');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (179, 'RE', 'Reunion', 262, '-21.115141', '55.536384');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (180, 'RO', 'Romania', 40, '45.943161', '24.96676');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (181, 'RU', 'Russia', 70, '61.52401', '105.318756');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (182, 'RW', 'Rwanda', 250, '-1.940278', '29.873888');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (183, 'SH', 'Saint Helena', 290, '-24.143474', '-10.030696');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (184, 'KN', 'Saint Kitts And Nevis', 1869, '17.357822', '-62.782998');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (185, 'LC', 'Saint Lucia', 1758, '13.909444', '-60.978893');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (186, 'PM', 'Saint Pierre and Miquelon', 508, '46.941936', '-56.27111');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (187, 'VC', 'Saint Vincent And The Grenadines', 1784, '12.984305', '-61.287228');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (188, 'WS', 'Samoa', 684, '-13.759029', '-172.104629');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (189, 'SM', 'San Marino', 378, '43.94236', '12.457777');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (190, 'ST', 'Sao Tome and Principe', 239, '0.18636', '6.613081');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (191, 'SA', 'Saudi Arabia', 966, '23.885942', '45.079162');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (192, 'SN', 'Senegal', 221, '14.497401', '-14.452362');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (193, 'RS', 'Serbia', 381, '44.016521', '21.005859');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (194, 'SC', 'Seychelles', 248, '-4.679574', '55.491977');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (195, 'SL', 'Sierra Leone', 232, '8.460555', '-11.779889');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (196, 'SG', 'Singapore', 65, '1.352083', '103.819836');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (197, 'SK', 'Slovakia', 421, '48.669026', '19.699024');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (198, 'SI', 'Slovenia', 386, '46.151241', '14.995463');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (199, 'XG', 'Smaller Territories of the UK', 44, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (200, 'SB', 'Solomon Islands', 677, '-9.64571', '160.156194');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (201, 'SO', 'Somalia', 252, '5.152149', '46.199616');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (202, 'ZA', 'South Africa', 27, '-30.559482', '22.937506');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (203, 'GS', 'South Georgia', 0, '-54.429579', '-36.587909');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (204, 'SS', 'South Sudan', 211, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (205, 'ES', 'Spain', 34, '40.463667', '-3.74922');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (206, 'LK', 'Sri Lanka', 94, '7.873054', '80.771797');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (207, 'SD', 'Sudan', 249, '12.862807', '30.217636');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (208, 'SR', 'Suriname', 597, '3.919305', '-56.027783');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, '77.553604', '23.670272');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (210, 'SZ', 'Swaziland', 268, '-26.522503', '31.465866');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (211, 'SE', 'Sweden', 46, '60.128161', '18.643501');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (212, 'CH', 'Switzerland', 41, '46.818188', '8.227512');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (213, 'SY', 'Syria', 963, '34.802075', '38.996815');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (214, 'TW', 'Taiwan', 886, '23.69781', '120.960515');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (215, 'TJ', 'Tajikistan', 992, '38.861034', '71.276093');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (216, 'TZ', 'Tanzania', 255, '-6.369028', '34.888822');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (217, 'TH', 'Thailand', 66, '15.870032', '100.992541');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (218, 'TG', 'Togo', 228, '8.619543', '0.824782');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (219, 'TK', 'Tokelau', 690, '-8.967363', '-171.855881');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (220, 'TO', 'Tonga', 676, '-21.178986', '-175.198242');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (221, 'TT', 'Trinidad And Tobago', 1868, '10.691803', '-61.222503');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (222, 'TN', 'Tunisia', 216, '33.886917', '9.537499');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (223, 'TR', 'Turkey', 90, '38.963745', '35.243322');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (224, 'TM', 'Turkmenistan', 7370, '38.969719', '59.556278');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (225, 'TC', 'Turks And Caicos Islands', 1649, '21.694025', '-71.797928');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (226, 'TV', 'Tuvalu', 688, '-7.109535', '177.64933');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (227, 'UG', 'Uganda', 256, '1.373333', '32.290275');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (228, 'UA', 'Ukraine', 380, '48.379433', '31.16558');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (229, 'AE', 'United Arab Emirates', 971, '23.424076', '53.847818');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (230, 'GB', 'United Kingdom', 44, '55.378051', '-3.435973');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (231, 'US', 'United States', 1, '37.09024', '-95.712891');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (232, 'UM', 'United States Minor Outlying Islands', 1, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (233, 'UY', 'Uruguay', 598, '-32.522779', '-55.765835');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (234, 'UZ', 'Uzbekistan', 998, '41.377491', '64.585262');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (235, 'VU', 'Vanuatu', 678, '-15.376706', '166.959158');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (236, 'VA', 'Vatican City State (Holy See)', 39, '41.902916', '12.453389');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (237, 'VE', 'Venezuela', 58, '6.42375', '-66.58973');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (238, 'VN', 'Vietnam', 84, '14.058324', '108.277199');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (239, 'VG', 'Virgin Islands (British)', 1284, '18.420695', '-64.639968');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (240, 'VI', 'Virgin Islands (US)', 1340, '18.335765', '-64.896335');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (241, 'WF', 'Wallis And Futuna Islands', 681, '-13.768752', '-177.156097');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (242, 'EH', 'Western Sahara', 212, '24.215527', '-12.885834');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (243, 'YE', 'Yemen', 967, '15.552727', '48.516388');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (244, 'YU', 'Yugoslavia', 38, '', '');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (245, 'ZM', 'Zambia', 260, '-13.133897', '27.849332');
INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `lat`, `lng`) VALUES (246, 'ZW', 'Zimbabwe', 263, '-19.015438', '29.154857');


#
# TABLE STRUCTURE FOR: coupon
#

DROP TABLE IF EXISTS `coupon`;

CREATE TABLE `coupon` (
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

DROP TABLE IF EXISTS `currency`;

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) CHARACTER SET utf8 NOT NULL,
  `code` varchar(3) CHARACTER SET utf8 NOT NULL,
  `symbol_left` varchar(12) CHARACTER SET utf8 NOT NULL,
  `symbol_right` varchar(12) CHARACTER SET utf8 NOT NULL,
  `decimal_place` char(1) CHARACTER SET utf8 NOT NULL,
  `value` float DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `is_default` int(11) NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `currency` (`currency_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `is_default`, `date_modified`) VALUES (1, 'US Dollar', 'USD', '$', '', '2', '1', 1, 1, '2020-12-20 14:48:49');


#
# TABLE STRUCTURE FOR: form
#

DROP TABLE IF EXISTS `form`;

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `seo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fevi_icon` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sale_commision_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sale_commision_value` float DEFAULT 0,
  `click_commision_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `click_commision_ppc` float DEFAULT 0,
  `click_commision_per` float DEFAULT 0,
  `comment` text CHARACTER SET utf8 DEFAULT NULL,
  `form_recursion_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `form_recursion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `recursion_custom_time` bigint(20) NOT NULL,
  `recursion_endtime` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product` text CHARACTER SET utf8 DEFAULT NULL,
  `coupon` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `allow_for` text CHARACTER SET utf8 NOT NULL,
  `footer_title` text CHARACTER SET utf8 NOT NULL,
  `google_analitics` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: form_action
#

DROP TABLE IF EXISTS `form_action`;

CREATE TABLE `form_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: form_coupon
#

DROP TABLE IF EXISTS `form_coupon`;

CREATE TABLE `form_coupon` (
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

DROP TABLE IF EXISTS `integration_admin_clicks_action`;

CREATE TABLE `integration_admin_clicks_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `product_id` double(22,0) NOT NULL,
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
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_category
#

DROP TABLE IF EXISTS `integration_category`;

CREATE TABLE `integration_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_clicks_action
#

DROP TABLE IF EXISTS `integration_clicks_action`;

CREATE TABLE `integration_clicks_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `product_id` double(22,0) NOT NULL,
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
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_clicks_logs
#

DROP TABLE IF EXISTS `integration_clicks_logs`;

CREATE TABLE `integration_clicks_logs` (
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
  `created_at` datetime NOT NULL,
  `click_id` int(11) NOT NULL,
  `click_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_orders
#

DROP TABLE IF EXISTS `integration_orders`;

CREATE TABLE `integration_orders` (
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
  `created_at` datetime NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `admin_tran` int(11) DEFAULT NULL,
  `affiliate_tran` int(11) DEFAULT NULL,
  `custom_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_programs
#

DROP TABLE IF EXISTS `integration_programs`;

CREATE TABLE `integration_programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_sale` float DEFAULT 0,
  `sale_status` int(11) DEFAULT NULL,
  `commission_number_of_click` int(11) DEFAULT NULL,
  `commission_click_commission` float DEFAULT 0,
  `click_status` int(11) DEFAULT NULL,
  `admin_commission_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_commission_sale` float DEFAULT 0,
  `admin_commission_number_of_click` int(11) DEFAULT NULL,
  `admin_commission_click_commission` float DEFAULT 0,
  `admin_click_status` int(11) DEFAULT NULL,
  `admin_sale_status` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `click_allow` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_refer_product_action
#

DROP TABLE IF EXISTS `integration_refer_product_action`;

CREATE TABLE `integration_refer_product_action` (
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
  `created_at` datetime NOT NULL,
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

DROP TABLE IF EXISTS `integration_tools`;

CREATE TABLE `integration_tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) DEFAULT NULL,
  `program_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'program',
  `action_click` int(11) NOT NULL,
  `action_amount` double NOT NULL,
  `general_click` int(11) NOT NULL,
  `general_amount` double NOT NULL,
  `general_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_for` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recursion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recursion_custom_time` bigint(20) NOT NULL,
  `recursion_endtime` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `marketpostback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_action_click` int(11) DEFAULT NULL,
  `admin_action_amount` float DEFAULT 0,
  `admin_general_click` int(11) DEFAULT NULL,
  `admin_general_amount` float DEFAULT 0,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: integration_tools_ads
#

DROP TABLE IF EXISTS `integration_tools_ads`;

CREATE TABLE `integration_tools_ads` (
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

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `is_rtl` int(11) NOT NULL DEFAULT 0,
  `flag` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `language` (`id`, `name`, `is_default`, `is_rtl`, `flag`, `status`) VALUES (1, 'English', 1, 1, './assets/vertical/assets/images/flags/lr.png', 1);


#
# TABLE STRUCTURE FOR: last_seen
#

DROP TABLE IF EXISTS `last_seen`;

CREATE TABLE `last_seen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: mail_templates
#

DROP TABLE IF EXISTS `mail_templates`;

CREATE TABLE `mail_templates` (
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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (1, '', 'User Registration', 'User Registration Successfully', '<p>Dear [[firstname]],</p>\r\n\r\n<p>Your new affiliate user account has been created welcome to the [[website_name]]</p>\r\n\r\n<p>your account details:</p>\r\n\r\n<p>================</p>\r\n\r\n<p>[[firstname]]</p>\r\n\r\n<p>[[username]]</p>\r\n\r\n<p>[[email]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'Admin : New affiliate user Register', NULL, NULL, '<p>Dear Admin,</p>\r\n\r\n<p>&nbsp;New affiliate user Register on your site&nbsp;[[website_name]]</p>\r\n\r\n<p>Affiliate details:</p>\r\n\r\n<p>============</p>\r\n\r\n<p>[[firstname]]</p>\r\n\r\n<p>[[username]]</p>\r\n\r\n<p>[[email]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'firstname,lastname,email,username,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (2, '', 'Client Registration', 'New Client Register Under you', '<p>Dear [[firstname]],</p>\r\n\r\n<p>New client account has been created under you</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'Admin : New Client Register', 'Dear [[firstname]], Welcome To Our Store', '<p>Dear [[firstname]],</p>\r\n\r\n<p>welcome to the [[website_name]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', '<p>Dear Admin,</p>\r\n\r\n<p>New client has been registered on your store</p>\r\n\r\n<p>[[firstname]] ,&nbsp;[[lastname]]&nbsp;</p>\r\n\r\n<p>[[email]] | [[username]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'firstname,lastname,email,username,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (3, '', 'Forget Password', 'User Forget Password', '<p>Dear [[firstname]],</p>\r\n\r\n<p>You recently request to reset your password from your [[website_name]] account click the below link to reset password</p>\r\n\r\n<p>[[reset_link]]</p>\r\n\r\n<p>If you did not request a password rest, please ignore this email or reply us know.</p>\r\n\r\n<p>[[website_name]]</p>\r\n\r\n<p>If you did not request a password rest, please ignore this email or reply us know.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks<br />\r\n[[website_name]]</p>\r\n', 'Admin : Forget Password', 'Client : Forget Password', '<p>Dear [[firstname]],</p>\r\n\r\n<p>You recently request to reset your password from your [[website_name]] account click the below link to reset password</p>\r\n\r\n<p>[[reset_link]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If you did not request a password rest, please ignore this email or reply us know.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks<br />\r\n[[website_name]]</p>\r\n', '<p>Dear [[firstname]],</p>\r\n\r\n<p>You recently request to reset your password from your [[website_name]] account click the below link to reset password</p>\r\n\r\n<p>[[reset_link]]</p>\r\n\r\n<p>If you did not request a password rest, please ignore this email or reply us know.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks<br />\r\n[[website_name]]</p>\r\n', 'reset_link,firstname,lastname,email,username,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (4, '', 'Send Wallet withdrawal Request', 'Send Wallet Withdrawal Request', '<p>Dear [[name]],</p>\r\n\r\n<p>Your withdrawal request is accept successfully and procced shortly</p>\r\n\r\n<p>Amount : [[amount]]</p>\r\n\r\n<p>Thanks<br />\r\n[[website_name]]</p>\r\n', 'Admin : Send Wallet Withdrawal Request', '', '', '<p>Dear [[name]],</p>\r\n\r\n<p>Your withdrawal request is accept successfully and procced shortly</p>\r\n\r\n<p>Amount : [[amount]]</p>\r\n\r\n<p>Thanks<br />\r\n[[website_name]]</p>\r\n', 'amount,comment,name,user_email,commission_type,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (5, '', 'withdrawal request status change', 'Your withdrawal request status change', '<p>Dear [[name]],</p>\r\n\r\n<p>Your withdrawal request status has been change to : <strong>[[new_status]]</strong></p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'Admin side', '', '', '<p>Dear [[name]],</p>\r\n\r\n<p>Withdrawal request status has been change to : <strong>[[new_status]]</strong></p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'amount,comment,name,user_email,commission_type,website_name,website_logo,new_status');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (6, '', 'Store Contact Us', '', '', 'Admin : Store Contact Us', 'We will contact to you shortly ..!', '<p>&nbsp;</p>\r\n\r\n<p><strong>Name </strong>: [[name]]</p>\r\n\r\n<p><strong>Email </strong>: [[email]]</p>\r\n\r\n<p><strong>Phone </strong>: [[phone]]</p>\r\n\r\n<p><strong>Message</strong> :</p>\r\n\r\n<p>[[message]]</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Hey Admin <strong>[[name]] </strong>trying to contact you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Name </strong>: [[name]]</p>\r\n\r\n<p><strong>Email </strong>: [[email]]</p>\r\n\r\n<p><strong>Phone </strong>: [[phone]]</p>\r\n\r\n<p><strong>Message</strong> :</p>\r\n\r\n<p>[[message]]</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'name,email,phone,message,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (7, '', 'Order Status Has Been Change', 'Your Order Status Has Been Change', '<p>Hello<strong>&nbsp;[[firstname]] [[lastname]]</strong></p>\r\n\r\n<p>Your Order Status Has Been Change to <strong>[[status]]</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>[[comment]]</p>\r\n\r\n<p><br />\r\norder Id :<strong> [[order_id]]</strong></p>\r\n', 'Admin : Your Order Status Has Been Change', 'Client: Your Order Status Has Been Change', '<p>Hello<strong>&nbsp;[[firstname]] [[lastname]]</strong></p>\r\n\r\n<p>Your Order Status Has Been Change to <strong>[[status]]</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>[[comment]]</p>\r\n\r\n<p><br />\r\norder Id :<strong> [[order_id]]</strong></p>\r\n', '<p>Hello<strong>&nbsp;[[firstname]] [[lastname]]</strong></p>\r\n\r\n<p>Your Order Status Has Been Change to <strong>[[status]]</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>[[comment]]</p>\r\n\r\n<p><br />\r\norder Id :<strong> [[order_id]]</strong></p>\r\n', 'order_id,status,order_link,product_name,product_description,commission_type,PhoneNumber,firstname,lastname,commission,total,currency_code,txn_id,website_name,website_logo,comment');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (8, '', 'New Order', 'Affiliate: New Order Commission From [[firstname]] [[lastname]]', '<p>Hello Affiliate,</p>\r\n\r\n<p>you got new order Commission from sale thats done under [[firstname]] [[lastname]]</p>\r\n\r\n<p>Commission: [[commission]] -&nbsp;[[commission_type]]</p>\r\n\r\n<p><strong>Commission for product_name :&nbsp;</strong>[[product_name]]&nbsp;[[variation_details]]</p>\r\n\r\n<p><strong>product_description</strong> : [[product_description]]</p>\r\n', 'Admin : New Order [[order_id]] has been successfully placed.', 'Client : New Order [[order_id]] has been successfully placed.', '<p>Dear Client,</p>\r\n\r\n<p>New Order <strong>[[order_id]] </strong>has been successfully placed on your site [[website_name]] .</p>\r\n\r\n<p><strong>Order Status</strong> : [[status]]<br />\r\n<strong>Total Amount</strong> : [[total]]<br />\r\n<strong>Transaction ID</strong> : [[txn_id]]</p>\r\n\r\n<p>[[order_link]]</p>\r\n', '<p>Dear Admin,</p>\r\n\r\n<p>New Order <strong>[[order_id]] </strong>has been successfully placed on your site [[website_name]] .</p>\r\n\r\n<p><strong>Order Status</strong> : [[status]]<br />\r\n<strong>Total Amount</strong> : [[total]]<br />\r\n<strong>Transaction ID</strong> : [[txn_id]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>[[order_link]]</p>\r\n', 'order_id,status,order_link,product_name,variation_details,product_description,commission_type,PhoneNumber,firstname,lastname,commission,total,currency_code,txn_id,website_name,website_logo,order_id');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (10, '', 'get market click notification', 'Get market click notification', '<p>Dear [[name]],</p>\r\n\r\n<p>[[firstname]] [[lastname]] got commition from market [[affiliateads_type]] click</p>\r\n\r\n<p>Commition : [[affiliate_commission]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'Admin : Get market click notification', '', '', '<p>Dear [[name]],</p>\r\n\r\n<p>[[firstname]] [[lastname]] got commition from market [[affiliateads_type]] click</p>\r\n\r\n<p>Commition : [[affiliate_commission]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'affiliateads_type,affiliate_commission,firstname,lastname,email,username,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (11, '', 'External Website New Order', 'External Website New Order [[external_website_name]]', '<p>Hey&nbsp;[[username]]</p>\r\n\r\n<p>You have got&nbsp;[[commission]] from [[external_website_name]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thanks&nbsp;</strong></p>\r\n\r\n<p>[[website_name]]</p>\r\n', 'External Website New Order [[external_website_name]]', '', '', '<p>Hey New Order Placed at&nbsp;[[external_website_name]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>User </strong>:&nbsp;[[username]]</p>\r\n\r\n<p><strong>Website </strong>:&nbsp;[[external_website_name]]</p>\r\n\r\n<p><strong>commission </strong>: [[commission]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thanks&nbsp;</strong></p>\r\n\r\n<p>[[website_name]]</p>\r\n', 'external_website_name,commission,username,website_name,website_logo,product_ids,total,currency,commission_type,script_name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (12, '', 'wallet status change to in wallet', '[[amount]] credited in your wallet', '<p>Dear [[name]],</p>\r\n\r\n<p>[[comment]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', '', '', '', '', 'amount,comment,name,user_email,website_name,website_logo,new_status');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (13, '', 'User Registration From Integration', 'User Registration Successfully', '<p>Dear [[firstname]],</p>\r\n\r\n<p>Your new affiliate user account has been created welcome to the [[website_name]]</p>\r\n\r\n<p>your account details:</p>\r\n\r\n<p>================</p>\r\n\r\n<p>[[firstname]]</p>\r\n\r\n<p>[[username]]</p>\r\n\r\n<p>[[email]]</p>\r\n\r\n<h2>password is :&nbsp;<strong>[[password]]</strong></h2>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'Admin : New affiliate user Register From Integration', '', '', '<p>Dear Admin,</p>\r\n\r\n<p>&nbsp;New affiliate user Register on your site&nbsp;[[website_name]]</p>\r\n\r\n<p>Affiliate details:</p>\r\n\r\n<p>============</p>\r\n\r\n<p>[[firstname]]</p>\r\n\r\n<p>[[username]]</p>\r\n\r\n<p>[[email]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'firstname,lastname,email,username,password,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (36, 'new_order_for_vendor', 'Vendor Got New Order', 'Vendor: You have new order from [[firstname]] [[lastname]]', '<p>Hello Vendor,</p>\r\n                    <p>you got new order from [[firstname]] [[lastname]]</p>\r\n                    <p>Commission: [[vendor_commission]] </p>\r\n                    <p>Order Status: [[status]] </p>\r\n                    <p><strong>Commission for product_name :&nbsp;</strong>[[product_name]]</p>\r\n                    [[website_name]]<br />\r\n                            Support Team</p>\r\n                ', '', '', '', '', 'vendor_firstname,vendor_lastname,vendor_commission,order_id,status,order_link,product_name,PhoneNumber,firstname,lastname,commission,total,currency_code,txn_id,website_name,website_logo,order_id');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (37, 'vendor_form_status_1', 'Vendor Form Status Change To Approved', 'Form Status Change To Approved', '<p>Dear, [[username]]</p>\r\n                                <p>Form Status Change to Approved</p>\r\n                                <p>Name [[title]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', '', '', '', '', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,title');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (38, 'vendor_create_product', 'Vendor Create new product', '', '', 'New Product Created By Vendor', '', '', '<p>Dear Admin,</p>\r\n                                <p>New Product has been created</p>\r\n                                <p>Name [[product_name]]</p>\r\n                                <p>Username [[username]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,product_name,product_short_description,product_price,product_sku,product_id');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (39, 'vendor_product_status_1', 'Vendor Product Status Change To Approved', 'Product Status Change To Approved', '<p>Dear, [[username]]</p>\r\n                                <p>Product Status Change to Approved</p>\r\n                                <p>Name [[product_name]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', '', '', '', '', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,product_name,product_short_description,product_price,product_sku,product_id');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (40, 'vendor_create_form', 'Vendor Create new product', '', '', 'New Form Created By Vendor', '', '', '<p>Dear Admin,</p>\r\n                                <p>New Form has been created</p>\r\n                                <p>Name [[title]]</p>\r\n                                <p>Username [[username]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,title');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (41, 'vendor_form_status_0', 'Vendor Form Status Change To In Review', 'Form Status Change To In Review', '<p>Dear,</p>\r\n                                <p>Form Status Change to In Review</p>\r\n                                <p>Name [[title]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', 'Form Status Change To In Review', '', '', '<p>Dear,</p>\r\n                                <p>Form Status Change to In Review</p>\r\n                                <p>Name [[title]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,title');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (42, 'vendor_form_status_2', 'Vendor Form Status Change To Denied', 'Form Status Change To Denied', '<p>Dear, [[username]]</p>\r\n                                <p>Form Status Change to Denied</p>\r\n                                <p>Name [[title]]</p>\r\n                                <p><br />\r\n                            [[website_name]]<br />\r\n                            Support Team</p>\r\n                        ', '', '', '', '', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,title');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (43, 'vendor_order_status_complete', 'Vendor Order Status Has Been Change', 'Vendor: New Order Commission From [[firstname]] [[lastname]]', '<p>Hello Vendor,</p>\r\n                    <p>you got new order Sale Commission from sale thats done under [[firstname]] [[lastname]]</p>\r\n                    <p>Commission: [[vendor_commission]] </p>\r\n                    <p><strong>Commission for product_name :&nbsp;</strong>[[product_name]]</p>\r\n                    [[website_name]]<br />\r\n                            Support Team</p>\r\n                ', '', '', '', '', 'vendor_firstname,vendor_lastname,vendor_commission,order_id,status,order_link,product_name,commission_type,PhoneNumber,firstname,lastname,commission,total,currency_code,txn_id,website_name,website_logo,order_id');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (45, 'vendor_create_program', 'Vendor Create new product', '', '', 'New Program Created By Vendor : [[name]]', '', '', '<p>Dear Admin,</p>\r\n                    <p>New Program has been created</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (46, 'vendor_program_status_2', 'Vendor Program Status Change To Denied', 'Program Status Change To Denied', '<p>Dear,</p>\r\n                    <p>Program Status Change to Denied</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Program Status Change To Denied', '', '', '<p>Dear,</p>\r\n                    <p>Program Status Change to Denied</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (47, 'vendor_program_status_3', 'Vendor Program Status Change To Ask To Edit', 'Program Status Change To Ask To Edit', '<p>Dear,</p>\r\n                    <p>Program Status Change to Ask To Edit</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Program Status Change To Ask To Edit', '', '', '<p>Dear,</p>\r\n                    <p>Program Status Change to Ask To Edit</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (48, 'vendor_program_status_0', 'Vendor Program Status Change To In Review', 'Program Status Change To In Review', '<p>Dear,</p>\r\n                    <p>Program Status Change to In Review</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Program Status Change To In Review', '', '', '<p>Dear,</p>\r\n                    <p>Program Status Change to In Review</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (49, 'vendor_program_status_1', 'Vendor Program Status Change To Approved', 'Program Status Change To Approved', '<p>Dear,</p>\r\n                    <p>Program Status Change to Approved</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Program Status Change To Approved', '', '', '<p>Dear,</p>\r\n                    <p>Program Status Change to Approved</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (51, 'vendor_create_ads', 'Vendor Create Ads (Banner, Text, Link, Video)', '', '', 'New Ads ([[type]]) Created By Vendor', '', '', '<p>Dear Admin,</p>\r\n                    <p>New Ads - [[type]] has been created</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name,type,tool_type');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (52, 'vendor_ads_status_1', 'Vendor Ads (Banner, Text, Link, Video) Status Change To Approved', 'Ads ([[type]]) Status Change To Approved', '<p>Dear</p>\r\n                    <p>Ads - [[type]] Status Change to Approved </p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Ads ([[type]]) Status Change To Approved', '', '', '<p>Dear</p>\r\n                    <p>Ads - [[type]] Status Change to Approved </p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name,type,tool_type');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (53, 'vendor_ads_status_0', 'Vendor Ads (Banner, Text, Link, Video) Status Change To In Review', 'Ads ([[type]]) Status Change To In Review', '<p>Dear</p>\r\n                    <p>Ads - [[type]] Status Change to In Review </p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Ads ([[type]]) Status Change To In Review', '', '', '<p>Dear</p>\r\n                    <p>Ads - [[type]] Status Change to In Review </p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name,type,tool_type');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (54, 'vendor_ads_status_3', 'Vendor Ads (Banner, Text, Link, Video) Status Change To Ask To Edit', 'Ads ([[type]]) Status Change To Ask To Edit', '<p>Dear</p>\r\n                    <p>Ads - [[type]] Status Change to Ask To Edit</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'Ads ([[type]]) Status Change To Ask To Edit', '', '', '<p>Dear</p>\r\n                    <p>Ads - [[type]] Status Change to Ask To Edit</p>\r\n                    <p>Name [[name]]</p>\r\n                    <p>Username [[username]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', 'admin_last_message,vendor_last_message,firstname,lastname,email,username,website_name,website_logo,name,type,tool_type');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (55, 'order_on_vendor_program', 'New Order in Vendor Program', 'New Order Create In Your Program', '<p>Dear Vendor,</p>\r\n                    <p>New Order Created under your Program</p>\r\n                    <p><b>Website</b> : [[external_website_name]]</p>\r\n                    <p><b>Total</b> : [[total]]</p>\r\n                    <p><br />\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', '', '', '', '', 'external_website_name,commission,username,website_name,website_logo,product_ids,total,currency,commission_type,script_name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (57, 'withdrwal_status_change', 'Withdrawal Request Status Changed', 'Withdrawal Request Status Changed', '<p>Dear,</p>\r\n                <p>Your Withdrawal Request #([[request_id]]) Status has been change to <b><i>[[status]]</i></b></p>\r\n\r\n                    <p>Comment: [[comment]] </p>\r\n                [[website_name]]<br />\r\n                Support Team</p>\r\n            ', '', NULL, NULL, '', 'comment,status,request_id,firstname,lastname,email,username,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (59, 'send_register_mail_api', 'User Registration (API)', 'Your Account Created Successfully On [[website_name]]', '<p>Welcome to [[website_name]]</p>\r\n\r\n<p>Dear [[firstname]],</p>\r\n\r\n<p>Thanks for signing up [[website_name]].</p>\r\n\r\n<p>Your&nbsp;Login&nbsp;credentials:</p>\r\n\r\n<p>Username:&nbsp;<strong>[[username]]</strong><br />\r\nPassword:&nbsp;<strong>*******</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"[[website_url]]\">Login To [[website_name]]</a></p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'User Registration Successfully', NULL, NULL, '<p>Dear Admin,</p>\r\n\r\n<p>New affiliate user Register on your site&nbsp;[[website_name]]</p>\r\n\r\n<p>Affiliate details:</p>\r\n\r\n<p>============</p>\r\n\r\n<p>[[firstname]]</p>\r\n\r\n<p>[[username]]</p>\r\n\r\n<p>[[email]]</p>\r\n\r\n<p><br />\r\n[[website_name]]<br />\r\nSupport Team</p>\r\n', 'firstname,lastname,email,username,website_url,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (63, 'subscription_status_change', 'Subscription Status Changed', 'Subscription Status Changed', '<p>Dear [[firstname]],</p>\r\n                <p>Your subscription status has been changed to [[status_text]]</p>\r\n                <p>Comment: [[comment]] </p>\r\n                [[website_name]]<br />\r\n                Support Team</p>', '', NULL, NULL, '', 'comment,planname,price,expire_at,started_at,status_text,firstname,lastname,email,username,website_url,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (64, 'subscription_buy', 'Subscription Buy', 'Subscription Buy', '<h2>Thanks for your order</h2>\r\n\r\n<p>Welcome to Prime. As a Prime member, enjoy these great benefits. If you have any questions, call us any time at or simply reply to this email.</p>\r\n', 'New Subscription Buy From [[firstname]] [[lastname]]', NULL, NULL, '<h2>Thanks for your order</h2>\r\n\r\n<p>Welcome to Prime. As a Prime member, enjoy these great benefits. If you have any questions, call us any time at or simply reply to this email.</p>\r\n', 'planname,price,expire_at,started_at,firstname,lastname,email,username,website_url,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (65, 'subscription_expire_notification', 'Subscription Expire Notification', 'Your Subscription Will Be Expired Soon.', '<p>customText</p>\r\n', NULL, NULL, NULL, NULL, 'planname,price,expire_at,started_at,firstname,lastname,email,username,website_url,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (66, 'wallet_noti_on_hold_wallet', 'Wallet Status Change To On Hold', '[[amount]] is put on hold in your wallet', '<p>Dear [[name]],</p>\n        <p>Transactions #[[id]] status changed to [[new_status]]. amount is [[amount]]</p>\n        <p><br />\n        [[website_name]]<br />\n        Support Team</p>\n', '', NULL, NULL, NULL, 'amount,id,name,new_status,user_email,website_name,website_logo,name');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (67, 'new_user_request', 'New User Request', 'User Registration Successfull', '<p>Dear [[firstname]] [[lastname]],</p>\r\n\r\n<p>User account has been registered successfully on [[website_name]], please wait while system admin apporve&nbsp;your request.<br />\r\nWe will inform you once account has been approved, Thank You.</p>\r\n\r\n<p>Support Team<br />\r\n[[website_name]]</p>\r\n', 'New User Registration - Approval Pending', NULL, NULL, '<p>Dear Admin,</p>\r\n\r\n<p>New user has been registered on [[website_name]], apporval is pending yet!</p>\r\n\r\n<p>User Details</p>\r\n\r\n<p>Name : [[firstname]][[lastname]]<br />\r\nEmail :&nbsp;[[email]]<br />\r\nUsername : [[username]]<br />\r\nSupport Team<br />\r\n[[website_name]]</p>', 'firstname,lastname,email,username,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (68, 'new_user_approved', 'New User Request Approved', 'User Account Approved', '<p>Dear [[firstname]] [[lastname]],</p>\r\n\r\n<p>Your new user account registration request is accepted by admin, you can login and use services.</p>\r\n\r\n<p>[[website_name]]<br />\r\nSupport Team</p>\r\n', 'User Account Approved', NULL, NULL, '<p>Dear Admin,</p>\r\n\r\n<p>You have approced registration request of user having</p>\r\n\r\n<p>Name : [[firstname]]&nbsp;[[lastname]]</p>\r\n\r\n<p>Email : [[email]]</p>\r\n\r\n<p>Username : [[username]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Support Team</p>\r\n\r\n<p>[[website_name]]</p>\r\n', 'firstname,lastname,email,username,website_name,website_logo');
INSERT INTO `mail_templates` (`id`, `unique_id`, `name`, `subject`, `text`, `admin_subject`, `client_subject`, `client_text`, `admin_text`, `shortcode`) VALUES (69, 'new_user_declined', 'New User Request Declined', 'User Account Declined', '<p>Dear [[firstname]] [[lastname]],</p>\r\n\r\n<p>Your new user account registration request is declined by admin, for more information please contact supprt team</p>\r\n\r\n<p>[[website_name]]<br />\r\nSupport Team</p>\r\n', 'User Account Declined', NULL, NULL, '<p>Dear Admin,</p>\r\n\r\n<p>You have declined registration request of user having</p>\r\n\r\n<p>Name : [[firstname]]&nbsp;[[lastname]]</p>\r\n\r\n<p>Email : [[email]]</p>\r\n\r\n<p>Username : [[username]]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Support Team</p>\r\n\r\n<p>[[website_name]]</p>\r\n', 'firstname,lastname,email,username,website_name,website_logo');


#
# TABLE STRUCTURE FOR: membership_buy_history
#

DROP TABLE IF EXISTS `membership_buy_history`;

CREATE TABLE `membership_buy_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buy_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: membership_plans
#

DROP TABLE IF EXISTS `membership_plans`;

CREATE TABLE `membership_plans` (
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
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: membership_user
#

DROP TABLE IF EXISTS `membership_user`;

CREATE TABLE `membership_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_day` int(11) DEFAULT NULL,
  `expire_at` datetime NOT NULL,
  `started_at` datetime NOT NULL,
  `status_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_lifetime` int(11) NOT NULL DEFAULT 0,
  `payment_method` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `payment_details` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `total` double DEFAULT 0,
  `bonus_commission` double DEFAULT 0,
  `expire_mail_sent` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: meta_data
#

DROP TABLE IF EXISTS `meta_data`;

CREATE TABLE `meta_data` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: notification
#

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
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
  `notification_created_date` datetime NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: order
#

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
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
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: order_products
#

DROP TABLE IF EXISTS `order_products`;

CREATE TABLE `order_products` (
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
  `admin_commission` float DEFAULT 0,
  `admin_commission_type` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `vendor_commission` float DEFAULT 0,
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

DROP TABLE IF EXISTS `order_proof`;

CREATE TABLE `order_proof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `proof` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: orders_history
#

DROP TABLE IF EXISTS `orders_history`;

CREATE TABLE `orders_history` (
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

DROP TABLE IF EXISTS `pagebuilder_theme`;

CREATE TABLE `pagebuilder_theme` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: pagebuilder_theme_page
#

DROP TABLE IF EXISTS `pagebuilder_theme_page`;

CREATE TABLE `pagebuilder_theme_page` (
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

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(555) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: payment_detail
#

DROP TABLE IF EXISTS `payment_detail`;

CREATE TABLE `payment_detail` (
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

DROP TABLE IF EXISTS `paypal_accounts`;

CREATE TABLE `paypal_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paypal_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product
#

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
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
  `recursion_endtime` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
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

DROP TABLE IF EXISTS `product_action`;

CREATE TABLE `product_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_action_admin
#

DROP TABLE IF EXISTS `product_action_admin`;

CREATE TABLE `product_action_admin` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `country_code` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_affiliate
#

DROP TABLE IF EXISTS `product_affiliate`;

CREATE TABLE `product_affiliate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `admin_commission_value` float DEFAULT 0,
  `admin_click_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `admin_click_amount` float DEFAULT 0,
  `admin_click_count` int(11) DEFAULT NULL,
  `affiliate_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `affiliate_commission_value` float DEFAULT 0,
  `affiliate_click_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `affiliate_click_count` int(11) DEFAULT NULL,
  `affiliate_click_amount` float DEFAULT 0,
  `comment` text CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_categories
#

DROP TABLE IF EXISTS `product_categories`;

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_media_upload
#

DROP TABLE IF EXISTS `product_media_upload`;

CREATE TABLE `product_media_upload` (
  `product_media_upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_media_upload_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_path` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_video_image` varchar(255) CHARACTER SET utf8 DEFAULT 'no-image.jpg',
  `product_media_upload_status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_ipaddress` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_created_date` datetime NOT NULL,
  `product_media_upload_created_by` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_os` text CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_browser` text CHARACTER SET utf8 DEFAULT NULL,
  `product_media_upload_isp` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`product_media_upload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: productslog
#

DROP TABLE IF EXISTS `productslog`;

CREATE TABLE `productslog` (
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
  `productslog_created` datetime NOT NULL,
  `productslog_updated` datetime NOT NULL,
  PRIMARY KEY (`productslog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: rating
#

DROP TABLE IF EXISTS `rating`;

CREATE TABLE `rating` (
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
  `rating_created` datetime NOT NULL,
  `rating_updated` datetime NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: refer_market_action
#

DROP TABLE IF EXISTS `refer_market_action`;

CREATE TABLE `refer_market_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text CHARACTER SET utf8 DEFAULT NULL,
  `commission` double(22,0) NOT NULL DEFAULT 0,
  `count_for` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: refer_product_action
#

DROP TABLE IF EXISTS `refer_product_action`;

CREATE TABLE `refer_product_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_ip` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewer_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `pay_commition` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `count_for` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: setting
#

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) CHARACTER SET utf8 NOT NULL,
  `setting_value` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `setting_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `setting_status` int(11) NOT NULL,
  `setting_ipaddress` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (1, 'front_template', 'multiple_pages', 'login', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (2, 'shipping_in_limited', '0', 'shipping_setting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (3, 'shipping_error_message', '', 'shipping_setting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (4, 'cost', '[]', 'shipping_setting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (5, 'name', 'My Store', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (6, 'status', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (7, 'menu_on_front', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (8, 'menu_on_front_blank', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (9, 'theme', '0', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (10, 'google_analytics', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (11, 'footer', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (12, 'contact_us_map', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (13, 'address', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (14, 'email', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (15, 'contact_number', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (16, 'is_variation_filter', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (17, 'homepage_banner', '{\"title\":\"\",\"content\":\"\",\"button_text\":\"\",\"button_link\":\"\"}', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (18, 'homepage_bottom_section', '{\"content\":\"\"}', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (19, 'about_content', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (20, 'contact_content', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (21, 'policy_content', '', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (22, 'homepage_slider', '[]', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (23, 'homepage_features', '[]', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (24, 'bs_cards', '[]', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (25, 'social_links', '[]', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (26, 'custom_page', '[]', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (27, 'footer_menu', '[]', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (28, 'recaptcha', '', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (29, 'product_commission_type', '', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (30, 'product_commission', '', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (31, 'product_ppc', '', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (32, 'product_noofpercommission', '', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (33, 'form_recursion', '', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (34, 'recursion_custom_time', '0', 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (35, 'recursion_endtime', NULL, 'formsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (36, 'storestatus', '1', 'vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (37, 'admin_click_count', '', 'vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (38, 'admin_click_amount', '', 'vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (39, 'admin_sale_commission_type', 'percentage', 'vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (40, 'admin_commission_value', '', 'vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (41, 'click_allow', 'single', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (42, 'product_commission_type', '', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (43, 'product_commission', '', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (44, 'product_ppc', '', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (45, 'product_noofpercommission', '', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (46, 'product_recursion', '', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (47, 'recursion_custom_time', '0', 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (48, 'recursion_endtime', NULL, 'productsetting', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (49, 'status', '1', 'order_comment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (50, 'title', '[]', 'order_comment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (51, 'status', '1', 'storepayment_bank_transfer', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (52, 'status', '1', 'storepayment_cod', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (53, 'status', '1', 'storepayment_flutterwave', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (54, 'status', '1', 'storepayment_opay', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (55, 'status', '1', 'storepayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (56, 'status', '1', 'storepayment_paypalstandard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (57, 'status', '1', 'storepayment_paystack', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (58, 'status', '1', 'storepayment_paytm', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (59, 'status', '1', 'storepayment_razorpay', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (60, 'status', '1', 'storepayment_skrill', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (61, 'status', '1', 'storepayment_stripes', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (62, 'status', '1', 'storepayment_xendit', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (63, 'status', '1', 'storepayment_yandex', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (64, 'registration_status', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (65, 'affiliate_cookie', '365', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (66, 'time_zone', 'Africa/Abidjan', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (67, 'wallet_min_amount', '100', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (68, 'default_action_status', '0', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (69, 'status', '1', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (70, 'from_email', 'admin@example.com', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (71, 'from_name', 'SUPPORT', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (72, 'smtp_hostname', '', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (73, 'smtp_username', '', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (74, 'smtp_password', '', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (75, 'smtp_port', '', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (76, 'notify_email', 'admin@example.com', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (77, 'admin_sound_status', '1', 'live_dashboard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (78, 'admin_action_status', '1', 'live_dashboard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (79, 'admin_integration_order_status', '1', 'live_dashboard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (80, 'admin_affiliate_register_status', '1', 'live_dashboard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (81, 'admin_local_store_order_status', '1', 'live_dashboard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (82, 'admin_data_load_interval', '10', 'live_dashboard', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (83, 'admin_integration_logs', '1', 'live_log', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (84, 'admin_integration_orders', '1', 'live_log', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (85, 'admin_newuser', '0', 'live_log', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (86, 'status', '1', 'membership', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (87, 'notificationbefore', '5', 'membership', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (88, 'default_plan_id', '1', 'membership', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (89, 'is_install', '1', 'membershippayment_bank_transfer', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (90, 'is_install', '1', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (91, 'is_install', '1', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (92, 'status', '1', 'membershippayment_bank_transfer', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (93, 'bank_details', '', 'membershippayment_bank_transfer', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (94, 'status', '1', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (95, 'api_username', '', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (96, 'api_password', '', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (97, 'api_signature', '', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (98, 'payment_currency', 'USD', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (99, 'denied_status_id', '0', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (100, 'pending_status_id', '0', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (101, 'processing_status_id', '0', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (102, 'success_status_id', '0', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (103, 'canceled_status_id', '0', 'membershippayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (104, 'status', '1', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (105, 'environment', '0', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (106, 'test_public_key', '', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (107, 'test_secret_key', '', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (108, 'live_public_key', '', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (109, 'live_secret_key', '', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (110, 'order_success_status', '0', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (111, 'order_failed_status', '0', 'membershippayment_stripe_payment', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (112, 'wallet_min_message', '<p>Minimum Withdraw Is: 100</p>', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (113, 'name', 'My Affiliate System', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (114, 'maintenance_mode', '0', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (115, 'store_maintenance_mode', '0', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (116, 'session_timeout', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (117, 'footer', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (118, 'meta_description', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (119, 'meta_keywords', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (120, 'meta_author', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (121, 'google_analytics', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (122, 'faceboook_pixel', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (123, 'fbmessager_script', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (124, 'global_script', '', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (125, 'global_script_status', '[]', 'site', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (126, 'registration_approval', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (127, 'language_status', '1', 'store', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (128, 'smtp_crypto', '', 'email', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (129, 'heading', 'Terms Page', 'tnc', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (130, 'content', '<p>Terms Content</p><p>Terms Content</p><p>Terms Content</p><p>Terms Content</p><p>Terms Content</p><p>Terms Content<br></p>', 'tnc', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (131, 'sitekey', '', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (132, 'secretkey', '', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (133, 'admin_login', '0', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (134, 'affiliate_login', '0', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (135, 'affiliate_register', '0', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (136, 'client_login', '0', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (137, 'client_register', '0', 'googlerecaptcha', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (138, 'registration_builder', '[{\"type\":\"header\",\"label\":\"Firstname\"},{\"type\":\"header\",\"label\":\"Lastname\"},{\"type\":\"header\",\"label\":\"Email\"},{\"type\":\"text\",\"required\":\"true\",\"label\":\"Mobile Number\",\"placeholder\":\"Mobile Number\",\"className\":\"form-control\",\"name\":\"text-1611314653157\",\"mobile_validation\":\"true\"},{\"type\":\"header\",\"label\":\"Username\"},{\"type\":\"header\",\"label\":\"Password\"},{\"type\":\"header\",\"label\":\"Confirm_password\"}]', 'registration_builder', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (139, 'is_install', '1', 'withdrawalpayment_bank_transfer', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (140, 'is_install', '1', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (141, 'status', '1', 'withdrawalpayment_bank_transfer', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (142, 'status', '1', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (143, 'ClientID', '', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (144, 'ClientSecret', '', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (145, 'denied_status_id', '0', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (146, 'pending_status_id', '0', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (147, 'processing_status_id', '0', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (148, 'success_status_id', '0', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (149, 'canceled_status_id', '0', 'withdrawalpayment_paypal', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (150, 'autoacceptlocalstore', '0', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (151, 'autoacceptexternalstore', '0', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (152, 'autoacceptaction', '0', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (153, 'show_sponser', '', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (154, 'sponser_name', 'System Admin', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (155, 'disabled_for', '[]', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (156, 'levels', '10', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (157, 'sale_type', 'percentage', 'referlevel', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (158, 'commition', '', 'referlevel_1', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (159, 'sale_commition', '', 'referlevel_1', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (160, 'ex_commition', '', 'referlevel_1', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (161, 'ex_action_commition', '', 'referlevel_1', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (162, 'commition', '', 'referlevel_2', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (163, 'sale_commition', '', 'referlevel_2', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (164, 'ex_commition', '', 'referlevel_2', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (165, 'ex_action_commition', '', 'referlevel_2', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (166, 'commition', '', 'referlevel_3', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (167, 'sale_commition', '', 'referlevel_3', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (168, 'ex_commition', '', 'referlevel_3', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (169, 'ex_action_commition', '', 'referlevel_3', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (170, 'commition', '', 'referlevel_4', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (171, 'sale_commition', '', 'referlevel_4', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (172, 'ex_commition', '', 'referlevel_4', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (173, 'ex_action_commition', '', 'referlevel_4', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (174, 'commition', '', 'referlevel_5', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (175, 'sale_commition', '', 'referlevel_5', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (176, 'ex_commition', '', 'referlevel_5', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (177, 'ex_action_commition', '', 'referlevel_5', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (178, 'commition', '', 'referlevel_6', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (179, 'sale_commition', '', 'referlevel_6', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (180, 'ex_commition', '', 'referlevel_6', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (181, 'ex_action_commition', '', 'referlevel_6', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (182, 'commition', '', 'referlevel_7', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (183, 'sale_commition', '', 'referlevel_7', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (184, 'ex_commition', '', 'referlevel_7', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (185, 'ex_action_commition', '', 'referlevel_7', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (186, 'commition', '', 'referlevel_8', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (187, 'sale_commition', '', 'referlevel_8', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (188, 'ex_commition', '', 'referlevel_8', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (189, 'ex_action_commition', '', 'referlevel_8', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (190, 'commition', '', 'referlevel_9', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (191, 'sale_commition', '', 'referlevel_9', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (192, 'ex_commition', '', 'referlevel_9', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (193, 'ex_action_commition', '', 'referlevel_9', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (194, 'commition', '', 'referlevel_10', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (195, 'sale_commition', '', 'referlevel_10', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (196, 'ex_commition', '', 'referlevel_10', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (197, 'ex_action_commition', '', 'referlevel_10', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (198, 'status', '0', 'marketpostback', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (199, 'url', '', 'marketpostback', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (200, 'static', '[]', 'marketpostback', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (201, 'marketvendorstatus', '1', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (202, 'commission_type', '', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (203, 'commission_sale', '', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (204, 'sale_status', '0', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (205, 'click_allow', 'single', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (206, 'commission_number_of_click', '', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (207, 'commission_click_commission', '', 'market_vendor', 1, '');
INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`, `setting_type`, `setting_status`, `setting_ipaddress`) VALUES (208, 'click_status', '0', 'market_vendor', 1, '');


#
# TABLE STRUCTURE FOR: shipping_address
#

DROP TABLE IF EXISTS `shipping_address`;

CREATE TABLE `shipping_address` (
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

DROP TABLE IF EXISTS `slugs`;

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: states
#

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1, 'Andaman and Nicobar Islands', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2, 'Andhra Pradesh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3, 'Arunachal Pradesh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4, 'Assam', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (5, 'Bihar', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (6, 'Chandigarh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (7, 'Chhattisgarh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (8, 'Dadra and Nagar Haveli', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (9, 'Daman and Diu', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (10, 'Delhi', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (11, 'Goa', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (12, 'Gujarat', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (13, 'Haryana', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (14, 'Himachal Pradesh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (15, 'Jammu and Kashmir', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (16, 'Jharkhand', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (17, 'Karnataka', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (18, 'Kenmore', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (19, 'Kerala', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (20, 'Lakshadweep', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (21, 'Madhya Pradesh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (22, 'Maharashtra', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (23, 'Manipur', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (24, 'Meghalaya', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (25, 'Mizoram', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (26, 'Nagaland', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (27, 'Narora', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (28, 'Natwar', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (29, 'Odisha', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (30, 'Paschim Medinipur', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (31, 'Pondicherry', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (32, 'Punjab', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (33, 'Rajasthan', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (34, 'Sikkim', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (35, 'Tamil Nadu', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (36, 'Telangana', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (37, 'Tripura', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (38, 'Uttar Pradesh', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (39, 'Uttarakhand', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (40, 'Vaishali', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (41, 'West Bengal', 101);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (42, 'Badakhshan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (43, 'Badgis', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (44, 'Baglan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (45, 'Balkh', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (46, 'Bamiyan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (47, 'Farah', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (48, 'Faryab', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (49, 'Gawr', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (50, 'Gazni', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (51, 'Herat', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (52, 'Hilmand', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (53, 'Jawzjan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (54, 'Kabul', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (55, 'Kapisa', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (56, 'Khawst', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (57, 'Kunar', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (58, 'Lagman', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (59, 'Lawghar', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (60, 'Nangarhar', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (61, 'Nimruz', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (62, 'Nuristan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (63, 'Paktika', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (64, 'Paktiya', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (65, 'Parwan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (66, 'Qandahar', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (67, 'Qunduz', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (68, 'Samangan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (69, 'Sar-e Pul', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (70, 'Takhar', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (71, 'Uruzgan', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (72, 'Wardag', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (73, 'Zabul', 1);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (74, 'Berat', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (75, 'Bulqize', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (76, 'Delvine', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (77, 'Devoll', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (78, 'Dibre', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (79, 'Durres', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (80, 'Elbasan', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (81, 'Fier', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (82, 'Gjirokaster', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (83, 'Gramsh', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (84, 'Has', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (85, 'Kavaje', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (86, 'Kolonje', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (87, 'Korce', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (88, 'Kruje', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (89, 'Kucove', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (90, 'Kukes', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (91, 'Kurbin', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (92, 'Lezhe', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (93, 'Librazhd', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (94, 'Lushnje', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (95, 'Mallakaster', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (96, 'Malsi e Madhe', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (97, 'Mat', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (98, 'Mirdite', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (99, 'Peqin', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (100, 'Permet', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (101, 'Pogradec', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (102, 'Puke', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (103, 'Sarande', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (104, 'Shkoder', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (105, 'Skrapar', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (106, 'Tepelene', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (107, 'Tirane', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (108, 'Tropoje', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (109, 'Vlore', 2);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (110, '\'Ayn Daflah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (111, '\'Ayn Tamushanat', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (112, 'Adrar', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (113, 'Algiers', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (114, 'Annabah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (115, 'Bashshar', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (116, 'Batnah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (117, 'Bijayah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (118, 'Biskrah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (119, 'Blidah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (120, 'Buirah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (121, 'Bumardas', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (122, 'Burj Bu Arririj', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (123, 'Ghalizan', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (124, 'Ghardayah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (125, 'Ilizi', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (126, 'Jijili', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (127, 'Jilfah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (128, 'Khanshalah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (129, 'Masilah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (130, 'Midyah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (131, 'Milah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (132, 'Muaskar', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (133, 'Mustaghanam', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (134, 'Naama', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (135, 'Oran', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (136, 'Ouargla', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (137, 'Qalmah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (138, 'Qustantinah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (139, 'Sakikdah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (140, 'Satif', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (141, 'Sayda\'', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (142, 'Sidi ban-al-\'Abbas', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (143, 'Suq Ahras', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (144, 'Tamanghasat', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (145, 'Tibazah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (146, 'Tibissah', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (147, 'Tilimsan', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (148, 'Tinduf', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (149, 'Tisamsilt', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (150, 'Tiyarat', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (151, 'Tizi Wazu', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (152, 'Umm-al-Bawaghi', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (153, 'Wahran', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (154, 'Warqla', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (155, 'Wilaya d Alger', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (156, 'Wilaya de Bejaia', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (157, 'Wilaya de Constantine', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (158, 'al-Aghwat', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (159, 'al-Bayadh', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (160, 'al-Jaza\'ir', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (161, 'al-Wad', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (162, 'ash-Shalif', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (163, 'at-Tarif', 3);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (164, 'Eastern', 4);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (165, 'Manu\'a', 4);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (166, 'Swains Island', 4);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (167, 'Western', 4);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (168, 'Andorra la Vella', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (169, 'Canillo', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (170, 'Encamp', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (171, 'La Massana', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (172, 'Les Escaldes', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (173, 'Ordino', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (174, 'Sant Julia de Loria', 5);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (175, 'Bengo', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (176, 'Benguela', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (177, 'Bie', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (178, 'Cabinda', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (179, 'Cunene', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (180, 'Huambo', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (181, 'Huila', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (182, 'Kuando-Kubango', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (183, 'Kwanza Norte', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (184, 'Kwanza Sul', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (185, 'Luanda', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (186, 'Lunda Norte', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (187, 'Lunda Sul', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (188, 'Malanje', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (189, 'Moxico', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (190, 'Namibe', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (191, 'Uige', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (192, 'Zaire', 6);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (193, 'Other Provinces', 7);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (194, 'Sector claimed by Argentina/Ch', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (195, 'Sector claimed by Argentina/UK', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (196, 'Sector claimed by Australia', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (197, 'Sector claimed by France', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (198, 'Sector claimed by New Zealand', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (199, 'Sector claimed by Norway', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (200, 'Unclaimed Sector', 8);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (201, 'Barbuda', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (202, 'Saint George', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (203, 'Saint John', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (204, 'Saint Mary', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (205, 'Saint Paul', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (206, 'Saint Peter', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (207, 'Saint Philip', 9);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (208, 'Buenos Aires', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (209, 'Catamarca', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (210, 'Chaco', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (211, 'Chubut', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (212, 'Cordoba', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (213, 'Corrientes', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (214, 'Distrito Federal', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (215, 'Entre Rios', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (216, 'Formosa', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (217, 'Jujuy', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (218, 'La Pampa', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (219, 'La Rioja', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (220, 'Mendoza', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (221, 'Misiones', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (222, 'Neuquen', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (223, 'Rio Negro', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (224, 'Salta', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (225, 'San Juan', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (226, 'San Luis', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (227, 'Santa Cruz', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (228, 'Santa Fe', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (229, 'Santiago del Estero', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (230, 'Tierra del Fuego', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (231, 'Tucuman', 10);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (232, 'Aragatsotn', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (233, 'Ararat', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (234, 'Armavir', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (235, 'Gegharkunik', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (236, 'Kotaik', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (237, 'Lori', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (238, 'Shirak', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (239, 'Stepanakert', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (240, 'Syunik', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (241, 'Tavush', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (242, 'Vayots Dzor', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (243, 'Yerevan', 11);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (244, 'Aruba', 12);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (245, 'Auckland', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (246, 'Australian Capital Territory', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (247, 'Balgowlah', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (248, 'Balmain', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (249, 'Bankstown', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (250, 'Baulkham Hills', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (251, 'Bonnet Bay', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (252, 'Camberwell', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (253, 'Carole Park', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (254, 'Castle Hill', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (255, 'Caulfield', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (256, 'Chatswood', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (257, 'Cheltenham', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (258, 'Cherrybrook', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (259, 'Clayton', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (260, 'Collingwood', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (261, 'Frenchs Forest', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (262, 'Hawthorn', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (263, 'Jannnali', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (264, 'Knoxfield', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (265, 'Melbourne', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (266, 'New South Wales', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (267, 'Northern Territory', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (268, 'Perth', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (269, 'Queensland', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (270, 'South Australia', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (271, 'Tasmania', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (272, 'Templestowe', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (273, 'Victoria', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (274, 'Werribee south', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (275, 'Western Australia', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (276, 'Wheeler', 13);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (277, 'Bundesland Salzburg', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (278, 'Bundesland Steiermark', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (279, 'Bundesland Tirol', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (280, 'Burgenland', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (281, 'Carinthia', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (282, 'Karnten', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (283, 'Liezen', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (284, 'Lower Austria', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (285, 'Niederosterreich', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (286, 'Oberosterreich', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (287, 'Salzburg', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (288, 'Schleswig-Holstein', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (289, 'Steiermark', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (290, 'Styria', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (291, 'Tirol', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (292, 'Upper Austria', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (293, 'Vorarlberg', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (294, 'Wien', 14);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (295, 'Abseron', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (296, 'Baki Sahari', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (297, 'Ganca', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (298, 'Ganja', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (299, 'Kalbacar', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (300, 'Lankaran', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (301, 'Mil-Qarabax', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (302, 'Mugan-Salyan', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (303, 'Nagorni-Qarabax', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (304, 'Naxcivan', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (305, 'Priaraks', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (306, 'Qazax', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (307, 'Saki', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (308, 'Sirvan', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (309, 'Xacmaz', 15);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (310, 'Abaco', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (311, 'Acklins Island', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (312, 'Andros', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (313, 'Berry Islands', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (314, 'Biminis', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (315, 'Cat Island', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (316, 'Crooked Island', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (317, 'Eleuthera', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (318, 'Exuma and Cays', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (319, 'Grand Bahama', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (320, 'Inagua Islands', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (321, 'Long Island', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (322, 'Mayaguana', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (323, 'New Providence', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (324, 'Ragged Island', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (325, 'Rum Cay', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (326, 'San Salvador', 16);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (327, '\'Isa', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (328, 'Badiyah', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (329, 'Hidd', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (330, 'Jidd Hafs', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (331, 'Mahama', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (332, 'Manama', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (333, 'Sitrah', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (334, 'al-Manamah', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (335, 'al-Muharraq', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (336, 'ar-Rifa\'a', 17);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (337, 'Bagar Hat', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (338, 'Bandarban', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (339, 'Barguna', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (340, 'Barisal', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (341, 'Bhola', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (342, 'Bogora', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (343, 'Brahman Bariya', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (344, 'Chandpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (345, 'Chattagam', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (346, 'Chittagong Division', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (347, 'Chuadanga', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (348, 'Dhaka', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (349, 'Dinajpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (350, 'Faridpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (351, 'Feni', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (352, 'Gaybanda', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (353, 'Gazipur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (354, 'Gopalganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (355, 'Habiganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (356, 'Jaipur Hat', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (357, 'Jamalpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (358, 'Jessor', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (359, 'Jhalakati', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (360, 'Jhanaydah', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (361, 'Khagrachhari', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (362, 'Khulna', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (363, 'Kishorganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (364, 'Koks Bazar', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (365, 'Komilla', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (366, 'Kurigram', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (367, 'Kushtiya', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (368, 'Lakshmipur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (369, 'Lalmanir Hat', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (370, 'Madaripur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (371, 'Magura', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (372, 'Maimansingh', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (373, 'Manikganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (374, 'Maulvi Bazar', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (375, 'Meherpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (376, 'Munshiganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (377, 'Naral', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (378, 'Narayanganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (379, 'Narsingdi', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (380, 'Nator', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (381, 'Naugaon', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (382, 'Nawabganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (383, 'Netrakona', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (384, 'Nilphamari', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (385, 'Noakhali', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (386, 'Pabna', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (387, 'Panchagarh', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (388, 'Patuakhali', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (389, 'Pirojpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (390, 'Rajbari', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (391, 'Rajshahi', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (392, 'Rangamati', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (393, 'Rangpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (394, 'Satkhira', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (395, 'Shariatpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (396, 'Sherpur', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (397, 'Silhat', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (398, 'Sirajganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (399, 'Sunamganj', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (400, 'Tangayal', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (401, 'Thakurgaon', 18);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (402, 'Christ Church', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (403, 'Saint Andrew', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (404, 'Saint George', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (405, 'Saint James', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (406, 'Saint John', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (407, 'Saint Joseph', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (408, 'Saint Lucy', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (409, 'Saint Michael', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (410, 'Saint Peter', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (411, 'Saint Philip', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (412, 'Saint Thomas', 19);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (413, 'Brest', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (414, 'Homjel\'', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (415, 'Hrodna', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (416, 'Mahiljow', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (417, 'Mahilyowskaya Voblasts', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (418, 'Minsk', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (419, 'Minskaja Voblasts\'', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (420, 'Petrik', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (421, 'Vicebsk', 20);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (422, 'Antwerpen', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (423, 'Berchem', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (424, 'Brabant', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (425, 'Brabant Wallon', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (426, 'Brussel', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (427, 'East Flanders', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (428, 'Hainaut', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (429, 'Liege', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (430, 'Limburg', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (431, 'Luxembourg', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (432, 'Namur', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (433, 'Ontario', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (434, 'Oost-Vlaanderen', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (435, 'Provincie Brabant', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (436, 'Vlaams-Brabant', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (437, 'Wallonne', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (438, 'West-Vlaanderen', 21);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (439, 'Belize', 22);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (440, 'Cayo', 22);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (441, 'Corozal', 22);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (442, 'Orange Walk', 22);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (443, 'Stann Creek', 22);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (444, 'Toledo', 22);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (445, 'Alibori', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (446, 'Atacora', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (447, 'Atlantique', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (448, 'Borgou', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (449, 'Collines', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (450, 'Couffo', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (451, 'Donga', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (452, 'Littoral', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (453, 'Mono', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (454, 'Oueme', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (455, 'Plateau', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (456, 'Zou', 23);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (457, 'Hamilton', 24);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (458, 'Saint George', 24);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (459, 'Bumthang', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (460, 'Chhukha', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (461, 'Chirang', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (462, 'Daga', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (463, 'Geylegphug', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (464, 'Ha', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (465, 'Lhuntshi', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (466, 'Mongar', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (467, 'Pemagatsel', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (468, 'Punakha', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (469, 'Rinpung', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (470, 'Samchi', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (471, 'Samdrup Jongkhar', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (472, 'Shemgang', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (473, 'Tashigang', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (474, 'Timphu', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (475, 'Tongsa', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (476, 'Wangdiphodrang', 25);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (477, 'Beni', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (478, 'Chuquisaca', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (479, 'Cochabamba', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (480, 'La Paz', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (481, 'Oruro', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (482, 'Pando', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (483, 'Potosi', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (484, 'Santa Cruz', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (485, 'Tarija', 26);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (486, 'Federacija Bosna i Hercegovina', 27);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (487, 'Republika Srpska', 27);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (488, 'Central Bobonong', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (489, 'Central Boteti', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (490, 'Central Mahalapye', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (491, 'Central Serowe-Palapye', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (492, 'Central Tutume', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (493, 'Chobe', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (494, 'Francistown', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (495, 'Gaborone', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (496, 'Ghanzi', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (497, 'Jwaneng', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (498, 'Kgalagadi North', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (499, 'Kgalagadi South', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (500, 'Kgatleng', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (501, 'Kweneng', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (502, 'Lobatse', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (503, 'Ngamiland', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (504, 'Ngwaketse', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (505, 'North East', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (506, 'Okavango', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (507, 'Orapa', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (508, 'Selibe Phikwe', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (509, 'South East', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (510, 'Sowa', 28);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (511, 'Bouvet Island', 29);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (512, 'Acre', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (513, 'Alagoas', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (514, 'Amapa', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (515, 'Amazonas', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (516, 'Bahia', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (517, 'Ceara', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (518, 'Distrito Federal', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (519, 'Espirito Santo', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (520, 'Estado de Sao Paulo', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (521, 'Goias', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (522, 'Maranhao', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (523, 'Mato Grosso', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (524, 'Mato Grosso do Sul', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (525, 'Minas Gerais', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (526, 'Para', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (527, 'Paraiba', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (528, 'Parana', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (529, 'Pernambuco', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (530, 'Piaui', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (531, 'Rio Grande do Norte', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (532, 'Rio Grande do Sul', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (533, 'Rio de Janeiro', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (534, 'Rondonia', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (535, 'Roraima', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (536, 'Santa Catarina', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (537, 'Sao Paulo', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (538, 'Sergipe', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (539, 'Tocantins', 30);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (540, 'British Indian Ocean Territory', 31);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (541, 'Belait', 32);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (542, 'Brunei-Muara', 32);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (543, 'Temburong', 32);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (544, 'Tutong', 32);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (545, 'Blagoevgrad', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (546, 'Burgas', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (547, 'Dobrich', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (548, 'Gabrovo', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (549, 'Haskovo', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (550, 'Jambol', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (551, 'Kardzhali', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (552, 'Kjustendil', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (553, 'Lovech', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (554, 'Montana', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (555, 'Oblast Sofiya-Grad', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (556, 'Pazardzhik', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (557, 'Pernik', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (558, 'Pleven', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (559, 'Plovdiv', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (560, 'Razgrad', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (561, 'Ruse', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (562, 'Shumen', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (563, 'Silistra', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (564, 'Sliven', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (565, 'Smoljan', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (566, 'Sofija grad', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (567, 'Sofijska oblast', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (568, 'Stara Zagora', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (569, 'Targovishte', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (570, 'Varna', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (571, 'Veliko Tarnovo', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (572, 'Vidin', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (573, 'Vraca', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (574, 'Yablaniza', 33);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (575, 'Bale', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (576, 'Bam', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (577, 'Bazega', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (578, 'Bougouriba', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (579, 'Boulgou', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (580, 'Boulkiemde', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (581, 'Comoe', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (582, 'Ganzourgou', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (583, 'Gnagna', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (584, 'Gourma', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (585, 'Houet', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (586, 'Ioba', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (587, 'Kadiogo', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (588, 'Kenedougou', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (589, 'Komandjari', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (590, 'Kompienga', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (591, 'Kossi', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (592, 'Kouritenga', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (593, 'Kourweogo', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (594, 'Leraba', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (595, 'Mouhoun', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (596, 'Nahouri', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (597, 'Namentenga', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (598, 'Noumbiel', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (599, 'Oubritenga', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (600, 'Oudalan', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (601, 'Passore', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (602, 'Poni', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (603, 'Sanguie', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (604, 'Sanmatenga', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (605, 'Seno', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (606, 'Sissili', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (607, 'Soum', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (608, 'Sourou', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (609, 'Tapoa', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (610, 'Tuy', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (611, 'Yatenga', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (612, 'Zondoma', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (613, 'Zoundweogo', 34);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (614, 'Bubanza', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (615, 'Bujumbura', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (616, 'Bururi', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (617, 'Cankuzo', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (618, 'Cibitoke', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (619, 'Gitega', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (620, 'Karuzi', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (621, 'Kayanza', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (622, 'Kirundo', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (623, 'Makamba', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (624, 'Muramvya', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (625, 'Muyinga', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (626, 'Ngozi', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (627, 'Rutana', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (628, 'Ruyigi', 35);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (629, 'Banteay Mean Chey', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (630, 'Bat Dambang', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (631, 'Kampong Cham', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (632, 'Kampong Chhnang', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (633, 'Kampong Spoeu', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (634, 'Kampong Thum', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (635, 'Kampot', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (636, 'Kandal', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (637, 'Kaoh Kong', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (638, 'Kracheh', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (639, 'Krong Kaeb', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (640, 'Krong Pailin', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (641, 'Krong Preah Sihanouk', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (642, 'Mondol Kiri', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (643, 'Otdar Mean Chey', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (644, 'Phnum Penh', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (645, 'Pousat', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (646, 'Preah Vihear', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (647, 'Prey Veaeng', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (648, 'Rotanak Kiri', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (649, 'Siem Reab', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (650, 'Stueng Traeng', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (651, 'Svay Rieng', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (652, 'Takaev', 36);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (653, 'Adamaoua', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (654, 'Centre', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (655, 'Est', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (656, 'Littoral', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (657, 'Nord', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (658, 'Nord Extreme', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (659, 'Nordouest', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (660, 'Ouest', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (661, 'Sud', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (662, 'Sudouest', 37);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (663, 'Alberta', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (664, 'British Columbia', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (665, 'Manitoba', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (666, 'New Brunswick', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (667, 'Newfoundland and Labrador', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (668, 'Northwest Territories', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (669, 'Nova Scotia', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (670, 'Nunavut', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (671, 'Ontario', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (672, 'Prince Edward Island', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (673, 'Quebec', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (674, 'Saskatchewan', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (675, 'Yukon', 38);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (676, 'Boavista', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (677, 'Brava', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (678, 'Fogo', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (679, 'Maio', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (680, 'Sal', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (681, 'Santo Antao', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (682, 'Sao Nicolau', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (683, 'Sao Tiago', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (684, 'Sao Vicente', 39);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (685, 'Grand Cayman', 40);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (686, 'Bamingui-Bangoran', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (687, 'Bangui', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (688, 'Basse-Kotto', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (689, 'Haut-Mbomou', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (690, 'Haute-Kotto', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (691, 'Kemo', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (692, 'Lobaye', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (693, 'Mambere-Kadei', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (694, 'Mbomou', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (695, 'Nana-Gribizi', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (696, 'Nana-Mambere', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (697, 'Ombella Mpoko', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (698, 'Ouaka', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (699, 'Ouham', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (700, 'Ouham-Pende', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (701, 'Sangha-Mbaere', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (702, 'Vakaga', 41);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (703, 'Batha', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (704, 'Biltine', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (705, 'Bourkou-Ennedi-Tibesti', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (706, 'Chari-Baguirmi', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (707, 'Guera', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (708, 'Kanem', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (709, 'Lac', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (710, 'Logone Occidental', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (711, 'Logone Oriental', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (712, 'Mayo-Kebbi', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (713, 'Moyen-Chari', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (714, 'Ouaddai', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (715, 'Salamat', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (716, 'Tandjile', 42);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (717, 'Aisen', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (718, 'Antofagasta', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (719, 'Araucania', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (720, 'Atacama', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (721, 'Bio Bio', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (722, 'Coquimbo', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (723, 'Libertador General Bernardo O\'', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (724, 'Los Lagos', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (725, 'Magellanes', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (726, 'Maule', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (727, 'Metropolitana', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (728, 'Metropolitana de Santiago', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (729, 'Tarapaca', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (730, 'Valparaiso', 43);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (731, 'Anhui', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (732, 'Anhui Province', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (733, 'Anhui Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (734, 'Aomen', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (735, 'Beijing', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (736, 'Beijing Shi', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (737, 'Chongqing', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (738, 'Fujian', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (739, 'Fujian Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (740, 'Gansu', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (741, 'Guangdong', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (742, 'Guangdong Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (743, 'Guangxi', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (744, 'Guizhou', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (745, 'Hainan', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (746, 'Hebei', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (747, 'Heilongjiang', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (748, 'Henan', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (749, 'Hubei', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (750, 'Hunan', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (751, 'Jiangsu', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (752, 'Jiangsu Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (753, 'Jiangxi', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (754, 'Jilin', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (755, 'Liaoning', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (756, 'Liaoning Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (757, 'Nei Monggol', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (758, 'Ningxia Hui', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (759, 'Qinghai', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (760, 'Shaanxi', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (761, 'Shandong', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (762, 'Shandong Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (763, 'Shanghai', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (764, 'Shanxi', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (765, 'Sichuan', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (766, 'Tianjin', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (767, 'Xianggang', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (768, 'Xinjiang', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (769, 'Xizang', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (770, 'Yunnan', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (771, 'Zhejiang', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (772, 'Zhejiang Sheng', 44);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (773, 'Christmas Island', 45);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (774, 'Cocos (Keeling) Islands', 46);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (775, 'Amazonas', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (776, 'Antioquia', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (777, 'Arauca', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (778, 'Atlantico', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (779, 'Bogota', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (780, 'Bolivar', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (781, 'Boyaca', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (782, 'Caldas', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (783, 'Caqueta', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (784, 'Casanare', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (785, 'Cauca', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (786, 'Cesar', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (787, 'Choco', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (788, 'Cordoba', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (789, 'Cundinamarca', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (790, 'Guainia', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (791, 'Guaviare', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (792, 'Huila', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (793, 'La Guajira', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (794, 'Magdalena', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (795, 'Meta', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (796, 'Narino', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (797, 'Norte de Santander', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (798, 'Putumayo', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (799, 'Quindio', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (800, 'Risaralda', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (801, 'San Andres y Providencia', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (802, 'Santander', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (803, 'Sucre', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (804, 'Tolima', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (805, 'Valle del Cauca', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (806, 'Vaupes', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (807, 'Vichada', 47);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (808, 'Mwali', 48);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (809, 'Njazidja', 48);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (810, 'Nzwani', 48);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (811, 'Bouenza', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (812, 'Brazzaville', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (813, 'Cuvette', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (814, 'Kouilou', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (815, 'Lekoumou', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (816, 'Likouala', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (817, 'Niari', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (818, 'Plateaux', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (819, 'Pool', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (820, 'Sangha', 49);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (821, 'Bandundu', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (822, 'Bas-Congo', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (823, 'Equateur', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (824, 'Haut-Congo', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (825, 'Kasai-Occidental', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (826, 'Kasai-Oriental', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (827, 'Katanga', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (828, 'Kinshasa', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (829, 'Maniema', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (830, 'Nord-Kivu', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (831, 'Sud-Kivu', 50);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (832, 'Aitutaki', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (833, 'Atiu', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (834, 'Mangaia', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (835, 'Manihiki', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (836, 'Mauke', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (837, 'Mitiaro', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (838, 'Nassau', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (839, 'Pukapuka', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (840, 'Rakahanga', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (841, 'Rarotonga', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (842, 'Tongareva', 51);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (843, 'Alajuela', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (844, 'Cartago', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (845, 'Guanacaste', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (846, 'Heredia', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (847, 'Limon', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (848, 'Puntarenas', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (849, 'San Jose', 52);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (850, 'Abidjan', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (851, 'Agneby', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (852, 'Bafing', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (853, 'Denguele', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (854, 'Dix-huit Montagnes', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (855, 'Fromager', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (856, 'Haut-Sassandra', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (857, 'Lacs', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (858, 'Lagunes', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (859, 'Marahoue', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (860, 'Moyen-Cavally', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (861, 'Moyen-Comoe', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (862, 'N\'zi-Comoe', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (863, 'Sassandra', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (864, 'Savanes', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (865, 'Sud-Bandama', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (866, 'Sud-Comoe', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (867, 'Vallee du Bandama', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (868, 'Worodougou', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (869, 'Zanzan', 53);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (870, 'Bjelovar-Bilogora', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (871, 'Dubrovnik-Neretva', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (872, 'Grad Zagreb', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (873, 'Istra', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (874, 'Karlovac', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (875, 'Koprivnica-Krizhevci', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (876, 'Krapina-Zagorje', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (877, 'Lika-Senj', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (878, 'Medhimurje', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (879, 'Medimurska Zupanija', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (880, 'Osijek-Baranja', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (881, 'Osjecko-Baranjska Zupanija', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (882, 'Pozhega-Slavonija', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (883, 'Primorje-Gorski Kotar', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (884, 'Shibenik-Knin', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (885, 'Sisak-Moslavina', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (886, 'Slavonski Brod-Posavina', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (887, 'Split-Dalmacija', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (888, 'Varazhdin', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (889, 'Virovitica-Podravina', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (890, 'Vukovar-Srijem', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (891, 'Zadar', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (892, 'Zagreb', 54);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (893, 'Camaguey', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (894, 'Ciego de Avila', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (895, 'Cienfuegos', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (896, 'Ciudad de la Habana', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (897, 'Granma', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (898, 'Guantanamo', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (899, 'Habana', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (900, 'Holguin', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (901, 'Isla de la Juventud', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (902, 'La Habana', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (903, 'Las Tunas', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (904, 'Matanzas', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (905, 'Pinar del Rio', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (906, 'Sancti Spiritus', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (907, 'Santiago de Cuba', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (908, 'Villa Clara', 55);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (909, 'Government controlled area', 56);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (910, 'Limassol', 56);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (911, 'Nicosia District', 56);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (912, 'Paphos', 56);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (913, 'Turkish controlled area', 56);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (914, 'Central Bohemian', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (915, 'Frycovice', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (916, 'Jihocesky Kraj', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (917, 'Jihochesky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (918, 'Jihomoravsky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (919, 'Karlovarsky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (920, 'Klecany', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (921, 'Kralovehradecky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (922, 'Liberecky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (923, 'Lipov', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (924, 'Moravskoslezsky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (925, 'Olomoucky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (926, 'Olomoucky Kraj', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (927, 'Pardubicky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (928, 'Plzensky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (929, 'Praha', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (930, 'Rajhrad', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (931, 'Smirice', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (932, 'South Moravian', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (933, 'Straz nad Nisou', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (934, 'Stredochesky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (935, 'Unicov', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (936, 'Ustecky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (937, 'Valletta', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (938, 'Velesin', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (939, 'Vysochina', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (940, 'Zlinsky', 57);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (941, 'Arhus', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (942, 'Bornholm', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (943, 'Frederiksborg', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (944, 'Fyn', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (945, 'Hovedstaden', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (946, 'Kobenhavn', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (947, 'Kobenhavns Amt', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (948, 'Kobenhavns Kommune', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (949, 'Nordjylland', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (950, 'Ribe', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (951, 'Ringkobing', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (952, 'Roervig', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (953, 'Roskilde', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (954, 'Roslev', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (955, 'Sjaelland', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (956, 'Soeborg', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (957, 'Sonderjylland', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (958, 'Storstrom', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (959, 'Syddanmark', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (960, 'Toelloese', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (961, 'Vejle', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (962, 'Vestsjalland', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (963, 'Viborg', 58);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (964, '\'Ali Sabih', 59);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (965, 'Dikhil', 59);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (966, 'Jibuti', 59);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (967, 'Tajurah', 59);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (968, 'Ubuk', 59);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (969, 'Saint Andrew', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (970, 'Saint David', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (971, 'Saint George', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (972, 'Saint John', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (973, 'Saint Joseph', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (974, 'Saint Luke', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (975, 'Saint Mark', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (976, 'Saint Patrick', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (977, 'Saint Paul', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (978, 'Saint Peter', 60);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (979, 'Azua', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (980, 'Bahoruco', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (981, 'Barahona', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (982, 'Dajabon', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (983, 'Distrito Nacional', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (984, 'Duarte', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (985, 'El Seybo', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (986, 'Elias Pina', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (987, 'Espaillat', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (988, 'Hato Mayor', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (989, 'Independencia', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (990, 'La Altagracia', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (991, 'La Romana', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (992, 'La Vega', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (993, 'Maria Trinidad Sanchez', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (994, 'Monsenor Nouel', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (995, 'Monte Cristi', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (996, 'Monte Plata', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (997, 'Pedernales', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (998, 'Peravia', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (999, 'Puerto Plata', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1000, 'Salcedo', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1001, 'Samana', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1002, 'San Cristobal', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1003, 'San Juan', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1004, 'San Pedro de Macoris', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1005, 'Sanchez Ramirez', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1006, 'Santiago', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1007, 'Santiago Rodriguez', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1008, 'Valverde', 61);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1009, 'Aileu', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1010, 'Ainaro', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1011, 'Ambeno', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1012, 'Baucau', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1013, 'Bobonaro', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1014, 'Cova Lima', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1015, 'Dili', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1016, 'Ermera', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1017, 'Lautem', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1018, 'Liquica', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1019, 'Manatuto', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1020, 'Manufahi', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1021, 'Viqueque', 62);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1022, 'Azuay', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1023, 'Bolivar', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1024, 'Canar', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1025, 'Carchi', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1026, 'Chimborazo', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1027, 'Cotopaxi', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1028, 'El Oro', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1029, 'Esmeraldas', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1030, 'Galapagos', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1031, 'Guayas', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1032, 'Imbabura', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1033, 'Loja', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1034, 'Los Rios', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1035, 'Manabi', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1036, 'Morona Santiago', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1037, 'Napo', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1038, 'Orellana', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1039, 'Pastaza', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1040, 'Pichincha', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1041, 'Sucumbios', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1042, 'Tungurahua', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1043, 'Zamora Chinchipe', 63);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1044, 'Aswan', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1045, 'Asyut', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1046, 'Bani Suwayf', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1047, 'Bur Sa\'id', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1048, 'Cairo', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1049, 'Dumyat', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1050, 'Kafr-ash-Shaykh', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1051, 'Matruh', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1052, 'Muhafazat ad Daqahliyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1053, 'Muhafazat al Fayyum', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1054, 'Muhafazat al Gharbiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1055, 'Muhafazat al Iskandariyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1056, 'Muhafazat al Qahirah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1057, 'Qina', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1058, 'Sawhaj', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1059, 'Sina al-Janubiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1060, 'Sina ash-Shamaliyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1061, 'ad-Daqahliyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1062, 'al-Bahr-al-Ahmar', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1063, 'al-Buhayrah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1064, 'al-Fayyum', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1065, 'al-Gharbiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1066, 'al-Iskandariyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1067, 'al-Ismailiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1068, 'al-Jizah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1069, 'al-Minufiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1070, 'al-Minya', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1071, 'al-Qahira', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1072, 'al-Qalyubiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1073, 'al-Uqsur', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1074, 'al-Wadi al-Jadid', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1075, 'as-Suways', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1076, 'ash-Sharqiyah', 64);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1077, 'Ahuachapan', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1078, 'Cabanas', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1079, 'Chalatenango', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1080, 'Cuscatlan', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1081, 'La Libertad', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1082, 'La Paz', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1083, 'La Union', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1084, 'Morazan', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1085, 'San Miguel', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1086, 'San Salvador', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1087, 'San Vicente', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1088, 'Santa Ana', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1089, 'Sonsonate', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1090, 'Usulutan', 65);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1091, 'Annobon', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1092, 'Bioko Norte', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1093, 'Bioko Sur', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1094, 'Centro Sur', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1095, 'Kie-Ntem', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1096, 'Litoral', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1097, 'Wele-Nzas', 66);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1098, 'Anseba', 67);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1099, 'Debub', 67);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1100, 'Debub-Keih-Bahri', 67);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1101, 'Gash-Barka', 67);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1102, 'Maekel', 67);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1103, 'Semien-Keih-Bahri', 67);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1104, 'Harju', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1105, 'Hiiu', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1106, 'Ida-Viru', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1107, 'Jarva', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1108, 'Jogeva', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1109, 'Laane', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1110, 'Laane-Viru', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1111, 'Parnu', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1112, 'Polva', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1113, 'Rapla', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1114, 'Saare', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1115, 'Tartu', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1116, 'Valga', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1117, 'Viljandi', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1118, 'Voru', 68);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1119, 'Addis Abeba', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1120, 'Afar', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1121, 'Amhara', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1122, 'Benishangul', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1123, 'Diredawa', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1124, 'Gambella', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1125, 'Harar', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1126, 'Jigjiga', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1127, 'Mekele', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1128, 'Oromia', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1129, 'Somali', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1130, 'Southern', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1131, 'Tigray', 69);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1132, 'Christmas Island', 70);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1133, 'Cocos Islands', 70);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1134, 'Coral Sea Islands', 70);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1135, 'Falkland Islands', 71);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1136, 'South Georgia', 71);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1137, 'Klaksvik', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1138, 'Nor ara Eysturoy', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1139, 'Nor oy', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1140, 'Sandoy', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1141, 'Streymoy', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1142, 'Su uroy', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1143, 'Sy ra Eysturoy', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1144, 'Torshavn', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1145, 'Vaga', 72);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1146, 'Central', 73);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1147, 'Eastern', 73);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1148, 'Northern', 73);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1149, 'South Pacific', 73);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1150, 'Western', 73);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1151, 'Ahvenanmaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1152, 'Etela-Karjala', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1153, 'Etela-Pohjanmaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1154, 'Etela-Savo', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1155, 'Etela-Suomen Laani', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1156, 'Ita-Suomen Laani', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1157, 'Ita-Uusimaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1158, 'Kainuu', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1159, 'Kanta-Hame', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1160, 'Keski-Pohjanmaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1161, 'Keski-Suomi', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1162, 'Kymenlaakso', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1163, 'Lansi-Suomen Laani', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1164, 'Lappi', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1165, 'Northern Savonia', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1166, 'Ostrobothnia', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1167, 'Oulun Laani', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1168, 'Paijat-Hame', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1169, 'Pirkanmaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1170, 'Pohjanmaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1171, 'Pohjois-Karjala', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1172, 'Pohjois-Pohjanmaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1173, 'Pohjois-Savo', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1174, 'Saarijarvi', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1175, 'Satakunta', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1176, 'Southern Savonia', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1177, 'Tavastia Proper', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1178, 'Uleaborgs Lan', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1179, 'Uusimaa', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1180, 'Varsinais-Suomi', 74);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1181, 'Ain', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1182, 'Aisne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1183, 'Albi Le Sequestre', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1184, 'Allier', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1185, 'Alpes-Cote dAzur', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1186, 'Alpes-Maritimes', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1187, 'Alpes-de-Haute-Provence', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1188, 'Alsace', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1189, 'Aquitaine', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1190, 'Ardeche', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1191, 'Ardennes', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1192, 'Ariege', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1193, 'Aube', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1194, 'Aude', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1195, 'Auvergne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1196, 'Aveyron', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1197, 'Bas-Rhin', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1198, 'Basse-Normandie', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1199, 'Bouches-du-Rhone', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1200, 'Bourgogne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1201, 'Bretagne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1202, 'Brittany', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1203, 'Burgundy', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1204, 'Calvados', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1205, 'Cantal', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1206, 'Cedex', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1207, 'Centre', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1208, 'Charente', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1209, 'Charente-Maritime', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1210, 'Cher', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1211, 'Correze', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1212, 'Corse-du-Sud', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1213, 'Cote-d\'Or', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1214, 'Cotes-d\'Armor', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1215, 'Creuse', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1216, 'Crolles', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1217, 'Deux-Sevres', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1218, 'Dordogne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1219, 'Doubs', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1220, 'Drome', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1221, 'Essonne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1222, 'Eure', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1223, 'Eure-et-Loir', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1224, 'Feucherolles', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1225, 'Finistere', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1226, 'Franche-Comte', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1227, 'Gard', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1228, 'Gers', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1229, 'Gironde', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1230, 'Haut-Rhin', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1231, 'Haute-Corse', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1232, 'Haute-Garonne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1233, 'Haute-Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1234, 'Haute-Marne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1235, 'Haute-Saone', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1236, 'Haute-Savoie', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1237, 'Haute-Vienne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1238, 'Hautes-Alpes', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1239, 'Hautes-Pyrenees', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1240, 'Hauts-de-Seine', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1241, 'Herault', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1242, 'Ile-de-France', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1243, 'Ille-et-Vilaine', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1244, 'Indre', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1245, 'Indre-et-Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1246, 'Isere', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1247, 'Jura', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1248, 'Klagenfurt', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1249, 'Landes', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1250, 'Languedoc-Roussillon', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1251, 'Larcay', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1252, 'Le Castellet', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1253, 'Le Creusot', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1254, 'Limousin', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1255, 'Loir-et-Cher', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1256, 'Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1257, 'Loire-Atlantique', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1258, 'Loiret', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1259, 'Lorraine', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1260, 'Lot', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1261, 'Lot-et-Garonne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1262, 'Lower Normandy', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1263, 'Lozere', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1264, 'Maine-et-Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1265, 'Manche', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1266, 'Marne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1267, 'Mayenne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1268, 'Meurthe-et-Moselle', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1269, 'Meuse', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1270, 'Midi-Pyrenees', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1271, 'Morbihan', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1272, 'Moselle', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1273, 'Nievre', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1274, 'Nord', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1275, 'Nord-Pas-de-Calais', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1276, 'Oise', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1277, 'Orne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1278, 'Paris', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1279, 'Pas-de-Calais', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1280, 'Pays de la Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1281, 'Pays-de-la-Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1282, 'Picardy', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1283, 'Puy-de-Dome', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1284, 'Pyrenees-Atlantiques', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1285, 'Pyrenees-Orientales', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1286, 'Quelmes', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1287, 'Rhone', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1288, 'Rhone-Alpes', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1289, 'Saint Ouen', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1290, 'Saint Viatre', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1291, 'Saone-et-Loire', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1292, 'Sarthe', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1293, 'Savoie', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1294, 'Seine-Maritime', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1295, 'Seine-Saint-Denis', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1296, 'Seine-et-Marne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1297, 'Somme', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1298, 'Sophia Antipolis', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1299, 'Souvans', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1300, 'Tarn', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1301, 'Tarn-et-Garonne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1302, 'Territoire de Belfort', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1303, 'Treignac', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1304, 'Upper Normandy', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1305, 'Val-d\'Oise', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1306, 'Val-de-Marne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1307, 'Var', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1308, 'Vaucluse', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1309, 'Vellise', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1310, 'Vendee', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1311, 'Vienne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1312, 'Vosges', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1313, 'Yonne', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1314, 'Yvelines', 75);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1315, 'Cayenne', 76);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1316, 'Saint-Laurent-du-Maroni', 76);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1317, 'Iles du Vent', 77);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1318, 'Iles sous le Vent', 77);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1319, 'Marquesas', 77);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1320, 'Tuamotu', 77);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1321, 'Tubuai', 77);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1322, 'Amsterdam', 78);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1323, 'Crozet Islands', 78);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1324, 'Kerguelen', 78);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1325, 'Estuaire', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1326, 'Haut-Ogooue', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1327, 'Moyen-Ogooue', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1328, 'Ngounie', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1329, 'Nyanga', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1330, 'Ogooue-Ivindo', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1331, 'Ogooue-Lolo', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1332, 'Ogooue-Maritime', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1333, 'Woleu-Ntem', 79);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1334, 'Banjul', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1335, 'Basse', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1336, 'Brikama', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1337, 'Janjanbureh', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1338, 'Kanifing', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1339, 'Kerewan', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1340, 'Kuntaur', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1341, 'Mansakonko', 80);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1342, 'Abhasia', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1343, 'Ajaria', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1344, 'Guria', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1345, 'Imereti', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1346, 'Kaheti', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1347, 'Kvemo Kartli', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1348, 'Mcheta-Mtianeti', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1349, 'Racha', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1350, 'Samagrelo-Zemo Svaneti', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1351, 'Samche-Zhavaheti', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1352, 'Shida Kartli', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1353, 'Tbilisi', 81);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1354, 'Auvergne', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1355, 'Baden-Wurttemberg', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1356, 'Bavaria', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1357, 'Bayern', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1358, 'Beilstein Wurtt', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1359, 'Berlin', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1360, 'Brandenburg', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1361, 'Bremen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1362, 'Dreisbach', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1363, 'Freistaat Bayern', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1364, 'Hamburg', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1365, 'Hannover', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1366, 'Heroldstatt', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1367, 'Hessen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1368, 'Kortenberg', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1369, 'Laasdorf', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1370, 'Land Baden-Wurttemberg', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1371, 'Land Bayern', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1372, 'Land Brandenburg', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1373, 'Land Hessen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1374, 'Land Mecklenburg-Vorpommern', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1375, 'Land Nordrhein-Westfalen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1376, 'Land Rheinland-Pfalz', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1377, 'Land Sachsen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1378, 'Land Sachsen-Anhalt', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1379, 'Land Thuringen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1380, 'Lower Saxony', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1381, 'Mecklenburg-Vorpommern', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1382, 'Mulfingen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1383, 'Munich', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1384, 'Neubeuern', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1385, 'Niedersachsen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1386, 'Noord-Holland', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1387, 'Nordrhein-Westfalen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1388, 'North Rhine-Westphalia', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1389, 'Osterode', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1390, 'Rheinland-Pfalz', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1391, 'Rhineland-Palatinate', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1392, 'Saarland', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1393, 'Sachsen', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1394, 'Sachsen-Anhalt', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1395, 'Saxony', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1396, 'Schleswig-Holstein', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1397, 'Thuringia', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1398, 'Webling', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1399, 'Weinstrabe', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1400, 'schlobborn', 82);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1401, 'Ashanti', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1402, 'Brong-Ahafo', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1403, 'Central', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1404, 'Eastern', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1405, 'Greater Accra', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1406, 'Northern', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1407, 'Upper East', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1408, 'Upper West', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1409, 'Volta', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1410, 'Western', 83);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1411, 'Gibraltar', 84);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1412, 'Acharnes', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1413, 'Ahaia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1414, 'Aitolia kai Akarnania', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1415, 'Argolis', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1416, 'Arkadia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1417, 'Arta', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1418, 'Attica', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1419, 'Attiki', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1420, 'Ayion Oros', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1421, 'Crete', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1422, 'Dodekanisos', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1423, 'Drama', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1424, 'Evia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1425, 'Evritania', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1426, 'Evros', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1427, 'Evvoia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1428, 'Florina', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1429, 'Fokis', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1430, 'Fthiotis', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1431, 'Grevena', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1432, 'Halandri', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1433, 'Halkidiki', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1434, 'Hania', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1435, 'Heraklion', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1436, 'Hios', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1437, 'Ilia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1438, 'Imathia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1439, 'Ioannina', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1440, 'Iraklion', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1441, 'Karditsa', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1442, 'Kastoria', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1443, 'Kavala', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1444, 'Kefallinia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1445, 'Kerkira', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1446, 'Kiklades', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1447, 'Kilkis', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1448, 'Korinthia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1449, 'Kozani', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1450, 'Lakonia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1451, 'Larisa', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1452, 'Lasithi', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1453, 'Lesvos', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1454, 'Levkas', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1455, 'Magnisia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1456, 'Messinia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1457, 'Nomos Attikis', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1458, 'Nomos Zakynthou', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1459, 'Pella', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1460, 'Pieria', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1461, 'Piraios', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1462, 'Preveza', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1463, 'Rethimni', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1464, 'Rodopi', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1465, 'Samos', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1466, 'Serrai', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1467, 'Thesprotia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1468, 'Thessaloniki', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1469, 'Trikala', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1470, 'Voiotia', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1471, 'West Greece', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1472, 'Xanthi', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1473, 'Zakinthos', 85);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1474, 'Aasiaat', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1475, 'Ammassalik', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1476, 'Illoqqortoormiut', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1477, 'Ilulissat', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1478, 'Ivittuut', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1479, 'Kangaatsiaq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1480, 'Maniitsoq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1481, 'Nanortalik', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1482, 'Narsaq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1483, 'Nuuk', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1484, 'Paamiut', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1485, 'Qaanaaq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1486, 'Qaqortoq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1487, 'Qasigiannguit', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1488, 'Qeqertarsuaq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1489, 'Sisimiut', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1490, 'Udenfor kommunal inddeling', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1491, 'Upernavik', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1492, 'Uummannaq', 86);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1493, 'Carriacou-Petite Martinique', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1494, 'Saint Andrew', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1495, 'Saint Davids', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1496, 'Saint George\'s', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1497, 'Saint John', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1498, 'Saint Mark', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1499, 'Saint Patrick', 87);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1500, 'Basse-Terre', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1501, 'Grande-Terre', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1502, 'Iles des Saintes', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1503, 'La Desirade', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1504, 'Marie-Galante', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1505, 'Saint Barthelemy', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1506, 'Saint Martin', 88);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1507, 'Agana Heights', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1508, 'Agat', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1509, 'Barrigada', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1510, 'Chalan-Pago-Ordot', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1511, 'Dededo', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1512, 'Hagatna', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1513, 'Inarajan', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1514, 'Mangilao', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1515, 'Merizo', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1516, 'Mongmong-Toto-Maite', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1517, 'Santa Rita', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1518, 'Sinajana', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1519, 'Talofofo', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1520, 'Tamuning', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1521, 'Yigo', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1522, 'Yona', 89);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1523, 'Alta Verapaz', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1524, 'Baja Verapaz', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1525, 'Chimaltenango', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1526, 'Chiquimula', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1527, 'El Progreso', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1528, 'Escuintla', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1529, 'Guatemala', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1530, 'Huehuetenango', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1531, 'Izabal', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1532, 'Jalapa', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1533, 'Jutiapa', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1534, 'Peten', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1535, 'Quezaltenango', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1536, 'Quiche', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1537, 'Retalhuleu', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1538, 'Sacatepequez', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1539, 'San Marcos', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1540, 'Santa Rosa', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1541, 'Solola', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1542, 'Suchitepequez', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1543, 'Totonicapan', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1544, 'Zacapa', 90);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1545, 'Alderney', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1546, 'Castel', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1547, 'Forest', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1548, 'Saint Andrew', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1549, 'Saint Martin', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1550, 'Saint Peter Port', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1551, 'Saint Pierre du Bois', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1552, 'Saint Sampson', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1553, 'Saint Saviour', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1554, 'Sark', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1555, 'Torteval', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1556, 'Vale', 91);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1557, 'Beyla', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1558, 'Boffa', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1559, 'Boke', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1560, 'Conakry', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1561, 'Coyah', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1562, 'Dabola', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1563, 'Dalaba', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1564, 'Dinguiraye', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1565, 'Faranah', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1566, 'Forecariah', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1567, 'Fria', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1568, 'Gaoual', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1569, 'Gueckedou', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1570, 'Kankan', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1571, 'Kerouane', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1572, 'Kindia', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1573, 'Kissidougou', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1574, 'Koubia', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1575, 'Koundara', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1576, 'Kouroussa', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1577, 'Labe', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1578, 'Lola', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1579, 'Macenta', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1580, 'Mali', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1581, 'Mamou', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1582, 'Mandiana', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1583, 'Nzerekore', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1584, 'Pita', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1585, 'Siguiri', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1586, 'Telimele', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1587, 'Tougue', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1588, 'Yomou', 92);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1589, 'Bafata', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1590, 'Bissau', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1591, 'Bolama', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1592, 'Cacheu', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1593, 'Gabu', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1594, 'Oio', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1595, 'Quinara', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1596, 'Tombali', 93);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1597, 'Barima-Waini', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1598, 'Cuyuni-Mazaruni', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1599, 'Demerara-Mahaica', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1600, 'East Berbice-Corentyne', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1601, 'Essequibo Islands-West Demerar', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1602, 'Mahaica-Berbice', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1603, 'Pomeroon-Supenaam', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1604, 'Potaro-Siparuni', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1605, 'Upper Demerara-Berbice', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1606, 'Upper Takutu-Upper Essequibo', 94);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1607, 'Artibonite', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1608, 'Centre', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1609, 'Grand\'Anse', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1610, 'Nord', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1611, 'Nord-Est', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1612, 'Nord-Ouest', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1613, 'Ouest', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1614, 'Sud', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1615, 'Sud-Est', 95);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1616, 'Heard and McDonald Islands', 96);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1617, 'Atlantida', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1618, 'Choluteca', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1619, 'Colon', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1620, 'Comayagua', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1621, 'Copan', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1622, 'Cortes', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1623, 'Distrito Central', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1624, 'El Paraiso', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1625, 'Francisco Morazan', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1626, 'Gracias a Dios', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1627, 'Intibuca', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1628, 'Islas de la Bahia', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1629, 'La Paz', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1630, 'Lempira', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1631, 'Ocotepeque', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1632, 'Olancho', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1633, 'Santa Barbara', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1634, 'Valle', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1635, 'Yoro', 97);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1636, 'Hong Kong', 98);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1637, 'Bacs-Kiskun', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1638, 'Baranya', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1639, 'Bekes', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1640, 'Borsod-Abauj-Zemplen', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1641, 'Budapest', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1642, 'Csongrad', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1643, 'Fejer', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1644, 'Gyor-Moson-Sopron', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1645, 'Hajdu-Bihar', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1646, 'Heves', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1647, 'Jasz-Nagykun-Szolnok', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1648, 'Komarom-Esztergom', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1649, 'Nograd', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1650, 'Pest', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1651, 'Somogy', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1652, 'Szabolcs-Szatmar-Bereg', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1653, 'Tolna', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1654, 'Vas', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1655, 'Veszprem', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1656, 'Zala', 99);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1657, 'Austurland', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1658, 'Gullbringusysla', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1659, 'Hofu borgarsva i', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1660, 'Nor urland eystra', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1661, 'Nor urland vestra', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1662, 'Su urland', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1663, 'Su urnes', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1664, 'Vestfir ir', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1665, 'Vesturland', 100);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1666, 'Aceh', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1667, 'Bali', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1668, 'Bangka-Belitung', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1669, 'Banten', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1670, 'Bengkulu', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1671, 'Gandaria', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1672, 'Gorontalo', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1673, 'Jakarta', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1674, 'Jambi', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1675, 'Jawa Barat', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1676, 'Jawa Tengah', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1677, 'Jawa Timur', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1678, 'Kalimantan Barat', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1679, 'Kalimantan Selatan', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1680, 'Kalimantan Tengah', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1681, 'Kalimantan Timur', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1682, 'Kendal', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1683, 'Lampung', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1684, 'Maluku', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1685, 'Maluku Utara', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1686, 'Nusa Tenggara Barat', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1687, 'Nusa Tenggara Timur', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1688, 'Papua', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1689, 'Riau', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1690, 'Riau Kepulauan', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1691, 'Solo', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1692, 'Sulawesi Selatan', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1693, 'Sulawesi Tengah', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1694, 'Sulawesi Tenggara', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1695, 'Sulawesi Utara', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1696, 'Sumatera Barat', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1697, 'Sumatera Selatan', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1698, 'Sumatera Utara', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1699, 'Yogyakarta', 102);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1700, 'Ardabil', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1701, 'Azarbayjan-e Bakhtari', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1702, 'Azarbayjan-e Khavari', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1703, 'Bushehr', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1704, 'Chahar Mahal-e Bakhtiari', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1705, 'Esfahan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1706, 'Fars', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1707, 'Gilan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1708, 'Golestan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1709, 'Hamadan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1710, 'Hormozgan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1711, 'Ilam', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1712, 'Kerman', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1713, 'Kermanshah', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1714, 'Khorasan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1715, 'Khuzestan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1716, 'Kohgiluyeh-e Boyerahmad', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1717, 'Kordestan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1718, 'Lorestan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1719, 'Markazi', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1720, 'Mazandaran', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1721, 'Ostan-e Esfahan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1722, 'Qazvin', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1723, 'Qom', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1724, 'Semnan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1725, 'Sistan-e Baluchestan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1726, 'Tehran', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1727, 'Yazd', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1728, 'Zanjan', 103);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1729, 'Babil', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1730, 'Baghdad', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1731, 'Dahuk', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1732, 'Dhi Qar', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1733, 'Diyala', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1734, 'Erbil', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1735, 'Irbil', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1736, 'Karbala', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1737, 'Kurdistan', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1738, 'Maysan', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1739, 'Ninawa', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1740, 'Salah-ad-Din', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1741, 'Wasit', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1742, 'al-Anbar', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1743, 'al-Basrah', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1744, 'al-Muthanna', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1745, 'al-Qadisiyah', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1746, 'an-Najaf', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1747, 'as-Sulaymaniyah', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1748, 'at-Ta\'mim', 104);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1749, 'Armagh', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1750, 'Carlow', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1751, 'Cavan', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1752, 'Clare', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1753, 'Cork', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1754, 'Donegal', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1755, 'Dublin', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1756, 'Galway', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1757, 'Kerry', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1758, 'Kildare', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1759, 'Kilkenny', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1760, 'Laois', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1761, 'Leinster', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1762, 'Leitrim', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1763, 'Limerick', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1764, 'Loch Garman', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1765, 'Longford', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1766, 'Louth', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1767, 'Mayo', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1768, 'Meath', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1769, 'Monaghan', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1770, 'Offaly', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1771, 'Roscommon', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1772, 'Sligo', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1773, 'Tipperary North Riding', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1774, 'Tipperary South Riding', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1775, 'Ulster', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1776, 'Waterford', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1777, 'Westmeath', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1778, 'Wexford', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1779, 'Wicklow', 105);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1780, 'Beit Hanania', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1781, 'Ben Gurion Airport', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1782, 'Bethlehem', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1783, 'Caesarea', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1784, 'Centre', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1785, 'Gaza', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1786, 'Hadaron', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1787, 'Haifa District', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1788, 'Hamerkaz', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1789, 'Hazafon', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1790, 'Hebron', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1791, 'Jaffa', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1792, 'Jerusalem', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1793, 'Khefa', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1794, 'Kiryat Yam', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1795, 'Lower Galilee', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1796, 'Qalqilya', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1797, 'Talme Elazar', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1798, 'Tel Aviv', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1799, 'Tsafon', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1800, 'Umm El Fahem', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1801, 'Yerushalayim', 106);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1802, 'Abruzzi', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1803, 'Abruzzo', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1804, 'Agrigento', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1805, 'Alessandria', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1806, 'Ancona', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1807, 'Arezzo', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1808, 'Ascoli Piceno', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1809, 'Asti', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1810, 'Avellino', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1811, 'Bari', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1812, 'Basilicata', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1813, 'Belluno', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1814, 'Benevento', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1815, 'Bergamo', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1816, 'Biella', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1817, 'Bologna', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1818, 'Bolzano', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1819, 'Brescia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1820, 'Brindisi', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1821, 'Calabria', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1822, 'Campania', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1823, 'Cartoceto', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1824, 'Caserta', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1825, 'Catania', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1826, 'Chieti', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1827, 'Como', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1828, 'Cosenza', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1829, 'Cremona', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1830, 'Cuneo', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1831, 'Emilia-Romagna', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1832, 'Ferrara', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1833, 'Firenze', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1834, 'Florence', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1835, 'Forli-Cesena ', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1836, 'Friuli-Venezia Giulia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1837, 'Frosinone', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1838, 'Genoa', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1839, 'Gorizia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1840, 'L\'Aquila', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1841, 'Lazio', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1842, 'Lecce', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1843, 'Lecco', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1844, 'Lecco Province', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1845, 'Liguria', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1846, 'Lodi', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1847, 'Lombardia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1848, 'Lombardy', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1849, 'Macerata', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1850, 'Mantova', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1851, 'Marche', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1852, 'Messina', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1853, 'Milan', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1854, 'Modena', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1855, 'Molise', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1856, 'Molteno', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1857, 'Montenegro', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1858, 'Monza and Brianza', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1859, 'Naples', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1860, 'Novara', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1861, 'Padova', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1862, 'Parma', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1863, 'Pavia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1864, 'Perugia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1865, 'Pesaro-Urbino', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1866, 'Piacenza', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1867, 'Piedmont', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1868, 'Piemonte', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1869, 'Pisa', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1870, 'Pordenone', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1871, 'Potenza', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1872, 'Puglia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1873, 'Reggio Emilia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1874, 'Rimini', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1875, 'Roma', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1876, 'Salerno', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1877, 'Sardegna', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1878, 'Sassari', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1879, 'Savona', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1880, 'Sicilia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1881, 'Siena', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1882, 'Sondrio', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1883, 'South Tyrol', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1884, 'Taranto', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1885, 'Teramo', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1886, 'Torino', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1887, 'Toscana', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1888, 'Trapani', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1889, 'Trentino-Alto Adige', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1890, 'Trento', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1891, 'Treviso', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1892, 'Udine', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1893, 'Umbria', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1894, 'Valle d\'Aosta', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1895, 'Varese', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1896, 'Veneto', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1897, 'Venezia', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1898, 'Verbano-Cusio-Ossola', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1899, 'Vercelli', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1900, 'Verona', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1901, 'Vicenza', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1902, 'Viterbo', 107);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1903, 'Buxoro Viloyati', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1904, 'Clarendon', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1905, 'Hanover', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1906, 'Kingston', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1907, 'Manchester', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1908, 'Portland', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1909, 'Saint Andrews', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1910, 'Saint Ann', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1911, 'Saint Catherine', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1912, 'Saint Elizabeth', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1913, 'Saint James', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1914, 'Saint Mary', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1915, 'Saint Thomas', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1916, 'Trelawney', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1917, 'Westmoreland', 108);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1918, 'Aichi', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1919, 'Akita', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1920, 'Aomori', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1921, 'Chiba', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1922, 'Ehime', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1923, 'Fukui', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1924, 'Fukuoka', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1925, 'Fukushima', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1926, 'Gifu', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1927, 'Gumma', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1928, 'Hiroshima', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1929, 'Hokkaido', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1930, 'Hyogo', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1931, 'Ibaraki', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1932, 'Ishikawa', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1933, 'Iwate', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1934, 'Kagawa', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1935, 'Kagoshima', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1936, 'Kanagawa', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1937, 'Kanto', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1938, 'Kochi', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1939, 'Kumamoto', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1940, 'Kyoto', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1941, 'Mie', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1942, 'Miyagi', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1943, 'Miyazaki', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1944, 'Nagano', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1945, 'Nagasaki', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1946, 'Nara', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1947, 'Niigata', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1948, 'Oita', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1949, 'Okayama', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1950, 'Okinawa', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1951, 'Osaka', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1952, 'Saga', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1953, 'Saitama', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1954, 'Shiga', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1955, 'Shimane', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1956, 'Shizuoka', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1957, 'Tochigi', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1958, 'Tokushima', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1959, 'Tokyo', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1960, 'Tottori', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1961, 'Toyama', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1962, 'Wakayama', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1963, 'Yamagata', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1964, 'Yamaguchi', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1965, 'Yamanashi', 109);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1966, 'Grouville', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1967, 'Saint Brelade', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1968, 'Saint Clement', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1969, 'Saint Helier', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1970, 'Saint John', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1971, 'Saint Lawrence', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1972, 'Saint Martin', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1973, 'Saint Mary', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1974, 'Saint Peter', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1975, 'Saint Saviour', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1976, 'Trinity', 110);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1977, '\'Ajlun', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1978, 'Amman', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1979, 'Irbid', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1980, 'Jarash', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1981, 'Ma\'an', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1982, 'Madaba', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1983, 'al-\'Aqabah', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1984, 'al-Balqa\'', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1985, 'al-Karak', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1986, 'al-Mafraq', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1987, 'at-Tafilah', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1988, 'az-Zarqa\'', 111);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1989, 'Akmecet', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1990, 'Akmola', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1991, 'Aktobe', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1992, 'Almati', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1993, 'Atirau', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1994, 'Batis Kazakstan', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1995, 'Burlinsky Region', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1996, 'Karagandi', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1997, 'Kostanay', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1998, 'Mankistau', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (1999, 'Ontustik Kazakstan', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2000, 'Pavlodar', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2001, 'Sigis Kazakstan', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2002, 'Soltustik Kazakstan', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2003, 'Taraz', 112);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2004, 'Central', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2005, 'Coast', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2006, 'Eastern', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2007, 'Nairobi', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2008, 'North Eastern', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2009, 'Nyanza', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2010, 'Rift Valley', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2011, 'Western', 113);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2012, 'Abaiang', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2013, 'Abemana', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2014, 'Aranuka', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2015, 'Arorae', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2016, 'Banaba', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2017, 'Beru', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2018, 'Butaritari', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2019, 'Kiritimati', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2020, 'Kuria', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2021, 'Maiana', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2022, 'Makin', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2023, 'Marakei', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2024, 'Nikunau', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2025, 'Nonouti', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2026, 'Onotoa', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2027, 'Phoenix Islands', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2028, 'Tabiteuea North', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2029, 'Tabiteuea South', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2030, 'Tabuaeran', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2031, 'Tamana', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2032, 'Tarawa North', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2033, 'Tarawa South', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2034, 'Teraina', 114);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2035, 'Chagangdo', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2036, 'Hamgyeongbukto', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2037, 'Hamgyeongnamdo', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2038, 'Hwanghaebukto', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2039, 'Hwanghaenamdo', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2040, 'Kaeseong', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2041, 'Kangweon', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2042, 'Nampo', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2043, 'Pyeonganbukto', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2044, 'Pyeongannamdo', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2045, 'Pyeongyang', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2046, 'Yanggang', 115);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2047, 'Busan', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2048, 'Cheju', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2049, 'Chollabuk', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2050, 'Chollanam', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2051, 'Chungbuk', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2052, 'Chungcheongbuk', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2053, 'Chungcheongnam', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2054, 'Chungnam', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2055, 'Daegu', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2056, 'Gangwon-do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2057, 'Goyang-si', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2058, 'Gyeonggi-do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2059, 'Gyeongsang ', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2060, 'Gyeongsangnam-do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2061, 'Incheon', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2062, 'Jeju-Si', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2063, 'Jeonbuk', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2064, 'Kangweon', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2065, 'Kwangju', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2066, 'Kyeonggi', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2067, 'Kyeongsangbuk', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2068, 'Kyeongsangnam', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2069, 'Kyonggi-do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2070, 'Kyungbuk-Do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2071, 'Kyunggi-Do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2072, 'Kyunggi-do', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2073, 'Pusan', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2074, 'Seoul', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2075, 'Sudogwon', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2076, 'Taegu', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2077, 'Taejeon', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2078, 'Taejon-gwangyoksi', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2079, 'Ulsan', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2080, 'Wonju', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2081, 'gwangyoksi', 116);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2082, 'Al Asimah', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2083, 'Hawalli', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2084, 'Mishref', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2085, 'Qadesiya', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2086, 'Safat', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2087, 'Salmiya', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2088, 'al-Ahmadi', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2089, 'al-Farwaniyah', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2090, 'al-Jahra', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2091, 'al-Kuwayt', 117);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2092, 'Batken', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2093, 'Bishkek', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2094, 'Chui', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2095, 'Issyk-Kul', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2096, 'Jalal-Abad', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2097, 'Naryn', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2098, 'Osh', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2099, 'Talas', 118);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2100, 'Attopu', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2101, 'Bokeo', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2102, 'Bolikhamsay', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2103, 'Champasak', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2104, 'Houaphanh', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2105, 'Khammouane', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2106, 'Luang Nam Tha', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2107, 'Luang Prabang', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2108, 'Oudomxay', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2109, 'Phongsaly', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2110, 'Saravan', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2111, 'Savannakhet', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2112, 'Sekong', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2113, 'Viangchan Prefecture', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2114, 'Viangchan Province', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2115, 'Xaignabury', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2116, 'Xiang Khuang', 119);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2117, 'Aizkraukles', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2118, 'Aluksnes', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2119, 'Balvu', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2120, 'Bauskas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2121, 'Cesu', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2122, 'Daugavpils', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2123, 'Daugavpils City', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2124, 'Dobeles', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2125, 'Gulbenes', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2126, 'Jekabspils', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2127, 'Jelgava', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2128, 'Jelgavas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2129, 'Jurmala City', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2130, 'Kraslavas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2131, 'Kuldigas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2132, 'Liepaja', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2133, 'Liepajas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2134, 'Limbazhu', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2135, 'Ludzas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2136, 'Madonas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2137, 'Ogres', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2138, 'Preilu', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2139, 'Rezekne', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2140, 'Rezeknes', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2141, 'Riga', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2142, 'Rigas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2143, 'Saldus', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2144, 'Talsu', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2145, 'Tukuma', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2146, 'Valkas', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2147, 'Valmieras', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2148, 'Ventspils', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2149, 'Ventspils City', 120);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2150, 'Beirut', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2151, 'Jabal Lubnan', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2152, 'Mohafazat Liban-Nord', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2153, 'Mohafazat Mont-Liban', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2154, 'Sidon', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2155, 'al-Biqa', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2156, 'al-Janub', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2157, 'an-Nabatiyah', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2158, 'ash-Shamal', 121);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2159, 'Berea', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2160, 'Butha-Buthe', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2161, 'Leribe', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2162, 'Mafeteng', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2163, 'Maseru', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2164, 'Mohale\'s Hoek', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2165, 'Mokhotlong', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2166, 'Qacha\'s Nek', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2167, 'Quthing', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2168, 'Thaba-Tseka', 122);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2169, 'Bomi', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2170, 'Bong', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2171, 'Grand Bassa', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2172, 'Grand Cape Mount', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2173, 'Grand Gedeh', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2174, 'Loffa', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2175, 'Margibi', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2176, 'Maryland and Grand Kru', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2177, 'Montserrado', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2178, 'Nimba', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2179, 'Rivercess', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2180, 'Sinoe', 123);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2181, 'Ajdabiya', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2182, 'Fezzan', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2183, 'Banghazi', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2184, 'Darnah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2185, 'Ghadamis', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2186, 'Gharyan', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2187, 'Misratah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2188, 'Murzuq', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2189, 'Sabha', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2190, 'Sawfajjin', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2191, 'Surt', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2192, 'Tarabulus', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2193, 'Tarhunah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2194, 'Tripolitania', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2195, 'Tubruq', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2196, 'Yafran', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2197, 'Zlitan', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2198, 'al-\'Aziziyah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2199, 'al-Fatih', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2200, 'al-Jabal al Akhdar', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2201, 'al-Jufrah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2202, 'al-Khums', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2203, 'al-Kufrah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2204, 'an-Nuqat al-Khams', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2205, 'ash-Shati\'', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2206, 'az-Zawiyah', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2207, 'Balzers', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2208, 'Eschen', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2209, 'Gamprin', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2210, 'Mauren', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2211, 'Planken', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2212, 'Ruggell', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2213, 'Schaan', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2214, 'Schellenberg', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2215, 'Triesen', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2216, 'Triesenberg', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2217, 'Vaduz', 125);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2218, 'Alytaus', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2219, 'Anyksciai', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2220, 'Kauno', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2221, 'Klaipedos', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2222, 'Marijampoles', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2223, 'Panevezhio', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2224, 'Panevezys', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2225, 'Shiauliu', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2226, 'Taurages', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2227, 'Telshiu', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2228, 'Telsiai', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2229, 'Utenos', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2230, 'Vilniaus', 126);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2231, 'Capellen', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2232, 'Clervaux', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2233, 'Diekirch', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2234, 'Echternach', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2235, 'Esch-sur-Alzette', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2236, 'Grevenmacher', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2237, 'Luxembourg', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2238, 'Mersch', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2239, 'Redange', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2240, 'Remich', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2241, 'Vianden', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2242, 'Wiltz', 127);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2243, 'Macau', 128);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2244, 'Berovo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2245, 'Bitola', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2246, 'Brod', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2247, 'Debar', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2248, 'Delchevo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2249, 'Demir Hisar', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2250, 'Gevgelija', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2251, 'Gostivar', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2252, 'Kavadarci', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2253, 'Kichevo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2254, 'Kochani', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2255, 'Kratovo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2256, 'Kriva Palanka', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2257, 'Krushevo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2258, 'Kumanovo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2259, 'Negotino', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2260, 'Ohrid', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2261, 'Prilep', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2262, 'Probishtip', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2263, 'Radovish', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2264, 'Resen', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2265, 'Shtip', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2266, 'Skopje', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2267, 'Struga', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2268, 'Strumica', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2269, 'Sveti Nikole', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2270, 'Tetovo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2271, 'Valandovo', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2272, 'Veles', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2273, 'Vinica', 129);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2274, 'Antananarivo', 130);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2275, 'Antsiranana', 130);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2276, 'Fianarantsoa', 130);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2277, 'Mahajanga', 130);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2278, 'Toamasina', 130);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2279, 'Toliary', 130);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2280, 'Balaka', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2281, 'Blantyre City', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2282, 'Chikwawa', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2283, 'Chiradzulu', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2284, 'Chitipa', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2285, 'Dedza', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2286, 'Dowa', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2287, 'Karonga', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2288, 'Kasungu', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2289, 'Lilongwe City', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2290, 'Machinga', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2291, 'Mangochi', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2292, 'Mchinji', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2293, 'Mulanje', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2294, 'Mwanza', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2295, 'Mzimba', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2296, 'Mzuzu City', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2297, 'Nkhata Bay', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2298, 'Nkhotakota', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2299, 'Nsanje', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2300, 'Ntcheu', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2301, 'Ntchisi', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2302, 'Phalombe', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2303, 'Rumphi', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2304, 'Salima', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2305, 'Thyolo', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2306, 'Zomba Municipality', 131);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2307, 'Johor', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2308, 'Kedah', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2309, 'Kelantan', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2310, 'Kuala Lumpur', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2311, 'Labuan', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2312, 'Melaka', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2313, 'Negeri Johor', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2314, 'Negeri Sembilan', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2315, 'Pahang', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2316, 'Penang', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2317, 'Perak', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2318, 'Perlis', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2319, 'Pulau Pinang', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2320, 'Sabah', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2321, 'Sarawak', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2322, 'Selangor', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2323, 'Sembilan', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2324, 'Terengganu', 132);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2325, 'Alif Alif', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2326, 'Alif Dhaal', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2327, 'Baa', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2328, 'Dhaal', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2329, 'Faaf', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2330, 'Gaaf Alif', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2331, 'Gaaf Dhaal', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2332, 'Ghaviyani', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2333, 'Haa Alif', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2334, 'Haa Dhaal', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2335, 'Kaaf', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2336, 'Laam', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2337, 'Lhaviyani', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2338, 'Male', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2339, 'Miim', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2340, 'Nuun', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2341, 'Raa', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2342, 'Shaviyani', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2343, 'Siin', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2344, 'Thaa', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2345, 'Vaav', 133);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2346, 'Bamako', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2347, 'Gao', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2348, 'Kayes', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2349, 'Kidal', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2350, 'Koulikoro', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2351, 'Mopti', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2352, 'Segou', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2353, 'Sikasso', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2354, 'Tombouctou', 134);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2355, 'Gozo and Comino', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2356, 'Inner Harbour', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2357, 'Northern', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2358, 'Outer Harbour', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2359, 'South Eastern', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2360, 'Valletta', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2361, 'Western', 135);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2362, 'Castletown', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2363, 'Douglas', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2364, 'Laxey', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2365, 'Onchan', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2366, 'Peel', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2367, 'Port Erin', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2368, 'Port Saint Mary', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2369, 'Ramsey', 136);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2370, 'Ailinlaplap', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2371, 'Ailuk', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2372, 'Arno', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2373, 'Aur', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2374, 'Bikini', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2375, 'Ebon', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2376, 'Enewetak', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2377, 'Jabat', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2378, 'Jaluit', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2379, 'Kili', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2380, 'Kwajalein', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2381, 'Lae', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2382, 'Lib', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2383, 'Likiep', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2384, 'Majuro', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2385, 'Maloelap', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2386, 'Mejit', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2387, 'Mili', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2388, 'Namorik', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2389, 'Namu', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2390, 'Rongelap', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2391, 'Ujae', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2392, 'Utrik', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2393, 'Wotho', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2394, 'Wotje', 137);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2395, 'Fort-de-France', 138);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2396, 'La Trinite', 138);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2397, 'Le Marin', 138);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2398, 'Saint-Pierre', 138);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2399, 'Adrar', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2400, 'Assaba', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2401, 'Brakna', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2402, 'Dhakhlat Nawadibu', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2403, 'Hudh-al-Gharbi', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2404, 'Hudh-ash-Sharqi', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2405, 'Inshiri', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2406, 'Nawakshut', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2407, 'Qidimagha', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2408, 'Qurqul', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2409, 'Taqant', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2410, 'Tiris Zammur', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2411, 'Trarza', 139);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2412, 'Black River', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2413, 'Eau Coulee', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2414, 'Flacq', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2415, 'Floreal', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2416, 'Grand Port', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2417, 'Moka', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2418, 'Pamplempousses', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2419, 'Plaines Wilhelm', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2420, 'Port Louis', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2421, 'Riviere du Rempart', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2422, 'Rodrigues', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2423, 'Rose Hill', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2424, 'Savanne', 140);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2425, 'Mayotte', 141);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2426, 'Pamanzi', 141);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2427, 'Aguascalientes', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2428, 'Baja California', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2429, 'Baja California Sur', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2430, 'Campeche', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2431, 'Chiapas', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2432, 'Chihuahua', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2433, 'Coahuila', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2434, 'Colima', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2435, 'Distrito Federal', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2436, 'Durango', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2437, 'Estado de Mexico', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2438, 'Guanajuato', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2439, 'Guerrero', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2440, 'Hidalgo', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2441, 'Jalisco', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2442, 'Mexico', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2443, 'Michoacan', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2444, 'Morelos', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2445, 'Nayarit', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2446, 'Nuevo Leon', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2447, 'Oaxaca', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2448, 'Puebla', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2449, 'Queretaro', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2450, 'Quintana Roo', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2451, 'San Luis Potosi', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2452, 'Sinaloa', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2453, 'Sonora', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2454, 'Tabasco', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2455, 'Tamaulipas', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2456, 'Tlaxcala', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2457, 'Veracruz', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2458, 'Yucatan', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2459, 'Zacatecas', 142);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2460, 'Chuuk', 143);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2461, 'Kusaie', 143);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2462, 'Pohnpei', 143);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2463, 'Yap', 143);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2464, 'Balti', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2465, 'Cahul', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2466, 'Chisinau', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2467, 'Chisinau Oras', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2468, 'Edinet', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2469, 'Gagauzia', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2470, 'Lapusna', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2471, 'Orhei', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2472, 'Soroca', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2473, 'Taraclia', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2474, 'Tighina', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2475, 'Transnistria', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2476, 'Ungheni', 144);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2477, 'Fontvieille', 145);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2478, 'La Condamine', 145);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2479, 'Monaco-Ville', 145);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2480, 'Monte Carlo', 145);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2481, 'Arhangaj', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2482, 'Bajan-Olgij', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2483, 'Bajanhongor', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2484, 'Bulgan', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2485, 'Darhan-Uul', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2486, 'Dornod', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2487, 'Dornogovi', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2488, 'Dundgovi', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2489, 'Govi-Altaj', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2490, 'Govisumber', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2491, 'Hentij', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2492, 'Hovd', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2493, 'Hovsgol', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2494, 'Omnogovi', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2495, 'Orhon', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2496, 'Ovorhangaj', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2497, 'Selenge', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2498, 'Suhbaatar', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2499, 'Tov', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2500, 'Ulaanbaatar', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2501, 'Uvs', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2502, 'Zavhan', 146);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2503, 'Montserrat', 147);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2504, 'Agadir', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2505, 'Casablanca', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2506, 'Chaouia-Ouardigha', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2507, 'Doukkala-Abda', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2508, 'Fes-Boulemane', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2509, 'Gharb-Chrarda-Beni Hssen', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2510, 'Guelmim', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2511, 'Kenitra', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2512, 'Marrakech-Tensift-Al Haouz', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2513, 'Meknes-Tafilalet', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2514, 'Oriental', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2515, 'Oujda', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2516, 'Province de Tanger', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2517, 'Rabat-Sale-Zammour-Zaer', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2518, 'Sala Al Jadida', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2519, 'Settat', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2520, 'Souss Massa-Draa', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2521, 'Tadla-Azilal', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2522, 'Tangier-Tetouan', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2523, 'Taza-Al Hoceima-Taounate', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2524, 'Wilaya de Casablanca', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2525, 'Wilaya de Rabat-Sale', 148);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2526, 'Cabo Delgado', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2527, 'Gaza', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2528, 'Inhambane', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2529, 'Manica', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2530, 'Maputo', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2531, 'Maputo Provincia', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2532, 'Nampula', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2533, 'Niassa', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2534, 'Sofala', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2535, 'Tete', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2536, 'Zambezia', 149);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2537, 'Ayeyarwady', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2538, 'Bago', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2539, 'Chin', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2540, 'Kachin', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2541, 'Kayah', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2542, 'Kayin', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2543, 'Magway', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2544, 'Mandalay', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2545, 'Mon', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2546, 'Nay Pyi Taw', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2547, 'Rakhine', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2548, 'Sagaing', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2549, 'Shan', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2550, 'Tanintharyi', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2551, 'Yangon', 150);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2552, 'Caprivi', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2553, 'Erongo', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2554, 'Hardap', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2555, 'Karas', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2556, 'Kavango', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2557, 'Khomas', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2558, 'Kunene', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2559, 'Ohangwena', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2560, 'Omaheke', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2561, 'Omusati', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2562, 'Oshana', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2563, 'Oshikoto', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2564, 'Otjozondjupa', 151);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2565, 'Yaren', 152);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2566, 'Bagmati', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2567, 'Bheri', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2568, 'Dhawalagiri', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2569, 'Gandaki', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2570, 'Janakpur', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2571, 'Karnali', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2572, 'Koshi', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2573, 'Lumbini', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2574, 'Mahakali', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2575, 'Mechi', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2576, 'Narayani', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2577, 'Rapti', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2578, 'Sagarmatha', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2579, 'Seti', 153);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2580, 'Bonaire', 154);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2581, 'Curacao', 154);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2582, 'Saba', 154);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2583, 'Sint Eustatius', 154);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2584, 'Sint Maarten', 154);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2585, 'Amsterdam', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2586, 'Benelux', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2587, 'Drenthe', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2588, 'Flevoland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2589, 'Friesland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2590, 'Gelderland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2591, 'Groningen', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2592, 'Limburg', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2593, 'Noord-Brabant', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2594, 'Noord-Holland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2595, 'Overijssel', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2596, 'South Holland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2597, 'Utrecht', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2598, 'Zeeland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2599, 'Zuid-Holland', 155);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2600, 'Iles', 156);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2601, 'Nord', 156);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2602, 'Sud', 156);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2603, 'Area Outside Region', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2604, 'Auckland', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2605, 'Bay of Plenty', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2606, 'Canterbury', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2607, 'Christchurch', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2608, 'Gisborne', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2609, 'Hawke\'s Bay', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2610, 'Manawatu-Wanganui', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2611, 'Marlborough', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2612, 'Nelson', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2613, 'Northland', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2614, 'Otago', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2615, 'Rodney', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2616, 'Southland', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2617, 'Taranaki', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2618, 'Tasman', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2619, 'Waikato', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2620, 'Wellington', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2621, 'West Coast', 157);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2622, 'Atlantico Norte', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2623, 'Atlantico Sur', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2624, 'Boaco', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2625, 'Carazo', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2626, 'Chinandega', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2627, 'Chontales', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2628, 'Esteli', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2629, 'Granada', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2630, 'Jinotega', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2631, 'Leon', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2632, 'Madriz', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2633, 'Managua', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2634, 'Masaya', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2635, 'Matagalpa', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2636, 'Nueva Segovia', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2637, 'Rio San Juan', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2638, 'Rivas', 158);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2639, 'Agadez', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2640, 'Diffa', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2641, 'Dosso', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2642, 'Maradi', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2643, 'Niamey', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2644, 'Tahoua', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2645, 'Tillabery', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2646, 'Zinder', 159);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2647, 'Abia', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2648, 'Abuja Federal Capital Territor', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2649, 'Adamawa', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2650, 'Akwa Ibom', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2651, 'Anambra', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2652, 'Bauchi', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2653, 'Bayelsa', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2654, 'Benue', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2655, 'Borno', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2656, 'Cross River', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2657, 'Delta', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2658, 'Ebonyi', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2659, 'Edo', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2660, 'Ekiti', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2661, 'Enugu', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2662, 'Gombe', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2663, 'Imo', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2664, 'Jigawa', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2665, 'Kaduna', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2666, 'Kano', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2667, 'Katsina', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2668, 'Kebbi', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2669, 'Kogi', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2670, 'Kwara', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2671, 'Lagos', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2672, 'Nassarawa', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2673, 'Niger', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2674, 'Ogun', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2675, 'Ondo', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2676, 'Osun', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2677, 'Oyo', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2678, 'Plateau', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2679, 'Rivers', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2680, 'Sokoto', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2681, 'Taraba', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2682, 'Yobe', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2683, 'Zamfara', 160);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2684, 'Niue', 161);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2685, 'Norfolk Island', 162);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2686, 'Northern Islands', 163);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2687, 'Rota', 163);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2688, 'Saipan', 163);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2689, 'Tinian', 163);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2690, 'Akershus', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2691, 'Aust Agder', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2692, 'Bergen', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2693, 'Buskerud', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2694, 'Finnmark', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2695, 'Hedmark', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2696, 'Hordaland', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2697, 'Moere og Romsdal', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2698, 'Nord Trondelag', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2699, 'Nordland', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2700, 'Oestfold', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2701, 'Oppland', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2702, 'Oslo', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2703, 'Rogaland', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2704, 'Soer Troendelag', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2705, 'Sogn og Fjordane', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2706, 'Stavern', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2707, 'Sykkylven', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2708, 'Telemark', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2709, 'Troms', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2710, 'Vest Agder', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2711, 'Vestfold', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2712, 'ÃƒÆ’Ã†â€™Ãƒâ€šÃ‹Å“stfold', 164);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2713, 'Al Buraimi', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2714, 'Dhufar', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2715, 'Masqat', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2716, 'Musandam', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2717, 'Rusayl', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2718, 'Wadi Kabir', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2719, 'ad-Dakhiliyah', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2720, 'adh-Dhahirah', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2721, 'al-Batinah', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2722, 'ash-Sharqiyah', 165);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2723, 'Baluchistan', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2724, 'Federal Capital Area', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2725, 'Federally administered Tribal ', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2726, 'North-West Frontier', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2727, 'Northern Areas', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2728, 'Punjab', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2729, 'Sind', 166);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2730, 'Aimeliik', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2731, 'Airai', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2732, 'Angaur', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2733, 'Hatobohei', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2734, 'Kayangel', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2735, 'Koror', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2736, 'Melekeok', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2737, 'Ngaraard', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2738, 'Ngardmau', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2739, 'Ngaremlengui', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2740, 'Ngatpang', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2741, 'Ngchesar', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2742, 'Ngerchelong', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2743, 'Ngiwal', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2744, 'Peleliu', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2745, 'Sonsorol', 167);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2746, 'Ariha', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2747, 'Bayt Lahm', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2748, 'Bethlehem', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2749, 'Dayr-al-Balah', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2750, 'Ghazzah', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2751, 'Ghazzah ash-Shamaliyah', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2752, 'Janin', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2753, 'Khan Yunis', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2754, 'Nabulus', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2755, 'Qalqilyah', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2756, 'Rafah', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2757, 'Ram Allah wal-Birah', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2758, 'Salfit', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2759, 'Tubas', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2760, 'Tulkarm', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2761, 'al-Khalil', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2762, 'al-Quds', 168);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2763, 'Bocas del Toro', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2764, 'Chiriqui', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2765, 'Cocle', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2766, 'Colon', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2767, 'Darien', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2768, 'Embera', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2769, 'Herrera', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2770, 'Kuna Yala', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2771, 'Los Santos', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2772, 'Ngobe Bugle', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2773, 'Panama', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2774, 'Veraguas', 169);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2775, 'East New Britain', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2776, 'East Sepik', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2777, 'Eastern Highlands', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2778, 'Enga', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2779, 'Fly River', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2780, 'Gulf', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2781, 'Madang', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2782, 'Manus', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2783, 'Milne Bay', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2784, 'Morobe', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2785, 'National Capital District', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2786, 'New Ireland', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2787, 'North Solomons', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2788, 'Oro', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2789, 'Sandaun', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2790, 'Simbu', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2791, 'Southern Highlands', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2792, 'West New Britain', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2793, 'Western Highlands', 170);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2794, 'Alto Paraguay', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2795, 'Alto Parana', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2796, 'Amambay', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2797, 'Asuncion', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2798, 'Boqueron', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2799, 'Caaguazu', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2800, 'Caazapa', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2801, 'Canendiyu', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2802, 'Central', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2803, 'Concepcion', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2804, 'Cordillera', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2805, 'Guaira', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2806, 'Itapua', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2807, 'Misiones', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2808, 'Neembucu', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2809, 'Paraguari', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2810, 'Presidente Hayes', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2811, 'San Pedro', 171);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2812, 'Amazonas', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2813, 'Ancash', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2814, 'Apurimac', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2815, 'Arequipa', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2816, 'Ayacucho', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2817, 'Cajamarca', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2818, 'Cusco', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2819, 'Huancavelica', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2820, 'Huanuco', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2821, 'Ica', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2822, 'Junin', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2823, 'La Libertad', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2824, 'Lambayeque', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2825, 'Lima y Callao', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2826, 'Loreto', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2827, 'Madre de Dios', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2828, 'Moquegua', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2829, 'Pasco', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2830, 'Piura', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2831, 'Puno', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2832, 'San Martin', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2833, 'Tacna', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2834, 'Tumbes', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2835, 'Ucayali', 172);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2836, 'Batangas', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2837, 'Bicol', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2838, 'Bulacan', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2839, 'Cagayan', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2840, 'Caraga', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2841, 'Central Luzon', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2842, 'Central Mindanao', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2843, 'Central Visayas', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2844, 'Cordillera', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2845, 'Davao', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2846, 'Eastern Visayas', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2847, 'Greater Metropolitan Area', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2848, 'Ilocos', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2849, 'Laguna', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2850, 'Luzon', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2851, 'Mactan', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2852, 'Metropolitan Manila Area', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2853, 'Muslim Mindanao', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2854, 'Northern Mindanao', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2855, 'Southern Mindanao', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2856, 'Southern Tagalog', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2857, 'Western Mindanao', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2858, 'Western Visayas', 173);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2859, 'Pitcairn Island', 174);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2860, 'Biale Blota', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2861, 'Dobroszyce', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2862, 'Dolnoslaskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2863, 'Dziekanow Lesny', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2864, 'Hopowo', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2865, 'Kartuzy', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2866, 'Koscian', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2867, 'Krakow', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2868, 'Kujawsko-Pomorskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2869, 'Lodzkie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2870, 'Lubelskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2871, 'Lubuskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2872, 'Malomice', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2873, 'Malopolskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2874, 'Mazowieckie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2875, 'Mirkow', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2876, 'Opolskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2877, 'Ostrowiec', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2878, 'Podkarpackie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2879, 'Podlaskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2880, 'Polska', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2881, 'Pomorskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2882, 'Poznan', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2883, 'Pruszkow', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2884, 'Rymanowska', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2885, 'Rzeszow', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2886, 'Slaskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2887, 'Stare Pole', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2888, 'Swietokrzyskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2889, 'Warminsko-Mazurskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2890, 'Warsaw', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2891, 'Wejherowo', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2892, 'Wielkopolskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2893, 'Wroclaw', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2894, 'Zachodnio-Pomorskie', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2895, 'Zukowo', 175);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2896, 'Abrantes', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2897, 'Acores', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2898, 'Alentejo', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2899, 'Algarve', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2900, 'Braga', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2901, 'Centro', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2902, 'Distrito de Leiria', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2903, 'Distrito de Viana do Castelo', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2904, 'Distrito de Vila Real', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2905, 'Distrito do Porto', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2906, 'Lisboa e Vale do Tejo', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2907, 'Madeira', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2908, 'Norte', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2909, 'Paivas', 176);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2910, 'Arecibo', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2911, 'Bayamon', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2912, 'Carolina', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2913, 'Florida', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2914, 'Guayama', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2915, 'Humacao', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2916, 'Mayaguez-Aguadilla', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2917, 'Ponce', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2918, 'Salinas', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2919, 'San Juan', 177);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2920, 'Doha', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2921, 'Jarian-al-Batnah', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2922, 'Umm Salal', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2923, 'ad-Dawhah', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2924, 'al-Ghuwayriyah', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2925, 'al-Jumayliyah', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2926, 'al-Khawr', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2927, 'al-Wakrah', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2928, 'ar-Rayyan', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2929, 'ash-Shamal', 178);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2930, 'Saint-Benoit', 179);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2931, 'Saint-Denis', 179);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2932, 'Saint-Paul', 179);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2933, 'Saint-Pierre', 179);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2934, 'Alba', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2935, 'Arad', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2936, 'Arges', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2937, 'Bacau', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2938, 'Bihor', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2939, 'Bistrita-Nasaud', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2940, 'Botosani', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2941, 'Braila', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2942, 'Brasov', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2943, 'Bucuresti', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2944, 'Buzau', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2945, 'Calarasi', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2946, 'Caras-Severin', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2947, 'Cluj', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2948, 'Constanta', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2949, 'Covasna', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2950, 'Dambovita', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2951, 'Dolj', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2952, 'Galati', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2953, 'Giurgiu', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2954, 'Gorj', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2955, 'Harghita', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2956, 'Hunedoara', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2957, 'Ialomita', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2958, 'Iasi', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2959, 'Ilfov', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2960, 'Maramures', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2961, 'Mehedinti', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2962, 'Mures', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2963, 'Neamt', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2964, 'Olt', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2965, 'Prahova', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2966, 'Salaj', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2967, 'Satu Mare', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2968, 'Sibiu', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2969, 'Sondelor', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2970, 'Suceava', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2971, 'Teleorman', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2972, 'Timis', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2973, 'Tulcea', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2974, 'Valcea', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2975, 'Vaslui', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2976, 'Vrancea', 180);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2977, 'Adygeja', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2978, 'Aga', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2979, 'Alanija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2980, 'Altaj', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2981, 'Amur', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2982, 'Arhangelsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2983, 'Astrahan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2984, 'Bashkortostan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2985, 'Belgorod', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2986, 'Brjansk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2987, 'Burjatija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2988, 'Chechenija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2989, 'Cheljabinsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2990, 'Chita', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2991, 'Chukotka', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2992, 'Chuvashija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2993, 'Dagestan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2994, 'Evenkija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2995, 'Gorno-Altaj', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2996, 'Habarovsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2997, 'Hakasija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2998, 'Hanty-Mansija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (2999, 'Ingusetija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3000, 'Irkutsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3001, 'Ivanovo', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3002, 'Jamalo-Nenets', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3003, 'Jaroslavl', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3004, 'Jevrej', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3005, 'Kabardino-Balkarija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3006, 'Kaliningrad', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3007, 'Kalmykija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3008, 'Kaluga', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3009, 'Kamchatka', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3010, 'Karachaj-Cherkessija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3011, 'Karelija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3012, 'Kemerovo', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3013, 'Khabarovskiy Kray', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3014, 'Kirov', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3015, 'Komi', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3016, 'Komi-Permjakija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3017, 'Korjakija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3018, 'Kostroma', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3019, 'Krasnodar', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3020, 'Krasnojarsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3021, 'Krasnoyarskiy Kray', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3022, 'Kurgan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3023, 'Kursk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3024, 'Leningrad', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3025, 'Lipeck', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3026, 'Magadan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3027, 'Marij El', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3028, 'Mordovija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3029, 'Moscow', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3030, 'Moskovskaja Oblast', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3031, 'Moskovskaya Oblast', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3032, 'Moskva', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3033, 'Murmansk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3034, 'Nenets', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3035, 'Nizhnij Novgorod', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3036, 'Novgorod', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3037, 'Novokusnezk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3038, 'Novosibirsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3039, 'Omsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3040, 'Orenburg', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3041, 'Orjol', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3042, 'Penza', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3043, 'Perm', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3044, 'Primorje', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3045, 'Pskov', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3046, 'Pskovskaya Oblast', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3047, 'Rjazan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3048, 'Rostov', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3049, 'Saha', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3050, 'Sahalin', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3051, 'Samara', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3052, 'Samarskaya', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3053, 'Sankt-Peterburg', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3054, 'Saratov', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3055, 'Smolensk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3056, 'Stavropol', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3057, 'Sverdlovsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3058, 'Tajmyrija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3059, 'Tambov', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3060, 'Tatarstan', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3061, 'Tjumen', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3062, 'Tomsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3063, 'Tula', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3064, 'Tver', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3065, 'Tyva', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3066, 'Udmurtija', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3067, 'Uljanovsk', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3068, 'Ulyanovskaya Oblast', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3069, 'Ust-Orda', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3070, 'Vladimir', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3071, 'Volgograd', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3072, 'Vologda', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3073, 'Voronezh', 181);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3074, 'Butare', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3075, 'Byumba', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3076, 'Cyangugu', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3077, 'Gikongoro', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3078, 'Gisenyi', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3079, 'Gitarama', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3080, 'Kibungo', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3081, 'Kibuye', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3082, 'Kigali-ngali', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3083, 'Ruhengeri', 182);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3084, 'Ascension', 183);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3085, 'Gough Island', 183);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3086, 'Saint Helena', 183);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3087, 'Tristan da Cunha', 183);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3088, 'Christ Church Nichola Town', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3089, 'Saint Anne Sandy Point', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3090, 'Saint George Basseterre', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3091, 'Saint George Gingerland', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3092, 'Saint James Windward', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3093, 'Saint John Capesterre', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3094, 'Saint John Figtree', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3095, 'Saint Mary Cayon', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3096, 'Saint Paul Capesterre', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3097, 'Saint Paul Charlestown', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3098, 'Saint Peter Basseterre', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3099, 'Saint Thomas Lowland', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3100, 'Saint Thomas Middle Island', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3101, 'Trinity Palmetto Point', 184);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3102, 'Anse-la-Raye', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3103, 'Canaries', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3104, 'Castries', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3105, 'Choiseul', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3106, 'Dennery', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3107, 'Gros Inlet', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3108, 'Laborie', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3109, 'Micoud', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3110, 'Soufriere', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3111, 'Vieux Fort', 185);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3112, 'Miquelon-Langlade', 186);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3113, 'Saint-Pierre', 186);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3114, 'Charlotte', 187);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3115, 'Grenadines', 187);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3116, 'Saint Andrew', 187);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3117, 'Saint David', 187);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3118, 'Saint George', 187);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3119, 'Saint Patrick', 187);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3120, 'A\'ana', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3121, 'Aiga-i-le-Tai', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3122, 'Atua', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3123, 'Fa\'asaleleaga', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3124, 'Gaga\'emauga', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3125, 'Gagaifomauga', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3126, 'Palauli', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3127, 'Satupa\'itea', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3128, 'Tuamasaga', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3129, 'Va\'a-o-Fonoti', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3130, 'Vaisigano', 188);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3131, 'Acquaviva', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3132, 'Borgo Maggiore', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3133, 'Chiesanuova', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3134, 'Domagnano', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3135, 'Faetano', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3136, 'Fiorentino', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3137, 'Montegiardino', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3138, 'San Marino', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3139, 'Serravalle', 189);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3140, 'Agua Grande', 190);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3141, 'Cantagalo', 190);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3142, 'Lemba', 190);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3143, 'Lobata', 190);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3144, 'Me-Zochi', 190);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3145, 'Pague', 190);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3146, 'Al Khobar', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3147, 'Aseer', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3148, 'Ash Sharqiyah', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3149, 'Asir', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3150, 'Central Province', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3151, 'Eastern Province', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3152, 'Ha\'il', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3153, 'Jawf', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3154, 'Jizan', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3155, 'Makkah', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3156, 'Najran', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3157, 'Qasim', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3158, 'Tabuk', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3159, 'Western Province', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3160, 'al-Bahah', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3161, 'al-Hudud-ash-Shamaliyah', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3162, 'al-Madinah', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3163, 'ar-Riyad', 191);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3164, 'Dakar', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3165, 'Diourbel', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3166, 'Fatick', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3167, 'Kaolack', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3168, 'Kolda', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3169, 'Louga', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3170, 'Saint-Louis', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3171, 'Tambacounda', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3172, 'Thies', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3173, 'Ziguinchor', 192);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3174, 'Central Serbia', 193);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3175, 'Kosovo and Metohija', 193);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3176, 'Vojvodina', 193);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3177, 'Anse Boileau', 194);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3178, 'Anse Royale', 194);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3179, 'Cascade', 194);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3180, 'Takamaka', 194);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3181, 'Victoria', 194);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3182, 'Eastern', 195);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3183, 'Northern', 195);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3184, 'Southern', 195);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3185, 'Western', 195);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3186, 'Singapore', 196);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3187, 'Banskobystricky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3188, 'Bratislavsky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3189, 'Kosicky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3190, 'Nitriansky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3191, 'Presovsky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3192, 'Trenciansky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3193, 'Trnavsky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3194, 'Zilinsky', 197);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3195, 'Benedikt', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3196, 'Gorenjska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3197, 'Gorishka', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3198, 'Jugovzhodna Slovenija', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3199, 'Koroshka', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3200, 'Notranjsko-krashka', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3201, 'Obalno-krashka', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3202, 'Obcina Domzale', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3203, 'Obcina Vitanje', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3204, 'Osrednjeslovenska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3205, 'Podravska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3206, 'Pomurska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3207, 'Savinjska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3208, 'Slovenian Littoral', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3209, 'Spodnjeposavska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3210, 'Zasavska', 198);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3211, 'Pitcairn', 199);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3212, 'Central', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3213, 'Choiseul', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3214, 'Guadalcanal', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3215, 'Isabel', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3216, 'Makira and Ulawa', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3217, 'Malaita', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3218, 'Rennell and Bellona', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3219, 'Temotu', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3220, 'Western', 200);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3221, 'Awdal', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3222, 'Bakol', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3223, 'Banadir', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3224, 'Bari', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3225, 'Bay', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3226, 'Galgudug', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3227, 'Gedo', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3228, 'Hiran', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3229, 'Jubbada Hose', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3230, 'Jubbadha Dexe', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3231, 'Mudug', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3232, 'Nugal', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3233, 'Sanag', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3234, 'Shabellaha Dhexe', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3235, 'Shabellaha Hose', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3236, 'Togdher', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3237, 'Woqoyi Galbed', 201);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3238, 'Eastern Cape', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3239, 'Free State', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3240, 'Gauteng', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3241, 'Kempton Park', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3242, 'Kramerville', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3243, 'KwaZulu Natal', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3244, 'Limpopo', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3245, 'Mpumalanga', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3246, 'North West', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3247, 'Northern Cape', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3248, 'Parow', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3249, 'Table View', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3250, 'Umtentweni', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3251, 'Western Cape', 202);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3252, 'South Georgia', 203);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3253, 'Central Equatoria', 204);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3254, 'A Coruna', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3255, 'Alacant', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3256, 'Alava', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3257, 'Albacete', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3258, 'Almeria', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3259, 'Andalucia', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3260, 'Asturias', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3261, 'Avila', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3262, 'Badajoz', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3263, 'Balears', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3264, 'Barcelona', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3265, 'Bertamirans', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3266, 'Biscay', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3267, 'Burgos', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3268, 'Caceres', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3269, 'Cadiz', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3270, 'Cantabria', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3271, 'Castello', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3272, 'Catalunya', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3273, 'Ceuta', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3274, 'Ciudad Real', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3275, 'Comunidad Autonoma de Canarias', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3276, 'Comunidad Autonoma de Cataluna', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3277, 'Comunidad Autonoma de Galicia', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3278, 'Comunidad Autonoma de las Isla', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3279, 'Comunidad Autonoma del Princip', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3280, 'Comunidad Valenciana', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3281, 'Cordoba', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3282, 'Cuenca', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3283, 'Gipuzkoa', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3284, 'Girona', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3285, 'Granada', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3286, 'Guadalajara', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3287, 'Guipuzcoa', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3288, 'Huelva', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3289, 'Huesca', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3290, 'Jaen', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3291, 'La Rioja', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3292, 'Las Palmas', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3293, 'Leon', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3294, 'Lerida', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3295, 'Lleida', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3296, 'Lugo', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3297, 'Madrid', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3298, 'Malaga', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3299, 'Melilla', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3300, 'Murcia', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3301, 'Navarra', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3302, 'Ourense', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3303, 'Pais Vasco', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3304, 'Palencia', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3305, 'Pontevedra', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3306, 'Salamanca', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3307, 'Santa Cruz de Tenerife', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3308, 'Segovia', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3309, 'Sevilla', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3310, 'Soria', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3311, 'Tarragona', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3312, 'Tenerife', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3313, 'Teruel', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3314, 'Toledo', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3315, 'Valencia', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3316, 'Valladolid', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3317, 'Vizcaya', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3318, 'Zamora', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3319, 'Zaragoza', 205);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3320, 'Amparai', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3321, 'Anuradhapuraya', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3322, 'Badulla', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3323, 'Boralesgamuwa', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3324, 'Colombo', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3325, 'Galla', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3326, 'Gampaha', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3327, 'Hambantota', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3328, 'Kalatura', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3329, 'Kegalla', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3330, 'Kilinochchi', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3331, 'Kurunegala', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3332, 'Madakalpuwa', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3333, 'Maha Nuwara', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3334, 'Malwana', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3335, 'Mannarama', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3336, 'Matale', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3337, 'Matara', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3338, 'Monaragala', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3339, 'Mullaitivu', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3340, 'North Eastern Province', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3341, 'North Western Province', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3342, 'Nuwara Eliya', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3343, 'Polonnaruwa', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3344, 'Puttalama', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3345, 'Ratnapuraya', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3346, 'Southern Province', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3347, 'Tirikunamalaya', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3348, 'Tuscany', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3349, 'Vavuniyawa', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3350, 'Western Province', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3351, 'Yapanaya', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3352, 'kadawatha', 206);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3353, 'A\'ali-an-Nil', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3354, 'Bahr-al-Jabal', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3355, 'Central Equatoria', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3356, 'Gharb Bahr-al-Ghazal', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3357, 'Gharb Darfur', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3358, 'Gharb Kurdufan', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3359, 'Gharb-al-Istiwa\'iyah', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3360, 'Janub Darfur', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3361, 'Janub Kurdufan', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3362, 'Junqali', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3363, 'Kassala', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3364, 'Nahr-an-Nil', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3365, 'Shamal Bahr-al-Ghazal', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3366, 'Shamal Darfur', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3367, 'Shamal Kurdufan', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3368, 'Sharq-al-Istiwa\'iyah', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3369, 'Sinnar', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3370, 'Warab', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3371, 'Wilayat al Khartum', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3372, 'al-Bahr-al-Ahmar', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3373, 'al-Buhayrat', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3374, 'al-Jazirah', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3375, 'al-Khartum', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3376, 'al-Qadarif', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3377, 'al-Wahdah', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3378, 'an-Nil-al-Abyad', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3379, 'an-Nil-al-Azraq', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3380, 'ash-Shamaliyah', 207);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3381, 'Brokopondo', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3382, 'Commewijne', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3383, 'Coronie', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3384, 'Marowijne', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3385, 'Nickerie', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3386, 'Para', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3387, 'Paramaribo', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3388, 'Saramacca', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3389, 'Wanica', 208);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3390, 'Svalbard', 209);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3391, 'Hhohho', 210);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3392, 'Lubombo', 210);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3393, 'Manzini', 210);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3394, 'Shiselweni', 210);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3395, 'Alvsborgs Lan', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3396, 'Angermanland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3397, 'Blekinge', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3398, 'Bohuslan', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3399, 'Dalarna', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3400, 'Gavleborg', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3401, 'Gaza', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3402, 'Gotland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3403, 'Halland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3404, 'Jamtland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3405, 'Jonkoping', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3406, 'Kalmar', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3407, 'Kristianstads', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3408, 'Kronoberg', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3409, 'Norrbotten', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3410, 'Orebro', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3411, 'Ostergotland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3412, 'Saltsjo-Boo', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3413, 'Skane', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3414, 'Smaland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3415, 'Sodermanland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3416, 'Stockholm', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3417, 'Uppsala', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3418, 'Varmland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3419, 'Vasterbotten', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3420, 'Vastergotland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3421, 'Vasternorrland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3422, 'Vastmanland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3423, 'Vastra Gotaland', 211);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3424, 'Aargau', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3425, 'Appenzell Inner-Rhoden', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3426, 'Appenzell-Ausser Rhoden', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3427, 'Basel-Landschaft', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3428, 'Basel-Stadt', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3429, 'Bern', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3430, 'Canton Ticino', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3431, 'Fribourg', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3432, 'Geneve', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3433, 'Glarus', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3434, 'Graubunden', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3435, 'Heerbrugg', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3436, 'Jura', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3437, 'Kanton Aargau', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3438, 'Luzern', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3439, 'Morbio Inferiore', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3440, 'Muhen', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3441, 'Neuchatel', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3442, 'Nidwalden', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3443, 'Obwalden', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3444, 'Sankt Gallen', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3445, 'Schaffhausen', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3446, 'Schwyz', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3447, 'Solothurn', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3448, 'Thurgau', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3449, 'Ticino', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3450, 'Uri', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3451, 'Valais', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3452, 'Vaud', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3453, 'Vauffelin', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3454, 'Zug', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3455, 'Zurich', 212);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3456, 'Aleppo', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3457, 'Dar\'a', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3458, 'Dayr-az-Zawr', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3459, 'Dimashq', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3460, 'Halab', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3461, 'Hamah', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3462, 'Hims', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3463, 'Idlib', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3464, 'Madinat Dimashq', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3465, 'Tartus', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3466, 'al-Hasakah', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3467, 'al-Ladhiqiyah', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3468, 'al-Qunaytirah', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3469, 'ar-Raqqah', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3470, 'as-Suwayda', 213);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3471, 'Changhwa', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3472, 'Chiayi Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3473, 'Chiayi Shih', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3474, 'Eastern Taipei', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3475, 'Hsinchu Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3476, 'Hsinchu Shih', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3477, 'Hualien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3478, 'Ilan', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3479, 'Kaohsiung Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3480, 'Kaohsiung Shih', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3481, 'Keelung Shih', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3482, 'Kinmen', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3483, 'Miaoli', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3484, 'Nantou', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3485, 'Northern Taiwan', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3486, 'Penghu', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3487, 'Pingtung', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3488, 'Taichung', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3489, 'Taichung Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3490, 'Taichung Shih', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3491, 'Tainan Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3492, 'Tainan Shih', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3493, 'Taipei Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3494, 'Taipei Shih / Taipei Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3495, 'Taitung', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3496, 'Taoyuan', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3497, 'Yilan', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3498, 'Yun-Lin Hsien', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3499, 'Yunlin', 214);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3500, 'Dushanbe', 215);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3501, 'Gorno-Badakhshan', 215);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3502, 'Karotegin', 215);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3503, 'Khatlon', 215);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3504, 'Sughd', 215);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3505, 'Arusha', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3506, 'Dar es Salaam', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3507, 'Dodoma', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3508, 'Iringa', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3509, 'Kagera', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3510, 'Kigoma', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3511, 'Kilimanjaro', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3512, 'Lindi', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3513, 'Mara', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3514, 'Mbeya', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3515, 'Morogoro', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3516, 'Mtwara', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3517, 'Mwanza', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3518, 'Pwani', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3519, 'Rukwa', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3520, 'Ruvuma', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3521, 'Shinyanga', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3522, 'Singida', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3523, 'Tabora', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3524, 'Tanga', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3525, 'Zanzibar and Pemba', 216);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3526, 'Amnat Charoen', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3527, 'Ang Thong', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3528, 'Bangkok', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3529, 'Buri Ram', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3530, 'Chachoengsao', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3531, 'Chai Nat', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3532, 'Chaiyaphum', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3533, 'Changwat Chaiyaphum', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3534, 'Chanthaburi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3535, 'Chiang Mai', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3536, 'Chiang Rai', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3537, 'Chon Buri', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3538, 'Chumphon', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3539, 'Kalasin', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3540, 'Kamphaeng Phet', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3541, 'Kanchanaburi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3542, 'Khon Kaen', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3543, 'Krabi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3544, 'Krung Thep', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3545, 'Lampang', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3546, 'Lamphun', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3547, 'Loei', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3548, 'Lop Buri', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3549, 'Mae Hong Son', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3550, 'Maha Sarakham', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3551, 'Mukdahan', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3552, 'Nakhon Nayok', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3553, 'Nakhon Pathom', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3554, 'Nakhon Phanom', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3555, 'Nakhon Ratchasima', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3556, 'Nakhon Sawan', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3557, 'Nakhon Si Thammarat', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3558, 'Nan', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3559, 'Narathiwat', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3560, 'Nong Bua Lam Phu', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3561, 'Nong Khai', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3562, 'Nonthaburi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3563, 'Pathum Thani', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3564, 'Pattani', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3565, 'Phangnga', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3566, 'Phatthalung', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3567, 'Phayao', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3568, 'Phetchabun', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3569, 'Phetchaburi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3570, 'Phichit', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3571, 'Phitsanulok', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3572, 'Phra Nakhon Si Ayutthaya', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3573, 'Phrae', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3574, 'Phuket', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3575, 'Prachin Buri', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3576, 'Prachuap Khiri Khan', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3577, 'Ranong', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3578, 'Ratchaburi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3579, 'Rayong', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3580, 'Roi Et', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3581, 'Sa Kaeo', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3582, 'Sakon Nakhon', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3583, 'Samut Prakan', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3584, 'Samut Sakhon', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3585, 'Samut Songkhran', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3586, 'Saraburi', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3587, 'Satun', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3588, 'Si Sa Ket', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3589, 'Sing Buri', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3590, 'Songkhla', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3591, 'Sukhothai', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3592, 'Suphan Buri', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3593, 'Surat Thani', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3594, 'Surin', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3595, 'Tak', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3596, 'Trang', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3597, 'Trat', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3598, 'Ubon Ratchathani', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3599, 'Udon Thani', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3600, 'Uthai Thani', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3601, 'Uttaradit', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3602, 'Yala', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3603, 'Yasothon', 217);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3604, 'Centre', 218);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3605, 'Kara', 218);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3606, 'Maritime', 218);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3607, 'Plateaux', 218);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3608, 'Savanes', 218);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3609, 'Atafu', 219);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3610, 'Fakaofo', 219);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3611, 'Nukunonu', 219);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3612, 'Eua', 220);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3613, 'Ha\'apai', 220);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3614, 'Niuas', 220);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3615, 'Tongatapu', 220);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3616, 'Vava\'u', 220);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3617, 'Arima-Tunapuna-Piarco', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3618, 'Caroni', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3619, 'Chaguanas', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3620, 'Couva-Tabaquite-Talparo', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3621, 'Diego Martin', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3622, 'Glencoe', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3623, 'Penal Debe', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3624, 'Point Fortin', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3625, 'Port of Spain', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3626, 'Princes Town', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3627, 'Saint George', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3628, 'San Fernando', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3629, 'San Juan', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3630, 'Sangre Grande', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3631, 'Siparia', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3632, 'Tobago', 221);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3633, 'Aryanah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3634, 'Bajah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3635, 'Bin \'Arus', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3636, 'Binzart', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3637, 'Gouvernorat de Ariana', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3638, 'Gouvernorat de Nabeul', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3639, 'Gouvernorat de Sousse', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3640, 'Hammamet Yasmine', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3641, 'Jundubah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3642, 'Madaniyin', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3643, 'Manubah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3644, 'Monastir', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3645, 'Nabul', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3646, 'Qabis', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3647, 'Qafsah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3648, 'Qibili', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3649, 'Safaqis', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3650, 'Sfax', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3651, 'Sidi Bu Zayd', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3652, 'Silyanah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3653, 'Susah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3654, 'Tatawin', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3655, 'Tawzar', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3656, 'Tunis', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3657, 'Zaghwan', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3658, 'al-Kaf', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3659, 'al-Mahdiyah', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3660, 'al-Munastir', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3661, 'al-Qasrayn', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3662, 'al-Qayrawan', 222);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3663, 'Adana', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3664, 'Adiyaman', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3665, 'Afyon', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3666, 'Agri', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3667, 'Aksaray', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3668, 'Amasya', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3669, 'Ankara', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3670, 'Antalya', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3671, 'Ardahan', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3672, 'Artvin', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3673, 'Aydin', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3674, 'Balikesir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3675, 'Bartin', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3676, 'Batman', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3677, 'Bayburt', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3678, 'Bilecik', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3679, 'Bingol', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3680, 'Bitlis', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3681, 'Bolu', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3682, 'Burdur', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3683, 'Bursa', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3684, 'Canakkale', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3685, 'Cankiri', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3686, 'Corum', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3687, 'Denizli', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3688, 'Diyarbakir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3689, 'Duzce', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3690, 'Edirne', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3691, 'Elazig', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3692, 'Erzincan', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3693, 'Erzurum', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3694, 'Eskisehir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3695, 'Gaziantep', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3696, 'Giresun', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3697, 'Gumushane', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3698, 'Hakkari', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3699, 'Hatay', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3700, 'Icel', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3701, 'Igdir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3702, 'Isparta', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3703, 'Istanbul', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3704, 'Izmir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3705, 'Kahramanmaras', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3706, 'Karabuk', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3707, 'Karaman', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3708, 'Kars', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3709, 'Karsiyaka', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3710, 'Kastamonu', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3711, 'Kayseri', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3712, 'Kilis', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3713, 'Kirikkale', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3714, 'Kirklareli', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3715, 'Kirsehir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3716, 'Kocaeli', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3717, 'Konya', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3718, 'Kutahya', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3719, 'Lefkosa', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3720, 'Malatya', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3721, 'Manisa', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3722, 'Mardin', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3723, 'Mugla', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3724, 'Mus', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3725, 'Nevsehir', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3726, 'Nigde', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3727, 'Ordu', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3728, 'Osmaniye', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3729, 'Rize', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3730, 'Sakarya', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3731, 'Samsun', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3732, 'Sanliurfa', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3733, 'Siirt', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3734, 'Sinop', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3735, 'Sirnak', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3736, 'Sivas', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3737, 'Tekirdag', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3738, 'Tokat', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3739, 'Trabzon', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3740, 'Tunceli', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3741, 'Usak', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3742, 'Van', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3743, 'Yalova', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3744, 'Yozgat', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3745, 'Zonguldak', 223);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3746, 'Ahal', 224);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3747, 'Asgabat', 224);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3748, 'Balkan', 224);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3749, 'Dasoguz', 224);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3750, 'Lebap', 224);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3751, 'Mari', 224);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3752, 'Grand Turk', 225);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3753, 'South Caicos and East Caicos', 225);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3754, 'Funafuti', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3755, 'Nanumanga', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3756, 'Nanumea', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3757, 'Niutao', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3758, 'Nui', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3759, 'Nukufetau', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3760, 'Nukulaelae', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3761, 'Vaitupu', 226);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3762, 'Central', 227);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3763, 'Eastern', 227);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3764, 'Northern', 227);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3765, 'Western', 227);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3766, 'Cherkas\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3767, 'Chernihivs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3768, 'Chernivets\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3769, 'Crimea', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3770, 'Dnipropetrovska', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3771, 'Donets\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3772, 'Ivano-Frankivs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3773, 'Kharkiv', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3774, 'Kharkov', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3775, 'Khersonska', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3776, 'Khmel\'nyts\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3777, 'Kirovohrad', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3778, 'Krym', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3779, 'Kyyiv', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3780, 'Kyyivs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3781, 'L\'vivs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3782, 'Luhans\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3783, 'Mykolayivs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3784, 'Odes\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3785, 'Odessa', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3786, 'Poltavs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3787, 'Rivnens\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3788, 'Sevastopol\'', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3789, 'Sums\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3790, 'Ternopil\'s\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3791, 'Volyns\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3792, 'Vynnyts\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3793, 'Zakarpats\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3794, 'Zaporizhia', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3795, 'Zhytomyrs\'ka', 228);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3796, 'Abu Zabi', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3797, 'Ajman', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3798, 'Dubai', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3799, 'Ras al-Khaymah', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3800, 'Sharjah', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3801, 'Sharjha', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3802, 'Umm al Qaywayn', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3803, 'al-Fujayrah', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3804, 'ash-Shariqah', 229);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3805, 'Aberdeen', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3806, 'Aberdeenshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3807, 'Argyll', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3808, 'Armagh', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3809, 'Bedfordshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3810, 'Belfast', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3811, 'Berkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3812, 'Birmingham', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3813, 'Brechin', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3814, 'Bridgnorth', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3815, 'Bristol', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3816, 'Buckinghamshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3817, 'Cambridge', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3818, 'Cambridgeshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3819, 'Channel Islands', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3820, 'Cheshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3821, 'Cleveland', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3822, 'Co Fermanagh', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3823, 'Conwy', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3824, 'Cornwall', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3825, 'Coventry', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3826, 'Craven Arms', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3827, 'Cumbria', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3828, 'Denbighshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3829, 'Derby', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3830, 'Derbyshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3831, 'Devon', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3832, 'Dial Code Dungannon', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3833, 'Didcot', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3834, 'Dorset', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3835, 'Dunbartonshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3836, 'Durham', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3837, 'East Dunbartonshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3838, 'East Lothian', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3839, 'East Midlands', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3840, 'East Sussex', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3841, 'East Yorkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3842, 'England', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3843, 'Essex', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3844, 'Fermanagh', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3845, 'Fife', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3846, 'Flintshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3847, 'Fulham', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3848, 'Gainsborough', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3849, 'Glocestershire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3850, 'Gwent', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3851, 'Hampshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3852, 'Hants', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3853, 'Herefordshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3854, 'Hertfordshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3855, 'Ireland', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3856, 'Isle Of Man', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3857, 'Isle of Wight', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3858, 'Kenford', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3859, 'Kent', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3860, 'Kilmarnock', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3861, 'Lanarkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3862, 'Lancashire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3863, 'Leicestershire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3864, 'Lincolnshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3865, 'Llanymynech', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3866, 'London', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3867, 'Ludlow', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3868, 'Manchester', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3869, 'Mayfair', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3870, 'Merseyside', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3871, 'Mid Glamorgan', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3872, 'Middlesex', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3873, 'Mildenhall', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3874, 'Monmouthshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3875, 'Newton Stewart', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3876, 'Norfolk', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3877, 'North Humberside', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3878, 'North Yorkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3879, 'Northamptonshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3880, 'Northants', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3881, 'Northern Ireland', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3882, 'Northumberland', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3883, 'Nottinghamshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3884, 'Oxford', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3885, 'Powys', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3886, 'Roos-shire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3887, 'SUSSEX', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3888, 'Sark', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3889, 'Scotland', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3890, 'Scottish Borders', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3891, 'Shropshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3892, 'Somerset', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3893, 'South Glamorgan', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3894, 'South Wales', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3895, 'South Yorkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3896, 'Southwell', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3897, 'Staffordshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3898, 'Strabane', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3899, 'Suffolk', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3900, 'Surrey', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3901, 'Sussex', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3902, 'Twickenham', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3903, 'Tyne and Wear', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3904, 'Tyrone', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3905, 'Utah', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3906, 'Wales', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3907, 'Warwickshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3908, 'West Lothian', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3909, 'West Midlands', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3910, 'West Sussex', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3911, 'West Yorkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3912, 'Whissendine', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3913, 'Wiltshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3914, 'Wokingham', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3915, 'Worcestershire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3916, 'Wrexham', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3917, 'Wurttemberg', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3918, 'Yorkshire', 230);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3919, 'Alabama', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3920, 'Alaska', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3921, 'Arizona', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3922, 'Arkansas', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3923, 'Byram', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3924, 'California', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3925, 'Cokato', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3926, 'Colorado', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3927, 'Connecticut', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3928, 'Delaware', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3929, 'District of Columbia', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3930, 'Florida', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3931, 'Georgia', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3932, 'Hawaii', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3933, 'Idaho', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3934, 'Illinois', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3935, 'Indiana', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3936, 'Iowa', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3937, 'Kansas', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3938, 'Kentucky', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3939, 'Louisiana', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3940, 'Lowa', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3941, 'Maine', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3942, 'Maryland', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3943, 'Massachusetts', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3944, 'Medfield', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3945, 'Michigan', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3946, 'Minnesota', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3947, 'Mississippi', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3948, 'Missouri', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3949, 'Montana', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3950, 'Nebraska', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3951, 'Nevada', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3952, 'New Hampshire', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3953, 'New Jersey', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3954, 'New Jersy', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3955, 'New Mexico', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3956, 'New York', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3957, 'North Carolina', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3958, 'North Dakota', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3959, 'Ohio', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3960, 'Oklahoma', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3961, 'Ontario', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3962, 'Oregon', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3963, 'Pennsylvania', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3964, 'Ramey', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3965, 'Rhode Island', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3966, 'South Carolina', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3967, 'South Dakota', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3968, 'Sublimity', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3969, 'Tennessee', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3970, 'Texas', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3971, 'Trimble', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3972, 'Utah', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3973, 'Vermont', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3974, 'Virginia', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3975, 'Washington', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3976, 'West Virginia', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3977, 'Wisconsin', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3978, 'Wyoming', 231);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3979, 'United States Minor Outlying I', 232);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3980, 'Artigas', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3981, 'Canelones', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3982, 'Cerro Largo', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3983, 'Colonia', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3984, 'Durazno', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3985, 'FLorida', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3986, 'Flores', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3987, 'Lavalleja', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3988, 'Maldonado', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3989, 'Montevideo', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3990, 'Paysandu', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3991, 'Rio Negro', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3992, 'Rivera', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3993, 'Rocha', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3994, 'Salto', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3995, 'San Jose', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3996, 'Soriano', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3997, 'Tacuarembo', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3998, 'Treinta y Tres', 233);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (3999, 'Andijon', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4000, 'Buhoro', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4001, 'Buxoro Viloyati', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4002, 'Cizah', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4003, 'Fargona', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4004, 'Horazm', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4005, 'Kaskadar', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4006, 'Korakalpogiston', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4007, 'Namangan', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4008, 'Navoi', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4009, 'Samarkand', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4010, 'Sirdare', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4011, 'Surhondar', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4012, 'Toskent', 234);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4013, 'Malampa', 235);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4014, 'Penama', 235);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4015, 'Sanma', 235);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4016, 'Shefa', 235);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4017, 'Tafea', 235);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4018, 'Torba', 235);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4019, 'Vatican City State (Holy See)', 236);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4020, 'Amazonas', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4021, 'Anzoategui', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4022, 'Apure', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4023, 'Aragua', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4024, 'Barinas', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4025, 'Bolivar', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4026, 'Carabobo', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4027, 'Cojedes', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4028, 'Delta Amacuro', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4029, 'Distrito Federal', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4030, 'Falcon', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4031, 'Guarico', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4032, 'Lara', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4033, 'Merida', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4034, 'Miranda', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4035, 'Monagas', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4036, 'Nueva Esparta', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4037, 'Portuguesa', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4038, 'Sucre', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4039, 'Tachira', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4040, 'Trujillo', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4041, 'Vargas', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4042, 'Yaracuy', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4043, 'Zulia', 237);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4044, 'Bac Giang', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4045, 'Binh Dinh', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4046, 'Binh Duong', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4047, 'Da Nang', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4048, 'Dong Bang Song Cuu Long', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4049, 'Dong Bang Song Hong', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4050, 'Dong Nai', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4051, 'Dong Nam Bo', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4052, 'Duyen Hai Mien Trung', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4053, 'Hanoi', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4054, 'Hung Yen', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4055, 'Khu Bon Cu', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4056, 'Long An', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4057, 'Mien Nui Va Trung Du', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4058, 'Thai Nguyen', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4059, 'Thanh Pho Ho Chi Minh', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4060, 'Thu Do Ha Noi', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4061, 'Tinh Can Tho', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4062, 'Tinh Da Nang', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4063, 'Tinh Gia Lai', 238);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4064, 'Anegada', 239);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4065, 'Jost van Dyke', 239);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4066, 'Tortola', 239);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4067, 'Saint Croix', 240);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4068, 'Saint John', 240);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4069, 'Saint Thomas', 240);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4070, 'Alo', 241);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4071, 'Singave', 241);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4072, 'Wallis', 241);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4073, 'Bu Jaydur', 242);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4074, 'Wad-adh-Dhahab', 242);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4075, 'al-\'Ayun', 242);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4076, 'as-Samarah', 242);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4077, '\'Adan', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4078, 'Abyan', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4079, 'Dhamar', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4080, 'Hadramaut', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4081, 'Hajjah', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4082, 'Hudaydah', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4083, 'Ibb', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4084, 'Lahij', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4085, 'Ma\'rib', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4086, 'Madinat San\'a', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4087, 'Sa\'dah', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4088, 'Sana', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4089, 'Shabwah', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4090, 'Ta\'izz', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4091, 'al-Bayda', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4092, 'al-Hudaydah', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4093, 'al-Jawf', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4094, 'al-Mahrah', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4095, 'al-Mahwit', 243);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4096, 'Central Serbia', 244);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4097, 'Kosovo and Metohija', 244);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4098, 'Montenegro', 244);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4099, 'Republic of Serbia', 244);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4100, 'Serbia', 244);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4101, 'Vojvodina', 244);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4102, 'Central', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4103, 'Copperbelt', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4104, 'Eastern', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4105, 'Luapala', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4106, 'Lusaka', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4107, 'North-Western', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4108, 'Northern', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4109, 'Southern', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4110, 'Western', 245);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4111, 'Bulawayo', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4112, 'Harare', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4113, 'Manicaland', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4114, 'Mashonaland Central', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4115, 'Mashonaland East', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4116, 'Mashonaland West', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4117, 'Masvingo', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4118, 'Matabeleland North', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4119, 'Matabeleland South', 246);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES (4120, 'Midlands', 246);


#
# TABLE STRUCTURE FOR: theme_faq
#

DROP TABLE IF EXISTS `theme_faq`;

CREATE TABLE `theme_faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_theme_id` int(11) NOT NULL,
  `faq_question` text COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `Created` datetime NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_home_sections_setting
#

DROP TABLE IF EXISTS `theme_home_sections_setting`;

CREATE TABLE `theme_home_sections_setting` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `sec_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sec_position` tinyint(1) NOT NULL,
  `sec_is_enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_homecontent
#

DROP TABLE IF EXISTS `theme_homecontent`;

CREATE TABLE `theme_homecontent` (
  `homecontent_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`homecontent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_links
#

DROP TABLE IF EXISTS `theme_links`;

CREATE TABLE `theme_links` (
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

DROP TABLE IF EXISTS `theme_pages`;

CREATE TABLE `theme_pages` (
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
  `created` datetime NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_recommendation
#

DROP TABLE IF EXISTS `theme_recommendation`;

CREATE TABLE `theme_recommendation` (
  `recommendation_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`recommendation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_sections
#

DROP TABLE IF EXISTS `theme_sections`;

CREATE TABLE `theme_sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_settings
#

DROP TABLE IF EXISTS `theme_settings`;

CREATE TABLE `theme_settings` (
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

DROP TABLE IF EXISTS `theme_sliders`;

CREATE TABLE `theme_sliders` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: theme_videos
#

DROP TABLE IF EXISTS `theme_videos`;

CREATE TABLE `theme_videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `video_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `video_sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `video_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: user_payment_request
#

DROP TABLE IF EXISTS `user_payment_request`;

CREATE TABLE `user_payment_request` (
  `user_payment_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_payment_request_user_id` int(11) DEFAULT NULL,
  `user_payment_request_amount` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_amount_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_amount_status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_payment_mode` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_ipaddress` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `user_payment_request_created_date` datetime NOT NULL,
  `user_payment_request_updated_date` datetime NOT NULL,
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

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
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
  `product_commission` float DEFAULT 0,
  `affiliate_commission` float DEFAULT 0,
  `product_commission_paid` float DEFAULT 0,
  `affiliate_commission_paid` float DEFAULT 0,
  `product_total_click` int(11) DEFAULT NULL,
  `product_total_sale` int(11) DEFAULT NULL,
  `affiliate_total_click` int(11) DEFAULT NULL,
  `sale_commission` float DEFAULT 0,
  `sale_commission_paid` float DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `reg_approved` tinyint(1) NOT NULL DEFAULT 1,
  `is_vendor` tinyint(1) NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL,
  `last_ping` datetime NOT NULL,
  `install_location_details` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `plan_id`, `refid`, `type`, `firstname`, `lastname`, `email`, `username`, `password`, `phone`, `twaddress`, `address1`, `address2`, `ucity`, `ucountry`, `state`, `uzip`, `avatar`, `online`, `unique_url`, `bitly_unique_url`, `updated_at`, `google_id`, `facebook_id`, `twitter_id`, `umode`, `PhoneNumber`, `Addressone`, `Addresstwo`, `City`, `Country`, `StateProvince`, `Zip`, `f_link`, `t_link`, `l_link`, `products_wishlist`, `product_commission`, `affiliate_commission`, `product_commission_paid`, `affiliate_commission_paid`, `product_total_click`, `product_total_sale`, `affiliate_total_click`, `sale_commission`, `sale_commission_paid`, `status`, `reg_approved`, `is_vendor`, `value`, `last_ping`, `install_location_details`, `created_at`) VALUES (1, -1, 0, 'admin', 'Admin', 'Admin', 'markhua99@gmail.com', 'admin', '7479305b3e914c467c0cb2eba57b352b58e1ff37', '', '', '', '', '', '', '', '', NULL, '1', '', '', '2021-01-01 16:15:31', '', '', '', '', NULL, '', '', 'Bern', '212', NULL, NULL, '', '', '', NULL, '0', '0', '0', '0', 0, 0, 0, '0', '0', 1, 1, 0, '', '2021-05-03 16:49:53', '', '2021-01-01 16:15:31');


#
# TABLE STRUCTURE FOR: vendor_setting
#

DROP TABLE IF EXISTS `vendor_setting`;

CREATE TABLE `vendor_setting` (
  `user_id` int(11) NOT NULL,
  `vendor_status` int(11) NOT NULL DEFAULT 0,
  `affiliate_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `affiliate_commission_value` float DEFAULT 0,
  `affiliate_click_count` int(11) DEFAULT NULL,
  `affiliate_click_amount` float DEFAULT 0,
  `form_affiliate_click_count` int(11) DEFAULT NULL,
  `form_affiliate_click_amount` float DEFAULT 0,
  `form_affiliate_sale_commission_type` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `form_affiliate_commission_value` float DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: version_update
#

DROP TABLE IF EXISTS `version_update`;

CREATE TABLE `version_update` (
  `update_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`update_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet
#

DROP TABLE IF EXISTS `wallet`;

CREATE TABLE `wallet` (
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
  `group_id` double(22,0) DEFAULT 0,
  `is_vendor` int(11) NOT NULL DEFAULT 0,
  `wv` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_recursion
#

DROP TABLE IF EXISTS `wallet_recursion`;

CREATE TABLE `wallet_recursion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `custom_time` bigint(20) DEFAULT NULL,
  `next_transaction` datetime NOT NULL,
  `last_transaction` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_request
#

DROP TABLE IF EXISTS `wallet_request`;

CREATE TABLE `wallet_request` (
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

DROP TABLE IF EXISTS `wallet_requests`;

CREATE TABLE `wallet_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tran_ids` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prefer_method` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wallet_requests_history
#

DROP TABLE IF EXISTS `wallet_requests_history`;

CREATE TABLE `wallet_requests_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `req_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `comment` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

