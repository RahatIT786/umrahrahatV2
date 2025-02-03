<?php

namespace App\Livewire\UserFront\Umrah;

use Livewire\Component;
use App\Models\mainPackage;
use App\Models\PackageType;
use App\Models\PackageDetail;
use App\Models\DepartureCity;
use App\Models\FlightManagement;
use App\Models\inclusion;
use App\Models\HotelDetail;
use App\Models\package_user_enquire;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;

class ViewPackageDetails extends Component
{
    use LivewireAlert, WithFileUploads;
    public $packages, $selectedCategory, $packageId, $package_id, $packageType, $pkgDetails, $service_id;
    public $serviceArray = [], $packageArray = [], $subPackageArray = [], $selectedFlavour = [], $selectedFlavourPrice = [], $flavour;
    public $cat_id, $selectedPackageFlavourId, $allIncludes, $pkgIncludes, $package_type, $pnr;
    public $g_share, $qt_share, $qd_share, $t_share, $d_share, $single, $child_with_bed, $child_no_bed, $infant, $makkahotel, $madinahotel, $city, $flight, $city_id, $airline_id;
    // public $service_id = 2; // Default to service_id 1
    public $makkah_hotel_details, $madina_hotel_details;
    // protected $listeners = ['putInData'];

        //==========================================================================//
        public $package_user_name;
        public $package_user_email;
        public $package_user_phone;
        public $package_user_adult;
        public $package_user_child;
        public $package_user_package_name;
        public $package_user_service_type;
        public $package_user_departure_type;
    
    
        public function packageEnquire(){
            package_user_enquire::create([
                'package_user_name' => $this->package_user_name,
                'package_user_email' => $this->package_user_email,
                'package_user_phone' => $this->package_user_phone,
                'package_user_adult' => $this->package_user_adult,
                'package_user_child' => $this->package_user_child,
                'package_user_package_name' => $this->package_user_package_name ?? '',
                'package_user_service_type' => $this->package_user_service_type ?? '',
                'package_user_departure_type' => $this->package_user_departure_type ?? '',
            ]);
            session()->flash('success', 'Your enquiry has been submitted successfully!');
            $this->reset(['package_user_name','package_user_email','package_user_phone', 'package_user_adult', 'package_user_child']);
        }
        //==========================================================================//

    public function mount($package)
    {

        // Access session variables
        $this->packageId = $package;
        //dd($this->packageId);
        // $this->pkg_flavour_id = Cache::get('pkg_flavour');
        $this->city = DepartureCity::pluck('CityName', 'id');
        $this->flight = FlightManagement::pluck('FlightName', 'id');
        //dd($this->city);
        // $this->selectedCategory = 22; // Default to 'Deluxe'
        $this->packageType = PackageType::pluck('packageType', 'id');
        // $this->serviceArray = ServiceType::has('packages')->active()->get();
        // dd($this->serviceArray);
        $this->packages = mainPackage::where('id', $package)->with('pkgDetails.packageType')->first();
        $this->package_user_package_name = $this->packages->name;
        $this->package_user_service_type = $this->packages->service_type;
        $this->package_user_departure_type = $this->packages->departure_type;
        //dd($this->packages);
        // Start joddha 19/10/2024
        // Assuming pack_id stores multiple IDs, fetch PNRs related to the package
        // $this->pnr = Pnr::with('package', 'city', 'flight')->whereIn('pack_id', [$id])->active()->get();

        // if ($this->pnr->isNotEmpty()) {
        //     // For the first PNR (or implement your own logic for handling multiple)
        //     $this->city_id = $this->pnr->first()->city->id;
        //     $this->travel_date = $this->pnr->first()->dept_date;
        //     $this->airline_id = $this->pnr->first()->flight_id;
        // } else {
        //     // Handle case when there are no PNRs
        //     $this->city_id = null; // or some default value
        //     $this->travel_date = null; // or some default value
        //     $this->airline_id = null; // or some default value
        // }
        // end joddha 19/10/2024

        // $this->pnr = Pnr::with('package', 'city', 'flight')->where('pack_id', $id)->active()->first();
        // //  dd($this->pnr);
        // $this->city_id = $this->pnr->city->id;
        // $this->travel_date = $this->pnr->dept_date;
        // $this->airline_id = $this->pnr->flight_id;
        if ($this->packages) {
            $packageTypeIds = $this->packages->pkgDetails->pluck('packageType.id');
            $this->packageType = PackageType::whereIn('id', $packageTypeIds)->pluck('packageType', 'id');
            // dd($this->packageType);
            // $this->selectedPackageFlavourId = array_key_first($this->packageType);
        } else {
            $this->packageType = collect();
        }

         $this->selectedPackageFlavourId = PackageType::whereIn('id', $packageTypeIds)->first()->id;
        // // $this->allIncludes = Helper::packageIncludesOptions();
        // $firstFlavour = $this->packages->pkgDetails->where('pkg_type_id', $this->selectedPackageFlavourId)->first()->package_includes;
        // $this->pkgIncludes = explode(",", $firstFlavour);
         $this->updatePackageIncludes();
        // $this->service_id = $this->packages->service_id;
        // $this->package_id = $this->packages->id;
        
    }

    public function putInData()
    {
        //
    }

    public function changeFlavour()
    {
        $this->updatePackageIncludes();
    }

    public function updatePackageIncludes()
    {
        $selectedFlavour = $this->packages->pkgDetails->where('pkg_type_id', $this->selectedPackageFlavourId)->first();
        //dd($selectedFlavour );
        if ($selectedFlavour) {
           // $this->pkgIncludes = explode(",", $selectedFlavour->package_includes);
            $this->updatePackagePrices($selectedFlavour);
        } else {
            $this->pkgIncludes = [];
        }
    }

    public function updatePackagePrices($selectedFlavour)
    {
        $this->g_share = $selectedFlavour->g_share;
        $this->qt_share = $selectedFlavour->qt_share;
        $this->qd_share = $selectedFlavour->qd_share;
        $this->t_share = $selectedFlavour->t_share;
        $this->d_share = $selectedFlavour->d_share;
        $this->single = $selectedFlavour->single;
        $this->child_with_bed = $selectedFlavour->child_with_bed;
        $this->child_no_bed = $selectedFlavour->child_no_bed;
        $this->infant = $selectedFlavour->infant;
        //dump($this->g_share, $this->qt_share, $this->qd_share, $this->t_share, $this->d_share, $this->single, $this->child_with_bed, $this->child_no_bed, $this->infant);

        // Update hotels
        $this->makkahotel = $selectedFlavour->makka_hotel_id;
        $this->makkah_hotel_details =$this->getMakkahHotel($this->makkahotel);
        //dd($this->makkah_hotel_details);
        $this->madinahotel = $selectedFlavour->madina_hotel_id;
        $this->madina_hotel_details = $this->getMadinahHotel($this->madinahotel);
        //dd($this->madina_hotel_details);
    }

    public function getMakkahHotel($hotelId)
    {
        return HotelDetail::where('id', $hotelId)->first();
    }
    public function getMadinahHotel($hotelId)
    {
        return HotelDetail::where('id', $hotelId)->first();
    }

    public function changeName()
    {
        // Final validation check before processing
        $this->validate($this->rules());
    }

    public function rules()
    {
        return [
            'city_id' => 'required',
            'travel_date' => 'required|date',
            'airline_id' => 'required',
            'pkg_flavour_id' => 'required',
        ];
    }
    // public function downloadUmrahPackage($packageId)
    // {
    //     $packageData = Packages::query()
    //         ->whereId($packageId)
    //         ->with(['pkgDetails.packageType', 'pkgDetails.makkahotel', 'pkgDetails.madinahotel', 'pkgDetails.makkahotel.hotelimage', 'pkgDetails.madinahotel.hotelimage', 'pkgImages', 'serviceType'])
    //         ->first();

    //     if (!$packageData) {
    //         return response()->json(['error' => 'Not found'], 404);
    //     }
    //     $packageDetails = $packageData->pkgDetails->map(function ($detail) {
    //         return [
    //             'package_type' => $detail->packageType->package_type,
    //             'makkahotel' => $detail->makkahotel->hotel_name ?? 'N/A',
    //             'madinahotel' => $detail->madinahotel->hotel_name ?? 'N/A',
    //             'makkah_hotel_star_rating' => $detail->makkahotel->star_rating ?? 'N/A',
    //             'madinah_hotel_star_rating' => $detail->madinahotel->star_rating ?? 'N/A',
    //             'g_share' => $detail->g_share ?? 'N/A',
    //             'qt_share' => $detail->qt_share ?? 'N/A',
    //             'qd_share' => $detail->qd_share ?? 'N/A',
    //             't_share' => $detail->t_share ?? 'N/A',
    //             'd_share' => $detail->d_share ?? 'N/A',
    //             'single' => $detail->single ?? 'N/A',
    //             'child_with_bed' => $detail->child_with_bed ?? 'N/A',
    //             'child_no_bed' => $detail->chlid_no_bed ?? 'N/A',
    //             'infant' => $detail->infant ?? 'N/A',
    //             'package_includes' => $detail->package_includes ?? 'N/A',
    //             'makkah_hotel_image' => $detail->makkahotel->hotelimage->pluck('hotel_img')->first(),
    //             'madinah_hotel_image' => $detail->madinahotel->hotelimage->pluck('hotel_img')->first(),
    //         ];
    //     });
    //     // Retrieve PNR data
    //     $pnr = $packageData->filteredPnrs();

    //     // If PNR exists, extract the city, flight, and other details
    //     $pnrDetails = $pnr ? [
    //         'tour_code' => $pnr->pnr_code ?? 'N/A',
    //         'city_name' => $pnr->city->city_name ?? 'N/A',
    //         'flight_name' => $pnr->flight->flight_name ?? 'N/A',
    //         'departure_date' => $pnr->dept_date ?? 'N/A',
    //         'days'        => $pnr->days ?? 'N/A',
    //     ] : [];
    //     $data = [
    //         'package_name' => $packageData->name ?? '',
    //         'itinerary' => $packageData->itinerary ?? '',
    //         'inclusion' => $packageData->inclusion ?? '',
    //         'exclusion' => $packageData->exclusion ?? '',
    //         'visa_taxes' => $packageData->visa_taxes ?? '',
    //         'meals' => $packageData->meals ?? '',
    //         'payment_policy' => $packageData->payment_policy ?? '',
    //         'important_notes' => $packageData->important_notes ?? '',
    //         'flight_transport' => $packageData->flight_transport ?? '',
    //         'cancellation_policy' => $packageData->cancellation_policy ?? '',
    //         'package_details' => $packageDetails,
    //         'packageData' => $packageData,
    //         'pnr_details' => $pnrDetails,
    //     ];
    //     $pdf = Pdf::loadView('user-front.pages.pdf.umrah-packages-pdf-component', $data);
    //     return $pdf->download('umrah-package.pdf');
    // }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrah.view-package-details',[
            "makkah_hotel_details" => $this->makkah_hotel_details,
            'madinah_hotel_details' => $this->madina_hotel_details,
        ]);
    }
}
