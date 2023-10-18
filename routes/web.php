<?php

use App\Models\Hagat;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HagatController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\SomayaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\MakeCourseController;
use App\Http\Controllers\TestProductController;
use App\Http\Controllers\About\AboutUsController;
use App\Http\Controllers\CompoController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\NewsController as ControllersNewsController;
use App\Http\Controllers\Test\AboutUsController as TestAboutUsController;
use App\Http\Controllers\USerController as ControllersUSerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// get   post   put    patch    delete

Route::get('/home', function () {
    return view('welcome');// views
});

// Route::get('/compo', CompoController::class);

Route::get('/compo', ComponentController::class);


Route::resources([
    'news' => ControllersNewsController::class ,
    'category' => CategoryController::class,
    'user' => ControllersUSerController::class,
]);
// Route::resource('branch', BranchController::class);
// Route::get('users/all', [UserController::class , 'index']);
// Route::get('users/add', [UserController::class , 'create']);

// Route::get('/ahmed/{age}', function ($age) {
//     echo "ahmed my age is $age";
// })->middleware(['Young:' . config('app.locale')]);


// Route::get('users/{ids}', function (int $ids) {
//     return "this is another userID :: $ids";
// })->name('user_id');

// Route::get('products/all', [ProductController::class , 'show']);


// Route::get('/main/myprofile', function () {
//     return view('profile');
// });
// Route::get('/main/myprofile/projects/1', function () {
//     return "welcome on my profile my project 1";
// })->name('profile.Project');
// Route::get('/main/conatct-us', function () {
//     return view('pages.contactus');
// });
// Route::get('alldataapi', function () {
//     return "froooom web";
// });
// Route::get('facebook/contact', [ContactUsController::class , 'hamada']);
// Route::get('about', [AboutUsController::class , 'we']);

// Route::get('test/about', [TestAboutUsController::class , 'us']);

// Route::get('users/{id}', function ($id) {
//     if($id > 10) {
//         $users = 'asdasd';

//         return view('welcome', compact('users'));
//     } else {
//         return redirect()->route('news.all', ['id'=>99,'data'=>'hamada']);
//     }
// });

// // Route::get('news/all', );
// // Route::get('news/edit', [NewsController::class , 'update']);
// // Route::get('news/add', [NewsController::class , 'create']);
// // Route::get('news/delete', [NewsController::class , 'delete']);

// Route::get('users/user/{userid}', function ($ids) {// $ids = 100
//     return "this is all $ids users :::::";
// });


// Route::prefix('news')->name('news.')->middleware(['Young'])->controller(NewsController::class)->group(function () {
//     Route::get('all/{id}/{data}', 'index')->middleware('throttle:test')->name('all');
//     Route::get('edit', 'update');
//     Route::get('add', 'create')->withoutMiddleware('Young');
//     Route::get('del', 'delete');//news/all/20/ahmed
// });

// Route::fallback(function () {
//     return "this path is wrong";
// });

// Route::get('test/{id}', function ($id) {
//     return view('welcome', compact('id'));
// });

// Route::view('/ahmed/mostafa', 'welcome', ['id' => 33]);

// Route::get('/somaya', [SomayaController::class , 'index']);
// Route::get('products/all', [ProductsController::class , 'index']);
// Route::get('product/add', [ProductsController::class , 'create']);
// Route::post('product/add', [ProductsController::class , 'store']);
// Route::get('delete/product/{id}', [ProductsController::class , 'show']);
// Route::delete('delete/product/{id}', [ProductsController::class , 'destroy']);
// Route::get('delete/product/{id}', [ProductsController::class , 'show']);
// Route::delete('delete/product/{id}', [ProductsController::class , 'destroy']);

// Route::get('myhome', function () {
//     return response(view('welcome'))->cookie('cookieName', 'auklam', 1);
// });


// Route::resource('testProduct', TestProductController::class);


// Route::get('need/course', [MakeCourseController::class , 'create']);
// Route::post('course/request', [MakeCourseController::class , 'store'])->name('course.store');
