<?php
use App\Http\Controllers\UserdataController;
use App\Http\Controllers\GraphController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Auth\ForgotPasswordController;
// use App\Http\Controllers\Auth\ResetPasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes(['verify' => true]);


Route::get('/adminpanel', function () {
    return view('adminpanel');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('myroute',[UserdataController::class,'test']);

// Route::get('/login', function () {
//        dump('ABC');
//         dd('Test');//dump and die
//         return view('login');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('register-process',[UserdataController::class, 'register'])
->name('register-process');


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('login-process',[UserdataController::class, 'login'])
->name('login-process');


// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');



// Route::get('/shortest-path', function () {
//     return view('graph');
// });

// Route::get('/graph', function () {
//     return view('graph');
// });

// Route::get('/shortest-path', [GraphController::class, 'getShortestPath']);

// Route::get('/graph', [GraphController::class, 'showGraphWithShortestPath']);

// Route to display the graph page
// Route::get('/graph', [GraphController::class, 'showGraphWithShortestPath']);

// Route to get the shortest path data as JSON
// Route::get('/shortest-path', [GraphController::class, 'getShortestPath']);


// Route::get('/prim', [App\Http\Controllers\GraphController::class, '']);

// Route::get('/prim', [App\Http\Controllers\GraphController::class, 'primsAlgorithmm']);
// use App\Http\Controllers\GraphController;

Route::get('/graph-form', [GraphController::class, 'showForm'])->name('showForm');
Route::post('/generate-graph', [GraphController::class, 'generateGraph'])->name('generateGraph');


?>





