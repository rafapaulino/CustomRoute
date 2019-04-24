<?php

namespace rafapaulino\CustomRoute;

use Illuminate\Support\Facades\Route;

class CustomRoute
{
    public function create($name, $middleware = 'auth')
    {
        $controller = ucfirst($name) . 'Controller';
        Route::get($name, $controller . '@index')->name($name . '.index')->middleware($middleware);
        Route::post($name . '/store', $controller . '@store')->name($name . '.store')->middleware($middleware);
        Route::get($name . '/create', $controller . '@create')->name($name . '.create')->middleware($middleware);
        Route::get($name . '/datatables', $controller . '@datatables')->name($name . '.datatables')->middleware($middleware);
        Route::get($name . '/show/{id}', $controller . '@show')->name($name . '.show')->middleware($middleware);
        Route::get($name . '/edit/{id}', $controller . '@edit')->name($name . '.edit')->middleware($middleware);
        Route::post($name . '/update/{id}', $controller . '@update')->name($name . '.update')->middleware($middleware);
        Route::get($name . '/destroy/{id}', $controller . '@destroy')->name($name . '.destroy')->middleware($middleware);
    }
}