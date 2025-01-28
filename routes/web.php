<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PdfTemplateController;
use App\Http\Controllers\RamzaanPackageController;
use App\Http\Controllers\RoutingController;
use App\Livewire\Admin\Components\AddDepartureCity;
use App\Livewire\Admin\Components\AddflightManagent;
use App\Livewire\Admin\Components\AddHotalDetais;
use App\Livewire\Admin\Components\AddInclusionMaster;
use App\Livewire\Admin\Components\AddPackageTypeMaster;
use App\Livewire\Admin\Components\AddVisa;
use App\Livewire\Admin\Components\DepartureCity;
use App\Livewire\Admin\Components\FlightManagent;
use App\Livewire\Admin\Components\InclusionMaster;
use App\Livewire\Admin\Components\ListAllVisa;
use App\Livewire\Admin\Components\ListHotalDetails;
use App\Livewire\Admin\Components\ListUmrahPackages;
use App\Livewire\Admin\Components\NewsLetter;
use App\Livewire\Admin\Components\PackageRequest;



use App\Livewire\Admin\Components\PackageRequestHistory;
use App\Livewire\Admin\Components\PackageTypeMaster;

use App\Livewire\Admin\Components\RamzaanPackage;

use App\Livewire\Admin\Components\RequestHistory;
use App\Livewire\Admin\Components\UmrahLandPackage;
use App\Livewire\Admin\Components\ViewHotelDetails;
use App\Livewire\Admin\Components\ViewUmrahPackages;
use App\Livewire\Admin\Components\VisaRequest;
use App\Livewire\Admin\PackageManager\AdminViewPackage;

//catring controller
use App\Livewire\Admin\Components\Catringlist;
use App\Livewire\Admin\Components\AddCatring;

use App\Livewire\Blog;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\PackageManager\ListPackage;
use App\Livewire\Admin\PackageManager\AddPackage;
use App\Livewire\ContactUs;
use App\Livewire\DirectorSpeak;
use App\Livewire\FAQ;
use App\Livewire\Gallery;
use App\Livewire\Hotels;
use App\Livewire\HotelSingleDetail;
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
use App\Livewire\UserFront\Dummy\RamzanPackageFromIndiaDummy;
use App\Livewire\UserFront\Dummy\UmrahPackageFromIndiaDummy;
use App\Livewire\MissionVision;
use App\Livewire\AgentSpeak;
use App\Livewire\OurAwards;
use App\Livewire\UserFront\Umrah\UmrahByBusFromUAE;
use App\Livewire\UserFront\Umrah\UmrahMainPackage;
use App\Livewire\UserFront\Umrah\ViewPackageDetails;
use App\Livewire\UserFront\Umrahv2\HajjPackage;
use App\Livewire\UserFront\Umrahv2\HajjPackageLong;
use App\Livewire\UserFront\Umrahv2\RamzaanPackage as Umrahv2RamzaanPackage;
use App\Livewire\UserFront\Umrahv2\Transport;

use App\Livewire\WhyChooseUs;
use App\Livewire\PartnerFooter;
use App\Livewire\WhoWeAre; // Ensure this class exists in the specified namespace

use App\Livewire\UserFront\Umrahv2\UmrahMainPackage as Umrahv2UmrahMainPackage;

use App\Livewire\UserFront\Umrahv2\PartnerWithUs;
use App\Livewire\UserFront\Umrahv2\Sightseeing;
use App\Livewire\UserFront\Umrahv2\Catring;

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
Route::get('/hotels',Hotels::class)->name('hotels');
Route::get('/hotel-detail/{id}',HotelSingleDetail::class)->name('hotel-Detail');
Route::get('/umrah-packageFromindia',UmrahPackageFromIndiaDummy::class)->name('umrahPackageFromIndia');
Route::get('/ramzan-packageFromindia',RamzanPackageFromIndiaDummy::class)->name('ramzanPackageFromIndia');

Route::post('/send-contact-details',[ContactMailController::class,'sendDetails'])->name('send.details');

Route::get('/umrah-by-bus',UmrahByBus::class)->name('umrahByBus');
Route::get('/umrah-by-air',UmrahByAir::class)->name('umrahByAir');
Route::get('/umrah-visa-dubai',UmrahVisaFromDubai::class)->name('umrahVisaDubai');
Route::get('/umrah-pakage-sharjah',UmrahPackageSharjah::class)->name('umrahPackageSharjah');

Route::get('/umrah-packages',UmrahMainPackage::class)->name('umrahMainPackage');
Route::get('/view-package-detail/{package}',ViewPackageDetails::class)->name('viewPackageDetails');

//umrah v2
Route::get('/transport',Transport::class)->name('transport');

Route::get('/pack/ramzaan/bybus',Umrahv2RamzaanPackage::class)->name('ramzaan.bybus');
Route::get('/pack/hajj/bybus',HajjPackage::class)->name('hajj.bybus');
Route::get('/pack/hajj/long',HajjPackageLong::class)->name('hajj.bybus.long');

// Route::get('/partner-with-us',PartnerWithUs::class)->name('partner-with-us');
Route::get('/sightseeing',Sightseeing::class)->name('sightseeing');
Route::get('/catring',Catring::class)->name('catring');

//umrah by bus
Route::get('/umrah-by-bus',UmrahByBusFromUAE::class)->name('umrah-by-bus-from-uae');

//footer pages
Route::get('/who-we-are',WhoWeAre::class)->name('who-we-are');
Route::get('/mission-vision',MissionVision::class)->name('mission-vision');
Route::get('/why-choose-us',WhyChooseUs::class)->name('why-choose-us');
Route::get('/partner-with-us',PartnerFooter::class)->name('partner-with-us');
Route::get('/director-speak',DirectorSpeak::class)->name('director-speak');
Route::get('/agent-speak',AgentSpeak::class)->name('agent-speak');
Route::get('/our-awards',OurAwards::class)->name('our-awards');


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
Route::get('/admin/edit-hotal/{id}',AddHotalDetais::class)->name('editHotelData');
Route::get('/admin/view-hotel/{id}',ViewHotelDetails::class)->name('viewHotelData');

//catring controller
Route::get('/admin/catring-details',Catringlist::class)->name('admin.catring-list');
Route::get('/admin/add-catring',AddCatring::class)->name('admin.add-catring');

Route::get('/admin/all-packages',ListUmrahPackages::class)->name('admin.umrahPackage');
Route::get('/admin/view-umrah-package/{package}',ViewUmrahPackages::class)->name('admin.viewUmrahPackage');
Route::get('/admin/umrah-land-package',UmrahLandPackage::class)->name('admin.umrah-land-packages');
Route::get('/admin/flight-management',FlightManagent::class)->name('admin.flight-managent');
Route::get('/admin/add-flight-details',AddflightManagent::class)->name('addFlight');
Route::get('/flightDataEdit/{id}',AddflightManagent::class)->name('flightDataEdit');
Route::get('/admin/departure-city',DepartureCity::class)->name('admin.departure-city');
Route::get('/admin/add-departure-city',AddDepartureCity::class)->name('add.departureCity');
Route::get('/admin/EditCity/{id}',AddDepartureCity::class)->name('editCitydata');
Route::get('/admin/package-types',PackageTypeMaster::class)->name('admin.package-types');
Route::get('/admin/add-package-type',AddPackageTypeMaster::class)->name('addPackageType');
Route::get('/admin/editPackageType/{id}',AddPackageTypeMaster::class)->name('packageTypeEdit');
Route::get('/admin/inclusion',InclusionMaster::class)->name('admin.inclusion');
Route::get('/admin/add-inclusion',AddInclusionMaster::class)->name('addInclusions');
Route::get('/admin/editInclusion/{id}',AddInclusionMaster::class)->name('editInclusion');
Route::post('/admin/logout',[AuthController::class,'logout'])->name('admin.logout');
// ---------------------------
Route::get('/optimize' ,[AuthController::class,'clearCache']);
Route::get('/migrate' ,[AuthController::class,'migrate']);
Route::get('/storageLink',[AuthController::class,'setStorageLink']);
// ---------------------------

Route::get('/package/ramzan',RamzaanPackage::class)->name('package.ramzan');




});

//ADMIN ROUTES END










// -----only-for-testing-routes---------------------
Route::get('/addpackdata',[RamzaanPackageController::class,'createPackageWithMultipleFlavours']);
// -----only-for-testing-routes---------------------