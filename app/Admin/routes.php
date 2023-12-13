<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\LeavesController;
use App\Admin\Controllers\EventController;
use App\Admin\Controllers\EmployeeController;
use App\Admin\Controllers\DepartmentController;
use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\CalendarController;
use App\Admin\Controllers\ApprovalController;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
    // $router->get('/leaves', 'LeaveController@index');
    $router->resource('leaves', LeavesController::class);
    $router->resource('employees', EmployeeController::class);
    $router->resource('departments', DepartmentController::class);
    $router->resource('calendars', CalendarController::class);
    $router->resource('events', EventController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('approvals', ApprovalController::class);
   

});
