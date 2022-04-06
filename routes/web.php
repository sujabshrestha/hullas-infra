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


Route::group(
    [
        'namespace' => 'Auth',

    ],
    function () {

        // Route::get('/createadmin', 'RegistrationController@createadmin')->name('createadmin');

        // Route::get('/register', 'RegistrationController@register')->name('register');
        // Route::post('/register', 'RegistrationController@postRegister')->name('post.register');
        // Route::get('/login', 'LoginController@login')->name('login');
        // Route::post('/login', 'LoginController@postLogin')->name('post.login');

        Route::post('/logout', 'LoginController@logout')->name('logout');
        Route::get('/admin/login', 'LoginController@adminLogin')->name('admin.login');
        Route::post('/admin/login', 'LoginController@adminLoginPost')->name('admin.login.Post');
        Route::get('/admin/forgetpassword', 'LoginController@adminForgetPassword')->name('admin.forgetpassword');
        Route::post('/admin/forgetpassword', 'LoginController@adminForgetPasswordPost')->name('admin.forgetpassword.Post');
        Route::get('/user/activate/{user_id}/{code}', 'LoginController@activate')->name('user.activate');
        Route::get('admin/resetpassword/{email}/{code}', 'LoginController@resetPassword')->name('admin.resetpassword');
        Route::post('admin/resetpassword/', 'LoginController@resetPasswordPost')->name('admin.resetpassword.post');
    }
);

Route::group(
    [
        'namespace' => 'Frontend',
        'as' => 'front.'
    ],
    function () {

        Route::get('/', 'IndexController@home')->name('home');
        Route::get('/about-us', 'IndexController@about')->name('about-us');
        Route::get('/unit/{slug}', 'IndexController@units')->name('unit');
        Route::get('/unit/{post_type}/{slug}', 'IndexController@unitSingle')->name('unitSingle');

        Route::get('/product/category/{id}', 'IndexController@product')->name('productFromCategory');

        Route::get('/allproducts', 'IndexController@allproducts')->name('allproducts');

        Route::get('/product/{slug}', 'IndexController@productSingle')->name('productSingle');

        Route::get('/career', 'IndexController@career')->name('career');

        Route::get('/career/{slug}', 'IndexController@careerSingle')->name('careerSingle');

        Route::get('/blog', 'IndexController@blog')->name('blog');
        Route::get('/blog/{slug}', 'IndexController@blogSingle')->name('blogSingle');

        Route::get('/news/{slug}', 'IndexController@newsSingle')->name('newsSingle');

        Route::get('/whitepaper/{slug}', 'IndexController@whitepaperSingle')->name('whitepaperSingle');

        Route::get('/casestudies/{slug}', 'IndexController@casestudySingle')->name('casestudySingle');
        ###contactus
        Route::get('/contact-us', 'IndexController@contact')->name('contact');
        #####admission
        Route::get('/admission', 'IndexController@admission')->name('admission');
        Route::post('/admissionsubmit', 'IndexController@admissionsubmit')->name('submitAdmission');

        Route::post('/contact', 'IndexController@submitContact')->name('submitContact');

        #####allblogs
        Route::get('/allblogs', 'IndexController@allblogs')->name('allblogs');

        Route::get('/allnews', 'IndexController@allnews')->name('allnews');

        Route::get('/allwhitepapers', 'IndexController@allwhitepapers')->name('allwhitepapers');

        Route::get('/allcasestudies', 'IndexController@allcasestudies')->name('allcasestudies');

        Route::get('/whoweare', 'IndexController@whoweare')->name('whoweare');




        ###appointmentsubmit
        Route::post('/appointmentsubmit', 'AppointmentWebController@store')->name('appointmentSubmit');

        Route::get('/allphilosophy', 'IndexController@allphilosophy')->name('allphilosophy');

        Route::get('/philosophysingle/{slug}', 'IndexController@philosophySingle')->name('philosophySingle');
        // callback
        Route::post('/callbacksubmit', 'IndexController@callbacksubmit')->name('callbacksubmit');

        // offerseminar
        Route::get('/offerandseminar', 'IndexController@offerandseminar')->name('offerandseminar');
        Route::get('/seminarsingle/{id}', 'IndexController@seminarsingle')->name('seminarsingle');


        ###single post
        Route::get('/post/{id}', 'IndexController@singlepost')->name('singlepost');

        #######testomonialpage
        Route::get('/testomonialpage', 'IndexController@testomonialpage')->name('testomonialpage');
        #####albums
        Route::get('/albums', 'IndexController@albums')->name('albums');
        Route::get('/gallery/{id}', 'IndexController@gallery')->name('gallery');

        #####ourteam
        Route::get('/ourteam', 'IndexController@ourteam')->name('ourteam');

        // appointment
        Route::get('/appointment', 'IndexController@appointment')->name('appointment');

        // ourservices
        Route::get('/allservices', 'IndexController@allservices')->name('allservices');
        Route::get('/servicessingle/{slug}', 'IndexController@servicessingle')->name('servicessingle');

        // testpreparation
        Route::get('/testpreparaionsingle/{slug}', 'IndexController@testpreparationsingle')->name('preparationsingle');
        // Study
        Route::get('/studysingle/{slug}', 'IndexController@studysingle')->name('studysingle');
    }
);


Route::group(
    [
        'prefix' => 'backend',
        'as' => 'admin.',
        'namespace' => 'Backend',
        'middleware' => 'adminmiddleware'

    ],
    function () {

        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/search', 'DashboardController@search')->name('search');
        Route::get('/clearview', 'DashboardController@clearview')->name('clearview');
        Route::get('/clearconfig', 'DashboardController@clearconfig')->name('clearconfig');
        Route::get('/clearcache', 'DashboardController@clearcache')->name('clearcache');

        //    post type
        Route::get('/post_type', 'PostTypeController@index')->name('post_type');
        Route::get('/post_type/create', 'PostTypeController@create')->name('post_type.create');
        Route::post('/post_type/store', 'PostTypeController@store')->name('post_type.store');
        Route::get('/post_type/delete/{slug}', 'PostTypeController@destroy')->name('post_type.delete');
        Route::get('/post_type/edit/{slug}', 'PostTypeController@edit')->name('post_type.edit');
        Route::post('/post_type/update', 'PostTypeController@update')->name('post_type.update');
        Route::get('/post_type/order', 'PostTypeController@ordering')->name('post_type.order');
        Route::post('/post_type/order/store', 'PostTypeController@orderStore')->name('post_type.order.store');

        //    gobal post
        Route::get('/post/{post_type}', 'GobalController@index')->name('post');
        Route::get('/post/{post_type}/create', 'GobalController@create')->name('post.create');
        Route::post('/post/{post_type}/store', 'GobalController@store')->name('post.store');
        Route::get('/post/{post_type}/delete/{slug}', 'GobalController@destroy')->name('post.delete');
        Route::get('/post/{post_type}/edit/{slug}', 'GobalController@edit')->name('post.edit');
        Route::post('/post/{post_type}/update', 'GobalController@update')->name('post.update');
        Route::get('/post/{post_type}/order', 'GobalController@ordering')->name('post.order');
        Route::post('/post/{post_type}/order/store', 'GobalController@orderStore')->name('post.order.store');
        Route::post('/post/delete/field_file/{id}', 'GobalController@deleteFieldFile')->name('post.delete.field_file');
        Route::get('/post/{post_type}/trash', 'GobalController@getTrash')->name('post.trash');
        Route::get('/post/{post_type}/log', 'GobalController@log')->name('post.log');
        Route::get('/post/{post_type}/restore/{slug}', 'GobalController@getRestore')->name('post.restore');
        Route::get('/post/{post_type}/forcedelete/{slug}', 'GobalController@forceDelete')->name('post.forcedelete');





        //    custom field
        Route::get('/custom_field', 'CustomFieldController@index')->name('custom_field');
        Route::get('/custom_field/create', 'CustomFieldController@create')->name('custom_field.create');
        Route::post('/custom_field/store', 'CustomFieldController@store')->name('custom_field.store');
        Route::get('/custom_field/delete/{slug}', 'CustomFieldController@destroy')->name('custom_field.delete');
        Route::get('/custom_field/edit/{slug}', 'CustomFieldController@edit')->name('custom_field.edit');
        Route::post('/custom_field/update', 'CustomFieldController@update')->name('custom_field.update');

        Route::get('/custom_field/field', 'CustomFieldController@getField')->name('custom_field.field');
        Route::get('/custom_field/field/delete,{id}', 'CustomFieldController@deleteField')->name('custom_field.field.delete');
        Route::get('/custom_field/{slug}/field_position', 'CustomFieldController@filedPosition')->name('custom_field.field_position');
        Route::post('/custom_field/filed/order/store', 'CustomFieldController@orderStore')->name('custom_field.field.order.store');


        //    User role

        Route::get('/user/role', 'RoleController@userRole')->name('user.role');
        Route::post('/user/role', 'RoleController@userRoleStore')->name('user.role.store');
        Route::get('/user/role/edit/{id}', 'RoleController@userRoleEdit')->name('user.role.edit');
        Route::post('/user/role/update', 'RoleController@userRoleUpdate')->name('user.role.update');
        Route::get('/user/role/delete/{id}', 'RoleController@userRoleDelete')->name('user.role.delete');
        Route::get('/user/role/permission/{id}', 'RoleController@userRolePermission')->name('user.role.permission');
        Route::post('/user/role/permission', 'RoleController@userRolePermissionStore')->name('user.role.permission.store');


        //    User role

        Route::get('/user/permission', 'PermissionController@userPermission')->name('user.permission');
        Route::post('/user/permission', 'PermissionController@userPermissionStore')->name('user.permission.store');
        Route::get('/user/permission/edit/{id}', 'PermissionController@userPermissionEdit')->name('user.permission.edit');
        Route::post('/user/permission/update', 'PermissionController@userPermissionUpdate')->name('user.permission.update');
        Route::get('/user/permission/delete/{id}', 'PermissionController@userPermissionDelete')->name('user.permission.delete');


        //    user create
        Route::get('/user', 'UserController@index')->name('user');
        Route::get('/user/create', 'UserController@create')->name('user.create');
        Route::post('/user/store', 'UserController@store')->name('user.store');
        Route::get('/user/delete/{id}', 'UserController@destroy')->name('user.delete');
        Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
        Route::post('/user/update', 'UserController@update')->name('user.update');
        Route::get('/user/profile', 'UserController@myProfile')->name('user.profile');
        Route::post('/user/profile/update', 'UserController@myProfileUpdate')->name('user.profile.update');


        Route::get('site', 'SiteController@index')->name('site');
        Route::post('site', 'SiteController@update')->name('site.update');

        Route::get('analytic', 'AnalyticController@index')->name('analytic');
        Route::get('analytic/realtime', 'AnalyticController@getRealTimeVisitor')->name('analytic.realtime');

        Route::get('/contacts', 'ContactController@index')->name('contacts');




        //Album
        Route::get('/albums', 'AlbumController@index')->name('albums');
        Route::get('/albums/create', 'AlbumController@add')->name('album.create');
        Route::post('/albums/create', 'AlbumController@store')->name('album.store');
        Route::get('/albums/edit/{slug}', 'AlbumController@edit')->name('album.edit');
        Route::post('/albums/update', 'AlbumController@update')->name('album.update');
        Route::get('/albums/delete/{id}', 'AlbumController@delete')->name('album.delete');


        //Album-Gallery
        Route::get('/album/gallery/{id}', 'AlbumController@gallery')->name('album.gallery');
        Route::get('/album/ajax-get-images/{id}', 'AlbumController@getImages')->name('album.get_images');
        Route::post('/album/ajax-upload-image/{id}', 'AlbumController@uploadImage')->name('album.upload_image');
        Route::get('/album/ajax-delete-image/{id}', 'AlbumController@deleteImage')->name('album.delete_image');




        Route::get('contact', 'ContactController@index')->name('contact');
        Route::get('contact/{id}', 'ContactController@show')->name('contact.show');
        Route::get('contact/delete/{id}', 'ContactController@destroy')->name('contact.delete');

        Route::get('/admissions', 'AdmissionController@index')->name('admissions');
        Route::get('/admission/{id}', 'AdmissionController@show')->name('admission.show');
        Route::get('/admissiondelete/{id}', 'AdmissionController@delete')->name('admission.delete');

        Route::get('/callbacks', 'CallbackController@index')->name('callbacks');
        Route::get('/callback/{id}', 'CallbackController@show')->name('callback.show');
        Route::get('/callbackdelete/{id}', 'CallbackController@delete')->name('callback.delete');


        Route::get('/inquiry', 'AppointmentController@index')->name('inquiry.index');
        Route::get('/inquirydelete/{id}', 'AppointmentController@delete')->name('inquiry.delete');
    }
);
