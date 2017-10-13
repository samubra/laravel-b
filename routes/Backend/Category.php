<?php

/**
 * All route names are prefixed with 'admin.category'.
 */
Route::group([
    'prefix'     => 'category',
    'as'         => 'category.',
    'namespace'  => 'Category',
], function () {

    /*
     * User Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsRole:1',
    ], function () {
        Route::get('index','CategoriesController@index')->name('index');
        Route::post('getdata','CategoryTableController')->name('get');

        Route::post('edit/{id}',function($id){
            return $id;
        })->name('edit');
        Route::post('delete/{id}',function($id){
            return $id;
        })->name('destroy');
    });
});
