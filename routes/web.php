<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PublicPolicyComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\ArtWithColorComponent;
use App\Http\Livewire\ArtWithSubcolorComponent;
use App\Http\Livewire\ColorsComponent;
use App\Http\Livewire\ArtByColorComponent;
use App\Http\Livewire\ArtByColorsComponent;
use App\Http\Livewire\ArtBySubcolorsComponent;
use App\Http\Livewire\ArtByColor2Component;
use App\Http\Livewire\ThemeComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\DeliveryComponent;
use App\Http\Livewire\ReturnPolicyComponent;
use App\Http\Livewire\AboutUsComponent;

use App\Http\Livewire\SiteUnderMaintenanceComponent;

use App\Http\Livewire\Ar\A0Component;
use App\Http\Livewire\Ar\A1Component;
use App\Http\Livewire\Ar\A2Component;
use App\Http\Livewire\Ar\A3Component;
use App\Http\Livewire\Ar\A4Component;
use App\Http\Livewire\Ar\AaComponent;


use App\Http\Livewire\FeaturedProductsComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\Admin\ArComponent;

use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;

use App\Http\Livewire\Admin\AdminColorComponent;
use App\Http\Livewire\Admin\AdminAddColorComponent;
use App\Http\Livewire\Admin\AdminEditColorComponent;


use App\Http\Livewire\Admin\AdminThemesComponent;
use App\Http\Livewire\Admin\AdminAddThemeComponent;
use App\Http\Livewire\Admin\AdminEditThemeComponent;

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

use App\Http\Livewire\Admin\AdminEditDeliveryComponent;

use App\Http\Livewire\Admin\AdminEditReturnPolicyComponent;

use App\Http\Livewire\Admin\EditAboutUsComponent;






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

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });
 
// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();
 
//     // $user->token
// });


Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/public-policy',PublicPolicyComponent::class)->name('public.policy');



Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');

Route::get('/product-theme/{slug}',ThemeComponent::class)->name('product.theme');

Route::get('/products-by-color',ColorsComponent::class)->name('colors.page');

// new
Route::get('/art-with-color/{slug}', ArtWithColorComponent::class)->name('art.with.color');
Route::get('/art-by-color2/{slug}', ArtByColor2Component::class)->name('art.with.color2');
Route::get('/art-with-subcolor/{slug}', ArtWithSubcolorComponent::class)->name('art.with.sub.color');
// Route::get('/art-with-subcolor/{slug}/{sub_slug}', ArtWithSubcolorComponent::class)->name('art.with.sub.color');

Route::get('/art-by-colors/{slug}',ArtByColorsComponent::class)->name('art.by.colors');
Route::get('/art-by-subcolors/{slug}',ArtBySubcolorsComponent::class)->name('art.by.subcolors');



Route::get('/art-by-color/{slug}/{scolor_slug?}',ArtByColorComponent::class)->name('art.color');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/featured/products',FeaturedProductsComponent::class)->name('featured.products');

Route::get('/faqs',FaqComponent::class)->name('faq');
Route::get('/delivery-policy',DeliveryComponent::class)->name('delivery.policy');
Route::get('/return-policy',ReturnPolicyComponent::class)->name('return.policy');
Route::get('/about-us',AboutUsComponent::class)->name('about.us');

Route::get('/site-under-maintenance',SiteUnderMaintenanceComponent::class)->name('maintenance');

Route::get('/A0-augmented-reality-view',A0Component::class)->name('A0.ar');
Route::get('/A1-augmented-reality-view',A1Component::class)->name('A1.ar');
Route::get('/A2-augmented-reality-view',A2Component::class)->name('A2.ar');
Route::get('/A3-augmented-reality-view',A3Component::class)->name('A3.ar');
Route::get('/A4-augmented-reality-view',A4Component::class)->name('A4.ar');
Route::get('/Aa-augmented-reality-view',AaComponent::class)->name('Aa.ar');

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

    Route::get('/admin/augmented-reality',ArComponent::class)->name('admin.ar');

    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.categories.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');

    Route::get('/admin/colors',AdminColorComponent::class)->name('admin.colors');
    Route::get('/admin/colors/add',AdminAddColorComponent::class)->name('admin.color.add');
    Route::get('/admin/color/edit/{color_id}/{scolor_id?}',AdminEditColorComponent::class)->name('admin.color.edit');


    Route::get('/admin/themes',AdminThemesComponent::class)->name('admin.themes');
    Route::get('/admin/theme/add',AdminAddThemeComponent::class)->name('admin.themes.add');
    Route::get('/admin/theme/edit/{theme_id}',AdminEditThemeComponent::class)->name('admin.theme.edit');

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

    Route::get('/admin/delivery/edit',AdminEditDeliveryComponent::class)->name('admin.delivery.edit');

    Route::get('/admin/return-policy/edit',AdminEditReturnPolicyComponent::class)->name('admin.return.policy.edit');

    Route::get('/admin/about-us/edit',EditAboutUsComponent::class)->name('admin.about.us.edit');
});

Route::get('/auth/github/redirect',[AuthController::class, 'githubredirect'])->name('auth.github.redirect');

Route::get('/auth/github/callback',[AuthController::class, 'githubcallback'])->name('auth.github.callback');

Route::get('/auth/google/redirect',[AuthController::class, 'googleredirect'])->name('auth.google.redirect');

Route::get('/auth/google/callback',[AuthController::class, 'googlecallback'])->name('auth.google.callback');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
