<?php 
namespace App\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\PackageType;
use Livewire\Attributes\Layout;

class AddPackageTypeMaster extends Component
{
    public $PackageType;
    public $PackageTypeId;

    protected $rules = [
        'PackageType' => 'required|string',
    ];

    protected $messages = [
        'PackageType.required' => 'Package Type is required.',
        'PackageType.string' => 'Package Type must be a string.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $package = PackageType::findOrFail($id);
            $this->PackageTypeId = $package->id;
            $this->PackageType = $package->packageType;
        }
    }

    public function submit()
    {
        $this->validate();

        if ($this->PackageTypeId) {
            // Update existing package
            $package = PackageType::findOrFail($this->PackageTypeId);
            $package->update([
                'packageType' => $this->PackageType,
            ]);
            session()->flash('message', 'Package Type details updated successfully!');
        } else {
            // Add new package
            PackageType::create([
                'packageType' => $this->PackageType,
                'delete_status' =>1,
            ]);
            session()->flash('message', 'Package Type added successfully!');
        }

        // Reset form fields
        $this->reset(['PackageType']);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-package-type-master');
    }
}
