<?php

use App\Http\Controllers\control_panel\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
//    $user = User::where('email', 'ukris@example.com')->first();
//    $user->makeVisible('password');
//    $userdd = $user->password;
//    dd($userdd);
//    $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
    return redirect(route('login'));
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::post('isAdmin', [UsersController::class,'isAdmin']);
Route::resource('users', UsersController::class);
Route::resource('products', \App\Http\Controllers\control_panel\ProductController::class);
Route::get('/getProductsData', [\App\Http\Controllers\control_panel\ProductController ::class, 'getData'])->name('products.getData');
Route::get('/getProductsByCategory', [\App\Http\Controllers\control_panel\CategoryController ::class, 'getProductsByCategory'])->name('getProductsByCategory');
Route::resource('categories', \App\Http\Controllers\control_panel\CategoryController  ::class);
