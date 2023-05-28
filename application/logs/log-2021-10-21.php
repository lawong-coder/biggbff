<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-21 01:11:59 --> 404 Page Not Found: 
ERROR - 2021-10-21 01:12:04 --> 404 Page Not Found: 
ERROR - 2021-10-21 01:12:04 --> 404 Page Not Found: 
ERROR - 2021-10-21 03:31:40 --> 404 Page Not Found: 
ERROR - 2021-10-21 03:31:40 --> 404 Page Not Found: 
ERROR - 2021-10-21 03:31:40 --> 404 Page Not Found: 
ERROR - 2021-10-21 04:04:37 --> 404 Page Not Found: 
ERROR - 2021-10-21 05:22:30 --> 404 Page Not Found: 
ERROR - 2021-10-21 05:56:50 --> 404 Page Not Found: 
ERROR - 2021-10-21 05:56:50 --> 404 Page Not Found: 
ERROR - 2021-10-21 05:56:50 --> 404 Page Not Found: 
ERROR - 2021-10-21 08:21:42 --> 404 Page Not Found: 
ERROR - 2021-10-21 08:21:42 --> 404 Page Not Found: 
ERROR - 2021-10-21 08:21:47 --> 404 Page Not Found: 
ERROR - 2021-10-21 09:45:19 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:47:15 --> Fomo fomo_return called user_id:58
ERROR - 2021-10-21 17:47:15 --> Fomo fomo_return view called plan_id:2
ERROR - 2021-10-21 18:52:53 --> Fomo notify json_obj:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 18:52:53 --> Fomo notify body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 18:52:53 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 18:52:53 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 18:52:53 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 18:52:53 --> Fomo isValidResponse:1
ERROR - 2021-10-21 18:52:53 --> Fomo webhook valid response
ERROR - 2021-10-21 18:52:53 --> Severity: error --> Exception: Call to a member function userdata() on null /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 223
ERROR - 2021-10-21 18:52:53 --> Fomo notify json_obj:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 18:52:53 --> Fomo notify body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 18:52:53 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 18:52:53 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 18:52:53 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=591f15922b052a921aef98044cb05b5c,Timestamp=1634813574,Signature=69d57d91f9224aae38e892e9abf1abc95ae78f82f4155d79dbbb021714f6bd11
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=591f15922b052a921aef98044cb05b5c
    [3] => Timestamp=1634813574
    [4] => Signature=69d57d91f9224aae38e892e9abf1abc95ae78f82f4155d79dbbb021714f6bd11
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 591f15922b052a921aef98044cb05b5c
    [Timestamp] => 1634813574
    [Signature] => 69d57d91f9224aae38e892e9abf1abc95ae78f82f4155d79dbbb021714f6bd11
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 591f15922b052a921aef98044cb05b5c
    [Timestamp] => 1634813574
    [Signature] => 69d57d91f9224aae38e892e9abf1abc95ae78f82f4155d79dbbb021714f6bd11
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574591f15922b052a921aef98044cb05b5c
ERROR - 2021-10-21 18:52:53 --> Fomo isValidResponse:1
ERROR - 2021-10-21 18:52:53 --> Fomo webhook valid response
ERROR - 2021-10-21 18:52:53 --> Severity: error --> Exception: Call to a member function userdata() on null /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 223
ERROR - 2021-10-21 18:52:53 --> Fomo notify json_obj:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 18:52:53 --> Fomo notify body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 18:52:53 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 18:52:53 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 18:52:53 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=9b24a289d74e6c3fe10648fa9151c66c,Timestamp=1634813574,Signature=c4ffd624223b6bb32ff0da479baac3db7f11a6feaee3c2df79e5caa59e535a40
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=9b24a289d74e6c3fe10648fa9151c66c
    [3] => Timestamp=1634813574
    [4] => Signature=c4ffd624223b6bb32ff0da479baac3db7f11a6feaee3c2df79e5caa59e535a40
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 9b24a289d74e6c3fe10648fa9151c66c
    [Timestamp] => 1634813574
    [Signature] => c4ffd624223b6bb32ff0da479baac3db7f11a6feaee3c2df79e5caa59e535a40
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 9b24a289d74e6c3fe10648fa9151c66c
    [Timestamp] => 1634813574
    [Signature] => c4ffd624223b6bb32ff0da479baac3db7f11a6feaee3c2df79e5caa59e535a40
)

ERROR - 2021-10-21 18:52:53 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}16348135749b24a289d74e6c3fe10648fa9151c66c
ERROR - 2021-10-21 18:52:53 --> Fomo isValidResponse:1
ERROR - 2021-10-21 18:52:53 --> Fomo webhook valid response
ERROR - 2021-10-21 18:52:53 --> Severity: error --> Exception: Call to a member function userdata() on null /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 223
ERROR - 2021-10-21 10:53:34 --> 404 Page Not Found: 
ERROR - 2021-10-21 19:06:00 --> Fomo fomo_return called user_id:58
ERROR - 2021-10-21 19:06:00 --> Fomo fomo_return view called plan_id:2
ERROR - 2021-10-21 19:06:07 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:07 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:07 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:07 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:15 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:15 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:15 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:15 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:22 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:22 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:22 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:22 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:29 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:29 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:29 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:29 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:36 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:36 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:36 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:36 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:43 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:43 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:43 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:43 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:49 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:49 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:49 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:49 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:06:57 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:06:57 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:06:57 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:06:57 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:07 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:07 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:07 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:07 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:10 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:10 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:10 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:10 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:18 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:18 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:18 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:18 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:25 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:25 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:25 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:25 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:33 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:33 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:33 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:33 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:38 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:38 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:38 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:38 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:46 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:46 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:46 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:46 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:07:52 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:07:52 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:07:52 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:07:52 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:00 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:00 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:00 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:00 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:06 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:06 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:06 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:06 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:14 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:14 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:14 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:14 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:21 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:21 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:21 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:21 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:28 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:28 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:28 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:28 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:35 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:35 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:35 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:35 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:41 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:41 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:41 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:41 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:49 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:49 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:49 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:49 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:08:56 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:08:56 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:08:56 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:08:56 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:04 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:04 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:04 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:04 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:11 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:11 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:11 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:11 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:17 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:17 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:17 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:17 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify json_obj:Array
(
    [orderId] => 100500320211021374157607
    [orderNo] => 2_58_1634811815
    [transactionId] => 100510320211021398394347
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify body:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}
ERROR - 2021-10-21 19:09:21 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:09:21 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=4bb58f7f4ee879dc3111ce0830ea831c,Timestamp=1634814562,Signature=06631c37209ab2a9ee7c308348f134800a2006228507e69ea64c6cc5dbdf08f5
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook body:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}
ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500320211021374157607
    [orderNo] => 2_58_1634811815
    [transactionId] => 100510320211021398394347
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=4bb58f7f4ee879dc3111ce0830ea831c
    [3] => Timestamp=1634814562
    [4] => Signature=06631c37209ab2a9ee7c308348f134800a2006228507e69ea64c6cc5dbdf08f5
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 4bb58f7f4ee879dc3111ce0830ea831c
    [Timestamp] => 1634814562
    [Signature] => 06631c37209ab2a9ee7c308348f134800a2006228507e69ea64c6cc5dbdf08f5
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 4bb58f7f4ee879dc3111ce0830ea831c
    [Timestamp] => 1634814562
    [Signature] => 06631c37209ab2a9ee7c308348f134800a2006228507e69ea64c6cc5dbdf08f5
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook Valid message:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}16348145624bb58f7f4ee879dc3111ce0830ea831c
ERROR - 2021-10-21 19:09:21 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:09:21 --> Fomo webhook valid response
ERROR - 2021-10-21 19:09:21 --> Severity: error --> Exception: Call to a member function userdata() on null /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 223
ERROR - 2021-10-21 19:09:21 --> Fomo notify json_obj:Array
(
    [orderId] => 100500320211021374157607
    [orderNo] => 2_58_1634811815
    [transactionId] => 100510320211021398394347
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify body:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}
ERROR - 2021-10-21 19:09:21 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:09:21 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=a7f0f3f1c5301c0bd3166eaf95d1bdf4,Timestamp=1634814562,Signature=a8fb53427e4707192eaa3d157c799942fa7aa1fc944aea03942199f18cc87511
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook body:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}
ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500320211021374157607
    [orderNo] => 2_58_1634811815
    [transactionId] => 100510320211021398394347
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=a7f0f3f1c5301c0bd3166eaf95d1bdf4
    [3] => Timestamp=1634814562
    [4] => Signature=a8fb53427e4707192eaa3d157c799942fa7aa1fc944aea03942199f18cc87511
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => a7f0f3f1c5301c0bd3166eaf95d1bdf4
    [Timestamp] => 1634814562
    [Signature] => a8fb53427e4707192eaa3d157c799942fa7aa1fc944aea03942199f18cc87511
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => a7f0f3f1c5301c0bd3166eaf95d1bdf4
    [Timestamp] => 1634814562
    [Signature] => a8fb53427e4707192eaa3d157c799942fa7aa1fc944aea03942199f18cc87511
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook Valid message:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}1634814562a7f0f3f1c5301c0bd3166eaf95d1bdf4
ERROR - 2021-10-21 19:09:21 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:09:21 --> Fomo webhook valid response
ERROR - 2021-10-21 19:09:21 --> Severity: error --> Exception: Call to a member function userdata() on null /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 223
ERROR - 2021-10-21 19:09:21 --> Fomo notify json_obj:Array
(
    [orderId] => 100500320211021374157607
    [orderNo] => 2_58_1634811815
    [transactionId] => 100510320211021398394347
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify body:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}
ERROR - 2021-10-21 19:09:21 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:09:21 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:09:21 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=0e3c404e4bef62a754088b19300a19e1,Timestamp=1634814562,Signature=38a35d80f34747058c8287b91803d2d56557c312f40329b215da87529a5f6f6f
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook body:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}
ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500320211021374157607
    [orderNo] => 2_58_1634811815
    [transactionId] => 100510320211021398394347
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=0e3c404e4bef62a754088b19300a19e1
    [3] => Timestamp=1634814562
    [4] => Signature=38a35d80f34747058c8287b91803d2d56557c312f40329b215da87529a5f6f6f
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 0e3c404e4bef62a754088b19300a19e1
    [Timestamp] => 1634814562
    [Signature] => 38a35d80f34747058c8287b91803d2d56557c312f40329b215da87529a5f6f6f
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 0e3c404e4bef62a754088b19300a19e1
    [Timestamp] => 1634814562
    [Signature] => 38a35d80f34747058c8287b91803d2d56557c312f40329b215da87529a5f6f6f
)

ERROR - 2021-10-21 19:09:21 --> Fomo validateWebhook Valid message:{"orderId":"100500320211021374157607","orderNo":"2_58_1634811815","transactionId":"100510320211021398394347"}16348145620e3c404e4bef62a754088b19300a19e1
ERROR - 2021-10-21 19:09:21 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:09:21 --> Fomo webhook valid response
ERROR - 2021-10-21 19:09:21 --> Severity: error --> Exception: Call to a member function userdata() on null /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 223
ERROR - 2021-10-21 19:09:24 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:24 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:24 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:24 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:31 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:31 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:31 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:31 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:38 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:38 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:38 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:38 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:44 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:44 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:44 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:44 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:52 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:52 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:52 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:52 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:09:58 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:09:58 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:09:58 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:09:58 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:07 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:07 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:07 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:07 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:12 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:12 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:12 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:12 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:24 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:24 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:24 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:24 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:26 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:26 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:26 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:26 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:34 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:34 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:34 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:34 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:41 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:41 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:41 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:41 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:48 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:48 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:48 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:48 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:10:56 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:10:56 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:10:56 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:10:56 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:01 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:01 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:01 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:01 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:09 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:09 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:09 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:09 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:16 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:16 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:16 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:16 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:24 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:24 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:24 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:24 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:29 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:29 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:29 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:29 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:37 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:37 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:37 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:37 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:43 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:43 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:43 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:43 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:50 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:50 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:50 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:50 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:11:57 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:11:57 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:11:57 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:11:57 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:04 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:04 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:04 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:04 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:11 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:12 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:12 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:12 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:18 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:18 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:18 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:18 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:25 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:25 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:25 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:25 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:32 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:32 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:32 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:32 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:39 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:39 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:39 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:39 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:46 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:46 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:46 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:46 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:12:54 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:12:54 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:12:54 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:12:54 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:00 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:00 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:00 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:00 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:07 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:07 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:07 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:07 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:14 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:14 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:14 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:14 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:21 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:21 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:21 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:21 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:29 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:29 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:29 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:29 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:35 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:35 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:35 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:35 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:42 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:42 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:42 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:42 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:49 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:49 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:49 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:49 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:13:57 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:13:57 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:13:57 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:13:57 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:03 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:03 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:03 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:03 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:10 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:11 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:11 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:11 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:17 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:17 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:17 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:17 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:24 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:24 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:24 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:24 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 11:14:25 --> 404 Page Not Found: 
ERROR - 2021-10-21 11:14:26 --> 404 Page Not Found: 
ERROR - 2021-10-21 11:14:26 --> 404 Page Not Found: 
ERROR - 2021-10-21 19:14:31 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:31 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:31 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:31 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:38 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:38 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:38 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:38 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:45 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:45 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:45 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:45 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:53 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:53 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:53 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:53 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:14:59 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:14:59 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:14:59 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:14:59 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:06 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:06 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:06 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:06 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:13 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:13 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:13 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:13 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:20 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:20 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:20 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:20 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:27 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:27 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:27 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:27 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:34 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:34 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:34 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:34 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:42 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:42 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:42 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:42 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:48 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:48 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:48 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:48 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:15:55 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:15:55 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:15:55 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:15:55 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:02 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:02 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:02 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:02 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:09 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:09 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:09 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:09 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:16 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:16 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:16 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:16 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:23 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:23 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:23 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:23 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:31 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:31 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:31 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:31 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:37 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:37 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:37 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:37 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:44 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:44 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:44 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:44 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:51 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:51 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:51 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:51 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:16:58 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:16:58 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:16:58 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:16:58 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:05 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:05 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:05 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:05 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:12 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:12 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:12 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:12 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:19 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:19 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:19 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:19 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:26 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:26 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:26 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:26 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:33 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:33 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:33 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:33 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:40 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:40 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:40 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:40 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:17:48 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 19:17:48 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 19:17:48 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:17:48 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/membership/buy_membership/2/fomo
    [is_notified] => 0
)

ERROR - 2021-10-21 19:38:28 --> Severity: error --> Exception: syntax error, unexpected 'catch' (T_CATCH) /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 461
ERROR - 2021-10-21 19:38:30 --> Severity: error --> Exception: syntax error, unexpected 'catch' (T_CATCH) /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 461
ERROR - 2021-10-21 19:45:01 --> Severity: error --> Exception: syntax error, unexpected '{' /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 176
ERROR - 2021-10-21 19:45:33 --> Severity: error --> Exception: syntax error, unexpected '{' /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 176
ERROR - 2021-10-21 19:47:01 --> Severity: error --> Exception: syntax error, unexpected '{' /home/u637289510/domains/jackstore.co/public_html/application/membership_payment/controllers/fomo.php 176
ERROR - 2021-10-21 19:47:48 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:47:48 --> Fomo notify body:
ERROR - 2021-10-21 19:47:48 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:47:48 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:47:48 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Connection] => keep-alive
    [Cache-Control] => max-age=0
    [Upgrade-Insecure-Requests] => 1
    [User-Agent] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
    [Accept] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [Accept-Encoding] => gzip, deflate
    [Accept-Language] => en-US,en;q=0.9,de;q=0.8
    [Cookie] => _ga=GA1.2.293080447.1623330443; __stripe_mid=087c8487-3a79-4753-9b59-a5677fa2056518f0e6; affiliatepro=9b973779427cf19ab23acd3f3a0d519d31a739ab
)

ERROR - 2021-10-21 19:47:48 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 19:47:48 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:47:48 --> Fomo validateWebhook x-fomopay-authorization header not set:
ERROR - 2021-10-21 19:47:48 --> Fomo isValidResponse:
ERROR - 2021-10-21 19:47:48 --> Fomo webhook not valid response
ERROR - 2021-10-21 19:47:48 --> Fomo notify final response: Array
(
    [success] => 
)

ERROR - 2021-10-21 19:47:54 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:47:54 --> Fomo notify body:
ERROR - 2021-10-21 19:47:54 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:47:54 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:47:54 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Connection] => keep-alive
    [Upgrade-Insecure-Requests] => 1
    [User-Agent] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
    [Accept] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [Accept-Encoding] => gzip, deflate
    [Accept-Language] => en-US,en;q=0.9,de;q=0.8
    [Cookie] => _ga=GA1.2.293080447.1623330443; __stripe_mid=087c8487-3a79-4753-9b59-a5677fa2056518f0e6; affiliatepro=9b973779427cf19ab23acd3f3a0d519d31a739ab
)

ERROR - 2021-10-21 19:47:54 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 19:47:54 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:47:54 --> Fomo validateWebhook x-fomopay-authorization header not set:
ERROR - 2021-10-21 19:47:54 --> Fomo isValidResponse:
ERROR - 2021-10-21 19:47:54 --> Fomo webhook not valid response
ERROR - 2021-10-21 19:47:54 --> Fomo notify final response: Array
(
    [success] => 
)

ERROR - 2021-10-21 19:48:45 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:48:45 --> Fomo notify body:
ERROR - 2021-10-21 19:48:45 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:48:45 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:48:45 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 19:48:45 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 19:48:45 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:48:45 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:48:45 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:48:45 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:48:45 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 19:48:45 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:48:45 --> Fomo webhook valid response
ERROR - 2021-10-21 19:49:02 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:49:02 --> Fomo notify body:
ERROR - 2021-10-21 19:49:02 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:49:02 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:49:02 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 19:49:02 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 19:49:02 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:49:02 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:02 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:02 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:02 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 19:49:02 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:49:02 --> Fomo webhook valid response
ERROR - 2021-10-21 19:49:25 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:49:25 --> Fomo notify body:
ERROR - 2021-10-21 19:49:25 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:49:25 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:49:25 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 19:49:25 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 19:49:25 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:49:25 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:25 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:25 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:25 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 19:49:25 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:49:25 --> Fomo webhook valid response
ERROR - 2021-10-21 19:49:49 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:49:49 --> Fomo notify body:
ERROR - 2021-10-21 19:49:49 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:49:49 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:49:49 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 19:49:49 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 19:49:49 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:49:49 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:49 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:49 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 19:49:49 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 19:49:49 --> Fomo isValidResponse:1
ERROR - 2021-10-21 19:49:49 --> Fomo webhook valid response
ERROR - 2021-10-21 19:49:49 --> Fomo json_obj: Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 19:49:49 --> Fomo user: App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 19:49:49 --> Valid Fomo Response:100500120211021373628431
ERROR - 2021-10-21 19:54:18 --> Fomo notify json_obj:
ERROR - 2021-10-21 19:54:18 --> Fomo notify body:
ERROR - 2021-10-21 19:54:18 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 19:54:18 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 19:54:18 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Connection] => keep-alive
    [Cache-Control] => max-age=0
    [Upgrade-Insecure-Requests] => 1
    [User-Agent] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
    [Accept] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [Accept-Encoding] => gzip, deflate
    [Accept-Language] => en-US,en;q=0.9,de;q=0.8
    [Cookie] => _ga=GA1.2.293080447.1623330443; __stripe_mid=087c8487-3a79-4753-9b59-a5677fa2056518f0e6; affiliatepro=9b973779427cf19ab23acd3f3a0d519d31a739ab
)

ERROR - 2021-10-21 19:54:18 --> Fomo validateWebhook body:
ERROR - 2021-10-21 19:54:18 --> Fomo validateWebhook json_body:
ERROR - 2021-10-21 19:54:18 --> Fomo validateWebhook x-fomopay-authorization header not set:
ERROR - 2021-10-21 19:54:18 --> Fomo isValidResponse:
ERROR - 2021-10-21 19:54:18 --> Fomo webhook not valid response
ERROR - 2021-10-21 19:54:18 --> Fomo notify final response: Array
(
    [success] => 
)

ERROR - 2021-10-21 12:05:49 --> 404 Page Not Found: 
ERROR - 2021-10-21 20:06:44 --> Fomo fomo_return called user_id:58
ERROR - 2021-10-21 20:06:44 --> Fomo fomo_return view called plan_id:2
ERROR - 2021-10-21 20:06:45 --> Fomo notify json_obj:Array
(
    [orderId] => 100500220211021435518671
    [orderNo] => 2_58_1634817950
    [transactionId] => 100510120211021435721838
)

ERROR - 2021-10-21 20:06:45 --> Fomo notify body:{"orderId":"100500220211021435518671","orderNo":"2_58_1634817950","transactionId":"100510120211021435721838"}
ERROR - 2021-10-21 20:06:45 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 20:06:45 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 20:06:45 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=1c87c28bc95e02fc706d3cc258219d4b,Timestamp=1634818005,Signature=d4f82f2e25732ca906508bbcf601be5f10ff92a6974cb18cd831f403d6e6cbbb
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-10-21 20:06:45 --> Fomo validateWebhook body:{"orderId":"100500220211021435518671","orderNo":"2_58_1634817950","transactionId":"100510120211021435721838"}
ERROR - 2021-10-21 20:06:45 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500220211021435518671
    [orderNo] => 2_58_1634817950
    [transactionId] => 100510120211021435721838
)

ERROR - 2021-10-21 20:06:45 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=1c87c28bc95e02fc706d3cc258219d4b
    [3] => Timestamp=1634818005
    [4] => Signature=d4f82f2e25732ca906508bbcf601be5f10ff92a6974cb18cd831f403d6e6cbbb
)

ERROR - 2021-10-21 20:06:45 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 1c87c28bc95e02fc706d3cc258219d4b
    [Timestamp] => 1634818005
    [Signature] => d4f82f2e25732ca906508bbcf601be5f10ff92a6974cb18cd831f403d6e6cbbb
)

ERROR - 2021-10-21 20:06:45 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 1c87c28bc95e02fc706d3cc258219d4b
    [Timestamp] => 1634818005
    [Signature] => d4f82f2e25732ca906508bbcf601be5f10ff92a6974cb18cd831f403d6e6cbbb
)

ERROR - 2021-10-21 20:06:45 --> Fomo validateWebhook Valid message:{"orderId":"100500220211021435518671","orderNo":"2_58_1634817950","transactionId":"100510120211021435721838"}16348180051c87c28bc95e02fc706d3cc258219d4b
ERROR - 2021-10-21 20:06:45 --> Fomo isValidResponse:1
ERROR - 2021-10-21 20:06:45 --> Fomo webhook valid response
ERROR - 2021-10-21 20:06:45 --> Fomo json_obj: Array
(
    [orderId] => 100500220211021435518671
    [orderNo] => 2_58_1634817950
    [transactionId] => 100510120211021435721838
)

ERROR - 2021-10-21 20:06:45 --> Fomo user: App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:06:45 --> Valid Fomo Response:100500220211021435518671
ERROR - 2021-10-21 20:06:45 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500220211021435518671
            [orderNo] => 2_58_1634817950
            [mode] => HOSTED
            [subject] => Town
            [description] => This plan is for professional entry level where you can accumulate more benefits!
            [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/58/2
            [backUrl] => http://jackstore.co/activateusercontrol/fomo_payment/08bbfa8c72e331a75c9ec77400c7914b
            [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/58/2
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1634817951
            [status] => SUCCESS
            [primaryTransactionId] => 100510120211021435721838
            [url] => https://ipg.fomopay.net/web/100500220211021435518671?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDIyMDIxMTAyMTQzNTUxODY3MSIsInNlY3VyaXR5Q29kZSI6IjM2Y2Y4MzUyLTM0OTAtNDcxOS1iNDU3LTlkNjQyZjI5YmZhYiIsImlhdCI6MTYzNDgxNzk1MX0.NPlLpG-oBvRN3adLWAQAr2dfbzk4FDiebOiIgXU8LEqK33alb2Xs2Xx-Mq1LJ6RV2u-pkFRZqSb0ZF0_1yARAwY6ijgu48saEQh9uCIr_HWN8JaJCL1RQGYPONahlE5ciq28_pK1jfBcn-WbYzQ7VgwVP8BpmTVJDXGgr4wfRtGPJZ7-cTDisw0rSW-vGQyOoNajoXeocVGdWZ2bDCAgk-_ilmZ6lCGwhcbZZWmdzZ_z-b1GEUUHv6AERoOHc-T5xkHqQ2YxdzA51tPdyVsu5uQc9ws0dbZ_Agt5uTRNGzgN_RXT_CX32IyxODwFOJ0XZUBKiE1m1JEY1lmERkixrg
        )

)

ERROR - 2021-10-21 20:06:45 --> Fomo order_response success:Array
(
    [id] => 100500220211021435518671
    [orderNo] => 2_58_1634817950
    [mode] => HOSTED
    [subject] => Town
    [description] => This plan is for professional entry level where you can accumulate more benefits!
    [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/58/2
    [backUrl] => http://jackstore.co/activateusercontrol/fomo_payment/08bbfa8c72e331a75c9ec77400c7914b
    [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/58/2
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1634817951
    [status] => SUCCESS
    [primaryTransactionId] => 100510120211021435721838
    [url] => https://ipg.fomopay.net/web/100500220211021435518671?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDIyMDIxMTAyMTQzNTUxODY3MSIsInNlY3VyaXR5Q29kZSI6IjM2Y2Y4MzUyLTM0OTAtNDcxOS1iNDU3LTlkNjQyZjI5YmZhYiIsImlhdCI6MTYzNDgxNzk1MX0.NPlLpG-oBvRN3adLWAQAr2dfbzk4FDiebOiIgXU8LEqK33alb2Xs2Xx-Mq1LJ6RV2u-pkFRZqSb0ZF0_1yARAwY6ijgu48saEQh9uCIr_HWN8JaJCL1RQGYPONahlE5ciq28_pK1jfBcn-WbYzQ7VgwVP8BpmTVJDXGgr4wfRtGPJZ7-cTDisw0rSW-vGQyOoNajoXeocVGdWZ2bDCAgk-_ilmZ6lCGwhcbZZWmdzZ_z-b1GEUUHv6AERoOHc-T5xkHqQ2YxdzA51tPdyVsu5uQc9ws0dbZ_Agt5uTRNGzgN_RXT_CX32IyxODwFOJ0XZUBKiE1m1JEY1lmERkixrg
)

ERROR - 2021-10-21 20:06:51 --> Fomo check_fomopay_status called user_id :58
ERROR - 2021-10-21 20:06:51 --> Fomo check_fomopay_status cancel_url :http://jackstore.co/membership/buy_membership/2/fomo
ERROR - 2021-10-21 20:06:51 --> Fomo check_fomopay_status user :App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 67
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 67
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:06:51 --> Fomo check_fomopay_status membership :App\MembershipUser Object
(
    [table] => membership_user
    [timestamps] => 
    [connection:protected] => default
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 67
            [plan_id] => 2
            [user_id] => 58
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-10-21 20:06:45
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211021435518671","transaction_id":"100510120211021435721838","payment_status":"2_58_1634817950"}
            [total] => 1
            [bonus_commission] => 10
            [expire_mail_sent] => 0
            [next_transaction] => 2021-11-21 00:00:00
            [created_at] => 2021-10-21 20:06:45
        )

    [original:protected] => Array
        (
            [id] => 67
            [plan_id] => 2
            [user_id] => 58
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-10-21 20:06:45
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211021435518671","transaction_id":"100510120211021435721838","payment_status":"2_58_1634817950"}
            [total] => 1
            [bonus_commission] => 10
            [expire_mail_sent] => 0
            [next_transaction] => 2021-11-21 00:00:00
            [created_at] => 2021-10-21 20:06:45
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:06:51 --> Fomo check_fomopay_status membership success :http://jackstore.co/usercontrol/dashboard
ERROR - 2021-10-21 20:06:51 --> Fomo check_fomopay_status response :Array
(
    [success] => http://jackstore.co/usercontrol/dashboard
    [is_notified] => 1
)

ERROR - 2021-10-21 20:06:59 --> Fomo membership:App\MembershipUser Object
(
    [table] => membership_user
    [timestamps] => 
    [connection:protected] => default
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 1
    [attributes:protected] => Array
        (
            [plan_id] => 2
            [user_id] => 58
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-10-21 20:06:45
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211021435518671","transaction_id":"100510120211021435721838","payment_status":"2_58_1634817950"}
            [total] => 1
            [bonus_commission] => 10
            [created_at] => 2021-10-21 20:06:45
            [next_transaction] => 2021-11-21
            [id] => 67
        )

    [original:protected] => Array
        (
            [plan_id] => 2
            [user_id] => 58
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-10-21 20:06:45
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211021435518671","transaction_id":"100510120211021435721838","payment_status":"2_58_1634817950"}
            [total] => 1
            [bonus_commission] => 10
            [created_at] => 2021-10-21 20:06:45
            [next_transaction] => 2021-11-21
            [id] => 67
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
            [user] => App\User Object
                (
                    [timestamps] => 
                    [connection:protected] => default
                    [table:protected] => users
                    [primaryKey:protected] => id
                    [keyType:protected] => int
                    [incrementing] => 1
                    [with:protected] => Array
                        (
                        )

                    [withCount:protected] => Array
                        (
                        )

                    [perPage:protected] => 15
                    [exists] => 1
                    [wasRecentlyCreated] => 
                    [attributes:protected] => Array
                        (
                            [id] => 58
                            [plan_id] => 0
                            [refid] => 1
                            [type] => user
                            [firstname] => Shane
                            [lastname] => Tom
                            [email] => shanetom@gmail.com
                            [username] => shanetom
                            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
                            [phone] => Ahmedabad
                            [twaddress] => 
                            [address1] => 
                            [address2] => 
                            [ucity] => Ahmedabad
                            [ucountry] => 231
                            [state] => Gujarat
                            [uzip] => 
                            [avatar] => 
                            [online] => 1
                            [unique_url] => 
                            [bitly_unique_url] => 
                            [updated_at] => 2021-10-13 23:57:24
                            [google_id] => 
                            [facebook_id] => 
                            [twitter_id] => 
                            [umode] => 
                            [PhoneNumber] => 
                            [Addressone] => 
                            [Addresstwo] => 
                            [City] => Ahmedabad
                            [Country] => 231
                            [StateProvince] => 
                            [Zip] => 
                            [f_link] => 
                            [t_link] => 
                            [l_link] => 
                            [products_wishlist] => 
                            [product_commission] => 0
                            [affiliate_commission] => 0
                            [product_commission_paid] => 0
                            [affiliate_commission_paid] => 0
                            [product_total_click] => 0
                            [product_total_sale] => 0
                            [affiliate_total_click] => 0
                            [sale_commission] => 0
                            [sale_commission_paid] => 0
                            [status] => 1
                            [reg_approved] => 0
                            [is_vendor] => 0
                            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
                            [last_ping] => 
                            [install_location_details] => 
                            [assigned_plan] => 2
                            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
                            [billing_address] => Test
                            [refnumber] => 
                            [coupon_code] => 
                            [membership_no] => 7448821508632532
                            [nric_no] => 1234564
                            [created_at] => 2021-10-13 23:57:24
                        )

                    [original:protected] => Array
                        (
                            [id] => 58
                            [plan_id] => 0
                            [refid] => 1
                            [type] => user
                            [firstname] => Shane
                            [lastname] => Tom
                            [email] => shanetom@gmail.com
                            [username] => shanetom
                            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
                            [phone] => Ahmedabad
                            [twaddress] => 
                            [address1] => 
                            [address2] => 
                            [ucity] => Ahmedabad
                            [ucountry] => 231
                            [state] => Gujarat
                            [uzip] => 
                            [avatar] => 
                            [online] => 1
                            [unique_url] => 
                            [bitly_unique_url] => 
                            [updated_at] => 2021-10-13 23:57:24
                            [google_id] => 
                            [facebook_id] => 
                            [twitter_id] => 
                            [umode] => 
                            [PhoneNumber] => 
                            [Addressone] => 
                            [Addresstwo] => 
                            [City] => Ahmedabad
                            [Country] => 231
                            [StateProvince] => 
                            [Zip] => 
                            [f_link] => 
                            [t_link] => 
                            [l_link] => 
                            [products_wishlist] => 
                            [product_commission] => 0
                            [affiliate_commission] => 0
                            [product_commission_paid] => 0
                            [affiliate_commission_paid] => 0
                            [product_total_click] => 0
                            [product_total_sale] => 0
                            [affiliate_total_click] => 0
                            [sale_commission] => 0
                            [sale_commission_paid] => 0
                            [status] => 1
                            [reg_approved] => 0
                            [is_vendor] => 0
                            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
                            [last_ping] => 
                            [install_location_details] => 
                            [assigned_plan] => 2
                            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
                            [billing_address] => Test
                            [refnumber] => 
                            [coupon_code] => 
                            [membership_no] => 7448821508632532
                            [nric_no] => 1234564
                            [created_at] => 2021-10-13 23:57:24
                        )

                    [changes:protected] => Array
                        (
                        )

                    [casts:protected] => Array
                        (
                        )

                    [classCastCache:protected] => Array
                        (
                        )

                    [dates:protected] => Array
                        (
                        )

                    [dateFormat:protected] => 
                    [appends:protected] => Array
                        (
                        )

                    [dispatchesEvents:protected] => Array
                        (
                        )

                    [observables:protected] => Array
                        (
                        )

                    [relations:protected] => Array
                        (
                        )

                    [touches:protected] => Array
                        (
                        )

                    [hidden:protected] => Array
                        (
                        )

                    [visible:protected] => Array
                        (
                        )

                    [fillable:protected] => Array
                        (
                        )

                    [guarded:protected] => Array
                        (
                            [0] => *
                        )

                )

            [plan] => App\MembershipPlan Object
                (
                    [table] => membership_plans
                    [timestamps] => 
                    [connection:protected] => default
                    [primaryKey:protected] => id
                    [keyType:protected] => int
                    [incrementing] => 1
                    [with:protected] => Array
                        (
                        )

                    [withCount:protected] => Array
                        (
                        )

                    [perPage:protected] => 15
                    [exists] => 1
                    [wasRecentlyCreated] => 
                    [attributes:protected] => Array
                        (
                            [id] => 2
                            [name] => Town
                            [belt_size] => 25
                            [type] => paid
                            [billing_period] => lifetime_free
                            [price] => 1
                            [special] => 0
                            [custom_period] => 0
                            [have_trail] => 0
                            [free_trail] => 0
                            [total_day] => 365
                            [bonus] => 10
                            [status] => 1
                            [description] => This plan is for professional entry level where you can accumulate more benefits!
                            [label_text] => 
                            [label_background] => #28A745
                            [label_color] => #FFFFFF
                            [sort_order] => 0
                            [hosting_cost] => 10
                            [fego_shares] => 300
                            [bigg_coupon] => 30
                            [products] => [{"name":"Product 1","quantity":"10"},{"name":"Product 2","quantity":"20"},{"name":"Product 3","quantity":"30"}]
                            [bigg_coins] => 0
                            [other_benefits] => <p><span xss="removed">- BFF Exclusive Networking Events</span></p><p><span xss="removed">- Entrepreneurs & CEO Roundtables Meetup</span></p><p><span xss="removed">- Free Upgrade to next Tier upon 10 Referrals</span></p>
                            [icon] => plan2.png
                            [bg_gradient] => linear-gradient(0deg, #1db5ca 0%, #a3ed91 100%, #f0fff4 100%)
                            [updated_at] => 2021-10-15 22:55:01
                            [created_at] => 2021-06-08 12:04:28
                        )

                    [original:protected] => Array
                        (
                            [id] => 2
                            [name] => Town
                            [belt_size] => 25
                            [type] => paid
                            [billing_period] => lifetime_free
                            [price] => 1
                            [special] => 0
                            [custom_period] => 0
                            [have_trail] => 0
                            [free_trail] => 0
                            [total_day] => 365
                            [bonus] => 10
                            [status] => 1
                            [description] => This plan is for professional entry level where you can accumulate more benefits!
                            [label_text] => 
                            [label_background] => #28A745
                            [label_color] => #FFFFFF
                            [sort_order] => 0
                            [hosting_cost] => 10
                            [fego_shares] => 300
                            [bigg_coupon] => 30
                            [products] => [{"name":"Product 1","quantity":"10"},{"name":"Product 2","quantity":"20"},{"name":"Product 3","quantity":"30"}]
                            [bigg_coins] => 0
                            [other_benefits] => <p><span xss="removed">- BFF Exclusive Networking Events</span></p><p><span xss="removed">- Entrepreneurs & CEO Roundtables Meetup</span></p><p><span xss="removed">- Free Upgrade to next Tier upon 10 Referrals</span></p>
                            [icon] => plan2.png
                            [bg_gradient] => linear-gradient(0deg, #1db5ca 0%, #a3ed91 100%, #f0fff4 100%)
                            [updated_at] => 2021-10-15 22:55:01
                            [created_at] => 2021-06-08 12:04:28
                        )

                    [changes:protected] => Array
                        (
                        )

                    [casts:protected] => Array
                        (
                        )

                    [classCastCache:protected] => Array
                        (
                        )

                    [dates:protected] => Array
                        (
                        )

                    [dateFormat:protected] => 
                    [appends:protected] => Array
                        (
                        )

                    [dispatchesEvents:protected] => Array
                        (
                        )

                    [observables:protected] => Array
                        (
                        )

                    [relations:protected] => Array
                        (
                        )

                    [touches:protected] => Array
                        (
                        )

                    [hidden:protected] => Array
                        (
                        )

                    [visible:protected] => Array
                        (
                        )

                    [fillable:protected] => Array
                        (
                        )

                    [guarded:protected] => Array
                        (
                            [0] => *
                        )

                )

        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:06:59 --> Fomo activate_user_data:
ERROR - 2021-10-21 20:06:59 --> Fomo notify final response: Array
(
    [success] => http://jackstore.co/usercontrol/membership_purchase_details/67
)

ERROR - 2021-10-21 12:18:41 --> 404 Page Not Found: 
ERROR - 2021-10-21 12:18:41 --> 404 Page Not Found: 
ERROR - 2021-10-21 12:18:41 --> 404 Page Not Found: 
ERROR - 2021-10-21 20:33:27 --> Fomo notify json_obj:
ERROR - 2021-10-21 20:33:27 --> Fomo notify body:
ERROR - 2021-10-21 20:33:27 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 20:33:27 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 20:33:27 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Connection] => keep-alive
    [Upgrade-Insecure-Requests] => 1
    [User-Agent] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
    [Accept] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [Accept-Encoding] => gzip, deflate
    [Accept-Language] => en-US,en;q=0.9,de;q=0.8
    [Cookie] => _ga=GA1.2.293080447.1623330443; __stripe_mid=087c8487-3a79-4753-9b59-a5677fa2056518f0e6; affiliatepro=9b973779427cf19ab23acd3f3a0d519d31a739ab
)

ERROR - 2021-10-21 20:33:27 --> Fomo validateWebhook body:
ERROR - 2021-10-21 20:33:27 --> Fomo validateWebhook json_body:
ERROR - 2021-10-21 20:33:27 --> Fomo validateWebhook x-fomopay-authorization header not set:
ERROR - 2021-10-21 20:33:27 --> Fomo isValidResponse:
ERROR - 2021-10-21 20:33:27 --> Fomo webhook not valid response
ERROR - 2021-10-21 20:33:27 --> Fomo notify final response: Array
(
    [success] => 
)

ERROR - 2021-10-21 20:33:28 --> Fomo notify json_obj:
ERROR - 2021-10-21 20:33:28 --> Fomo notify body:
ERROR - 2021-10-21 20:33:28 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 20:33:28 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 20:33:28 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Connection] => keep-alive
    [Cache-Control] => max-age=0
    [Upgrade-Insecure-Requests] => 1
    [User-Agent] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
    [Accept] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [Accept-Encoding] => gzip, deflate
    [Accept-Language] => en-US,en;q=0.9,de;q=0.8
    [Cookie] => _ga=GA1.2.293080447.1623330443; __stripe_mid=087c8487-3a79-4753-9b59-a5677fa2056518f0e6; affiliatepro=3cac733e6bb76a83ea69d11947f7df08420ac56f
)

ERROR - 2021-10-21 20:33:28 --> Fomo validateWebhook body:
ERROR - 2021-10-21 20:33:28 --> Fomo validateWebhook json_body:
ERROR - 2021-10-21 20:33:28 --> Fomo validateWebhook x-fomopay-authorization header not set:
ERROR - 2021-10-21 20:33:28 --> Fomo isValidResponse:
ERROR - 2021-10-21 20:33:28 --> Fomo webhook not valid response
ERROR - 2021-10-21 20:33:28 --> Fomo notify final response: Array
(
    [success] => 
)

ERROR - 2021-10-21 20:33:54 --> Fomo notify json_obj:
ERROR - 2021-10-21 20:33:54 --> Fomo notify body:
ERROR - 2021-10-21 20:33:54 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 20:33:54 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 20:33:54 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 20:33:54 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 20:33:54 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 20:33:54 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:33:54 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:33:54 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:33:54 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 20:33:54 --> Fomo isValidResponse:1
ERROR - 2021-10-21 20:33:54 --> Fomo webhook valid response
ERROR - 2021-10-21 20:33:54 --> Fomo json_obj: Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 20:33:54 --> Fomo user: App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:33:54 --> Valid Fomo Response:100500120211021373628431
ERROR - 2021-10-21 20:33:54 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500120211021373628431
            [orderNo] => 2_2_1634811762
            [mode] => HOSTED
            [subject] => Town
            [description] => This plan is for professional entry level where you can accumulate more benefits!
            [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/2/2
            [backUrl] => http://jackstore.co/usercontrol/franchise_plan
            [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/2/2
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1634811762
            [status] => CREATED
            [url] => https://ipg.fomopay.net/web/100500120211021373628431?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTAyMTM3MzYyODQzMSIsInNlY3VyaXR5Q29kZSI6ImNjMTVlZmY3LTY4N2YtNDYyYS1hZjJjLTVkMmNhMGUyNzBkZiIsImlhdCI6MTYzNDgxMTc2Mn0.ONGSNjMm6qOv89gz-ZAOcT9LwfjqUruFa7pzbijuZIjpXx78GJmisxHzYCec_Z5kp4gtw14TR3h2ZRPsqz4FgQiUhT4oSAe_zj4JkD5o1-Vm3vrwoh9tJx6Om1n5Fqwuud0whG_970jDRUovAF1NCGeNFf8gHmdrJra76GbYTtS766umUg60_JQWeMhORr5KrPAIHBls_707ylEWyMyBZSqoLHJGQmZZvM7L4kqzi78yo39Or9kU1sSra-AlgGqTWiK0gdD694aMIO5U-v21S8Zk7XG3c0EegZiUa1GlT2mCVr2FyjjzYsWCIq0tzBJ3YskF9IYJ1LigJeabk6AG7A
        )

)

ERROR - 2021-10-21 20:33:54 --> Fomo order_response success:Array
(
    [id] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [mode] => HOSTED
    [subject] => Town
    [description] => This plan is for professional entry level where you can accumulate more benefits!
    [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/2/2
    [backUrl] => http://jackstore.co/usercontrol/franchise_plan
    [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/2/2
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1634811762
    [status] => CREATED
    [url] => https://ipg.fomopay.net/web/100500120211021373628431?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTAyMTM3MzYyODQzMSIsInNlY3VyaXR5Q29kZSI6ImNjMTVlZmY3LTY4N2YtNDYyYS1hZjJjLTVkMmNhMGUyNzBkZiIsImlhdCI6MTYzNDgxMTc2Mn0.ONGSNjMm6qOv89gz-ZAOcT9LwfjqUruFa7pzbijuZIjpXx78GJmisxHzYCec_Z5kp4gtw14TR3h2ZRPsqz4FgQiUhT4oSAe_zj4JkD5o1-Vm3vrwoh9tJx6Om1n5Fqwuud0whG_970jDRUovAF1NCGeNFf8gHmdrJra76GbYTtS766umUg60_JQWeMhORr5KrPAIHBls_707ylEWyMyBZSqoLHJGQmZZvM7L4kqzi78yo39Or9kU1sSra-AlgGqTWiK0gdD694aMIO5U-v21S8Zk7XG3c0EegZiUa1GlT2mCVr2FyjjzYsWCIq0tzBJ3YskF9IYJ1LigJeabk6AG7A
)

ERROR - 2021-10-21 20:33:54 --> Fomo notify final response: Array
(
)

ERROR - 2021-10-21 20:33:55 --> Fomo notify json_obj:
ERROR - 2021-10-21 20:33:55 --> Fomo notify body:
ERROR - 2021-10-21 20:33:55 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 20:33:55 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 20:33:55 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 20:33:55 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 20:33:55 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 20:33:55 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:33:55 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:33:55 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:33:55 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 20:33:55 --> Fomo isValidResponse:1
ERROR - 2021-10-21 20:33:55 --> Fomo webhook valid response
ERROR - 2021-10-21 20:33:55 --> Fomo json_obj: Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 20:33:55 --> Fomo user: App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:33:55 --> Valid Fomo Response:100500120211021373628431
ERROR - 2021-10-21 20:33:55 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500120211021373628431
            [orderNo] => 2_2_1634811762
            [mode] => HOSTED
            [subject] => Town
            [description] => This plan is for professional entry level where you can accumulate more benefits!
            [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/2/2
            [backUrl] => http://jackstore.co/usercontrol/franchise_plan
            [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/2/2
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1634811762
            [status] => CREATED
            [url] => https://ipg.fomopay.net/web/100500120211021373628431?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTAyMTM3MzYyODQzMSIsInNlY3VyaXR5Q29kZSI6ImNjMTVlZmY3LTY4N2YtNDYyYS1hZjJjLTVkMmNhMGUyNzBkZiIsImlhdCI6MTYzNDgxMTc2Mn0.ONGSNjMm6qOv89gz-ZAOcT9LwfjqUruFa7pzbijuZIjpXx78GJmisxHzYCec_Z5kp4gtw14TR3h2ZRPsqz4FgQiUhT4oSAe_zj4JkD5o1-Vm3vrwoh9tJx6Om1n5Fqwuud0whG_970jDRUovAF1NCGeNFf8gHmdrJra76GbYTtS766umUg60_JQWeMhORr5KrPAIHBls_707ylEWyMyBZSqoLHJGQmZZvM7L4kqzi78yo39Or9kU1sSra-AlgGqTWiK0gdD694aMIO5U-v21S8Zk7XG3c0EegZiUa1GlT2mCVr2FyjjzYsWCIq0tzBJ3YskF9IYJ1LigJeabk6AG7A
        )

)

ERROR - 2021-10-21 20:33:55 --> Fomo order_response success:Array
(
    [id] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [mode] => HOSTED
    [subject] => Town
    [description] => This plan is for professional entry level where you can accumulate more benefits!
    [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/2/2
    [backUrl] => http://jackstore.co/usercontrol/franchise_plan
    [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/2/2
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1634811762
    [status] => CREATED
    [url] => https://ipg.fomopay.net/web/100500120211021373628431?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTAyMTM3MzYyODQzMSIsInNlY3VyaXR5Q29kZSI6ImNjMTVlZmY3LTY4N2YtNDYyYS1hZjJjLTVkMmNhMGUyNzBkZiIsImlhdCI6MTYzNDgxMTc2Mn0.ONGSNjMm6qOv89gz-ZAOcT9LwfjqUruFa7pzbijuZIjpXx78GJmisxHzYCec_Z5kp4gtw14TR3h2ZRPsqz4FgQiUhT4oSAe_zj4JkD5o1-Vm3vrwoh9tJx6Om1n5Fqwuud0whG_970jDRUovAF1NCGeNFf8gHmdrJra76GbYTtS766umUg60_JQWeMhORr5KrPAIHBls_707ylEWyMyBZSqoLHJGQmZZvM7L4kqzi78yo39Or9kU1sSra-AlgGqTWiK0gdD694aMIO5U-v21S8Zk7XG3c0EegZiUa1GlT2mCVr2FyjjzYsWCIq0tzBJ3YskF9IYJ1LigJeabk6AG7A
)

ERROR - 2021-10-21 20:33:55 --> Fomo notify final response: Array
(
)

ERROR - 2021-10-21 20:34:52 --> Fomo notify json_obj:
ERROR - 2021-10-21 20:34:52 --> Fomo notify body:
ERROR - 2021-10-21 20:34:52 --> Fomo notify post_data:Array
(
)

ERROR - 2021-10-21 20:34:52 --> Fomo notify get_data:Array
(
)

ERROR - 2021-10-21 20:34:52 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=b38ae296c42297170c57d0decebfb552,Timestamp=1634813574,Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
    [User-Agent] => FOMOPay/2.0
    [Accept] => */*
    [Content-Length] => 108
    [Connection] => close
)

ERROR - 2021-10-21 20:34:52 --> Fomo validateWebhook body:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}
ERROR - 2021-10-21 20:34:52 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 20:34:52 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=b38ae296c42297170c57d0decebfb552
    [3] => Timestamp=1634813574
    [4] => Signature=1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:34:52 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:34:52 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => b38ae296c42297170c57d0decebfb552
    [Timestamp] => 1634813574
    [Signature] => 1bfcdb7affe83d6fdc4935791201f40dd3155ebe6eeb10c85d9c2a5203e0b7e8
)

ERROR - 2021-10-21 20:34:52 --> Fomo validateWebhook Valid message:{"orderId":"100500120211021373628431","orderNo":"2_2_1634811762","transactionId":"100510320211021373677939"}1634813574b38ae296c42297170c57d0decebfb552
ERROR - 2021-10-21 20:34:52 --> Fomo isValidResponse:1
ERROR - 2021-10-21 20:34:52 --> Fomo webhook valid response
ERROR - 2021-10-21 20:34:52 --> Fomo json_obj: Array
(
    [orderId] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [transactionId] => 100510320211021373677939
)

ERROR - 2021-10-21 20:34:52 --> Fomo user: App\User Object
(
    [timestamps] => 
    [connection:protected] => default
    [table:protected] => users
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] => 
    [attributes:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [original:protected] => Array
        (
            [id] => 58
            [plan_id] => 0
            [refid] => 1
            [type] => user
            [firstname] => Shane
            [lastname] => Tom
            [email] => shanetom@gmail.com
            [username] => shanetom
            [password] => f7c3bc1d808e04732adf679965ccc34ca7ae3441
            [phone] => Ahmedabad
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Ahmedabad
            [ucountry] => 231
            [state] => Gujarat
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-10-13 23:57:24
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Ahmedabad
            [Country] => 231
            [StateProvince] => 
            [Zip] => 
            [f_link] => 
            [t_link] => 
            [l_link] => 
            [products_wishlist] => 
            [product_commission] => 0
            [affiliate_commission] => 0
            [product_commission_paid] => 0
            [affiliate_commission_paid] => 0
            [product_total_click] => 0
            [product_total_sale] => 0
            [affiliate_total_click] => 0
            [sale_commission] => 0
            [sale_commission_paid] => 0
            [status] => 1
            [reg_approved] => 0
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+911234567890","custom_date-1623412532756":"07-10-2021","nric_no":"1234564","billing_address":"Test","country_id":"231","membership_plan":"2","package_price":"S$5,000.00","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 2
            [uuid] => 08bbfa8c72e331a75c9ec77400c7914b
            [billing_address] => Test
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 7448821508632532
            [nric_no] => 1234564
            [created_at] => 2021-10-13 23:57:24
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-10-21 20:34:52 --> Valid Fomo Response:100500120211021373628431
ERROR - 2021-10-21 20:34:52 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500120211021373628431
            [orderNo] => 2_2_1634811762
            [mode] => HOSTED
            [subject] => Town
            [description] => This plan is for professional entry level where you can accumulate more benefits!
            [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/2/2
            [backUrl] => http://jackstore.co/usercontrol/franchise_plan
            [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/2/2
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1634811762
            [status] => CREATED
            [url] => https://ipg.fomopay.net/web/100500120211021373628431?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTAyMTM3MzYyODQzMSIsInNlY3VyaXR5Q29kZSI6ImNjMTVlZmY3LTY4N2YtNDYyYS1hZjJjLTVkMmNhMGUyNzBkZiIsImlhdCI6MTYzNDgxMTc2Mn0.ONGSNjMm6qOv89gz-ZAOcT9LwfjqUruFa7pzbijuZIjpXx78GJmisxHzYCec_Z5kp4gtw14TR3h2ZRPsqz4FgQiUhT4oSAe_zj4JkD5o1-Vm3vrwoh9tJx6Om1n5Fqwuud0whG_970jDRUovAF1NCGeNFf8gHmdrJra76GbYTtS766umUg60_JQWeMhORr5KrPAIHBls_707ylEWyMyBZSqoLHJGQmZZvM7L4kqzi78yo39Or9kU1sSra-AlgGqTWiK0gdD694aMIO5U-v21S8Zk7XG3c0EegZiUa1GlT2mCVr2FyjjzYsWCIq0tzBJ3YskF9IYJ1LigJeabk6AG7A
        )

)

ERROR - 2021-10-21 20:34:52 --> Fomo order_response success:Array
(
    [id] => 100500120211021373628431
    [orderNo] => 2_2_1634811762
    [mode] => HOSTED
    [subject] => Town
    [description] => This plan is for professional entry level where you can accumulate more benefits!
    [returnUrl] => http://jackstore.co/membership_callback/fomo/fomo_return/2/2
    [backUrl] => http://jackstore.co/usercontrol/franchise_plan
    [notifyUrl] => http://jackstore.co/membership_callback/fomo/notify/2/2
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1634811762
    [status] => CREATED
    [url] => https://ipg.fomopay.net/web/100500120211021373628431?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTAyMTM3MzYyODQzMSIsInNlY3VyaXR5Q29kZSI6ImNjMTVlZmY3LTY4N2YtNDYyYS1hZjJjLTVkMmNhMGUyNzBkZiIsImlhdCI6MTYzNDgxMTc2Mn0.ONGSNjMm6qOv89gz-ZAOcT9LwfjqUruFa7pzbijuZIjpXx78GJmisxHzYCec_Z5kp4gtw14TR3h2ZRPsqz4FgQiUhT4oSAe_zj4JkD5o1-Vm3vrwoh9tJx6Om1n5Fqwuud0whG_970jDRUovAF1NCGeNFf8gHmdrJra76GbYTtS766umUg60_JQWeMhORr5KrPAIHBls_707ylEWyMyBZSqoLHJGQmZZvM7L4kqzi78yo39Or9kU1sSra-AlgGqTWiK0gdD694aMIO5U-v21S8Zk7XG3c0EegZiUa1GlT2mCVr2FyjjzYsWCIq0tzBJ3YskF9IYJ1LigJeabk6AG7A
)

ERROR - 2021-10-21 20:34:52 --> Fomo CREATED status Response
ERROR - 2021-10-21 20:34:52 --> Fomo notify final response: Array
(
    [success] => http://jackstore.co/activateusercontrol/fomo_payment/08bbfa8c72e331a75c9ec77400c7914b
)

ERROR - 2021-10-21 12:59:26 --> 404 Page Not Found: 
ERROR - 2021-10-21 12:59:26 --> 404 Page Not Found: 
ERROR - 2021-10-21 12:59:26 --> 404 Page Not Found: 
ERROR - 2021-10-21 13:42:16 --> 404 Page Not Found: 
ERROR - 2021-10-21 13:42:16 --> 404 Page Not Found: 
ERROR - 2021-10-21 13:42:16 --> 404 Page Not Found: 
ERROR - 2021-10-21 14:36:15 --> 404 Page Not Found: 
ERROR - 2021-10-21 14:36:15 --> 404 Page Not Found: 
ERROR - 2021-10-21 14:36:15 --> 404 Page Not Found: 
ERROR - 2021-10-21 15:22:35 --> 404 Page Not Found: 
ERROR - 2021-10-21 15:22:35 --> 404 Page Not Found: 
ERROR - 2021-10-21 15:22:35 --> 404 Page Not Found: 
ERROR - 2021-10-21 16:11:36 --> 404 Page Not Found: 
ERROR - 2021-10-21 16:11:36 --> 404 Page Not Found: 
ERROR - 2021-10-21 16:11:36 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:01:04 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:01:04 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:01:05 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:57:28 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:57:29 --> 404 Page Not Found: 
ERROR - 2021-10-21 17:57:29 --> 404 Page Not Found: 
ERROR - 2021-10-21 18:23:29 --> 404 Page Not Found: 
ERROR - 2021-10-21 19:38:23 --> 404 Page Not Found: 
ERROR - 2021-10-21 19:38:23 --> 404 Page Not Found: 
ERROR - 2021-10-21 19:38:23 --> 404 Page Not Found: 
ERROR - 2021-10-21 21:21:19 --> 404 Page Not Found: 
ERROR - 2021-10-21 21:21:19 --> 404 Page Not Found: 
ERROR - 2021-10-21 21:21:19 --> 404 Page Not Found: 
ERROR - 2021-10-21 23:06:13 --> 404 Page Not Found: 
ERROR - 2021-10-21 23:06:13 --> 404 Page Not Found: 
ERROR - 2021-10-21 23:06:14 --> 404 Page Not Found: 
