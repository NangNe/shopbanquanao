<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// frontend

Route::get('/','HomeController@index');

Route::get('/trang-chu','HomeController@index');
Route::get('/product','HomeController@index1');
Route::post('/tim-kiem','HomeController@search');

// Sản phẩm theo danh mục, thương hiệu


Route::get('/danh-muc-san-pham/{slug_category_product}','CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_slug}','BrandProduct@show_brand_home');
// chi tiet san pham
Route::get('/chi-tiet-san-pham/{product_slug}','ProductController@details_product');



// endfronend


// backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_drashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::post('/save-category-product','CategoryProduct@save_category_product');

Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');

Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');


//Brand Product
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');
Route::post('/save-brand-product','BrandProduct@save_brand_product');

// cau 7 brand

Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');

// cau 9. tao chuc nang them và liệt kê
Route::get('/add-product','ProductController@add_product');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
// Route::post('/admin-dashboard/{count_product}','AdminController@show_drashboard');

// Route::get('/all-product','ProductController@all_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
// cau 11 sua xoa
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/chi-tiet-san-pham/{product_slug}','ProductController@details_product');

// cau 15 gio hang
Route::post('/save-cart','CartController@save_cart');

// cau 16
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
// thu nghiem
// cau 17. thanh toan checkout
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::post('/add-customer','CheckoutController@add_customer');

Route::get('/checkout','CheckoutController@checkout');

Route::post('/login-customer','CheckoutController@login_customer');

Route::get('/logout-checkout','CheckoutController@logout_checkout');

Route::post('/select-delivery-home','CheckoutController@select_delivery_home');

Route::post('/calculate-fee','CheckoutController@calculate_fee');

Route::get('/del-fee','CheckoutController@del_fee'); 

Route::post('/confirm-order','CheckoutController@confirm_order');
// cau 19
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');

Route::get('/payment','CheckoutController@payment');
// cau 20
Route::post('/order-place','CheckoutController@order_place');


Route::post('/update-order/{order_id}','CheckoutController@update_order');
// cau 23 cai dat user
Route::get('/taikhoan','CheckoutController@user_setting');

Route::get('/view-order-user/{orderId}','CheckoutController@view_order_user');

Route::get('/contact','HomeController@contact');


// bo sung cau cap nhat user
///cap-nhat-user
Route::get('/cap-nhat-user','HomeController@get_customer');
Route::post('/update-user','HomeController@update_user');

Route::get('/cap-nhat-pass','HomeController@show_update_pass');
Route::post('/update_pass_save','HomeController@update_pass_saver');

// gửi email quên mật khẩu
Route::get('/show-pass','HomeController@show_pass');
Route::get('/quen-mat-khau','HomeController@quen_mat_khau');
Route::post('/recover-pass','HomeController@recover_pass');
Route::get('/update-new-pass','HomeController@update_new_pass');
Route::post('/reset-new-pass','HomeController@reset_new_pass');

// cau 30 thong ke don hang theo ngay thang nam

Route::get('/found-order-day','AdminController@show_order_day');
Route::get('/found-order-month','AdminController@show_order_month');
Route::get('/found-order-weed','AdminController@show_order_week');
// multi-email
Route::get('/multi-email','AdminController@show_multi_email');
Route::get('/send-mail','AdminController@send_mail');
//delete don hang
// Route::get('/delete-order/{order_id}','CheckoutController@delete_order');

// cart- ajax
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/gio-hang','CartController@gio_hang');
Route::get('/del-product/{session_id}','CartController@delete_product');
Route::get('/del-all-product','CartController@delete_all_product');
Route::post('/update-cart','CartController@update_cart');

//Coupon
Route::post('/check-coupon','CartController@check_coupon');
Route::get('/unset-coupon','CouponController@unset_coupon');
Route::get('/insert-coupon','CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}','CouponController@delete_coupon');
Route::get('/list-coupon','CouponController@list_coupon');
Route::post('/insert-coupon-code','CouponController@insert_coupon_code');

//Delivery
Route::get('/delivery','DeliveryController@delivery');
Route::post('/select-delivery','DeliveryController@select_delivery');
Route::post('/insert-delivery','DeliveryController@insert_delivery');
Route::post('/select-feeship','DeliveryController@select_feeship');
Route::post('/update-delivery','DeliveryController@update_delivery');

//Order
Route::get('/delete-order/{order_code}','OrderController@order_code');
Route::get('/print-order/{checkout_code}','OrderController@print_order');
Route::get('/manage-order','OrderController@manage_order');
Route::get('/view-order/{order_code}','OrderController@view_order');
Route::post('/update-order-qty','OrderController@update_order_qty');
Route::post('/update-qty','OrderController@update_qty');

Route::get('/all-customer','CustomersController@all_customer');
Route::get('/delete-customer/{customer_id}','CustomersController@delete_customer');