<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DepartureCity;
use Livewire\Attributes\Layout;

class AddDepartureCity extends Component
{
    use WithFileUploads;

    public $CityName;
    public $CityImage;
    public $CityImagePath;
    public $CityId;

    protected $rules = [
        'CityName' => 'required|string',
        'CityImage' => 'nullable|image|max:2048',
    ];

    protected $messages = [
        'CityName.required' => 'Flight Name type is required.',
        'CityName.string' => 'Flight Name type must be a string.',
        'CityImage.image' => 'The file must be an image.',
        'CityImage.max' => 'The image size must not exceed 2MB.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $City = DepartureCity::findOrFail($id);
            $this->CityId = $City->id;
            $this->CityName = $City->CityName;
            $this->CityImagePath = $City->CityImagePath;
        }
    }

    public function submit()
    {
        $this->validate();

        $CityImagePath = $this->CityImage ? $this->CityImage->store('uploads', 'public') : null;

        if ($this->CityId) {
            // Update existing visa
            $City = DepartureCity::findOrFail($this->CityId);
            $City->update([
                'CityName' => $this->CityName,
                'CityImagePath' => $CityImagePath ?? $City->CityImagePath, // Keep old file path if no new file is uploaded
            ]);
            session()->flash('message', 'Visa details updated successfully!');
        } else {
            // Add new visa
            DepartureCity::create([
                'CityName' => $this->CityName,
                'CityImagePath' => $CityImagePath,
                'delete_status' => true,
            ]);
            session()->flash('message', 'Departure City details added successfully!');
        }
        // Reset form fields
        $this->reset(['CityName','CityImage']);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-departure-city');
    }
}
