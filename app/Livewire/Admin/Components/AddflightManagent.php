<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\FlightManagement;
class AddflightManagent extends Component
{
    use WithFileUploads;

    public $FlightName;
    public $FlightImage;
    public $FlightImagePath;
    public $flightId;

    protected $rules = [
        'FlightName' => 'required|string',
        'FlightImage' => 'nullable|image|max:2048',
    ];

    protected $messages = [
        'FlightName.required' => 'Flight Name type is required.',
        'FlightName.string' => 'Flight Name type must be a string.',
        'FlightImage.image' => 'The file must be an image.',
        'FlightImage.max' => 'The image size must not exceed 2MB.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $flight = FlightManagement::findOrFail($id);
            $this->flightId = $flight->id;
            $this->FlightName = $flight->FlightName;
            $this->FlightImagePath = $flight->FlightImagePath;
        }
    }

    public function submit()
    {
        $this->validate();

        $FlightImagePath = $this->FlightImage ? $this->FlightImage->store('uploads', 'public') : null;

        if ($this->flightId) {
            // Update existing visa
            $flight = FlightManagement::findOrFail($this->flightId);
            $flight->update([
                'FlightName' => $this->FlightName,
                'FlightImagePath' => $FlightImagePath ?? $flight->FlightImagePath, // Keep old file path if no new file is uploaded
            ]);
            session()->flash('message', 'Visa details updated successfully!');
        } else {
            // Add new visa
            FlightManagement::create([
                'FlightName' => $this->FlightName,
                'FlightImagePath' => $FlightImagePath,
                'delete_status' => true,
            ]);
            session()->flash('message', 'Flight details added successfully!');
        }
        // Reset form fields
        $this->reset(['FlightName','FlightImage']);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $flightDetails = FlightManagement::where('delete_status', true)->get();
        return view('livewire.admin.components.addflight-managent',['flightDetails'=> $flightDetails]);
    }
}
