<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\WelcomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserOrderComponent;
use App\Http\Livewire\User\UserShowComponent;



use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminUserComponent;
use App\Http\Livewire\Admin\AdminAddUserComponent;
use App\Http\Livewire\Admin\AdminUpdateUserComponent;
use App\Http\Livewire\Admin\AdminAvisComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;


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

Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class)->middleware('auth');
Route::get('/contact',ContactComponent::class);
Route::post('contact/add', [ContactComponent::class, 'create']);
Route::get('checkout', CheckoutComponent::class)->name('checkout.cart')->middleware('auth');
Route::get('/about',AboutComponent::class);
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details')->middleware('auth');

Route::get('/cart',CartComponent::class)->name('product.cart');
Route::get('cart/add', [DetailsComponent::class, 'store']);
Route::post('cart/add', [DetailsComponent::class, 'store']);

Route::get('/welcome',WelcomeComponent::class)->middleware('auth');






// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


//for User
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::post('avis/add', [DetailsComponent::class,'create'])->name('add.avis');
    Route::post('checkout/add', [CheckoutComponent::class, 'addinfo'])->name('paiment.info');
    Route::get('order/show', UserOrderComponent::class)->name('order.show');
    Route::get('/user/edit',UserDashboardComponent::class)->name('user.edit');
    Route::post('/user/edit',[UserDashboardComponent::class,'updateProfile'])->name('user.edit');
    Route::get('/profil/show',UserShowComponent::class)->name('user_vip.show');



});


//for Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/product',AdminProductComponent::class)->name('admin.product');
    Route::get('/admin/order',AdminOrderComponent::class)->name('admin.order');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::post('/admin/product/add',[AdminAddProductComponent::class,'addProduct'])->name('admin.addnewproduct');
    Route::get('/admin/product/delete/{slug}',[AdminAddProductComponent::class,'destroy'])->name('admin.deleteproduct');
    Route::get('/admin/user/add',AdminAddUserComponent::class)->name('admin.adduser');
    Route::post('/admin/user/add',[AdminAddUserComponent::class,'store'])->name('admin.adduser');
    Route::get('/admin/user/delete/{id}',[AdminAddUserComponent::class,'destroy'])->name('admin.deleteuser');
    Route::get('/admin/user/update/{id}',[AdminUpdateUserComponent::class,'show'])->name('admin.editeuser');
    Route::get('contact/show', AdminContactComponent::class)->name('contact.show');
    Route::get('user/show', AdminUserComponent::class)->name('user.show');
    Route::get('/admin/avis',AdminAvisComponent::class)->name('admin.avis');
    Route::get('/admin/avis/delete/{id}',[AdminAvisComponent::class,'destroy'])->name('admin.deleteavis');



});
