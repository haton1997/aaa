<?php

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

Route::get('/', function () {
    return view('frontend.homepage.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Route cho Adminstator
 *
 */
Route::prefix('admin')->group(function (){
//   GOm nhóm các route cho phần admin
    /*
     * URL:authen.com/admin
     * Route đăng nhập mặc định cho admin
    */

    /*
    *-------------------------Route admin authentication-----------------------
    *--------------------------------------------------------------------------
    *--------------------------------------------------------------------------
    */
    Route::get('/','AdminController@index')->name('admin.dasboard');
    /*
     * URL:authen.com/admin/dasboard
     * Route đăng nhập thành công
     * */
    Route::get('/dasboard','AdminController@index')->name('admin.dasboard');
    /*
     * URL:authen.com/admin/register
     * Route trả về view dùng để đăng kí admin
     * */
    Route::get('register','AdminController@create')->name('admin.register');
    /*
     * URL:authen.com/admin/register
     * Phương thức là post
     * Route trả về view dùng để đăng kí admin từ form
     * */
    Route::post('register','AdminController@store')->name('admin.register.store');

    /**
     * Url:authen.com/admin/login
     * Route tra về view đăng nhập admin
     */
    Route::get('login','Auth\Admin\LoginController@login')->name('admin.auth.login');
    /*
     * URL:authen.com/admin/login
     * Phương thức là post
     * Xử lý quá trình đăng nhập admin
    */
    Route::post('login','Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    /*
     * URL:authen.com/admin/logout
     * Phương thức là post
     * Xử lý quá trình đăng xuất admin
    */
    Route::post('logout','Auth\Admin\LoginController@logout')->name('admin.auth.logout');

    /*
   *-------------------------Route admin category shopping-----------------------
   *--------------------------------------------------------------------------
   *--------------------------------------------------------------------------
   */
    Route::get('shop/category','Admin\ShopcategoryController@index');
    Route::get('shop/category/create','Admin\ShopcategoryController@create');
    Route::get('shop/category/{id}/edit','Admin\ShopcategoryController@edit');
    Route::get('shop/category/{id}/delete','Admin\ShopcategoryController@delete');
// PT post để xử lý dữ liệu
    Route::post('shop/category','Admin\ShopcategoryController@store');
    Route::post('shop/category/{id}','Admin\ShopcategoryController@update');
    Route::post('shop/category/{id}/delete','Admin\ShopcategoryController@destroy');

    /*
       *-------------------------Route admin product shopping-----------------------
       *--------------------------------------------------------------------------
       *--------------------------------------------------------------------------
       */
    Route::get('shop/product','Admin\ShopProductController@index');
    Route::get('shop/product/create','Admin\ShopProductController@create');
    Route::get('shop/product/{id}/edit','Admin\ShopProductController@edit');
    Route::get('shop/product/{id}/delete','Admin\ShopProductController@delete');

    // PT post để xử lý dữ liệu
    Route::post('shop/product','Admin\ShopProductController@store');
    Route::post('shop/product/{id}','Admin\ShopProductController@update');
    Route::post('shop/product/{id}/delete','Admin\ShopProductController@destroy');


    Route::get('shop/order',function (){
       return view('admin.content.shop.order.index');

    });
    Route::get('shop/review',function (){
       return view('admin.content.shop.review.index');

    });
//    shop customer
     Route::get('shop/customer',function (){
         return view('admin.content.shop.customer.index');
     });

     Route::get('shop/customer','Admin\CustomerManagerController@index');
     Route::get('shop/customer/create','Admin\CustomerManagerController@create');
     Route::get('shop/customer/{id}/edit','Admin\CustomerManagerController@edit');
     Route::get('shop/customer/{id}/delete','Admin\CustomerManagerController@delete');

     // PT post để xử lý dữ liệu
     Route::post('shop/customer','Admin\CustomerManagerController@store');
     Route::post('shop/customer/{id}','Admin\CustomerManagerController@update');
     Route::post('shop/customer/{id}/delete','Admin\CustomerManagerController@destroy');
//     shop shipper
    Route::get('shop/shipper',function (){
        return view('admin.content.shop.shipper.index');
    });

    Route::get('shop/shipper','Admin\ShipperManagerController@index');
    Route::get('shop/shipper/create','Admin\ShipperManagerController@create');
    Route::get('shop/shipper/{id}/edit','Admin\ShipperManagerController@edit');
    Route::get('shop/shipper/{id}/delete','Admin\ShipperManagerController@delete');

    // PT post để xử lý dữ liệu
    Route::post('shop/shipper','Admin\ShipperManagerController@store');
    Route::post('shop/shipper/{id}','Admin\ShipperManagerController@update');
    Route::post('shop/shipper/{id}/delete','Admin\ShipperManagerController@destroy');

//    Shop seller
    Route::get('shop/seller',function (){
        return view('admin.content.shop.seller.index');

    });
    Route::get('shop/seller','Admin\SellerManagerController@index');
    Route::get('shop/seller/create','Admin\SellerManagerController@create');
    Route::get('shop/seller/{id}/edit','Admin\SellerManagerController@edit');
    Route::get('shop/seller/{id}/delete','Admin\SellerManagerController@delete');

    // PT post để xử lý dữ liệu
    Route::post('shop/seller','Admin\SellerManagerController@store');
    Route::post('shop/seller/{id}','Admin\SellerManagerController@update');
    Route::post('shop/seller/{id}/delete','Admin\SellerManagerController@destroy');
//    Brand
     Route::get('shop/brand',function (){
           return view('admin.content.shop.brand.index');

        });
    Route::get('shop/brand','Admin\ShopBrandController@index');
    Route::get('shop/brand/create','Admin\ShopBrandController@create');
    Route::get('shop/brand/{id}/edit','Admin\ShopBrandController@edit');
    Route::get('shop/brand/{id}/delete','Admin\ShopBrandController@delete');

    // PT post để xử lý dữ liệu
    Route::post('shop/brand','Admin\ShopBrandController@store');
    Route::post('shop/brand/{id}','Admin\ShopBrandController@update');
    Route::post('shop/brand/{id}/delete','Admin\ShopBrandController@destroy');
//     statistic
     Route::get('shop/statistic',function (){
           return view('admin.content.shop.statistic.index');

        });
     Route::get('shop/product/order',function (){
           return view('admin.content.shop.adminorder.index');
        });
     /*
      *-------------------------Route admin nội dung (content)-----------------------
      *--------------------------------------------------------------------------
      *--------------------------------------------------------------------------
      */
    Route::get('content/category','Admin\ContentCategoryController@index');
    Route::get('content/category/create','Admin\ContentCategoryController@create');
    Route::get('content/category/{id}/edit','Admin\ContentCategoryController@edit');
    Route::get('content/category/{id}/delete','Admin\ContentCategoryController@delete');
// PT post để xử lý dữ liệu
    Route::post('content/category','Admin\ContentCategoryController@store');
    Route::post('content/category/{id}','Admin\ContentCategoryController@update');
    Route::post('content/category/{id}/delete','Admin\ContentCategoryController@destroy');



//    content post

    Route::get('content/post','Admin\ContentPostController@index');
    Route::get('content/post/create','Admin\ContentPostController@create');
    Route::get('content/post/{id}/edit','Admin\ContentPostController@edit');
    Route::get('content/post/{id}/delete','Admin\ContentPostController@delete');
// PT post để xử lý dữ liệu
    Route::post('content/post','Admin\ContentPostController@store');
    Route::post('content/post/{id}','Admin\ContentPostController@update');
    Route::post('content/post/{id}/delete','Admin\ContentPostController@destroy');

//content page

    Route::get('content/page','Admin\ContentPageController@index');
    Route::get('content/page/create','Admin\ContentPageController@create');
    Route::get('content/page/{id}/edit','Admin\ContentPageController@edit');
    Route::get('content/page/{id}/delete','Admin\ContentPageController@delete');
// PT post để xử lý dữ liệu
    Route::post('content/page','Admin\ContentPageController@store');
    Route::post('content/page/{id}','Admin\ContentPageController@update');
    Route::post('content/page/{id}/delete','Admin\ContentPageController@destroy');



//  Content tags
    Route::get('content/tag','Admin\ContentTagController@index');
    Route::get('content/tag/create','Admin\ContentTagController@create');
    Route::get('content/tag/{id}/edit','Admin\ContentTagController@edit');
    Route::get('content/tag/{id}/delete','Admin\ContentTagController@delete');
// PT post để xử lý dữ liệu
    Route::post('content/tag','Admin\ContentTagController@store');
    Route::post('content/tag/{id}','Admin\ContentTagController@update');
    Route::post('content/tag/{id}/delete','Admin\ContentTagController@destroy');


    /*
      *-------------------------Route admin Menu-----------------------
      *--------------------------------------------------------------------------
      *--------------------------------------------------------------------------
      */
//    menu

    Route::get('menu','Admin\MenuController@index');
    Route::get('menu/create','Admin\MenuController@create');
    Route::get('menu/{id}/edit','Admin\MenuController@edit');
    Route::get('menu/{id}/delete','Admin\MenuController@delete');
// PT post để xử lý dữ liệu
    Route::post('menu','Admin\MenuController@store');
    Route::post('menu/{id}','Admin\MenuController@update');
    Route::post('menu/{id}/delete','Admin\MenuController@destroy');

//    menu-items

    Route::get('menuitems','Admin\MenuItemsController@index');
    Route::get('menuitems/create','Admin\MenuItemsController@create');
    Route::get('menuitems/{id}/edit','Admin\MenuItemsController@edit');
    Route::get('menuitems/{id}/delete','Admin\MenuItemsController@delete');
// PT post để xử lý dữ liệu
    Route::post('menuitems','Admin\MenuItemsController@store');
    Route::post('menuitems/{id}','Admin\MenuItemsController@update');
    Route::post('menuitems/{id}/delete','Admin\MenuItemsController@destroy');


    /*
      *-------------------------Route admin users-----------------------
      *--------------------------------------------------------------------------
      *--------------------------------------------------------------------------
      */
    Route::get('users',function (){
        return view('admin.content.users.index');
    });

    Route::get('users','Admin\AdminManagerController@index');
    Route::get('users/create','Admin\AdminManagerController@create');
    Route::get('users/{id}/edit','Admin\AdminManagerController@edit');
    Route::get('users/{id}/delete','Admin\AdminManagerController@delete');
// PT post để xử lý dữ liệu
    Route::post('users','Admin\AdminManagerController@store');
    Route::post('users/{id}','Admin\AdminManagerController@update');
    Route::post('users/{id}/delete','Admin\AdminManagerController@destroy');
    /*
         *-------------------------Route admin media-----------------------
         *--------------------------------------------------------------------------
         *--------------------------------------------------------------------------
         */
    Route::get('media',function (){
        return view('admin.content.media.index');
    });

    /*
         *-------------------------Route admin Global setting-----------------------
         *--------------------------------------------------------------------------
         *--------------------------------------------------------------------------
         */
    Route::get('config',function (){
        return view('admin.content.config.index');
    });

    Route::get('config','Admin\ConfigController@index');
// PT post để xử lý dữ liệu
    Route::post('config','Admin\ConfigController@store');

    /*
         *-------------------------Route admin Newletters-----------------------
         *--------------------------------------------------------------------------
         *--------------------------------------------------------------------------
         */
    Route::get('newletters',function (){
        return view('admin.content.newletters.index');
    });

    /*
         *-------------------------Route admin Banners-----------------------
         *--------------------------------------------------------------------------
         *--------------------------------------------------------------------------
         */
    Route::get('banners',function (){
        return view('admin.content.banners.index');
    });
    /*
         *-------------------------Route admin Contact-----------------------
         *--------------------------------------------------------------------------
         *--------------------------------------------------------------------------
         */
    Route::get('contact',function (){
        return view('admin.content.contact.index');
    });
    /*
         *-------------------------Route admin Email-----------------------
         *--------------------------------------------------------------------------
         *--------------------------------------------------------------------------
         */
    Route::get('email/inbox',function (){
        return view('admin.content.email.inbox.index');
    });
    Route::get('email/draft',function (){
        return view('admin.content.email.draft.index');
    });
    Route::get('email/send',function (){
        return view('admin.content.email.send.index');
    });


});
Route::prefix('shipper')->group(function (){
//    GOm nhóm các route cho phần shipper
    /*
     * URL:authen.com/shipper
     * Route đăng nhập mặc định cho shipper
    */
    Route::get('/','ShipperController@index')->name('shipper.dasboard');
    /*
     * URL:authen.com/shipper/dasboard
     * Route đăng nhập thành công
     * */
    Route::get('/dasboard','ShipperController@index')->name('shipper.dasboard');
    /*
    * URL:authen.com/shipper/register
    * Route trả về view dùng để đăng kí shipper
    * */
    Route::get('register','ShipperController@create')->name('shipper.register');
    /*
     * URL:authen.com/shipper/register
     * Phương thức là post
     * Route trả về view dùng để đăng kí shipper từ form
     * */
    Route::post('register','ShipperController@store')->name('shipper.register.store');
    /**
     * Url:authen.com/shipper/login
     * Route tra về view đăng nhập shipper
     */
    Route::get('login','Auth\Shipper\LoginController@login')->name('shipper.auth.login');
    /*
     * URL:authen.com/shipper/login
     * Phương thức là post
     * Xử lý quá trình đăng nhập shipper
    */
    Route::post('login','Auth\Shipper\LoginController@loginShipper')->name('shipper.auth.loginShipper');
    /*
     * URL:authen.com/shipper/logout
     * Phương thức là post
     * Xử lý quá trình đăng xuất shipper
    */
    Route::post('logout','Auth\Shipper\LoginController@logout')->name('shipper.auth.logout');

});
Route::prefix('seller')->group(function (){
//    GOm nhóm các route cho phần seller
    /*
     * URL:authen.com/seller
     * Route đăng nhập mặc định cho seller
    */
    Route::get('/','SellerController@index')->name('seller.dasboard');
    /*
     * URL:authen.com/seller/dasboard
     * Route đăng nhập thành công
     * */
    Route::get('/dasboard','SellerController@index')->name('seller.dasboard');
    /*
    * URL:authen.com/seller/register
    * Route trả về view dùng để đăng kí seller
    * */
    Route::get('register','SellerController@create')->name('seller.register');
    /*
     * URL:authen.com/seller/register
     * Phương thức là post
     * Route trả về view dùng để đăng kí seller từ form
     * */
    Route::post('register','SellerController@store')->name('seller.register.store');
    /**
     * Url:authen.com/seller/login
     * Route tra về view đăng nhập seller
     */
    Route::get('login','Auth\Seller\LoginController@login')->name('seller.auth.login');
    /*
     * URL:authen.com/seller/login
     * Phương thức là post
     * Xử lý quá trình đăng nhập seller
    */
    Route::post('login','Auth\Seller\LoginController@loginSeller')->name('seller.auth.loginSeller');
    /*
     * URL:authen.com/seller/logout
     * Phương thức là post
     * Xử lý quá trình đăng xuất seller
    */
    Route::post('logout','Auth\Seller\LoginController@logout')->name('seller.auth.logout');

});
