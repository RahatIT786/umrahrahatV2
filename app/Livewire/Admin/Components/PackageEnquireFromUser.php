<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\package_user_enquire;
use Livewire\WithPagination; 

class PackageEnquireFromUser extends Component
{
    use WithPagination; 
    // public function getEnquiriesJson()
    // {
    //     $enquiries = package_user_enquire::with('serviceType')->get();
    //     foreach ($enquiries as $enquiry) {
    //         echo $enquiry->package_user_name .'<br>';  // Accessing data from PackageUserEnquire
    //         echo $enquiry->serviceType->service_type.'<br>';  // Accessing related data from ServiceType
    //     }
    //     //return response()->json($enquiries);
    // }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
         $enquiries = package_user_enquire::with('serviceType')->paginate(10);
        // return response()->json($enquiries);
        return view('livewire.admin.components.package-enquire-from-user',['enquiries' => $enquiries ]);
    }
}
