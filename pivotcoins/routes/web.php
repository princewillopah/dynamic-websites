<?php

//visitor
Route::get('/','Frontend@home')->name('homepage');
Route::get('/about','Frontend@about')->name('about');
Route::get('/marketing','Frontend@marketing')->name('marketing');
Route::get('/contact','Frontend@contact')->name('contact');
Route::post('/contact','Frontend@store')->name('contact.store');
Route::get('/referral','Frontend@referral')->name('referral');
Route::get('/investment-plans','Frontend@plans')->name('plans');
Route::get('/terms','Frontend@terms')->name('terms');
Route::get('/faq','Frontend@faq')->name('faq');
//-------------all registered user including admin----------------------------------------------------------------------
Auth::routes(['verify' => true]);
// Auth::routes();
//----------------EMAILS VIEW TEMPLATES----------------------------------------------------------------
Route::get('/verification','EmailController@verification')->name('verification');
Route::get('/payout','EmailController@payout')->name('payout');

//---------------------members----------------------------------------------------


// Route::get('/location', 'UsersController@location')->name('location');
Route::get('/home', 'HomeController@index')->name('home');//takes u to user dashboard

Route::get('/home/deposit', 'MembersController@deposit')->name('deposit');
Route::get('/home/withdrawal', 'MembersController@withdrawal')->name('withdrawal');

Route::get('/home/deposits', 'MembersController@all_deposits')->name('all.deposits');
Route::get('/home/withdrawals', 'MembersController@all_withdrawals')->name('all.withdrawals');
Route::get('/home/support', 'MembersController@support')->name('support');
Route::post('/home/support', 'MembersController@support_store')->name('support.store');//email
// Route::get('/deposit-notification', 'MembersController@support')->name('support');
Route::post('/home/withdrawal-request', 'MembersController@withdrawal_request_store')->name('withdrawal.request.store');
Route::post('/home/support/deposit-notification', 'MembersController@deposit_notification_store')->name('deposit.notification.store');//email
Route::get('/profile', 'MembersController@profile')->name('profile');
Route::get('/profile/edit', 'MembersController@profileEdit')->name('profileEdit');
// Route::put('/profile/{$id}/update', 'MembersController@profileupdate')->name('profileupdate');
Route::put('/profile/update', 'MembersController@profileupdate')->name('profileupdate');




Route::get('/user/next-of-kin', 'MembersController@nextofkin')->name('nxtfkin');
Route::get('/user/{user_id}/next-of-kin/{nfk_id}', 'MembersController@nextofkinedit')->name('nxtfkinedit');
Route::put('/user/{user_id}/next-of-kin/{nfk_id}', 'MembersController@nextofkin_store')->name('nextofkin.store');
// Route::get('/member/{user_id}/deposits', 'UsersController@alldeposite')->name('alldeposite');


//---------------admin area--------------------------------------------------------------------
Route::get('/dashboard', 'UsersController@dashboard')->name('dashboard');//admin
Route::resource('/members', 'UsersController');


Route::get('/users/{user}/deposit/{deposit}/make-active',  'UsersController@makeActive')->name('make.active');
Route::get('/users/{user}/deposit/{deposit}/make-inactive', 'UsersController@makeInactive')->name('make.inactive');
Route::get('/users/{user}/deposit/{deposit}/pay',  'UsersController@pay')->name('pay');
Route::get('/users/{user}/deposit/{deposit}/cancel', 'UsersController@cancel')->name('cancel');
Route::get('/users/all-deposits', 'UsersController@alldeposits')->name('alldeposits');
Route::get('/users/all-withdrawals', 'UsersController@allwithdrawals')->name('allwithdrawals');
Route::get('/members/{userid}/deposit', 'UsersController@member_deposit_index')->name('member.deposit.index');
Route::post('/user/{user}/store', 'UsersController@member_deposit_store')->name('member.deposit.store');
Route::post('/user/{user}/withdraw', 'UsersController@member_withdraw_store')->name('member.withdrawal.store');//

Route::put('/members/{userid}/deposit/{depositid}/update', 'UsersController@member_deposit_update')->name('member.deposit.update');
Route::put('/members/{userid}/withdrawl/{withdrawalid}/update', 'UsersController@member_withdrawal_update')->name('member.withdrawal.update');

Route::delete('/members/{userid}/deposit/{depositid}/delete', 'UsersController@member_deposit_destroy')->name('member.deposit.destroy');
Route::delete('/members/{userid}/withdrawal/{withdrawid}/delete', 'UsersController@member_withdrawal_destroy')->name('member.withdrawal.destroy');

Route::delete('/members/{userid}', 'UsersController@destroy')->name('destroy');




// Route::get('/dashboard', 'UsersController@dashboard')->name('dashboard');//admin
// Route::resource('/members', 'UsersController');
// Route::get('/members/{userid}/deposit', 'UsersController@member_deposit_index')->name('member.deposit.index');
// Route::post('/members/{userid}/store', 'UsersController@member_deposit_store')->name('member.deposit.store');
// Route::put('/members/{userid}/deposit/{depositid}/update', 'UsersController@member_deposit_update')->name('member.deposit.update');
// Route::delete('/members/{userid}/deposit/{depositid}/delete', 'UsersController@member_deposit_destroy')->name('member.deposit.destroy');

// Route::resource('/user.deposits', 'UsersController');

// Route::resource('/balance', 'BalanceController');
Route::resource('/withdrawal', 'WithdrawalController');
Route::resource('/deposit', 'DepositController');
Route::resource('/next-of-kin', 'NextofkinController');






