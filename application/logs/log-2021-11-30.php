<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-30 00:25:29 --> 404 Page Not Found: 
ERROR - 2021-11-30 00:25:29 --> 404 Page Not Found: 
ERROR - 2021-11-30 00:25:29 --> 404 Page Not Found: 
ERROR - 2021-11-30 01:32:47 --> 404 Page Not Found: 
ERROR - 2021-11-30 01:32:47 --> 404 Page Not Found: 
ERROR - 2021-11-30 01:32:47 --> 404 Page Not Found: 
ERROR - 2021-11-30 02:39:58 --> 404 Page Not Found: 
ERROR - 2021-11-30 02:39:58 --> 404 Page Not Found: 
ERROR - 2021-11-30 02:39:58 --> 404 Page Not Found: 
ERROR - 2021-11-30 03:51:00 --> 404 Page Not Found: 
ERROR - 2021-11-30 03:51:00 --> 404 Page Not Found: 
ERROR - 2021-11-30 03:51:00 --> 404 Page Not Found: 
ERROR - 2021-11-30 04:57:29 --> 404 Page Not Found: 
ERROR - 2021-11-30 04:57:29 --> 404 Page Not Found: 
ERROR - 2021-11-30 04:57:29 --> 404 Page Not Found: 
ERROR - 2021-11-30 05:59:36 --> 404 Page Not Found: 
ERROR - 2021-11-30 05:59:36 --> 404 Page Not Found: 
ERROR - 2021-11-30 05:59:36 --> 404 Page Not Found: 
ERROR - 2021-11-30 06:02:24 --> 404 Page Not Found: 
ERROR - 2021-11-30 06:02:25 --> 404 Page Not Found: 
ERROR - 2021-11-30 15:32:47 --> Fomo notify json_obj:Array
(
    [orderId] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [transactionId] => 100510320211130271204383
)

ERROR - 2021-11-30 15:32:47 --> Fomo notify body:{"orderId":"100500220211130270945846","orderNo":"1_81_1638257494","transactionId":"100510320211130271204383"}
ERROR - 2021-11-30 15:32:47 --> Fomo notify post_data:Array
(
)

ERROR - 2021-11-30 15:32:47 --> Fomo notify get_data:Array
(
)

ERROR - 2021-11-30 15:32:47 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=66c39b3410d566bffc178a665eea7964,Timestamp=1638257568,Signature=694fd7c39a8aba77ae1db1c5db5a0f01f6d3b52769eaa0ef7140d4997cf6abc1
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-11-30 15:32:47 --> Fomo validateWebhook body:{"orderId":"100500220211130270945846","orderNo":"1_81_1638257494","transactionId":"100510320211130271204383"}
ERROR - 2021-11-30 15:32:47 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [transactionId] => 100510320211130271204383
)

ERROR - 2021-11-30 15:32:47 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=66c39b3410d566bffc178a665eea7964
    [3] => Timestamp=1638257568
    [4] => Signature=694fd7c39a8aba77ae1db1c5db5a0f01f6d3b52769eaa0ef7140d4997cf6abc1
)

ERROR - 2021-11-30 15:32:47 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 66c39b3410d566bffc178a665eea7964
    [Timestamp] => 1638257568
    [Signature] => 694fd7c39a8aba77ae1db1c5db5a0f01f6d3b52769eaa0ef7140d4997cf6abc1
)

ERROR - 2021-11-30 15:32:47 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 66c39b3410d566bffc178a665eea7964
    [Timestamp] => 1638257568
    [Signature] => 694fd7c39a8aba77ae1db1c5db5a0f01f6d3b52769eaa0ef7140d4997cf6abc1
)

ERROR - 2021-11-30 15:32:47 --> Fomo validateWebhook Valid message:{"orderId":"100500220211130270945846","orderNo":"1_81_1638257494","transactionId":"100510320211130271204383"}163825756866c39b3410d566bffc178a665eea7964
ERROR - 2021-11-30 15:32:47 --> Fomo isValidResponse:1
ERROR - 2021-11-30 15:32:47 --> Fomo webhook valid response
ERROR - 2021-11-30 15:32:47 --> Fomo json_obj: Array
(
    [orderId] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [transactionId] => 100510320211130271204383
)

ERROR - 2021-11-30 15:32:47 --> Fomo user: App\User Object
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
            [id] => 81
            [plan_id] => 0
            [refid] => 63
            [type] => user
            [firstname] => nick
            [lastname] => dec
            [email] => enquiry@biggworld.co
            [username] => dectest1
            [password] => 7c4a8d09ca3762af61e59520943dc26494f8941b
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 15:31:19
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6590040020","custom_date-1623412532756":"30-11-2021","nric_no":"123A","billing_address":"426D Yishun Ave 11 #08-108","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"63","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 907c6cb1d0037f0a282d563bf684139f
            [billing_address] => 426D Yishun Ave 11 #08-108
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 2957630588913364
            [nric_no] => 123A
            [created_at] => 2021-11-30 15:31:19
        )

    [original:protected] => Array
        (
            [id] => 81
            [plan_id] => 0
            [refid] => 63
            [type] => user
            [firstname] => nick
            [lastname] => dec
            [email] => enquiry@biggworld.co
            [username] => dectest1
            [password] => 7c4a8d09ca3762af61e59520943dc26494f8941b
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 15:31:19
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6590040020","custom_date-1623412532756":"30-11-2021","nric_no":"123A","billing_address":"426D Yishun Ave 11 #08-108","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"63","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 907c6cb1d0037f0a282d563bf684139f
            [billing_address] => 426D Yishun Ave 11 #08-108
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 2957630588913364
            [nric_no] => 123A
            [created_at] => 2021-11-30 15:31:19
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

ERROR - 2021-11-30 15:32:47 --> Valid Fomo Response:100500220211130270945846
ERROR - 2021-11-30 15:32:47 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500220211130270945846
            [orderNo] => 1_81_1638257494
            [mode] => HOSTED
            [subject] => Basic
            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

            [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/81/1
            [backUrl] => https://jackstore.co/activateusercontrol/907c6cb1d0037f0a282d563bf684139f
            [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/81/1
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1638257495
            [status] => SUCCESS
            [primaryTransactionId] => 100510320211130271204383
            [url] => https://ipg.fomopay.net/web/100500220211130270945846?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDIyMDIxMTEzMDI3MDk0NTg0NiIsInNlY3VyaXR5Q29kZSI6ImM5MjgzM2JmLTJjYjMtNDIzMC04OTliLThjZmZkOGEyYjIxYyIsImlhdCI6MTYzODI1NzQ5NH0.GFciC1nq3Ft5g1G9jn-C0_-UR_v22doP5RJQVYiQcbpldeVikmYmxG3YsVHgk1m8mDhVBZD5uWLCO8nb8imBIw2rpKzyU2Ox7BEKMgIMNGVpEAbrUlVqICT8Vk-yevrQMeHTg20u8JaLa7BDUTgW0S-Ei_WkFQUQqWvxfgxxC7T1-psc_BzKUIGwlhIIAypDX_8Y3DUQv3Nke2qXcZ9xNc5cMAkEMJ0jZnPl6uXRD-5VMvdwpbIMZV6ieU2Wu9HTwa8okpQ06E2UiFMt6hkcQEisIw4bxjBpP_kY3Sxj8KoQNZcGKjZXxwNjKeN3sH0XtvpUhrl326JNE9pXkRVMPA
        )

)

ERROR - 2021-11-30 15:32:47 --> Fomo order_response success:Array
(
    [id] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [mode] => HOSTED
    [subject] => Basic
    [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

    [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/81/1
    [backUrl] => https://jackstore.co/activateusercontrol/907c6cb1d0037f0a282d563bf684139f
    [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/81/1
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1638257495
    [status] => SUCCESS
    [primaryTransactionId] => 100510320211130271204383
    [url] => https://ipg.fomopay.net/web/100500220211130270945846?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDIyMDIxMTEzMDI3MDk0NTg0NiIsInNlY3VyaXR5Q29kZSI6ImM5MjgzM2JmLTJjYjMtNDIzMC04OTliLThjZmZkOGEyYjIxYyIsImlhdCI6MTYzODI1NzQ5NH0.GFciC1nq3Ft5g1G9jn-C0_-UR_v22doP5RJQVYiQcbpldeVikmYmxG3YsVHgk1m8mDhVBZD5uWLCO8nb8imBIw2rpKzyU2Ox7BEKMgIMNGVpEAbrUlVqICT8Vk-yevrQMeHTg20u8JaLa7BDUTgW0S-Ei_WkFQUQqWvxfgxxC7T1-psc_BzKUIGwlhIIAypDX_8Y3DUQv3Nke2qXcZ9xNc5cMAkEMJ0jZnPl6uXRD-5VMvdwpbIMZV6ieU2Wu9HTwa8okpQ06E2UiFMt6hkcQEisIw4bxjBpP_kY3Sxj8KoQNZcGKjZXxwNjKeN3sH0XtvpUhrl326JNE9pXkRVMPA
)

ERROR - 2021-11-30 15:32:52 --> Fomo fomo_return called user_id:81
ERROR - 2021-11-30 15:32:52 --> Fomo fomo_return view called plan_id:1
ERROR - 2021-11-30 15:33:00 --> Fomo check_fomopay_status called user_id :81
ERROR - 2021-11-30 15:33:00 --> Fomo check_fomopay_status cancel_url :https://jackstore.co/membership/buy_membership/1/fomo
ERROR - 2021-11-30 15:33:00 --> Fomo check_fomopay_status user :App\User Object
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
            [id] => 81
            [plan_id] => 100
            [refid] => 63
            [type] => user
            [firstname] => nick
            [lastname] => dec
            [email] => enquiry@biggworld.co
            [username] => dectest1
            [password] => 7c4a8d09ca3762af61e59520943dc26494f8941b
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 15:31:19
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6590040020","custom_date-1623412532756":"30-11-2021","nric_no":"123A","billing_address":"426D Yishun Ave 11 #08-108","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"63","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 907c6cb1d0037f0a282d563bf684139f
            [billing_address] => 426D Yishun Ave 11 #08-108
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 2957630588913364
            [nric_no] => 123A
            [created_at] => 2021-11-30 15:31:19
        )

    [original:protected] => Array
        (
            [id] => 81
            [plan_id] => 100
            [refid] => 63
            [type] => user
            [firstname] => nick
            [lastname] => dec
            [email] => enquiry@biggworld.co
            [username] => dectest1
            [password] => 7c4a8d09ca3762af61e59520943dc26494f8941b
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 15:31:19
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6590040020","custom_date-1623412532756":"30-11-2021","nric_no":"123A","billing_address":"426D Yishun Ave 11 #08-108","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"63","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 907c6cb1d0037f0a282d563bf684139f
            [billing_address] => 426D Yishun Ave 11 #08-108
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 2957630588913364
            [nric_no] => 123A
            [created_at] => 2021-11-30 15:31:19
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

ERROR - 2021-11-30 15:33:00 --> Fomo check_fomopay_status membership :App\MembershipUser Object
(
    [table] => membership_user
    [timestamps] => 
    [fillable] => Array
        (
            [0] => plan_id
            [1] => user_id
            [2] => total_day
            [3] => expire_at
            [4] => started_at
            [5] => status_id
            [6] => is_active
            [7] => is_lifetime
            [8] => payment_method
            [9] => payment_details
            [10] => total
            [11] => bonus_commission
            [12] => expire_mail_sent
            [13] => next_transaction
        )

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
            [id] => 100
            [plan_id] => 1
            [user_id] => 81
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 15:32:47
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211130270945846","transaction_id":"100510320211130271204383","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30 00:00:00
            [created_at] => 2021-11-30 15:32:47
        )

    [original:protected] => Array
        (
            [id] => 100
            [plan_id] => 1
            [user_id] => 81
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 15:32:47
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211130270945846","transaction_id":"100510320211130271204383","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30 00:00:00
            [created_at] => 2021-11-30 15:32:47
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

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-11-30 15:33:00 --> Fomo check_fomopay_status membership success :https://jackstore.co/login
ERROR - 2021-11-30 15:33:00 --> Fomo check_fomopay_status response :Array
(
    [success] => https://jackstore.co/login
    [is_notified] => 1
)

ERROR - 2021-11-30 15:33:12 --> Fomo notify json_obj:Array
(
    [orderId] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [transactionId] => 100510320211130271204383
)

ERROR - 2021-11-30 15:33:12 --> Fomo notify body:{"orderId":"100500220211130270945846","orderNo":"1_81_1638257494","transactionId":"100510320211130271204383"}
ERROR - 2021-11-30 15:33:12 --> Fomo notify post_data:Array
(
)

ERROR - 2021-11-30 15:33:12 --> Fomo notify get_data:Array
(
)

ERROR - 2021-11-30 15:33:12 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=9badd875ff582367c2cc815b6c87831e,Timestamp=1638257593,Signature=88d601f950760d1af048a844e1c3daa817efd18f8cbfe756d6ef13fd9c7204df
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-11-30 15:33:12 --> Fomo validateWebhook body:{"orderId":"100500220211130270945846","orderNo":"1_81_1638257494","transactionId":"100510320211130271204383"}
ERROR - 2021-11-30 15:33:12 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [transactionId] => 100510320211130271204383
)

ERROR - 2021-11-30 15:33:12 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=9badd875ff582367c2cc815b6c87831e
    [3] => Timestamp=1638257593
    [4] => Signature=88d601f950760d1af048a844e1c3daa817efd18f8cbfe756d6ef13fd9c7204df
)

ERROR - 2021-11-30 15:33:12 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 9badd875ff582367c2cc815b6c87831e
    [Timestamp] => 1638257593
    [Signature] => 88d601f950760d1af048a844e1c3daa817efd18f8cbfe756d6ef13fd9c7204df
)

ERROR - 2021-11-30 15:33:12 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 9badd875ff582367c2cc815b6c87831e
    [Timestamp] => 1638257593
    [Signature] => 88d601f950760d1af048a844e1c3daa817efd18f8cbfe756d6ef13fd9c7204df
)

ERROR - 2021-11-30 15:33:12 --> Fomo validateWebhook Valid message:{"orderId":"100500220211130270945846","orderNo":"1_81_1638257494","transactionId":"100510320211130271204383"}16382575939badd875ff582367c2cc815b6c87831e
ERROR - 2021-11-30 15:33:12 --> Fomo isValidResponse:1
ERROR - 2021-11-30 15:33:12 --> Fomo webhook valid response
ERROR - 2021-11-30 15:33:12 --> Fomo json_obj: Array
(
    [orderId] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [transactionId] => 100510320211130271204383
)

ERROR - 2021-11-30 15:33:12 --> Fomo user: App\User Object
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
            [id] => 81
            [plan_id] => 100
            [refid] => 63
            [type] => user
            [firstname] => nick
            [lastname] => dec
            [email] => enquiry@biggworld.co
            [username] => dectest1
            [password] => 7c4a8d09ca3762af61e59520943dc26494f8941b
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 15:31:19
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6590040020","custom_date-1623412532756":"30-11-2021","nric_no":"123A","billing_address":"426D Yishun Ave 11 #08-108","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"63","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 907c6cb1d0037f0a282d563bf684139f
            [billing_address] => 426D Yishun Ave 11 #08-108
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 2957630588913364
            [nric_no] => 123A
            [created_at] => 2021-11-30 15:31:19
        )

    [original:protected] => Array
        (
            [id] => 81
            [plan_id] => 100
            [refid] => 63
            [type] => user
            [firstname] => nick
            [lastname] => dec
            [email] => enquiry@biggworld.co
            [username] => dectest1
            [password] => 7c4a8d09ca3762af61e59520943dc26494f8941b
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 15:31:19
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6590040020","custom_date-1623412532756":"30-11-2021","nric_no":"123A","billing_address":"426D Yishun Ave 11 #08-108","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"63","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 907c6cb1d0037f0a282d563bf684139f
            [billing_address] => 426D Yishun Ave 11 #08-108
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 2957630588913364
            [nric_no] => 123A
            [created_at] => 2021-11-30 15:31:19
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

ERROR - 2021-11-30 15:33:12 --> Valid Fomo Response:100500220211130270945846
ERROR - 2021-11-30 15:33:12 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500220211130270945846
            [orderNo] => 1_81_1638257494
            [mode] => HOSTED
            [subject] => Basic
            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

            [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/81/1
            [backUrl] => https://jackstore.co/activateusercontrol/907c6cb1d0037f0a282d563bf684139f
            [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/81/1
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1638257495
            [status] => SUCCESS
            [primaryTransactionId] => 100510320211130271204383
            [url] => https://ipg.fomopay.net/web/100500220211130270945846?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDIyMDIxMTEzMDI3MDk0NTg0NiIsInNlY3VyaXR5Q29kZSI6ImM5MjgzM2JmLTJjYjMtNDIzMC04OTliLThjZmZkOGEyYjIxYyIsImlhdCI6MTYzODI1NzQ5NH0.GFciC1nq3Ft5g1G9jn-C0_-UR_v22doP5RJQVYiQcbpldeVikmYmxG3YsVHgk1m8mDhVBZD5uWLCO8nb8imBIw2rpKzyU2Ox7BEKMgIMNGVpEAbrUlVqICT8Vk-yevrQMeHTg20u8JaLa7BDUTgW0S-Ei_WkFQUQqWvxfgxxC7T1-psc_BzKUIGwlhIIAypDX_8Y3DUQv3Nke2qXcZ9xNc5cMAkEMJ0jZnPl6uXRD-5VMvdwpbIMZV6ieU2Wu9HTwa8okpQ06E2UiFMt6hkcQEisIw4bxjBpP_kY3Sxj8KoQNZcGKjZXxwNjKeN3sH0XtvpUhrl326JNE9pXkRVMPA
        )

)

ERROR - 2021-11-30 15:33:12 --> Fomo order_response success:Array
(
    [id] => 100500220211130270945846
    [orderNo] => 1_81_1638257494
    [mode] => HOSTED
    [subject] => Basic
    [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

    [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/81/1
    [backUrl] => https://jackstore.co/activateusercontrol/907c6cb1d0037f0a282d563bf684139f
    [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/81/1
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1638257495
    [status] => SUCCESS
    [primaryTransactionId] => 100510320211130271204383
    [url] => https://ipg.fomopay.net/web/100500220211130270945846?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDIyMDIxMTEzMDI3MDk0NTg0NiIsInNlY3VyaXR5Q29kZSI6ImM5MjgzM2JmLTJjYjMtNDIzMC04OTliLThjZmZkOGEyYjIxYyIsImlhdCI6MTYzODI1NzQ5NH0.GFciC1nq3Ft5g1G9jn-C0_-UR_v22doP5RJQVYiQcbpldeVikmYmxG3YsVHgk1m8mDhVBZD5uWLCO8nb8imBIw2rpKzyU2Ox7BEKMgIMNGVpEAbrUlVqICT8Vk-yevrQMeHTg20u8JaLa7BDUTgW0S-Ei_WkFQUQqWvxfgxxC7T1-psc_BzKUIGwlhIIAypDX_8Y3DUQv3Nke2qXcZ9xNc5cMAkEMJ0jZnPl6uXRD-5VMvdwpbIMZV6ieU2Wu9HTwa8okpQ06E2UiFMt6hkcQEisIw4bxjBpP_kY3Sxj8KoQNZcGKjZXxwNjKeN3sH0XtvpUhrl326JNE9pXkRVMPA
)

ERROR - 2021-11-30 15:33:29 --> Fomo membership:App\MembershipUser Object
(
    [table] => membership_user
    [timestamps] => 
    [fillable] => Array
        (
            [0] => plan_id
            [1] => user_id
            [2] => total_day
            [3] => expire_at
            [4] => started_at
            [5] => status_id
            [6] => is_active
            [7] => is_lifetime
            [8] => payment_method
            [9] => payment_details
            [10] => total
            [11] => bonus_commission
            [12] => expire_mail_sent
            [13] => next_transaction
        )

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
            [id] => 100
            [plan_id] => 1
            [user_id] => 81
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 15:33:12
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211130270945846","transaction_id":"100510320211130271204383","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30
            [created_at] => 2021-11-30 15:33:12
        )

    [original:protected] => Array
        (
            [id] => 100
            [plan_id] => 1
            [user_id] => 81
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 15:33:12
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500220211130270945846","transaction_id":"100510320211130271204383","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30
            [created_at] => 2021-11-30 15:33:12
        )

    [changes:protected] => Array
        (
            [started_at] => 2021-11-30 15:33:12
            [next_transaction] => 2021-12-30
            [created_at] => 2021-11-30 15:33:12
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
                            [id] => 1
                            [name] => Basic
                            [belt_size] => 10
                            [type] => paid
                            [billing_period] => lifetime_free
                            [price] => 1
                            [special] => 0
                            [custom_period] => 0
                            [have_trail] => 0
                            [free_trail] => 0
                            [total_day] => 365
                            [bonus] => 100
                            [status] => 1
                            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

                            [label_text] => 
                            [label_background] => #28A745
                            [label_color] => #FFFFFF
                            [sort_order] => 0
                            [hosting_cost] => 10
                            [fego_shares] => 2000
                            [bigg_coupon] => 2000
                            [products] => [{"name":"Professional ( >= 3 x franchise value) in PB","quantity":"1000"},{"name":"Ultimate (>= 5 x franchise value) in PB","quantity":"2500"},{"name":"Legendary (>= 10 x franchise value) in PB","quantity":"5000"},{"name":"","quantity":""}]
                            [bigg_coins] => 0
                            [other_benefits] => <p><span lang="EN-US" xss=removed>Enjoy
exclusive franchisee prices, merchant referral rewards and networking events</span><br></p>
                            [icon] => plan1.png
                            [bg_gradient] => linear-gradient(0deg, #895cfc 0%, #25dddb 100%, #f0fff4 100%)
                            [updated_at] => 2021-11-27 23:54:04
                            [created_at] => 2021-06-07 03:18:20
                        )

                    [original:protected] => Array
                        (
                            [id] => 1
                            [name] => Basic
                            [belt_size] => 10
                            [type] => paid
                            [billing_period] => lifetime_free
                            [price] => 1
                            [special] => 0
                            [custom_period] => 0
                            [have_trail] => 0
                            [free_trail] => 0
                            [total_day] => 365
                            [bonus] => 100
                            [status] => 1
                            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

                            [label_text] => 
                            [label_background] => #28A745
                            [label_color] => #FFFFFF
                            [sort_order] => 0
                            [hosting_cost] => 10
                            [fego_shares] => 2000
                            [bigg_coupon] => 2000
                            [products] => [{"name":"Professional ( >= 3 x franchise value) in PB","quantity":"1000"},{"name":"Ultimate (>= 5 x franchise value) in PB","quantity":"2500"},{"name":"Legendary (>= 10 x franchise value) in PB","quantity":"5000"},{"name":"","quantity":""}]
                            [bigg_coins] => 0
                            [other_benefits] => <p><span lang="EN-US" xss=removed>Enjoy
exclusive franchisee prices, merchant referral rewards and networking events</span><br></p>
                            [icon] => plan1.png
                            [bg_gradient] => linear-gradient(0deg, #895cfc 0%, #25dddb 100%, #f0fff4 100%)
                            [updated_at] => 2021-11-27 23:54:04
                            [created_at] => 2021-06-07 03:18:20
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

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-11-30 15:33:29 --> Fomo activate_user_data:
ERROR - 2021-11-30 15:33:29 --> Fomo notify final response: Array
(
    [success] => https://jackstore.co/usercontrol/dashboard
)

ERROR - 2021-11-30 16:05:19 --> Fomo notify json_obj:Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:05:19 --> Fomo notify body:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}
ERROR - 2021-11-30 16:05:19 --> Fomo notify post_data:Array
(
)

ERROR - 2021-11-30 16:05:19 --> Fomo notify get_data:Array
(
)

ERROR - 2021-11-30 16:05:19 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=e2bb0af25cb38fcd6cf8ce80a06a3ebe,Timestamp=1638259520,Signature=9c8e20fac3b69a1e16aa67778a29a01262fed127134160cb53f3932ad6897ab0
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-11-30 16:05:19 --> Fomo validateWebhook body:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}
ERROR - 2021-11-30 16:05:19 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:05:19 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=e2bb0af25cb38fcd6cf8ce80a06a3ebe
    [3] => Timestamp=1638259520
    [4] => Signature=9c8e20fac3b69a1e16aa67778a29a01262fed127134160cb53f3932ad6897ab0
)

ERROR - 2021-11-30 16:05:19 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => e2bb0af25cb38fcd6cf8ce80a06a3ebe
    [Timestamp] => 1638259520
    [Signature] => 9c8e20fac3b69a1e16aa67778a29a01262fed127134160cb53f3932ad6897ab0
)

ERROR - 2021-11-30 16:05:19 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => e2bb0af25cb38fcd6cf8ce80a06a3ebe
    [Timestamp] => 1638259520
    [Signature] => 9c8e20fac3b69a1e16aa67778a29a01262fed127134160cb53f3932ad6897ab0
)

ERROR - 2021-11-30 16:05:19 --> Fomo validateWebhook Valid message:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}1638259520e2bb0af25cb38fcd6cf8ce80a06a3ebe
ERROR - 2021-11-30 16:05:19 --> Fomo isValidResponse:1
ERROR - 2021-11-30 16:05:19 --> Fomo webhook valid response
ERROR - 2021-11-30 16:05:19 --> Fomo json_obj: Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:05:19 --> Fomo user: App\User Object
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
            [id] => 84
            [plan_id] => 0
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
        )

    [original:protected] => Array
        (
            [id] => 84
            [plan_id] => 0
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
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

ERROR - 2021-11-30 16:05:19 --> Valid Fomo Response:100500120211130290784809
ERROR - 2021-11-30 16:05:19 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500120211130290784809
            [orderNo] => 1_84_1638259478
            [mode] => HOSTED
            [subject] => Basic
            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

            [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/84/1
            [backUrl] => https://jackstore.co/activateusercontrol/051f9ee9db0ac488e73d3dce7105a12b
            [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/84/1
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1638259479
            [status] => SUCCESS
            [primaryTransactionId] => 100510320211130290855703
            [url] => https://ipg.fomopay.net/web/100500120211130290784809?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTEzMDI5MDc4NDgwOSIsInNlY3VyaXR5Q29kZSI6ImQ1YTVkZGNlLTQ2ZDItNDBlNi04MjgyLTI3ZTgwODcxN2ZkMSIsImlhdCI6MTYzODI1OTQ3OH0.MbwH9id-NhNztrq7J8U9TZzqkCWNOGDEbLYz6EXVGpR-sybInhHcrrJtmV1cROmzXaSXvwCKxFwqkhrrfck0ZsmbRz_SUvsP5IUSFpDK8jd0TznXQadKlPTElmpBpIbJ4lm7WAyZ2hpRIBY4Kr5GuTal09sivzYNVcxk1bZrHNdCfQPTug62cP2rtvuRKtqMogLDqX6h1FC_AKresdrZ4Dr_L5d23n0E9nVa9zJYRICF8yJ5ZL694qka8WC9fNpWb7lYb-nQrnj1WVpbQkA_0ovZHuvgcu3gQ0X9ynjbloOO1S7G1vKyZsxwAmkKnml2htQCuDIDeRp9h_QD2jGabA
        )

)

ERROR - 2021-11-30 16:05:19 --> Fomo order_response success:Array
(
    [id] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [mode] => HOSTED
    [subject] => Basic
    [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

    [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/84/1
    [backUrl] => https://jackstore.co/activateusercontrol/051f9ee9db0ac488e73d3dce7105a12b
    [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/84/1
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1638259479
    [status] => SUCCESS
    [primaryTransactionId] => 100510320211130290855703
    [url] => https://ipg.fomopay.net/web/100500120211130290784809?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTEzMDI5MDc4NDgwOSIsInNlY3VyaXR5Q29kZSI6ImQ1YTVkZGNlLTQ2ZDItNDBlNi04MjgyLTI3ZTgwODcxN2ZkMSIsImlhdCI6MTYzODI1OTQ3OH0.MbwH9id-NhNztrq7J8U9TZzqkCWNOGDEbLYz6EXVGpR-sybInhHcrrJtmV1cROmzXaSXvwCKxFwqkhrrfck0ZsmbRz_SUvsP5IUSFpDK8jd0TznXQadKlPTElmpBpIbJ4lm7WAyZ2hpRIBY4Kr5GuTal09sivzYNVcxk1bZrHNdCfQPTug62cP2rtvuRKtqMogLDqX6h1FC_AKresdrZ4Dr_L5d23n0E9nVa9zJYRICF8yJ5ZL694qka8WC9fNpWb7lYb-nQrnj1WVpbQkA_0ovZHuvgcu3gQ0X9ynjbloOO1S7G1vKyZsxwAmkKnml2htQCuDIDeRp9h_QD2jGabA
)

ERROR - 2021-11-30 16:05:23 --> Fomo fomo_return called user_id:84
ERROR - 2021-11-30 16:05:23 --> Fomo fomo_return view called plan_id:1
ERROR - 2021-11-30 16:05:30 --> Fomo check_fomopay_status called user_id :84
ERROR - 2021-11-30 16:05:30 --> Fomo check_fomopay_status cancel_url :https://jackstore.co/membership/buy_membership/1/fomo
ERROR - 2021-11-30 16:05:30 --> Fomo check_fomopay_status user :App\User Object
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
            [id] => 84
            [plan_id] => 102
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
        )

    [original:protected] => Array
        (
            [id] => 84
            [plan_id] => 102
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
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

ERROR - 2021-11-30 16:05:30 --> Fomo check_fomopay_status membership :App\MembershipUser Object
(
    [table] => membership_user
    [timestamps] => 
    [fillable] => Array
        (
            [0] => plan_id
            [1] => user_id
            [2] => total_day
            [3] => expire_at
            [4] => started_at
            [5] => status_id
            [6] => is_active
            [7] => is_lifetime
            [8] => payment_method
            [9] => payment_details
            [10] => total
            [11] => bonus_commission
            [12] => expire_mail_sent
            [13] => next_transaction
        )

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
            [id] => 102
            [plan_id] => 1
            [user_id] => 84
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 16:05:19
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500120211130290784809","transaction_id":"100510320211130290855703","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30 00:00:00
            [created_at] => 2021-11-30 16:05:19
        )

    [original:protected] => Array
        (
            [id] => 102
            [plan_id] => 1
            [user_id] => 84
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 16:05:19
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500120211130290784809","transaction_id":"100510320211130290855703","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30 00:00:00
            [created_at] => 2021-11-30 16:05:19
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

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-11-30 16:05:30 --> Fomo check_fomopay_status membership success :https://jackstore.co/login
ERROR - 2021-11-30 16:05:30 --> Fomo check_fomopay_status response :Array
(
    [success] => https://jackstore.co/login
    [is_notified] => 1
)

ERROR - 2021-11-30 16:05:44 --> Fomo notify json_obj:Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:05:44 --> Fomo notify body:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}
ERROR - 2021-11-30 16:05:44 --> Fomo notify post_data:Array
(
)

ERROR - 2021-11-30 16:05:44 --> Fomo notify get_data:Array
(
)

ERROR - 2021-11-30 16:05:44 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=efb061f2166deb257fcf73453f149d8c,Timestamp=1638259545,Signature=958b9b8fd425c0f7d91d71da2ff7de26a0e8d508b2997ca16c1fe3de2d50e4d1
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-11-30 16:05:44 --> Fomo validateWebhook body:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}
ERROR - 2021-11-30 16:05:44 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:05:44 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=efb061f2166deb257fcf73453f149d8c
    [3] => Timestamp=1638259545
    [4] => Signature=958b9b8fd425c0f7d91d71da2ff7de26a0e8d508b2997ca16c1fe3de2d50e4d1
)

ERROR - 2021-11-30 16:05:44 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => efb061f2166deb257fcf73453f149d8c
    [Timestamp] => 1638259545
    [Signature] => 958b9b8fd425c0f7d91d71da2ff7de26a0e8d508b2997ca16c1fe3de2d50e4d1
)

ERROR - 2021-11-30 16:05:44 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => efb061f2166deb257fcf73453f149d8c
    [Timestamp] => 1638259545
    [Signature] => 958b9b8fd425c0f7d91d71da2ff7de26a0e8d508b2997ca16c1fe3de2d50e4d1
)

ERROR - 2021-11-30 16:05:44 --> Fomo validateWebhook Valid message:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}1638259545efb061f2166deb257fcf73453f149d8c
ERROR - 2021-11-30 16:05:44 --> Fomo isValidResponse:1
ERROR - 2021-11-30 16:05:44 --> Fomo webhook valid response
ERROR - 2021-11-30 16:05:44 --> Fomo json_obj: Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:05:44 --> Fomo user: App\User Object
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
            [id] => 84
            [plan_id] => 102
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
        )

    [original:protected] => Array
        (
            [id] => 84
            [plan_id] => 102
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
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

ERROR - 2021-11-30 16:05:44 --> Valid Fomo Response:100500120211130290784809
ERROR - 2021-11-30 16:05:44 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500120211130290784809
            [orderNo] => 1_84_1638259478
            [mode] => HOSTED
            [subject] => Basic
            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

            [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/84/1
            [backUrl] => https://jackstore.co/activateusercontrol/051f9ee9db0ac488e73d3dce7105a12b
            [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/84/1
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1638259479
            [status] => SUCCESS
            [primaryTransactionId] => 100510320211130290855703
            [url] => https://ipg.fomopay.net/web/100500120211130290784809?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTEzMDI5MDc4NDgwOSIsInNlY3VyaXR5Q29kZSI6ImQ1YTVkZGNlLTQ2ZDItNDBlNi04MjgyLTI3ZTgwODcxN2ZkMSIsImlhdCI6MTYzODI1OTQ3OH0.MbwH9id-NhNztrq7J8U9TZzqkCWNOGDEbLYz6EXVGpR-sybInhHcrrJtmV1cROmzXaSXvwCKxFwqkhrrfck0ZsmbRz_SUvsP5IUSFpDK8jd0TznXQadKlPTElmpBpIbJ4lm7WAyZ2hpRIBY4Kr5GuTal09sivzYNVcxk1bZrHNdCfQPTug62cP2rtvuRKtqMogLDqX6h1FC_AKresdrZ4Dr_L5d23n0E9nVa9zJYRICF8yJ5ZL694qka8WC9fNpWb7lYb-nQrnj1WVpbQkA_0ovZHuvgcu3gQ0X9ynjbloOO1S7G1vKyZsxwAmkKnml2htQCuDIDeRp9h_QD2jGabA
        )

)

ERROR - 2021-11-30 16:05:44 --> Fomo order_response success:Array
(
    [id] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [mode] => HOSTED
    [subject] => Basic
    [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

    [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/84/1
    [backUrl] => https://jackstore.co/activateusercontrol/051f9ee9db0ac488e73d3dce7105a12b
    [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/84/1
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1638259479
    [status] => SUCCESS
    [primaryTransactionId] => 100510320211130290855703
    [url] => https://ipg.fomopay.net/web/100500120211130290784809?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTEzMDI5MDc4NDgwOSIsInNlY3VyaXR5Q29kZSI6ImQ1YTVkZGNlLTQ2ZDItNDBlNi04MjgyLTI3ZTgwODcxN2ZkMSIsImlhdCI6MTYzODI1OTQ3OH0.MbwH9id-NhNztrq7J8U9TZzqkCWNOGDEbLYz6EXVGpR-sybInhHcrrJtmV1cROmzXaSXvwCKxFwqkhrrfck0ZsmbRz_SUvsP5IUSFpDK8jd0TznXQadKlPTElmpBpIbJ4lm7WAyZ2hpRIBY4Kr5GuTal09sivzYNVcxk1bZrHNdCfQPTug62cP2rtvuRKtqMogLDqX6h1FC_AKresdrZ4Dr_L5d23n0E9nVa9zJYRICF8yJ5ZL694qka8WC9fNpWb7lYb-nQrnj1WVpbQkA_0ovZHuvgcu3gQ0X9ynjbloOO1S7G1vKyZsxwAmkKnml2htQCuDIDeRp9h_QD2jGabA
)

ERROR - 2021-11-30 16:06:09 --> Fomo notify json_obj:Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:06:09 --> Fomo notify body:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}
ERROR - 2021-11-30 16:06:09 --> Fomo notify post_data:Array
(
)

ERROR - 2021-11-30 16:06:09 --> Fomo notify get_data:Array
(
)

ERROR - 2021-11-30 16:06:09 --> Fomo headers:Array
(
    [Host] => jackstore.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=ddaa962b2dfba5d567d2b75acbfe2e74,Timestamp=1638259570,Signature=3c19f03dc2359c37899a1f50942ff906bd1b913700f8cf3e3c5fd97af3de29ce
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 109
    [Connection] => close
)

ERROR - 2021-11-30 16:06:09 --> Fomo validateWebhook body:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}
ERROR - 2021-11-30 16:06:09 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:06:09 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=ddaa962b2dfba5d567d2b75acbfe2e74
    [3] => Timestamp=1638259570
    [4] => Signature=3c19f03dc2359c37899a1f50942ff906bd1b913700f8cf3e3c5fd97af3de29ce
)

ERROR - 2021-11-30 16:06:09 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => ddaa962b2dfba5d567d2b75acbfe2e74
    [Timestamp] => 1638259570
    [Signature] => 3c19f03dc2359c37899a1f50942ff906bd1b913700f8cf3e3c5fd97af3de29ce
)

ERROR - 2021-11-30 16:06:09 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => ddaa962b2dfba5d567d2b75acbfe2e74
    [Timestamp] => 1638259570
    [Signature] => 3c19f03dc2359c37899a1f50942ff906bd1b913700f8cf3e3c5fd97af3de29ce
)

ERROR - 2021-11-30 16:06:09 --> Fomo validateWebhook Valid message:{"orderId":"100500120211130290784809","orderNo":"1_84_1638259478","transactionId":"100510320211130290855703"}1638259570ddaa962b2dfba5d567d2b75acbfe2e74
ERROR - 2021-11-30 16:06:09 --> Fomo isValidResponse:1
ERROR - 2021-11-30 16:06:09 --> Fomo webhook valid response
ERROR - 2021-11-30 16:06:09 --> Fomo json_obj: Array
(
    [orderId] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [transactionId] => 100510320211130290855703
)

ERROR - 2021-11-30 16:06:09 --> Fomo user: App\User Object
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
            [id] => 84
            [plan_id] => 102
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 2021-11-30 16:06:09
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
        )

    [original:protected] => Array
        (
            [id] => 84
            [plan_id] => 102
            [refid] => 83
            [type] => user
            [firstname] => Bigg
            [lastname] => Bigg
            [email] => biggfranchise@gmail.com
            [username] => Biggie
            [password] => c17e0a8e731ff1fe2faf7111f1e75e3211d8efa8
            [phone] => 
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => 
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 2021-11-30 16:04:14
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => 
            [Country] => 196
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
            [value] => {"custom_text-1611314653157":"+6598765432","custom_date-1623412532756":"24-11-2021","nric_no":"111A","billing_address":"99 Bigg World ","country_id":"196","membership_plan":"1","package_price":"S$1.00","refid":"83","coupon_code":""}
            [last_ping] => 2021-11-30 16:06:09
            [install_location_details] => 
            [assigned_plan] => 1
            [uuid] => 051f9ee9db0ac488e73d3dce7105a12b
            [billing_address] => 99 Bigg World 
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 1919671099928502
            [nric_no] => 111A
            [created_at] => 2021-11-30 16:04:14
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

ERROR - 2021-11-30 16:06:09 --> Valid Fomo Response:100500120211130290784809
ERROR - 2021-11-30 16:06:09 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500120211130290784809
            [orderNo] => 1_84_1638259478
            [mode] => HOSTED
            [subject] => Basic
            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

            [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/84/1
            [backUrl] => https://jackstore.co/activateusercontrol/051f9ee9db0ac488e73d3dce7105a12b
            [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/84/1
            [currencyCode] => SGD
            [amount] => 1.00
            [createdAt] => 1638259479
            [status] => SUCCESS
            [primaryTransactionId] => 100510320211130290855703
            [url] => https://ipg.fomopay.net/web/100500120211130290784809?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTEzMDI5MDc4NDgwOSIsInNlY3VyaXR5Q29kZSI6ImQ1YTVkZGNlLTQ2ZDItNDBlNi04MjgyLTI3ZTgwODcxN2ZkMSIsImlhdCI6MTYzODI1OTQ3OH0.MbwH9id-NhNztrq7J8U9TZzqkCWNOGDEbLYz6EXVGpR-sybInhHcrrJtmV1cROmzXaSXvwCKxFwqkhrrfck0ZsmbRz_SUvsP5IUSFpDK8jd0TznXQadKlPTElmpBpIbJ4lm7WAyZ2hpRIBY4Kr5GuTal09sivzYNVcxk1bZrHNdCfQPTug62cP2rtvuRKtqMogLDqX6h1FC_AKresdrZ4Dr_L5d23n0E9nVa9zJYRICF8yJ5ZL694qka8WC9fNpWb7lYb-nQrnj1WVpbQkA_0ovZHuvgcu3gQ0X9ynjbloOO1S7G1vKyZsxwAmkKnml2htQCuDIDeRp9h_QD2jGabA
        )

)

ERROR - 2021-11-30 16:06:10 --> Fomo order_response success:Array
(
    [id] => 100500120211130290784809
    [orderNo] => 1_84_1638259478
    [mode] => HOSTED
    [subject] => Basic
    [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

    [returnUrl] => https://jackstore.co/membership_callback/fomo/fomo_return/84/1
    [backUrl] => https://jackstore.co/activateusercontrol/051f9ee9db0ac488e73d3dce7105a12b
    [notifyUrl] => https://jackstore.co/membership_callback/fomo/notify/84/1
    [currencyCode] => SGD
    [amount] => 1.00
    [createdAt] => 1638259479
    [status] => SUCCESS
    [primaryTransactionId] => 100510320211130290855703
    [url] => https://ipg.fomopay.net/web/100500120211130290784809?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDEyMDIxMTEzMDI5MDc4NDgwOSIsInNlY3VyaXR5Q29kZSI6ImQ1YTVkZGNlLTQ2ZDItNDBlNi04MjgyLTI3ZTgwODcxN2ZkMSIsImlhdCI6MTYzODI1OTQ3OH0.MbwH9id-NhNztrq7J8U9TZzqkCWNOGDEbLYz6EXVGpR-sybInhHcrrJtmV1cROmzXaSXvwCKxFwqkhrrfck0ZsmbRz_SUvsP5IUSFpDK8jd0TznXQadKlPTElmpBpIbJ4lm7WAyZ2hpRIBY4Kr5GuTal09sivzYNVcxk1bZrHNdCfQPTug62cP2rtvuRKtqMogLDqX6h1FC_AKresdrZ4Dr_L5d23n0E9nVa9zJYRICF8yJ5ZL694qka8WC9fNpWb7lYb-nQrnj1WVpbQkA_0ovZHuvgcu3gQ0X9ynjbloOO1S7G1vKyZsxwAmkKnml2htQCuDIDeRp9h_QD2jGabA
)

ERROR - 2021-11-30 16:06:21 --> Fomo membership:App\MembershipUser Object
(
    [table] => membership_user
    [timestamps] => 
    [fillable] => Array
        (
            [0] => plan_id
            [1] => user_id
            [2] => total_day
            [3] => expire_at
            [4] => started_at
            [5] => status_id
            [6] => is_active
            [7] => is_lifetime
            [8] => payment_method
            [9] => payment_details
            [10] => total
            [11] => bonus_commission
            [12] => expire_mail_sent
            [13] => next_transaction
        )

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
            [id] => 102
            [plan_id] => 1
            [user_id] => 84
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 16:06:10
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500120211130290784809","transaction_id":"100510320211130290855703","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30
            [created_at] => 2021-11-30 16:06:10
        )

    [original:protected] => Array
        (
            [id] => 102
            [plan_id] => 1
            [user_id] => 84
            [total_day] => 365
            [expire_at] => 
            [started_at] => 2021-11-30 16:06:10
            [status_id] => 1
            [is_active] => 1
            [is_lifetime] => 1
            [payment_method] => Fomo
            [payment_details] => {"orderId":"100500120211130290784809","transaction_id":"100510320211130290855703","payment_status":"SUCCESS"}
            [total] => 1
            [bonus_commission] => 100
            [expire_mail_sent] => 0
            [next_transaction] => 2021-12-30
            [created_at] => 2021-11-30 16:06:10
        )

    [changes:protected] => Array
        (
            [started_at] => 2021-11-30 16:06:10
            [is_active] => 1
            [next_transaction] => 2021-12-30
            [created_at] => 2021-11-30 16:06:10
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
                            [id] => 1
                            [name] => Basic
                            [belt_size] => 10
                            [type] => paid
                            [billing_period] => lifetime_free
                            [price] => 1
                            [special] => 0
                            [custom_period] => 0
                            [have_trail] => 0
                            [free_trail] => 0
                            [total_day] => 365
                            [bonus] => 100
                            [status] => 1
                            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

                            [label_text] => 
                            [label_background] => #28A745
                            [label_color] => #FFFFFF
                            [sort_order] => 0
                            [hosting_cost] => 10
                            [fego_shares] => 2000
                            [bigg_coupon] => 2000
                            [products] => [{"name":"Professional ( >= 3 x franchise value) in PB","quantity":"1000"},{"name":"Ultimate (>= 5 x franchise value) in PB","quantity":"2500"},{"name":"Legendary (>= 10 x franchise value) in PB","quantity":"5000"},{"name":"","quantity":""}]
                            [bigg_coins] => 0
                            [other_benefits] => <p><span lang="EN-US" xss=removed>Enjoy
exclusive franchisee prices, merchant referral rewards and networking events</span><br></p>
                            [icon] => plan1.png
                            [bg_gradient] => linear-gradient(0deg, #895cfc 0%, #25dddb 100%, #f0fff4 100%)
                            [updated_at] => 2021-11-27 23:54:04
                            [created_at] => 2021-06-07 03:18:20
                        )

                    [original:protected] => Array
                        (
                            [id] => 1
                            [name] => Basic
                            [belt_size] => 10
                            [type] => paid
                            [billing_period] => lifetime_free
                            [price] => 1
                            [special] => 0
                            [custom_period] => 0
                            [have_trail] => 0
                            [free_trail] => 0
                            [total_day] => 365
                            [bonus] => 100
                            [status] => 1
                            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

                            [label_text] => 
                            [label_background] => #28A745
                            [label_color] => #FFFFFF
                            [sort_order] => 0
                            [hosting_cost] => 10
                            [fego_shares] => 2000
                            [bigg_coupon] => 2000
                            [products] => [{"name":"Professional ( >= 3 x franchise value) in PB","quantity":"1000"},{"name":"Ultimate (>= 5 x franchise value) in PB","quantity":"2500"},{"name":"Legendary (>= 10 x franchise value) in PB","quantity":"5000"},{"name":"","quantity":""}]
                            [bigg_coins] => 0
                            [other_benefits] => <p><span lang="EN-US" xss=removed>Enjoy
exclusive franchisee prices, merchant referral rewards and networking events</span><br></p>
                            [icon] => plan1.png
                            [bg_gradient] => linear-gradient(0deg, #895cfc 0%, #25dddb 100%, #f0fff4 100%)
                            [updated_at] => 2021-11-27 23:54:04
                            [created_at] => 2021-06-07 03:18:20
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

    [guarded:protected] => Array
        (
            [0] => *
        )

)

ERROR - 2021-11-30 16:06:21 --> Fomo activate_user_data:
ERROR - 2021-11-30 16:06:21 --> Fomo notify final response: Array
(
    [success] => https://jackstore.co/usercontrol/dashboard
)

ERROR - 2021-11-30 08:21:00 --> 404 Page Not Found: 
ERROR - 2021-11-30 08:21:00 --> 404 Page Not Found: 
ERROR - 2021-11-30 08:21:00 --> 404 Page Not Found: 
ERROR - 2021-11-30 09:25:36 --> 404 Page Not Found: 
ERROR - 2021-11-30 09:25:36 --> 404 Page Not Found: 
ERROR - 2021-11-30 09:25:36 --> 404 Page Not Found: 
ERROR - 2021-11-30 10:44:03 --> 404 Page Not Found: 
ERROR - 2021-11-30 10:44:03 --> 404 Page Not Found: 
ERROR - 2021-11-30 10:44:03 --> 404 Page Not Found: 
ERROR - 2021-11-30 11:49:15 --> 404 Page Not Found: 
ERROR - 2021-11-30 11:49:15 --> 404 Page Not Found: 
ERROR - 2021-11-30 11:49:15 --> 404 Page Not Found: 
ERROR - 2021-11-30 12:55:34 --> 404 Page Not Found: 
ERROR - 2021-11-30 12:55:34 --> 404 Page Not Found: 
ERROR - 2021-11-30 12:55:34 --> 404 Page Not Found: 
ERROR - 2021-11-30 13:59:20 --> 404 Page Not Found: 
ERROR - 2021-11-30 13:59:20 --> 404 Page Not Found: 
ERROR - 2021-11-30 13:59:20 --> 404 Page Not Found: 
ERROR - 2021-11-30 15:22:28 --> 404 Page Not Found: 
ERROR - 2021-11-30 15:22:28 --> 404 Page Not Found: 
ERROR - 2021-11-30 15:22:28 --> 404 Page Not Found: 
ERROR - 2021-11-30 16:40:49 --> 404 Page Not Found: 
ERROR - 2021-11-30 16:40:49 --> 404 Page Not Found: 
ERROR - 2021-11-30 16:40:49 --> 404 Page Not Found: 
ERROR - 2021-11-30 17:47:51 --> 404 Page Not Found: 
ERROR - 2021-11-30 17:47:51 --> 404 Page Not Found: 
ERROR - 2021-11-30 17:47:51 --> 404 Page Not Found: 
ERROR - 2021-11-30 19:02:31 --> 404 Page Not Found: 
ERROR - 2021-11-30 19:02:31 --> 404 Page Not Found: 
ERROR - 2021-11-30 19:02:31 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:08:55 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:08:55 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:08:55 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:38:40 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:38:40 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:38:44 --> 404 Page Not Found: 
ERROR - 2021-11-30 20:38:45 --> 404 Page Not Found: 
ERROR - 2021-11-30 21:36:32 --> 404 Page Not Found: 
ERROR - 2021-11-30 21:36:33 --> 404 Page Not Found: 
ERROR - 2021-11-30 21:36:37 --> 404 Page Not Found: 
ERROR - 2021-11-30 22:47:03 --> 404 Page Not Found: 
ERROR - 2021-11-30 22:47:03 --> 404 Page Not Found: 
ERROR - 2021-11-30 22:47:03 --> 404 Page Not Found: 
