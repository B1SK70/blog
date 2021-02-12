<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librosController;
use App\Http\Controllers\generalController;

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



Route::get('/', [generalController::class, 'inicio']
);

Route::get('/libros', [generalController::class, 'libros']
);

Route::get('/l1', [generalController::class, 'l1']
);

Route::get('/l2', [generalController::class, 'l2']
);

Route::get('/l3', [generalController::class, 'l3']
);

Route::get('/l4', [generalController::class, 'l4']
);

Route::get('/l5', [generalController::class, 'l5']
);

Route::get('/l6', [generalController::class, 'l6']
);




Route::get('/sobremi', [generalController::class, 'sobremi']
);

Route::get('/sugerencias', [generalController::class, 'sugerencias']
);
