<?php

Route::group(array('prefix' => 'admin'), function()
{

    Route::get('user', function()
    {
        return "test";
    });

    Route::get('sign-in-workbench', array(
        'as'    => 'sign-in-workbench',
        'uses'  => 'Vendor\Admin\Controllers\SessionController@index'
    ));

});