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
use App\Livewire\Admin\Components\ZiyaratCities;
use App\Livewire\Admin\PackageManager\AdminViewPackage;
use App\Livewire\Admin\Components\HotelCities;

//catring controller
use App\Livewire\Admin\Components\Catringlist;
use App\Livewire\Admin\Components\AddCatring;
use App\Livewire\Admin\Components\CatringView;

//Sight Seeing Controller
use App\Livewire\Admin\Components\ListSightSeeing;
use App\Livewire\Admin\Components\AddSightSeeing;

//Transport Controller
use App\Livewire\Admin\Components\CarType;
use App\Livewire\Admin\Components\CarSector;
use App\Livewire\Admin\Components\CarRentel;
use App\Livewire\Admin\Components\AddTransport;
use App\Livewire\UserFront\Umrahv2\TransfersSingle;
use App\Livewire\Admin\Components\AddCarType;


//Ziyarat Controller
use App\Livewire\Admin\Components\Ziyarat;
use App\Livewire\Admin\Components\AddZiyarat;
use App\Livewire\Admin\Components\PackageTransportType;
use App\Livewire\Admin\umrahv2\AgentSignup;
use App\Livewire\Admin\umrahv2\QuickEnquires;
use App\Livewire\Admin\Components\ServiceType;
// use App\Livewire\UserFront\Umrahv2\UserViewZiyarat;

//PackageEnquireFromUser
use App\Livewire\Admin\Components\PackageEnquireFromUser;

use App\Livewire\Blog;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\PackageManager\ListPackage;
use App\Livewire\Admin\PackageManager\AddPackage;
use App\Livewire\Admin\umrahv2\AddAssistant;
use App\Livewire\Admin\umrahv2\Laundry;
use App\Livewire\Admin\umrahv2\ListLaundry;
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
use App\Livewire\Agm;
use App\Livewire\UserViewZiyarat;
use App\Livewire\ZiyaratSingleView;
use App\Livewire\OurAwards;

use App\Livewire\BankAccount;
use App\Livewire\OurServices;

use App\Livewire\UserFront\Umrah\UmrahByBusFromUAE;
use App\Livewire\UserFront\Umrah\UmrahByFlightFromUAE;
use App\Livewire\UserFront\Umrah\UmrahLandPackageUAE;
use App\Livewire\UserFront\Umrah\UmrahMainPackage;
use App\Livewire\UserFront\Umrah\ViewPackageDetails;
use App\Livewire\UserFront\Umrahv2\HajjPackage;
use App\Livewire\UserFront\Umrahv2\HajjPackageLong;
use App\Livewire\UserFront\Umrahv2\RamzaanLandPackage;
use App\Livewire\UserFront\Umrahv2\RamzaanPackage as Umrahv2RamzaanPackage;
use App\Livewire\UserFront\Umrahv2\Transport;

use App\Livewire\WhyChooseUs;
use App\Livewire\PartnerFooter;
use App\Livewire\UserFront\Umrahv2\Assistant;
use App\Livewire\WhoWeAre; // Ensure this class exists in the specified namespace

use App\Livewire\UserFront\Umrahv2\UmrahMainPackage as Umrahv2UmrahMainPackage;

//agent login
use App\Http\Controllers\navbarController;
use App\Http\Controllers\OTPController;
use App\Livewire\Agent\AgentBooking;

use App\Livewire\UserFront\Umrahv2\PartnerWithUs;
use App\Livewire\UserFront\Umrahv2\Sightseeing;
use App\Livewire\UserFront\Umrahv2\SingleSightSeeing;
use App\Livewire\UserFront\Umrahv2\Catring;
use App\Livewire\UserFront\Umrahv2\CustomPackage;
use App\Livewire\UserFront\Umrahv2\Laundry as Umrahv2Laundry;
use App\Livewire\UserFront\Umrahv2\RamzaanPackageByFlight;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;
use Illuminate\Support\Facades\Artisan;
use Livewire\Livewire;

use App\Models\package_user_enquire;
use App\Models\transportController;

//agent
use App\Livewire\Agent\Dashboard as AgentDashBoard;




//USER ROUTES STARTpp
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

// //umrah v2
// Route::get('/transport',Transport::class)->name('transport');

Route::get('/pack/ramzaan/bybus',Umrahv2RamzaanPackage::class)->name('ramzaan.bybus');
Route::get('/pack/ramzaan/byflight',RamzaanPackageByFlight::class)->name('ramzaan.byflight');
Route::get('/pack/ramzaan/landpackage',RamzaanLandPackage::class)->name('ramzaan.landpackage');
Route::get('/pack/hajj/bybus',HajjPackage::class)->name('hajj.bybus');
Route::get('/pack/hajj/long',HajjPackageLong::class)->name('hajj.bybus.long');

// Route::get('/partner-with-us',PartnerWithUs::class)->name('partner-with-us');
Route::get('/sightseeing',Sightseeing::class)->name('sightseeing');
Route::get('/single-sightSeeing/{id}',SingleSightSeeing::class)->name('singleSightSeeing');
Route::get('/catring',Catring::class)->name('catring');
Route::get('/bankaccount',BankAccount::class)->name('bankaccount');
Route::get('/ourservices',OurServices::class)->name('ourservices');
Route::post('/qbook/chat',[RamzaanPackageController::class ,'saveQbookChat'])->name('qbook.submitForm');

//umrah by bus
Route::get('/umrah-by-bus',UmrahByBusFromUAE::class)->name('umrah-by-bus-from-uae');
Route::get('/umrah-by-flight',UmrahByFlightFromUAE::class)->name('umrah-by-flight-from-uae');
Route::get('/umrah-landpackages',UmrahLandPackageUAE::class)->name('umrah-landpackages-uae');

//footer pages
Route::get('/who-we-are',WhoWeAre::class)->name('who-we-are');
Route::get('/mission-vision',MissionVision::class)->name('mission-vision');
Route::get('/why-choose-us',WhyChooseUs::class)->name('why-choose-us');
Route::get('/partner-with-us',PartnerFooter::class)->name('partner-with-us');
Route::get('/director-speak',DirectorSpeak::class)->name('director-speak');
Route::get('/agent-speak',AgentSpeak::class)->name('agent-speak');
Route::get('/agm',Agm::class)->name('agm');
Route::get('/our-awards',OurAwards::class)->name('our-awards');

//laundry routes
Route::get('/user/laundry',Umrahv2Laundry::class)->name('user.laundry');

//Transport
Route::get('/user/transport',Transport::class)->name('transport');
Route::get('/user/transport-details/{id}',TransfersSingle::class)->name('transport-single');

//Ziyarat
Route::get('/user/ziyarat/{id}',UserViewZiyarat::class)->name('user.ziyarat');
Route::get('/user/ziyarat-single/{id}',ZiyaratSingleView::class)->name('user.ziyarat-single');

//book my assitant
Route::get('/user/myassistant',Assistant::class)->name('myassistant');

//custom package
Route::get('/custom/package',CustomPackage::class)->name('custom.package');

Route::get('/download',[PdfTemplateController::class,'downloadItinerary'])->name('package.download');
Route::get('/fpdf',function(){
    return view('pdf_template.flyer');
});
Route::get('/comming-soon',function(){
return view('user.partials.comming_soon');
})->name('coming-soon');

//USER ROUTES END

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');


//Agent Login
Route::post('/agent/register', [OTPController::class, 'register'])->name('send.otp');
Route::post('/verify-otp', [OTPController::class, 'verifyOTP'])->name('verify.otp');
Route::get('/logout', [OTPController::class, 'logout'])->name('agent.logout');

Route::get('/agent/dashboard',AgentDashBoard::class)->name('agent.dashboard');
Route::get('/agent/booking',AgentBooking::class)->name('agent.booking');











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
Route::get('/admin/add-hotel-cities',HotelCities::class)->name('admin.hotel-cities');

//catring controller
Route::get('/admin/catring-details',Catringlist::class)->name('admin.catring-list');
Route::get('/admin/add-catring',AddCatring::class)->name('admin.add-catring');
Route::get('/admin/edit-catring-details/{id}',AddCatring::class)->name('admin.edit-carting');
Route::get('/admin/view-catring-details/{id}',CatringView::class)->name('admin.view-catringDetails');

//sightseeing Controller
Route::get('/admin/sightseeing',ListSightSeeing::class)->name('admin.sight-seeing-list');
Route::get('/admin/add-sight',AddSightSeeing::class)->name('admin.add-sight');
Route::get('/admin/edit-sight-details/{id}',AddSightSeeing::class)->name('admin.edit-sight');

//laundry Controller
Route::get('/admin/addlaundry',Laundry::class)->name('admin.laundry');
Route::get('/admin/listlaundry',ListLaundry::class)->name('admin.list-laundry');

//Transport Controller
Route::get('/admin/list-car-type',CarType::class)->name('admin.carType');
Route::get('/admin/add-car-sector',CarSector::class)->name('admin.carSector');
Route::get('/admin/list-transport',CarRentel::class)->name('admin.listTransport');
Route::get('/admin/add-transport',AddTransport::class)->name('admin.addTransport');
Route::get('/admin/add-car-type',AddCarType::class)->name('admin.addcarType');

//Ziyarat Controller
Route::get('/admin/list-ziyarat',Ziyarat::class)->name('admin.ziyarat');
Route::get('/admin/add-ziyarat',AddZiyarat::class)->name('admin.add-ziyarat');
Route::get('/admin/ziyarat-cities',ZiyaratCities::class)->name('admin.ziyarat-cities');


//Package Enquire From User
Route::get('/admin/package-enquiry-from-user',PackageEnquireFromUser::class)->name('package-enquire-from-user');




Route::get('/admin/all-packages',ListUmrahPackages::class)->name('admin.umrahPackage');
Route::get('/admin/view-umrah-package/{package}',ViewUmrahPackages::class)->name('admin.viewUmrahPackage');
Route::get('/admin/umrah-land-package',UmrahLandPackage::class)->name('admin.umrah-land-packages');
Route::get('/admin/flight-management',FlightManagent::class)->name('admin.flight-managent');
Route::get('/admin/add-flight-details',AddflightManagent::class)->name('addFlight');
Route::get('/flightDataEdit/{id}',AddflightManagent::class)->name('flightDataEdit');
Route::get('/admin/departure-city',DepartureCity::class)->name('admin.departure-city');
Route::get('/admin/package-transport-type',PackageTransportType::class)->name('admin.package.transport.type');
Route::get('/admin/add-departure-city',AddDepartureCity::class)->name('add.departureCity');
Route::get('/admin/EditCity/{id}',AddDepartureCity::class)->name('editCitydata');
Route::get('/admin/package-types',PackageTypeMaster::class)->name('admin.package-types');
Route::get('/admin/add-package-type',AddPackageTypeMaster::class)->name('addPackageType');
Route::get('/admin/editPackageType/{id}',AddPackageTypeMaster::class)->name('packageTypeEdit');
Route::get('/admin/service-type',ServiceType::class)->name('admin.service-type');
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

Route::get('/admin/quickenquire',QuickEnquires::class)->name('quick.enquiries');
Route::get('/admin/agentsignup',AgentSignup::class)->name('agentsignup');




});

//ADMIN ROUTES END

// Route::get('/test1',function(){
//    $data = package_user_enquire::with('serviceType')->get();
// //    foreach ($data as $enquiry) {
// //             echo $enquiry->package_user_name .'<br>';  // Accessing data from PackageUserEnquire
// //             echo $enquiry->serviceType->service_type.'<br>';  // Accessing related data from ServiceType
// //         }
//    return response()->json($data);
// });


// Route::get('/test',function(){
//     $data = transportController::with(['cartypemaster','carsectormaster'])->get();
//     return response()->json($data);
//  });


// Route::get('/enquiries-json', [PackageEnquireFromUser::class, 'getEnquiriesJson']);





// -----only-for-testing-routes---------------------
Route::get('/addpackdata',[RamzaanPackageController::class,'createPackageWithMultipleFlavours']);
// -----only-for-testing-routes---------------------
