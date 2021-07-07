<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('setting', 'Backend\SettingController@index')->name('setting.index');
    Route::put('setting/update', 'Backend\SettingController@update')->name('setting.update');

   
    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
        Route::get('', 'Backend\DashboardController@index')->name('index');
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'Backend\MenuController@index')->name('index');
        Route::get('/indexnp', 'Backend\MenuController@indexnp')->name('indexnp');
        Route::post('', 'Backend\MenuController@store')->name('store');
        Route::put('', 'Backend\MenuController@update')->name('update');
        Route::get('{menu}', 'Backend\MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'Backend\MenuController@storeSubMenu')->name('store');
            Route::get('{menu}/subMenu/{subMenu}', 'Backend\MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'Backend\MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'Backend\MenuController@storeChildSubMenu')->name('store');
                Route::get('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'Backend\MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/childsubMenuModal', 'Backend\MenuController@childsubMenuModal')->name('component.childmodal');
            });
        });
    });

    /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
        Route::get('', 'Backend\PageController@index')->name('index');
        Route::get('create', 'Backend\PageController@create')->name('create');
        Route::post('', 'Backend\PageController@store')->name('store');
        // Route::get('{page}', 'Backend\PageController@show')->name('show');
        Route::get('{page}/edit', 'Backend\PageController@edit')->name('edit');
        Route::put('{page}', 'Backend\PageController@update')->name('update');
        Route::get('{id}', 'Backend\PageController@destroy')->name('destroy');
    });

    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
        Route::get('', 'Backend\SliderController@index')->name('index');
        Route::get('create', 'Backend\SliderController@create')->name('create');
        Route::post('', 'Backend\SliderController@store')->name('store');
        Route::put('{slider}', 'Backend\SliderController@update')->name('update');
        Route::get('{slider}/edit', 'Backend\SliderController@edit')->name('edit');
        Route::get('{id}', 'Backend\SliderController@destroy')->name('destroy');

    });

    Route::group(['as' => 'category.', 'prefix' => 'category'], function () {
        Route::get('', 'Backend\CategoryController@index')->name('index');
        Route::get('create', 'Backend\CategoryController@create')->name('create');
        Route::post('', 'Backend\CategoryController@store')->name('store');
        Route::put('{category}', 'Backend\CategoryController@update')->name('update');
        Route::get('{category}/edit', 'Backend\CategoryController@edit')->name('edit');
        Route::get('{id}', 'Backend\CategoryController@destroy')->name('destroy');

    });

    Route::group(['as' => 'subcategory.', 'prefix' => 'subcategory'], function () {
        Route::get('', 'Backend\SubCategoryController@index')->name('index');
        Route::get('create', 'Backend\SubCategoryController@create')->name('create');
        Route::post('', 'Backend\SubCategoryController@store')->name('store');
        Route::put('{subcategory}', 'Backend\SubCategoryController@update')->name('update');
        Route::get('{subcategory}/edit', 'Backend\SubCategoryController@edit')->name('edit');
        Route::get('{id}', 'Backend\SubCategoryController@destroy')->name('destroy');

    });

    Route::group(['as' => 'brand.', 'prefix' => 'brand'], function () {
        Route::get('', 'Backend\BrandController@index')->name('index');
        Route::get('create', 'Backend\BrandController@create')->name('create');
        Route::post('', 'Backend\BrandController@store')->name('store');
        Route::put('{brand}', 'Backend\BrandController@update')->name('update');
        Route::get('{brand}/edit', 'Backend\BrandController@edit')->name('edit');
        Route::get('{id}', 'Backend\BrandController@destroy')->name('destroy');

    });

    Route::group(['as' => 'product.', 'prefix' => 'product'], function () {
        Route::get('', 'Backend\ProductController@index')->name('index');
        Route::get('create', 'Backend\ProductController@create')->name('create');
        Route::post('', 'Backend\ProductController@store')->name('store');
        Route::put('{product}', 'Backend\ProductController@update')->name('update');
        Route::get('{product}/edit', 'Backend\ProductController@edit')->name('edit');
        Route::get('{id}', 'Backend\ProductController@destroy')->name('destroy');
        Route::post('productcategory', 'Backend\ProductController@productCategoryAjax')->name('productcategoryajax');

    });

    Route::group(['as' => 'testimonial.', 'prefix' => 'testimonial'], function () {
        Route::get('', 'Backend\TestimonialController@index')->name('index');
        Route::get('create', 'Backend\TestimonialController@create')->name('create');
        Route::post('', 'Backend\TestimonialController@store')->name('store');
        Route::put('{testimonial}', 'Backend\TestimonialController@update')->name('update');
        Route::get('{testimonial}/edit', 'Backend\TestimonialController@edit')->name('edit');
        Route::get('{id}', 'Backend\TestimonialController@destroy')->name('destroy');

    });

    Route::group(['as' => 'deal.', 'prefix' => 'deal'], function () {
        Route::get('', 'Backend\DealController@index')->name('index');
        Route::get('create', 'Backend\DealController@create')->name('create');
        Route::post('', 'Backend\DealController@store')->name('store');
        Route::put('{deal}', 'Backend\DealController@update')->name('update');
        Route::put('', 'Backend\DealController@teamOrder')->name('update.order');
        Route::get('{deal}/edit', 'Backend\DealController@edit')->name('edit');
        Route::get('{id}', 'Backend\DealController@destroy')->name('destroy');
    });
});

Route::get('', 'Frontend\FrontendController@homepage')->name('homepage');
Route::get('about', 'Frontend\FrontendController@about')->name('about');
Route::get('products/{slug}', 'Frontend\FrontendController@getproductbyCategory')->name('products');
Route::get('productdetail/{products}', 'Frontend\FrontendController@productdetailbyCategory')->name('products.detail');
//route for ajax
Route::post('quick-view-product','Frontend\FrontendController@quickViewProduct')->name('quick-view-product');
//
Route::get('all-products/{id}', 'Frontend\FrontendController@getproductbySubCategory')->name('all-products');
Route::post('contact', 'Frontend\FrontendController@sendcontact')->name('send-contact');
Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');


Route::get('/search/','Frontend\FrontendController@searchResult')->name('search');

Route::get('{page}', 'Frontend\FrontendController@page')->name('page.detail');
