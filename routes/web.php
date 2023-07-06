<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\FeaturedProductsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSlideComponent;
use App\Http\Livewire\Admin\AdminEditHomeSlideComponent;
use App\Http\Livewire\Admin\AdminUsersComponent;
use App\Http\Livewire\Admin\AdminEditUserComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminFaqsComponent;
use App\Http\Livewire\Admin\AdminAddFaqComponent;
use App\Http\Livewire\Admin\AdminEditFaqComponent;



use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrderComponent;
use App\Http\Livewire\User\UserOrderDetailComponent;


    


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

Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/featured/products',FeaturedProductsComponent::class)->name('featured.products');

Route::get('/faqs',FaqComponent::class)->name('faq');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/order',UserOrderComponent::class)->name('user.order');
    Route::get('/user/order/{order_id}',UserOrderDetailComponent::class)->name('user.orderdetails');

});

Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.categories.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin/slider/add', AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSlideComponent::class)->name ('admin.home.slide.edit');

    Route::get('/admin/users',AdminUsersComponent::class)->name('admin.customers');
    Route::get('/admin/user/edit/{user_id}',AdminEditUserComponent::class)->name('admin.user.edit');

    Route::get('/admin/order',AdminOrderComponent::class)->name('admin.order');
    Route::get('/admin/order/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');

    Route::get('admin/faqs',AdminFaqsComponent::class)->name('admin.faqs');
    Route::get('/admin/faq/add',AdminAddFaqComponent::class)->name('admin.faq.add');
    Route::get('/admin/faq/edit/{faq_id}',AdminEditFaqComponent::class)->name('admin.faq.edit');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
