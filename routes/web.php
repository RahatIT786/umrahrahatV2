<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PdfTemplateController;
use App\Http\Controllers\RoutingController;
use App\Livewire\Admin\Components\AddHotalDetais;
use App\Livewire\Admin\Components\AddVisa;
use App\Livewire\Admin\Components\ListAllVisa;
use App\Livewire\Admin\Components\ListHotalDetails;
use App\Livewire\Admin\Components\NewsLetter;
use App\Livewire\Admin\Components\PackageRequest;



use App\Livewire\Admin\Components\PackageRequestHistory;
use App\Livewire\Admin\Components\RequestHistory;
use App\Livewire\Admin\Components\VisaRequest;
use App\Livewire\Admin\PackageManager\AdminViewPackage;
use App\Livewire\Blog;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\PackageManager\ListPackage;
use App\Livewire\Admin\PackageManager\AddPackage;
use App\Livewire\ContactUs;
use App\Livewire\FAQ;
use App\Livewire\Gallery;
use App\Livewire\OurService;
use App\Livewire\Package;
use App\Livewire\PackageUserView;
use App\Livewire\PrivacyPolicy;
use App\Livewire\RamzanUmrahPackages;
use App\Livewire\SingleBlog1;
use App\Livewire\SingleBlog2;
use App\Livewire\SingleBlog3;
use App\Livewire\TermsOfService;
use App\Livewire\UmrahByAir;
use App\Livewire\UmrahByBus;
use App\Livewire\UmrahPackageSharjah;
use App\Livewire\UmrahVisaFromDubai;
use App\Livewire\UserAbout;
use App\Livewire\SaudiVisa;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;
use Illuminate\Support\Facades\Artisan;
use Livewire\Livewire;

//USER ROUTES START
Route::get('/', UserHome::class)->name('layouts.app');
Route::get('/about',UserAbout::class)->name('about');
Route::get('/package',PackageUserView::class)->name('package');
Route::get('/our-services',OurService::class)->name('our-services');
Route::get('/ramzan-umrah-package',RamzanUmrahPackages::class)->name('ramzan-umrah-package');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/gallery',Gallery::class)->name('gallery');
Route::get('/saudi-visa',SaudiVisa::class)->name('saudi-visa'); 
Route::get('/contact-us',ContactUs::class)->name('contact-us'); 
Route::get('/single-blog1',SingleBlog1::class)->name('singleBlog1');
Route::get('/single-blog2',SingleBlog2::class)->name('singleBlog2');
Route::get('/single-blog3',SingleBlog3::class)->name('singleBlog3');
Route::get('/privacy-policy',PrivacyPolicy::class)->name('privacy-policy');
Route::get('/term-of-service',TermsOfService::class)->name('term-of-service');
Route::get('/FAQ',FAQ::class)->name('FAQ');

Route::post('/send-contact-details',[ContactMailController::class,'sendDetails'])->name('send.details');

Route::get('/umrah-by-bus',UmrahByBus::class)->name('umrahByBus');
Route::get('/umrah-by-air',UmrahByAir::class)->name('umrahByAir');
Route::get('/umrah-visa-dubai',UmrahVisaFromDubai::class)->name('umrahVisaDubai');
Route::get('/umrah-pakage-sharjah',UmrahPackageSharjah::class)->name('umrahPackageSharjah');

Route::get('/download',[PdfTemplateController::class,'downloadItinerary'])->name('package.download');



Route::get('/comming-soon',function(){
return view('user.partials.comming_soon');
})->name('coming-soon');

//USER ROUTES END

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

// ADMIN ROUTES START
Route::middleware(['auth:admins'])->group(function () {
Route::get('/admin',Dashboard::class)->name('admin.dashboard');
Route::get('/admin/package', ListPackage::class)->name('admin.package-manager');
Route::get('/admin/package-request', PackageRequest::class)->name('admin.package-request');
Route::get('/admin/package/add', AddPackage::class)->name('admin.package-add');
Route::get('/admin/saudivisa',ListAllVisa::class)->name('admin.saudi-visa');
Route::get('/admin/saudivisa-request',VisaRequest::class)->name('admin.visa-request');
Route::get('/admin/saudivisa/add',AddVisa::class)->name('admin.visa-add');
Route::get('/editdata/{id}', AddVisa::class)->name('editdata');
Route::get('/editPackage/{id}',AddPackage::class)->name('editPackage');
Route::get('/viewPackage/{id}',AdminViewPackage::class)->name('viewPackage');
Route::get('/admin/package-request-history', PackageRequestHistory::class)->name('admin.package-request-history');
Route::get('/admin/request-history', RequestHistory::class)->name('admin.visa-request-history');
Route::get('/admin/newsletter', NewsLetter::class)->name('admin.newsletters');
Route::get('/admin/hotel-details', ListHotalDetails::class)->name('admin.listHotelDetails');
Route::get('/admin/add-hotel-details',AddHotalDetais::class)->name('admin.addHotelDetails');
Route::post('/admin/logout',[AuthController::class,'logout'])->name('admin.logout');
Route::get('/optimize' ,[AuthController::class,'clearCache']);
Route::get('/migrate' ,[AuthController::class,'migrate']);
Route::get('/storageLink',[AuthController::class,'setStorageLink']);





});

//ADMIN ROUTES END
