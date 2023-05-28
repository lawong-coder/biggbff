<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['store'] = "store/login";
$route['404_override'] = 'admincontrol/page_404';
$route['product/views/(:any)/(:any)'] = "product/views/$1/$2";
$route['product/clicks/(:any)/(:any)'] = "product/clicks/$1/$2";
$route['product/thankyou/(:any)'] = "product/thankyou/$1";
$route['product/payment/(:any)/(:any)'] = "product/payment/$1/$2";
$route['product/notify/(:any)'] = "product/notify/$1";
$route['product/(:any)/(:any)'] = "product/index/$1/$2";
$route['usercontrol/contact-us'] = "usercontrol/contact_us";
$route['usercontrol/wallet/withdraw'] = "usercontrol/wallet_withdraw";
$route['admincontrol/wallet/withdraw'] = "admincontrol/wallet_withdraw";
$route['admincontrol/wallet/withdraw/(:any)'] = "admincontrol/wallet_withdraw_detail/$1";
$route['resetpassword/(:any)'] = "usercontrol/resetpassword/$1";
$route['auth/(:any)'] = "usercontrol/auth/$1";
$route['term-condition'] = "common/term_condition";
$route['form/notify/(:any)'] = "form/notify/$1";
$route['form/bank_transfer_notify/(:any)'] = "form/bank_transfer_notify/$1";
$route['form/thankyou/(:any)'] = "form/thankyou/$1";
$route['form/checkout_cart'] = "form/checkoutCart";
$route['form/checkout_shipping'] = "form/checkoutShipping";
$route['form/confirm_order'] = "form/confirm_order";
$route['form/ajax_login'] = "form/ajax_login";
$route['form/ajax_register'] = "form/ajax_register";
$route['form/cart'] = "form/cart";
$route['form/add_coupon'] = "form/add_coupon";
$route['form/paypal_cancel'] = "form/paypal_cancel";
$route['form/paypal_notify/(:any)'] = "form/paypal_notify/$1";
$route['form/(:any)/(:any)'] = "form/index/$1/$2";
$route['store'] = "store/index";
$route['store/mini_cart'] = "store/mini_cart";
$route['store/notify'] = "store/notify";
$route['store/paypal_cancel'] = "store/paypal_cancel";
$route['store/checkout_shipping'] = "store/checkout_shipping";
$route['store/checkout_confirm'] = "store/checkout_confirm";
$route['store/payment_confirmation'] = "store/payment_confirmation";
$route['store/getState'] = "store/getState";
$route['store/checkout-cart'] = "store/checkoutCart";
$route['store/about'] = "store/about";
$route['store/profile'] = "store/profile";
$route['store/order'] = "store/order";
$route['store/wishlist'] = "store/wishlist";
$route['store/login'] = "store/login";
$route['store/forgot'] = "store/forgot";
$route['store/vieworder/(:any)'] = "store/vieworder/$1";
$route['store/shipping'] = "store/shipping";
$route['store/logout'] = "store/logout";
$route['store/contact'] = "store/contact";
$route['store/policy'] = "store/policy";
$route['store/cart'] = "store/cart";
$route['store/toggle_wishlist'] = "store/toggle_wishlist";
$route['store/callbackfunctions/(:any)/(:any)'] = "store/call_payment_function/$1/$2";
$route['store/callbackfunctions/(:any)/(:any)/(:any)'] = "store/call_payment_function/$1/$2/$3";
$route['store/callbackfunctions/(:any)/(:any)/(:any)/(:any)'] = "store/call_payment_function/$1/$2/$3/$4";

//$route['membership_callback/(:any)'] = "membership/call_payment_function/$1";
$route['membership_callback/(:any)/(:any)'] = "membership/call_payment_function/$1/$2";
$route['membership_callback/(:any)/(:any)/(:any)'] = "membership/call_payment_function/$1/$2/$3";
$route['membership_callback/(:any)/(:any)/(:any)/(:any)'] = "membership/call_payment_function/$1/$2/$3/$4";


$route['store/checkout'] = "store/checkout";
$route['store/get_payment_mothods'] = "store/get_payment_mothods";
$route['store/ajax_login'] = "store/ajax_login";
$route['store/add_coupon'] = "store/add_coupon";
$route['store/add_to_cart'] = "store/add_to_cart";
$route['store/thankyou/(:any)'] = "store/thankyou/$1";
$route['store/confirm_payment'] = "store/confirm_payment";
$route['store/confirm_order'] = "store/confirm_order";
$route['store/ajax_register'] = "store/ajax_register";
$route['store/(:any)/product/(:any)'] = "store/product/$1/$2";
$route['store/product/(:any)'] = "store/product/$1/$2";
$route['store/category'] = "store/category";
$route['store/category/(:any)'] = "store/category/$1";
$route['store/(:any)'] = "store/index/$1";

$route['cronjob/expire_package_notification'] = "CronJob/expire_package_notification";

$route['admin'] = "AuthController/admin_login";
$route['get_state'] = "usercontrol/getState";
$route['login'] = "AuthController/user_login";
$route['register/(:any)'] = "AuthController/user_register/$1";
$route['register'] = "AuthController/user_register";
$route['privacy-policy'] = "AuthController/privacy_policy";
$route['forget-password'] = "AuthController/user_forget_password";

$route['default_controller'] = "AuthController/user_index";
// require_once APPPATH . 'cache/routes.php';
$route['backend/(:any)'] = "Pagebuilder/custom/$1";

$route['page/(:any)'] = "AuthController/page/$1";
$route['p/(:any)'] = "AuthController/user_index/$1";


$route['faq'] = "AuthController/user_index/faq";
$route['contact'] = "AuthController/user_index/contact";
$route['login'] = "AuthController/user_index/login";
$route['register'] = "AuthController/user_index/register";
$route['terms-of-use'] = "AuthController/user_index/terms-of-use";
$route['forget-password'] = "AuthController/user_index/forget-password";


$route['bigcommerce.js'] = "integration/bigcommerce";
$route['integration'] = "integration/index";
$route['firstsetting'] = "firstsetting/index";
$route['incomereport'] = "incomereport/index";
$route['update'] = "Updatecontrol/index";

$route['activateusercontrol/(:any)/buy_membership/(:any)'] = "ActivateUserControl/buy_membership/$1/$2";
$route['activateusercontrol/(:any)'] = "ActivateUserControl/index/$1";
$route['get_plan'] = "admincontrol/getPlan";
$route['get_plan_price_formatted'] = "admincontrol/getPlanPriceFormatted";
$route['activateusercontrol/fomo_payment/(:any)'] = "ActivateUserControl/fomo_payment/$1";

$route['(:any)'] = "RedirectTracking/redirect_tracking_url/$1";