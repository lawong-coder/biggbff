<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-17 09:05:32 --> Query error: MySQL server has gone away - Invalid query: SELECT * FROM currency
ERROR - 2022-10-17 09:05:32 --> Query error: MySQL server has gone away - Invalid query: SELECT * FROM currency
ERROR - 2022-10-17 09:05:32 --> Query error: MySQL server has gone away - Invalid query: SELECT * FROM currency
ERROR - 2022-10-17 09:05:32 --> Query error: MySQL server has gone away - Invalid query: SELECT * FROM currency
ERROR - 2022-10-17 18:11:35 --> Fomo notify json_obj:Array
(
    [orderId] => 100500020221017330869185
    [orderNo] => 1_166_1665997886
    [transactionId] => 100510020221017330945845
)

ERROR - 2022-10-17 18:11:35 --> Fomo notify body:{"orderId":"100500020221017330869185","orderNo":"1_166_1665997886","transactionId":"100510020221017330945845"}
ERROR - 2022-10-17 18:11:35 --> Fomo notify post_data:Array
(
)

ERROR - 2022-10-17 18:11:35 --> Fomo notify get_data:Array
(
)

ERROR - 2022-10-17 18:11:35 --> Fomo headers:Array
(
    [Host] => bff.biggworld.co
    [Content-Type] => application/json
    [x-fomopay-authorization] => FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=6b3dcc20d1d5494d5f1e9dd1e0e44914,Timestamp=1666001495,Signature=6514df000637cc9f565b5a3440b571d9baec987f42fc968c7c3a124b2ed8beb1
    [User-Agent] => FOMOPay/2.0 (+http://www.fomopay.com/)
    [Accept] => */*
    [Content-Length] => 110
    [Connection] => close
)

ERROR - 2022-10-17 18:11:35 --> Fomo validateWebhook body:{"orderId":"100500020221017330869185","orderNo":"1_166_1665997886","transactionId":"100510020221017330945845"}
ERROR - 2022-10-17 18:11:35 --> Fomo validateWebhook json_body:Array
(
    [orderId] => 100500020221017330869185
    [orderNo] => 1_166_1665997886
    [transactionId] => 100510020221017330945845
)

ERROR - 2022-10-17 18:11:35 --> Fomo validateWebhook x_fomopay_authorization:Array
(
    [0] => Version=1.1
    [1] => Credential=122000000000163
    [2] => Nonce=6b3dcc20d1d5494d5f1e9dd1e0e44914
    [3] => Timestamp=1666001495
    [4] => Signature=6514df000637cc9f565b5a3440b571d9baec987f42fc968c7c3a124b2ed8beb1
)

ERROR - 2022-10-17 18:11:35 --> Fomo validateWebhook x_fomopay_authorization inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 6b3dcc20d1d5494d5f1e9dd1e0e44914
    [Timestamp] => 1666001495
    [Signature] => 6514df000637cc9f565b5a3440b571d9baec987f42fc968c7c3a124b2ed8beb1
)

ERROR - 2022-10-17 18:11:35 --> Fomo validateWebhook valid header inside:Array
(
    [Version] => 1.1
    [Credential] => 122000000000163
    [Nonce] => 6b3dcc20d1d5494d5f1e9dd1e0e44914
    [Timestamp] => 1666001495
    [Signature] => 6514df000637cc9f565b5a3440b571d9baec987f42fc968c7c3a124b2ed8beb1
)

ERROR - 2022-10-17 18:11:35 --> Fomo validateWebhook Valid message:{"orderId":"100500020221017330869185","orderNo":"1_166_1665997886","transactionId":"100510020221017330945845"}16660014956b3dcc20d1d5494d5f1e9dd1e0e44914
ERROR - 2022-10-17 18:11:35 --> Fomo isValidResponse:1
ERROR - 2022-10-17 18:11:35 --> Fomo webhook valid response
ERROR - 2022-10-17 18:11:35 --> Fomo json_obj: Array
(
    [orderId] => 100500020221017330869185
    [orderNo] => 1_166_1665997886
    [transactionId] => 100510020221017330945845
)

ERROR - 2022-10-17 18:11:35 --> Fomo user: App\User Object
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
            [id] => 166
            [plan_id] => 183
            [refid] => 3
            [type] => user
            [firstname] => Kah Ngen
            [lastname] => Goh
            [email] => mrstanlove@gmail.com
            [username] => mrstan
            [password] => 883a9c23210ec8b01309de3cd2038e7ae5479080
            [phone] => Choa Chu Kang New Town
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Choa Chu Kang New Town
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 0000-00-00 00:00:00
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Choa Chu Kang New Town
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
            [reg_approved] => 1
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+659878 6822","custom_date-1623412532756":"","nric_no":"123A","billing_address":"Singapore","country_id":"196","refnumber":"","membership_plan":"3","package_price":"S$10,000.00","package_hosting_cost":"S$10.00","coupon_code":"","reg_approved":"1"}
            [last_ping] => 2022-10-17 17:13:28
            [install_location_details] => 
            [assigned_plan] => 3
            [uuid] => 
            [billing_address] => Singapore
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 5377800000000000
            [nric_no] => 123A
            [created_at] => 2022-01-16 14:33:15
        )

    [original:protected] => Array
        (
            [id] => 166
            [plan_id] => 183
            [refid] => 3
            [type] => user
            [firstname] => Kah Ngen
            [lastname] => Goh
            [email] => mrstanlove@gmail.com
            [username] => mrstan
            [password] => 883a9c23210ec8b01309de3cd2038e7ae5479080
            [phone] => Choa Chu Kang New Town
            [twaddress] => 
            [address1] => 
            [address2] => 
            [ucity] => Choa Chu Kang New Town
            [ucountry] => 196
            [state] => 
            [uzip] => 
            [avatar] => 
            [online] => 1
            [unique_url] => 
            [bitly_unique_url] => 
            [updated_at] => 0000-00-00 00:00:00
            [google_id] => 
            [facebook_id] => 
            [twitter_id] => 
            [umode] => 
            [PhoneNumber] => 
            [Addressone] => 
            [Addresstwo] => 
            [City] => Choa Chu Kang New Town
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
            [reg_approved] => 1
            [is_vendor] => 0
            [value] => {"custom_text-1611314653157":"+659878 6822","custom_date-1623412532756":"","nric_no":"123A","billing_address":"Singapore","country_id":"196","refnumber":"","membership_plan":"3","package_price":"S$10,000.00","package_hosting_cost":"S$10.00","coupon_code":"","reg_approved":"1"}
            [last_ping] => 2022-10-17 17:13:28
            [install_location_details] => 
            [assigned_plan] => 3
            [uuid] => 
            [billing_address] => Singapore
            [refnumber] => 
            [coupon_code] => 
            [membership_no] => 5377800000000000
            [nric_no] => 123A
            [created_at] => 2022-01-16 14:33:15
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

ERROR - 2022-10-17 18:11:35 --> Valid Fomo Response:100500020221017330869185
ERROR - 2022-10-17 18:11:35 --> Fomo order response:Array
(
    [error] => 
    [response] => Array
        (
            [id] => 100500020221017330869185
            [orderNo] => 1_166_1665997886
            [mode] => HOSTED
            [subject] => Basic
            [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

            [returnUrl] => https://bff.biggworld.co/membership_callback/fomo/fomo_return/166/1
            [backUrl] => https://bff.biggworld.co/usercontrol/franchise_plan
            [notifyUrl] => https://bff.biggworld.co/membership_callback/fomo/notify/166/1
            [currencyCode] => SGD
            [amount] => 2000.00
            [createdAt] => 1665997886
            [status] => CREATED
            [url] => https://ipg.fomopay.net/web/100500020221017330869185?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDAyMDIyMTAxNzMzMDg2OTE4NSIsInNlY3VyaXR5Q29kZSI6ImZjMThhYzNlLTQ5ODktNDI0Yy05NmVkLTZlZTNkNDQ3ZTNiZiIsImlhdCI6MTY2NTk5Nzg4Nn0.Zdmm1uweChTVv9X1Eza-BTJ4jOz-xk3jGARKdyfy9w0TCc99ltziHx4c5KH3BwopM6xIHIrF5nSQxW-yQDCXGOa-N8ND3GJ_o1gHNV7ZAZjKU2h4Ji0LpGlXMUjqJRky6mim3m43u0tfK6LlXoI3Oqiw9OMosEPr2Txlj06iaJw48CdN9mCQV0aHoXQKgTtttSEdWkVzZ8Umv5XM1dt1MmuHNsqaQDsvwxf80P6t-gpdEJwQnr04AlFswiyeZtBHTR_ny0jaRU4I7eJ8tP1h8_5uaK7M9w340Vy7H3cPlZxXpHCtBz1xZqJr7YM9koLgcqel-yQ2ZqD5WVo4WVo6nA
        )

)

ERROR - 2022-10-17 18:11:35 --> Fomo order_response success:Array
(
    [id] => 100500020221017330869185
    [orderNo] => 1_166_1665997886
    [mode] => HOSTED
    [subject] => Basic
    [description] => On maturity, you will earn your own Bigg shop with up to <b>10%</b> affiliate comm from partner stores. <br><br> <b>2%</b> affiliate pool profit sharing + variable bonus (Next Quarter only)

    [returnUrl] => https://bff.biggworld.co/membership_callback/fomo/fomo_return/166/1
    [backUrl] => https://bff.biggworld.co/usercontrol/franchise_plan
    [notifyUrl] => https://bff.biggworld.co/membership_callback/fomo/notify/166/1
    [currencyCode] => SGD
    [amount] => 2000.00
    [createdAt] => 1665997886
    [status] => CREATED
    [url] => https://ipg.fomopay.net/web/100500020221017330869185?p=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEwMDUwMDAyMDIyMTAxNzMzMDg2OTE4NSIsInNlY3VyaXR5Q29kZSI6ImZjMThhYzNlLTQ5ODktNDI0Yy05NmVkLTZlZTNkNDQ3ZTNiZiIsImlhdCI6MTY2NTk5Nzg4Nn0.Zdmm1uweChTVv9X1Eza-BTJ4jOz-xk3jGARKdyfy9w0TCc99ltziHx4c5KH3BwopM6xIHIrF5nSQxW-yQDCXGOa-N8ND3GJ_o1gHNV7ZAZjKU2h4Ji0LpGlXMUjqJRky6mim3m43u0tfK6LlXoI3Oqiw9OMosEPr2Txlj06iaJw48CdN9mCQV0aHoXQKgTtttSEdWkVzZ8Umv5XM1dt1MmuHNsqaQDsvwxf80P6t-gpdEJwQnr04AlFswiyeZtBHTR_ny0jaRU4I7eJ8tP1h8_5uaK7M9w340Vy7H3cPlZxXpHCtBz1xZqJr7YM9koLgcqel-yQ2ZqD5WVo4WVo6nA
)

ERROR - 2022-10-17 18:11:35 --> membership_exists
ERROR - 2022-10-17 18:11:35 --> Fomo new membership:
ERROR - 2022-10-17 18:11:35 --> Fomo CREATED status Response
ERROR - 2022-10-17 18:11:35 --> Fomo notify final response: Array
(
    [success] => https://bff.biggworld.co/membership/buy_membership/1/fomo
)

ERROR - 2022-10-17 20:18:05 --> 404 Page Not Found: 
