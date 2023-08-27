<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', Home::class);
Route::get('/development',\App\Livewire\Development::class);
Route::get('/designer',\App\Livewire\Designer::class);
Route::get('/lawyer',\App\Livewire\Lawyer::class);
Route::get('/product-designer',\App\Livewire\ProductDesigner::class);
Route::get('/teacher',\App\Livewire\Teachers::class);
Route::get('/portfolio',\App\Livewire\Portfolio::class);
Route::get('/photographer',\App\Livewire\Photographer::class);
Route::get('/portfolio-details',\App\Livewire\PortfolioDetails::class);
Route::get('/product',\App\Livewire\Product::class);
Route::get('/product-details',\App\Livewire\ProductDetails::class);
Route::get('/service',\App\Livewire\Services::class);
Route::get('/service-details',\App\Livewire\ServiceDetails::class);
Route::get('/blog',\App\Livewire\Blog::class);
Route::get('/blog-two',\App\Livewire\BlogTwo::class);
Route::get('/blog-details',\App\Livewire\BlogDetail::class);
Route::get('/achievement',\App\Livewire\Achievement::class);
Route::get('/contact',\App\Livewire\ContactMe::class);
Route::get('/coming-soon',\App\Livewire\ComingSoon::class);
Route::get('/notfound',\App\Livewire\NotFound::class);
Route::get('/gallery',\App\Livewire\Gallery::class);
Route::get('/team',\App\Livewire\Team::class);
Route::get('/team-details',\App\Livewire\TeamDetails::class);
Route::get('/about',\App\Livewire\About::class);


