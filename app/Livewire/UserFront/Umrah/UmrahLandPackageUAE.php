<?php

namespace App\Livewire\UserFront\Umrah;

use App\Models\UmrahEnquire;
use Livewire\Component;
use App\Models\mainPackage as MainPackage;
use App\Models\inclusion as Inclusion;
use App\Models\DepartureCity;
use Livewire\Attributes\Layout;

class UmrahLandPackageUAE extends Component
{
    public $allPackages;
    public $inclusions;
    public $departCities;
    public $selectedCity;
    public $allCities;
    public $searchCity;
    public $searchDays;
    public $packageDays;

    //for enquire form variables
    public $umrahEmquire;

    //popup form variable
    public $name;
    public $mobile;
    public $date_of_travel;
    public $total_pax;
    public $travel_type;
    public $searchPackage;
    public $limit = 5;

    protected $rules = [
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:15',
        'date_of_travel' => 'required|date',
        'total_pax' => 'required|integer',
        'travel_type' => 'required|string',
    ];

    public function mount()
    {
        // $this->umrahEmquire=true;
        // Fetch inclusions with delete_status 1
        $this->inclusions = Inclusion::where('delete_status', 1)->get();
        //dd( $this->inclusions);
        $this->allCities = DepartureCity::where('delete_status', 1)->get();
        // Get and process all depart city data
        $this->departCities = $this->getAllDepartCities();
        $this->packageDays =MainPackage::where('delete_status', 1)->where('service_type','3')->pluck('package_days');
    }
    public function loadMore()
    {
        $this->limit += 5; // Load 10 more hotels
    }

    public function getAllDepartCities()
    {
        // Fetch all packages from the database
        $packages = MainPackage::where('delete_status', 1)->get();

        // Map over each package and convert `depart_city` to an array
        $departCities = $packages->map(function ($package) {
            return explode(',', $package->depart_city);
        });

        // Flatten the array and remove any duplicates
        $mergedCities = array_merge(...$departCities->toArray());

        // Remove duplicates using array_unique
        $uniqueCities = array_unique($mergedCities);

        // Optional: reindex the array to remove any gaps in the keys
        $uniqueCities = array_values($uniqueCities);

        // Return the unique cities
        return $uniqueCities;
    }

    public function umrahEnquirePopu(){

        $this->umrahEmquire=true;
    }
    public function umrahEnquirePopupClose(){
        $this->umrahEmquire=false;
    }

    public function quickEnquireSumbit(){

        // $this->validate();
       UmrahEnquire::create([
        'name' => $this->name,
        'mobile' => $this->mobile,
        'date_of_travel' => $this->date_of_travel,
        'total_pax' => $this->total_pax,
        'travel_type' => $this->travel_type,
    ]);

    $this->umrahEmquire=false;
    session()->flash('success', 'Your enquiry has been submitted successfully!');
    }







    #[Layout('user.Layouts.app')]
    public function render()
    {
        // Fetch all main packages with delete_status 1
        $query = MainPackage::where('delete_status', 1)
        ->where('service_type',strtolower(__('message.umrah')))
        ->where('departure_type',strtolower(__('message.land')));


        if ($this->searchPackage) {
            $query->where('name', 'like', '%' . $this->searchPackage . '%');
        }
        $this->allPackages = $query->take($this->limit)->get();
        // dd( $this->allPackages);
        // Render the Livewire view with allPackages data
        return view('livewire.user_front.umrah.umrah-land-package-u-a-e', ['allPackages' => $this->allPackages, 'departCities' => $this->departCities]);
    }
}
