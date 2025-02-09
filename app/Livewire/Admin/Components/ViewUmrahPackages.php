<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\mainPackage;
use App\Models\PackageType;
use App\Models\PackageDetail;
use App\Models\DepartureCity;
use App\Models\FlightManagement;
use App\Models\inclusion;
use App\Models\HotelDetail;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;

class ViewUmrahPackages extends Component
{
    use LivewireAlert, WithFileUploads;
    public $package_name, $package_image = [], $description;
    public $type_ids = [], $package_type_ids = [];
    public $umrah_type;

    public $serviceType, $service_id, $package_image_edit;
    public $makka_rating = [];
    public $makkaHotel = [], $makka_hotel = [];
    public $madina_rating = [];
    public $madinaHotel = [], $madina_hotel = [];
    public $packageType = [];
    public $foodMaster = [], $food_type = [];
    public $lundrayMaster = [], $laundray_type = [];
    public $package_includes = [];
    public $package_includes_ids = [];
    public $flights = [];
    public $flight_ids = [];
    public $departureCities = [];
    public $departure_city_id = [];
    public $packageImagePath;
    public $packageImage;

    public $g_share_price = [], $qt_share_price = [], $qd_share_price = [], $t_share_price = [], $d_share_price = [], $single_price = [], $child_w_b = [], $child_wo_b = [], $infants = [];
    public $payment_policy, $important_notes, $cancellation_policy, $flight_transport, $meals, $packageMeals, $visa_taxes, $inclusion, $exlusion, $itinerary;
    public $package;





    public function mount($package)
    {
        $this->package = mainPackage::with('pkgDetails')->where('id', $package)->first();
        //dd($this->package);
        $this->package_type_ids = explode(',', $this->package->package_type_ids);
        $this->package_includes_ids = explode(',', $this->package->package_includes);
        $this->flight_ids = explode(',', $this->package->flights);
        $this->departure_city_id = explode(',', $this->package->depart_city);
       $this->packageType = PackageType::orderBy('id', 'asc')->pluck('packageType', 'id');

       // dd($this->packageType);
       $this->package_includes = inclusion::orderBy('id', 'asc')->pluck('InclusionName', 'id');
       $this->flights = FlightManagement::orderBy('id', 'asc')->pluck('FlightName', 'id');
       $this->departureCities = DepartureCity::orderBy('id', 'asc')->pluck('CityName', 'id');
        //Edit Values
        $this->package_name = $this->package->name;
        
        $this->description = $this->package->description;
        //dd($this->description);
        $this->payment_policy = $this->package->payment_policy ?? '';
        $this->important_notes = $this->package->important_notes ?? '';
        $this->cancellation_policy = $this->package->cancellation_policy ?? '';
        $this->flight_transport = $this->package->flight_transport ?? '';
        $this->packageMeals = $this->package->packageMeals ?? '';
        $this->visa_taxes = $this->package->visa_taxes ?? '';
        $this->inclusion = $this->package->inclusion ?? '';
        $this->exlusion = $this->package->exclusion ?? '';
        $this->itinerary = $this->package->itinerary ?? '';
        $this->packageImagePath = $this->package->packageImage ?? '';

        $query = PackageDetail::query()->where('pkg_id', $this->package->id);
        //dd($query);
        $this->package_type_ids = PackageDetail::where('pkg_id', $this->package->id)->pluck('pkg_type_id')->toArray();
        //dd( $this->package_type_ids);
        //dd($this->packageType,$this->package_type_ids);
        //dd( $this->package_type_ids);
        $this->makka_rating = $query->pluck('makka_category', 'pkg_type_id')->toArray();
        $this->madina_rating = $query->pluck('madina_category', 'pkg_type_id')->toArray();
        // dump( $this->makka_rating , $this->madina_rating);
        foreach ($this->makka_rating as $key => $val) {
            $this->makkaHotel[$key] = HotelDetail::where('hotelStarRating', $val)
                ->where('hotelCity','MAKKAH')
                ->where('deleteStatus', 1)
                ->pluck('hotelName', 'id')->toArray();
                //dump($this->makkaHotel[$key]);
        }

        $this->makka_hotel = $query->pluck('makka_hotel_id', 'pkg_type_id')->toArray();
        $this->madina_hotel = $query->pluck('madina_hotel_id', 'pkg_type_id')->toArray();
        //dd($this->makka_hotel, $this->madina_hotel);


        foreach ($this->madina_rating as $key => $val) {
            $this->madinaHotel[$key] = HotelDetail::where('hotelStarRating', $val)
                ->where('hotelCity','MADINAH')
                ->where('deleteStatus', 1)
                ->pluck('hotelName', 'id')->toArray();
        }
        $this->food_type = $query->pluck('meal_type', 'pkg_type_id')->toArray();
        $this->laundray_type = $query->pluck('laundry_type', 'pkg_type_id')->toArray();
        $this->g_share_price = $query->pluck('g_share', 'pkg_type_id')->toArray();
        $this->qt_share_price = $query->pluck('qt_share', 'pkg_type_id')->toArray();
        $this->qd_share_price = $query->pluck('qd_share', 'pkg_type_id')->toArray();
        $this->t_share_price = $query->pluck('t_share', 'pkg_type_id')->toArray();
        $this->d_share_price = $query->pluck('d_share', 'pkg_type_id')->toArray();
        $this->single_price = $query->pluck('single', 'pkg_type_id')->toArray();
        $this->child_w_b = $query->pluck('child_with_bed', 'pkg_type_id')->toArray();
        $this->child_wo_b = $query->pluck('child_no_bed', 'pkg_type_id')->toArray();
        $this->infants = $query->pluck('infant', 'pkg_type_id')->toArray();
        //dd($this->g_share_price);
        
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.view-umrah-packages');
    }
}
