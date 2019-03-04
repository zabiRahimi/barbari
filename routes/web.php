<?php


Route::get('/', 'IndexController@show');

// driver
Route::get('/driver_first', 'DriverController@show');
Route::get('/driver_first2', 'DriverController@show2');

Route::post('/save_driver1', 'DriverController@save_driver1');
Route::get('/driver_panel','DriverController@driver_panel')->middleware(['cheklogindriver' ]);
Route::get('/close_driver_panel', 'DriverController@close_driver_panel');
Route::post('/login_driver', 'DriverController@login_driver');
Route::post('/show_one_bar','DriverController@show_one_bar')->middleware(['cheklogindriver' ]);
Route::post('/show_all_bar','DriverController@show_all_bar')->middleware(['cheklogindriver' ]);

Route::get('/profaile_driver','DriverController@profaile_driver')->middleware(['cheklogindriver' ]);
Route::get('/car_driver','DriverController@car_driver')->middleware(['cheklogindriver' ]);
Route::get('/data_driver','DriverController@data_driver')->middleware(['cheklogindriver' ]);
Route::post('/edit_driver','DriverController@edit_driver')->middleware(['cheklogindriver' ]);
Route::post('/sabt_edit_car','DriverController@sabt_edit_car')->middleware(['cheklogindriver' ]);

//barbari
Route::get('/barbari_first', 'BarbariController@show');
Route::get('/barbari_first2', 'BarbariController@show2');

Route::post('/save_barbari1', 'BarbariController@save_barbari1');
Route::get('/barbari_panel','BarbariController@barbari_panel')->middleware(['chekloginbarbari' ]);
Route::get('/close_barbari_panel', 'BarbariController@close_barbari_panel');
Route::post('/login_barbari', 'BarbariController@login_barbari');
Route::get('/show_all_bar_barabri','BarbariController@show_all_bar_barabri')->middleware(['chekloginbarbari' ]);
Route::get('/show_cars_barbari','BarbariController@show_all_car_barbari')->middleware(['chekloginbarbari' ]);
Route::get('/profile_barbari','BarbariController@profile_barbari')->middleware(['chekloginbarbari' ]);
Route::get('/show_one_bar_barbari/{id}','BarbariController@show_one_bar_barbari')->middleware(['chekloginbarbari' ]);
Route::post('/edit_bar', 'BarbariController@edit_bar');

//bar
Route::post('/save_bar', 'BarController@save_bar');
