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
    public $searchPackageForm;
    public $largestDepartCity;
    public $mostFrequentCity;
    public $searchPackageDays= null;
    public $searchDay;
    public $searchPackageCity;

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
    public $isOpen = false;
    public $package = [];

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
        $this->departCities = MainPackage::where('delete_status',1)->where('service_type','Umrah')->where('departure_type','land')->pluck('depart_city');
        $this->packageDays =MainPackage::where('delete_status', 1)->where('service_type','Umrah')->where('departure_type','land')->pluck('package_days')->unique()->values();
        // Step 2: Count occurrences of each unique value
        $counts = array_count_values($this->departCities->toArray());

        // Step 3: Get the most frequent value
        $this->mostFrequentCity = array_search(max($counts), $counts);
        //dd($this->mostFrequentCity);
        // return $mostFrequentCity;

        // // Step 4: Convert back to string and store it
        $this->largestDepartCity = explode(',', $this->mostFrequentCity);

    }
    public function openModal($packageData)
    {
        $this->package = $packageData;
       // dd($this->package);
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
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

    public function updatedSearchPackageDay($value){
        $this->searchDay = $value;
    }
    public function selectSingle($value)
    {
        $this->searchPackageDays = $value;
    }
    public function searchPackageCity($value){
        $this->searchPackageCity = $value;
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
        if($this->searchPackageForm){
            $query->where('name', 'like', '%' . $this->searchPackageForm . '%');
        }
       // dump($this->searchPackageDays);
        if($this->searchPackageDays){
            $query->where('package_days', 'like', '%' . $this->searchPackageDays );
        }

        if($this->searchPackageCity){
            $query->where('depart_city', 'like', '%' . $this->searchPackageCity . '%');
        }

        $this->allPackages = $query->take($this->limit)->get();
        // dd( $this->allPackages);
        // Render the Livewire view with allPackages data
        return view('livewire.user_front.umrah.umrah-land-package-u-a-e', ['allPackages' => $this->allPackages, 'departCities' => $this->departCities]);
    }
}
