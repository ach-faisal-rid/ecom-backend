<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/get-visitor', [VisitorController::class, 'GetVisitorDetails']);
Route::post('/post-contact', [ContactController::class, 'PostContactDetails']);
Route::get('/all-site-info', [SiteInfoController::class, 'AllSiteInfo']);
Route::get('/all-category', [CategoryController::class, 'AllCategory']);
// Route::get('/all-product-list-by-remark/{remark}', [ProductListController::class, 'AllProductListByRemark']);
// Route::get('/all-product-list-by-category/{category}', [ProductListController::class, 'AllProductListByCategory']);
// Route::get('/all-product-list-by-subcategory/{category}/{subcategory}', [ProductListController::class, 'AllProductListBysubcategory']);
