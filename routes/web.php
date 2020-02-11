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

// Example Routes
// Route::view('/', 'landing');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });


Route::get('/admin', 'Auth\LoginController@gotoLogin');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('callback');

Route::post('logout', 'Auth\LoginController@logout'); //i added this

Route::prefix('admin')->group(function () {

    Route::get('/login', 'Auth\LoginController@adminLogin')->name('admin.login');


    Route::group(['middleware' => ['role:Level 1|Level 2|Level 3']], function () {
        
        Route::name('admin.')->group(function() {

            Route::get('/home', 'Backend\HomeController@index')->name('home');

            Route::resource('customers', 'UserController')->except('edit');

            Route::resource('products', 'ProductController');

            Route::name('products.')->group(function() {

                Route::prefix('product')->group(function() {

                    Route::resource('product-categories', 'CategoryController');

                    Route::resource('brands', 'BrandController');

                    Route::get('/toggle/{product}', 'ProductController@toggleProduct')->name('toggleProduct');


                });

            });

            Route::resource('orders', 'OrderController');

            Route::name('orders.')->group(function() {

                Route::prefix('order')->group(function() {

                    Route::post('updateStatus/{order}', 'OrderController@updateStatus')->name('updateStatus');

                });

            });

            Route::resource('posts', 'PostController');
            
            Route::resource('logs', 'LogController');
            
            Route::name('posts.')->group(function() {

                Route::prefix('post')->group(function() {

                    Route::resource('post-categories', 'PostCategoryController');

                });

            });

            Route::name('settings.')->group(function() {

                Route::prefix('settings')->group(function() {

                    Route::get('/', 'SettingsController@index')->name('index');

                    Route::post('update', 'SettingsController@update')->name('update');

                    Route::resource('deliveryMethods', 'DeliveryMethodController');

                });

            });

            Route::resource('support', 'SupportController');

            Route::name('support')->group(function() {

                Route::prefix('support')->group(function() {

                    Route::post('list-participants/{id}', 'SupportController@listParticipants')->name('list-participant');

                    Route::post('create-conversation/{id}', 'SupportController@createConversation')->name('create-conversation');

                    Route::post('get-conversation/{id}', 'SupportController@getConversation')->name('get-conversation');

                    Route::post('update-conversation/{id}', 'SupportController@updateConversation')->name('update-conversation');

                    Route::post('get-conversation-msgs/{id}', 'SupportController@getConversationMsgs')->name('get-conversation-msgs');

                    Route::post('send-message/{id}', 'SupportController@sendMessage')->name('send-Message');

                    Route::post('send-custom-message/{id}', 'SupportController@sendCustomMessage')->name('send-custom-message');

                    Route::post('get-message/{type}', 'SupportController@getMessage')->name('get-Message');

                    Route::post('mark-message-read/{id}', 'SupportController@markMessageRead')->name('mark-message-read');

                    Route::post('mark-conv-read/{id}', 'SupportController@markConvRead')->name('mark-conv-read');

                    Route::post('get-unread-count', 'SupportController@getUnreadCount')->name('get-unread-count');

                    Route::post('list-participants/{id}', 'SupportController@listParticipants')->name('list-participant');

                    Route::post('delete-message/{id}', 'SupportController@deleteMessage')->name('delete-message');

                    Route::post('clear-conversation/{id}', 'SupportController@clearConversation')->name('clear-conversation');

                    Route::post('remove-participant/{id}', 'SupportController@removeParticipant')->name('remove-participant');

                    Route::post('list-participants/{id}', 'SupportController@listParticipants')->name('list-participant');

                    Route::post('add-participant-to-conv/{id}', 'SupportController@addParticipantToConv')->name('add-participant-to-conv');

                    Route::post('list-participants/{id}', 'SupportController@listParticipants')->name('list-participant');
                    Route::post('list-participants/{id}', 'SupportController@listParticipants')->name('list-participant');
                    Route::post('list-participants/{id}', 'SupportController@listParticipants')->name('list-participant');

                });

            });

            Route::resource('posts', 'PostController');

            Route::resource('staff', 'StaffController');

            Route::resource('complaints', 'ComplaintController')->except('store');

            Route::resource('roles', 'RoleController');

            Route::post('roles/permission/give', 'RoleController@givePermission')->name('roles.give');

            //Route::get('roles_/allAdmins', 'RoleController@allAdmins')->name('roles.allAdmins');

            Route::post('roles/permission/revoke', 'RoleController@revokePermission')->name('roles.revoke');

            Route::get('/payments', 'PaymentController@index')->name('payments.index');

        });
    });


});

Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('home');

Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/investment', 'HomeController@investment')->name('investment');

Route::get('/board-details', 'HomeController@boardDetails')->name('board.details');




Route::get('/lesson', 'HomeController@lesson')->name('lesson');

Route::get('/terms', 'HomeController@termsOfUse')->name('terms');

Route::get('/privacy-policy', 'HomeController@privacyPolicy')->name('policy');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/lesson/{id}/details', 'HomeController@lessonDetails')->name('lesson.details');

Route::post('/comment/{post}', 'HomeController@comment')->name('comment');

Route::post('/complaints/store', 'ComplaintController@store')->name('complaint');

Route::get('/products/{id}/details', 'HomeController@productDetails')->name('product.details');

Route::get('/buy_products', 'HomeController@productGrid')->name('product-grid');

Route::any('/search', 'HomeController@search')->name('search');

Route::prefix('account')->group(function () {

    Route::get('/overview', 'AccountController@overview')->name('overview');

    Route::get('/profile', 'AccountController@profile')->name('profile');

    Route::post('/profile/update', 'AccountController@updateProfile')->name('updateProfile');

    Route::post('/avatar/update', 'AccountController@avatar')->name('avatar');

    Route::get('/password', 'AccountController@password')->name('password');

    Route::post('/password/update', 'AccountController@updatePassword')->name('updatePassword');

    Route::get('/orders', 'AccountController@orders')->name('order');

});

// Route::prefix('cart')->group(function() {

//     Route::name('cart.')->group(function() {

//         Route::get('/items', 'CartController@index')->name('index');

//         Route::get('/add/{product}', 'CartController@add')->name('add');

//         Route::post('/buy/{product}', 'CartController@buy')->name('buy');

//         Route::post('/adds/{product}', 'CartController@addQty')->name('addQty');

//         Route::get('/remove/{id}', 'CartController@remove')->name('remove');

//         Route::patch('/update/{id}', 'CartController@update')->name('update');

//         Route::get('/checkout', 'CartController@checkout')->name('checkout');

//         Route::get('/checkout/delivery/{type}', 'CartController@deliveryMethod')->name('deliveryMethod');

//         Route::post('/profile-update', 'CartController@updateAddress')->name('updateAddress');
//     });
// });

Route::resource('subscription', 'SubscriptionController');


//GOOGLE LOGIN
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
