<?php
/*
 * Route List
 * add route this bellow
 */
use Core\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);