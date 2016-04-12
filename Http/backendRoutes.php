<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/pagesextender'], function (Router $router) {
    $router->bind('fields', function ($id) {
        return app('Modules\PagesExtender\Repositories\FieldsRepository')->find($id);
    });
    get('fields', ['as' => 'admin.pagesextender.fields.index', 'uses' => 'FieldsController@index']);
    get('fields/create', ['as' => 'admin.pagesextender.fields.create', 'uses' => 'FieldsController@create']);
    post('fields', ['as' => 'admin.pagesextender.fields.store', 'uses' => 'FieldsController@store']);
    get('fields/{fields}/edit', ['as' => 'admin.pagesextender.fields.edit', 'uses' => 'FieldsController@edit']);
    put('fields/{fields}/edit', ['as' => 'admin.pagesextender.fields.update', 'uses' => 'FieldsController@update']);
    delete('fields/{fields}', ['as' => 'admin.pagesextender.fields.destroy', 'uses' => 'FieldsController@destroy']);
// append

});
