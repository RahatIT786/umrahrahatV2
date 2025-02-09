<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\HotelDetail;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\mainPackage;
use App\Models\PackageDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Str;
use App\Models\PackageType;
use App\Models\inclusion;
use App\Models\FlightManagement;
use App\Models\DepartureCity;
use App\Models\CateringController;
use App\Models\Laundry;
use App\Models\PackageDepartureType;
use App\Models\ServiceType;

class UmrahLandPackage extends Component
{
    use LivewireAlert, WithFileUploads;

    public $package_name , $packageImage, $packageDescription;
    public $package_type_ids = [];
    public $makka_rating = [];
    public $makkaHotel = [], $makka_hotel = [];
    public $madina_rating = [];
    public $madinaHotel = [], $madina_hotel = [];
    public $packageType = [];
    Public $packageIncludes = [];
    public $flights = [];
    public $departureCities = [];
    public $DepartureCity = [];
    public $food_type = [];
    public  $laundray_type = [];
    public $includes = [];
    public $flightList = [];
    public $package_days;
    public $service_type;
    public $foodController;
    public $laundrayController;

    public $g_share_price = [], $qt_share_price = [], $qd_share_price = [], $t_share_price = [], $d_share_price = [], $single_price = [], $child_w_b = [], $child_wo_b = [], $infants = [];
    public $departureTypes;

    public $departure_type=null;
    public $flightValue;

    public $packageServiceType;

    public $paymentPolicy = '50% Advance.
50% On Visa Approval.
100% Payment  before Departure.' ; 

    public $importantNotes = 'All Prices quoted are per person and in AED.
Please Carry Hard copy of your Vacinattion and Visa.',

 $cancellationPolicy = 'All Packages are Non Refundable.', 
$FlightTransport = '
Economy Class Return Ticket
Round Trip Transfers on SIC Basis',
$packageMeals = 'Breakfast, Lunch & Dinner
Prepared by Indian Chefs in Hygienic & Licensed Kitchens.
Served in Buffet Style in Our Allotment Hotels & Food Parcels in 4 & 5 Star Hotels.',
$packageVisaTaxes = 'Multiple Entry Tourist Visa with 90 Days Stay is Included in package.
Umrah Visa will be 150 AED Extra.', 
$packageInclusion = 'Bus Ticket Dubai to Saudi to Dubai
Visa & Insurance.
Border Tax
Hotels Stay. (Bus Service)
Breakfast, Lunch & Dinner.
Round Trip Transfsers.
Laundry Services.
Local Ziyarats in Makka on SIC Basis.
Local Ziyarats in Madina on SIC Basis.
Saudi Sim, (Talk Time Haji will Pay)
Local staff at your service
24/7 customer support
Complimentary 5 ltrs ZAM-ZAM
Professional Umrah Guide',
 $packageExclusion = 'Private Transfers.
GST 5% & TCS 5%.
Additional charges apply on excess luggage.
Tour operator or Guide will not be held accountable for any kind of loss luggage on Airports or in Bus.
No room service will be provided,
Facilities, services and amenities which are not indicated in this package,
No refund is applicable on unutilized or unused services,
Refund cannot be claimed if the stay is curtailed.',
$packageItinerary = 'Day 1 Wednesday ,
Departure from Sharjah (UAE) to Makkah (KSA).

Day 2 Thursday,
Arrival in Makkah and to perform Umrah.

Day 3 Friday,
Perform Jumma Prayer at Makkah.

Day 4 Saturday, 
Holy Places visit (Makkah ziarat)
Jabal Al-Noor
Jabal al-ThawrArfat
Ain Zzibaidha Water Canal Muzdalifah Jannat Al-Muallah

  “Note Ziyrat Day Can be changed from day 4 to day 5  in Makkah.

*Day 5 Sunday, Day 6 Monday, Day 7 Tuesday in Makkah *.

Day 8 Wednesday,  Departure from Makkah for Madinah (Time Will update in WhatsApp Group) 

Note : Madinah Ziyart can be provided on the same day from Makkah to Madinah. 

Day 9 Thursday, 
Holy Places visit (Madinah Ziarat) (Morning 7o’ Clock),
Ouhad Mountain
Qubba Mosque
Masjid Al-Qiblatain
Seven Mosques (Khanduk).

Day 10 Friday,
Departure from Madinah for UAE (apx: 14:00) after Jumma Prayer.';

public $makkah_nights;
public $madina_nights;

    public function mount(){
        $this->packageType = PackageType::where('delete_status',1)->get();
        $this->packageIncludes = inclusion::where('delete_status',1)->get();
        $this->flightList = FlightManagement::where('delete_status',1)->get();
        $this->DepartureCity = DepartureCity::where('delete_status',1)->get();
        $this->foodController = CateringController::where('delete_status',1)->get();
        $this->laundrayController = Laundry::where('delete_status',1)->get();
        $this->departureTypes=PackageDepartureType::where('delete_status',1)->get();
        $this->packageServiceType=ServiceType::where('delete_status',1)->get();
        $this->flightValue=PackageDepartureType::where('delete_status',1)
        ->where('type',strtolower('flight'))
        ->pluck('type')
        ->first();
    }
    public $selected_package_type = null;

    public function changeDeparture($dtype){
        $this->departure_type=$dtype;

    }


    public function updatedSelectedPackageType($value)
    {
        $this->package_type_ids = $value ? [$value] : []; // Store it as an array
    }

    public function getMakkaHotel($index)
    {
        // Fetch hotels based on the selected rating
        $hotels = HotelDetail::where('hotelStarRating', $this->makka_rating[$index])
            ->where('deleteStatus',1)
            ->where('hotelCity', 'MAKKAH')
            ->pluck('hotelName', 'id')->toArray();
        $this->makkaHotel[$index] = $hotels;
    }

    public function getMadinaHotel($index)
    {

        // Fetch hotels based on the selected rating
        $hotels = HotelDetail::where('hotelStarRating', $this->madina_rating[$index])
            ->where('deleteStatus',1)
            ->where('hotelCity', 'MADINAH')
            ->pluck('hotelName', 'id')->toArray();
        $this->madinaHotel[$index] = $hotels;
    }
    private function validatePackage($key)
    {
        $this->validate([
            'package_name' => 'required',
            'service_type' => 'required',
            'package_days' => 'required',
            'package_type_ids' => 'required|array|min:1',
            'packageDescription' => 'required',
            'packageImage' => 'required',
            'paymentPolicy' => 'required',
            'importantNotes' => 'required',
            'cancellationPolicy' => 'required',
            'packageInclusion' => 'required',
            'packageExclusion' => 'required',
            'packageItinerary' => 'required',
            // 'FlightTransport' => 'required',
            'packageMeals' => 'required',
            'packageVisaTaxes' => 'required',
            'departure_type' => 'required',

            'makkah_nights' => 'required',
            'madina_nights' => 'required',

            'makka_rating.' . $key => 'required',
            'makka_hotel.' . $key => 'required',
            'madina_rating.' . $key => 'required',
            'madina_hotel.' . $key => 'required',
            'food_type.' . $key => 'required',
            'laundray_type.' . $key => 'required',
            
            'g_share_price.' . $key => 'required|numeric|min:0',
            'qt_share_price.' . $key => 'nullable|numeric|min:0',
            'qd_share_price.' . $key => 'nullable|numeric|min:0',
            't_share_price.' . $key => 'nullable|numeric|min:0',
            'd_share_price.' . $key => 'nullable|numeric|min:0',
            'single_price.' . $key => 'nullable|numeric|min:0',
            
            'child_w_b.' . $key => 'required|numeric|min:0',
            'child_wo_b.' . $key => 'required|numeric|min:0',
            'infants.' . $key => 'required|numeric|min:0',
        ], [
            'makka_rating.' . $key . '.required' => 'Please select a hotel rating for Makkah.',
            'makka_hotel.' . $key . '.required' => 'Please select a hotel for Makkah.',
            'madina_rating.' . $key . '.required' => 'Please select a hotel rating for Madinah.',
            'madina_hotel.' . $key . '.required' => 'Please select a hotel for Madinah.',
            'food_type.' . $key . '.required' => 'Please enter the food type.',
            'laundray_type.' . $key . '.required' => 'Please enter the laundry type.',
            
            'g_share_price.' . $key . '.required' => 'Please enter the general sharing price.',
            'qt_share_price.' . $key . '.nullable' => 'Please enter the quint sharing price if applicable.',
            'qd_share_price.' . $key . '.nullable' => 'Please enter the quad sharing price if applicable.',
            't_share_price.' . $key . '.nullable' => 'Please enter the triple sharing price if applicable.',
            'd_share_price.' . $key . '.nullable' => 'Please enter the double sharing price if applicable.',
            'single_price.' . $key . '.nullable' => 'Please enter the single sharing price if applicable.',
            
            'child_w_b.' . $key . '.required' => 'Please enter the price for child with bed.',
            'child_wo_b.' . $key . '.required' => 'Please enter the price for child without bed.',
            'infants.' . $key . '.required' => 'Please enter the price for infant.',
        ]);
    }
    

        public function save(){
            foreach ($this->package_type_ids as $key => $value) {
                $this->validatePackage($key);
            }
            $packageImagePath = $this->packageImage ? $this->packageImage->store('uploads', 'public') : null;
            $key = array_values($this->package_type_ids);
            $id_string = implode(',', $key);
            $keys = array_values($this->includes);
            $package_includes = implode(',', $keys);
        
            // Use $this->flights instead of $this->keys
            $allFlights = implode(',', $this->flights);
            //dump($allFlights);
        
            // Using $this->departureCities
            $values = array_values($this->departureCities);
            $departCity = implode(',', $values);
            //dump($departCity);

                $pkg_data = [
                    'name' => $this->package_name,
                    'service_type' => $this->service_type,
                    'departure_type'=>$this->departure_type,
                    'package_days' => $this->package_days,
                    'package_type_ids' => $id_string,
                    'description' => $this->packageDescription,
                    'packageImage' => $packageImagePath,
                    'package_includes' =>  $package_includes,
                    'flights' => $allFlights,
                    'Depart_city' => $departCity,
                    'payment_policy' => $this->paymentPolicy,
                    'important_notes' => $this->importantNotes,
                    'cancellation_policy' => $this->cancellationPolicy,
                    'inclusion' => $this->packageInclusion,
                    'exclusion' => $this->packageExclusion,
                    'itinerary' => $this->packageItinerary,
                    'flight_transport' => $this->FlightTransport,
                    'packageMeals' => $this->packageMeals,
                    'visa_taxes' => $this->packageVisaTaxes,
                    'makkah_nights' => $this->makkah_nights,
                    'madina_nights' => $this->madina_nights,
                    'delete_status' => true,
                ];

                 $package = mainPackage::create($pkg_data);

                //dump($package);

                //Create Package details
                    // $details_data = [];
                    // $keys = array_values($this->includes);
                    // $package_includes = implode(',', $keys);

                    foreach ($this->package_type_ids as $key => $value) {
                        // $keys = array_keys($this->package_includes[$key]);
                        // $package_includes = implode(',', $keys);
                        //  dd($this->child_wo_b[$key]);
                        $details_data[] = [
                            'pkg_id' => $package->id,
                            'pkg_type_id' => $value,
                            'makka_category' => $this->makka_rating[$key] ?? null,
                            'makka_hotel_id' => $this->makka_hotel[$key] ?? null,
                            'madina_category' => $this->madina_rating[$key] ?? null,
                            'madina_hotel_id' => $this->madina_hotel[$key] ?? null,
                            'meal_type' => $this->food_type[$key] ?? null,
                            'laundry_type' => $this->laundray_type[$key] ?? null,
                            'g_share' => isset($this->g_share_price[$key]) && $this->g_share_price[$key] != "" ? $this->g_share_price[$key] : 0,
                            'qt_share' => isset($this->qt_share_price[$key]) && $this->qt_share_price[$key] != "" ? $this->qt_share_price[$key] : 0,
                            'qd_share' => isset($this->qd_share_price[$key]) && $this->qd_share_price[$key] != "" ? $this->qd_share_price[$key] : 0,
                            't_share' => isset($this->t_share_price[$key]) && $this->t_share_price[$key] != "" ? $this->t_share_price[$key] : 0,
                            'd_share' => isset($this->d_share_price[$key]) && $this->d_share_price[$key] != "" ? $this->d_share_price[$key] : 0,
                            'single' => isset($this->single_price[$key]) && $this->single_price[$key] != "" ? $this->single_price[$key] : 0,
                            'child_with_bed' => isset($this->child_w_b[$key]) && $this->child_w_b[$key] != "" ? $this->child_w_b[$key] : 0, 
                            'child_no_bed' => $this->child_wo_b[$key],
                            'infant' => isset($this->infants[$key]) && $this->infants[$key] != "" ? $this->infants[$key] : 0,
                            
                        ];
                    }
                    //dd($details_data);
                    foreach ($details_data as $details) {

                        PackageDetail::create($details);
                    }
                    session()->flash('message', 'Package details added successfully!');

                    // $this->alert('success', 'Created Successfully');
                    //return redirect()->route('admin.umrah-land-packages')->with('success', 'Package created successfully.');
                    // Reset form fields after successful submission
                    $this->reset([
                        'package_name',
                        'package_days',
                        'packageImage',
                        'packageDescription',
                        'package_type_ids',
                        'makka_rating',
                        'makkaHotel',
                        'madina_rating',
                        'madinaHotel',
                        'food_type',
                        'laundray_type',
                        'includes',
                        'flights',
                        'departureCities',
                        'g_share_price',
                        'qt_share_price',
                        'qd_share_price',
                        't_share_price',
                        'd_share_price',
                        'single_price',
                        'child_w_b',
                        'child_wo_b',
                        'infants',
                        'paymentPolicy',
                        'importantNotes',
                        'cancellationPolicy',
                        'FlightTransport',
                        'packageMeals',
                        'packageVisaTaxes',
                        'packageInclusion',
                        'packageExclusion',
                        'packageItinerary',
                        'makkah_nights',
                        'madina_nights',
                    ]);
    }

    
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.umrah-land-package');
    }
}
