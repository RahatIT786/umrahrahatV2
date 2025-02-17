<?php

namespace App\Livewire\UserFront\Umrah;

use Livewire\Component;
use App\Models\MainPackage;
use App\Models\Inclusion;
use App\Models\DepartureCity;
use Livewire\Attributes\Layout;

class UmrahMainPackage extends Component
{
    public $allPackages;
    public $inclusions;
    public $departCities;
    public $selectedCity;
    public $allCities;
    public $searchCity;
    public $searchDays;
    public $packageDays;
    public $searchPackage;
    public $largestDepartCity;
    public $mostFrequentCity;
    public $searchPackageDays= null;
    public $searchDay;
    public $searchPackageCity;

    public function mount()
    {
        // Fetch inclusions with delete_status 1
        $this->inclusions = Inclusion::where('delete_status', 1)->get();
        $this->allCities = DepartureCity::where('delete_status', 1)->get();
        // Get and process all depart city data
      //  $this->departCities = $this->getAllDepartCities();
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

    #[Layout('user.Layouts.app')]
    public function render()
    {
        // Fetch all main packages with delete_status 1
        $query = MainPackage::where('delete_status', 1);
        if ($this->searchPackage) {
            $query->where('name', 'like', '%' . $this->searchPackage . '%');
        }
        $this->allPackages = $query->get();
        // Render the Livewire view with allPackages data
        return view('livewire.user_front.umrah.umrah-main-package', ['allPackages' => $this->allPackages, 'departCities' => $this->departCities]);
    }
}
