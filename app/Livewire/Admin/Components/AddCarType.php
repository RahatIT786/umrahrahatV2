<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\CarType as carTypeModel;

class AddCarType extends Component
{
    use WithFileUploads;

    public $carType;
    public $carImage;
    public $carImagePath;
    public $carId;

    protected $rules = [
        'carType' => 'required|string',
        'carImage' => 'nullable|image',
    ];

    protected $messages = [
        'carType.required' => 'car Name type is required.',
        'carType.string' => 'car Name type must be a string.',
        'carImage.image' => 'The file must be an image.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $Car = carTypeModel::findOrFail($id);
            $this->carId = $Car->id;
            $this->carType = $Car->car_type;
            $this->carImagePath = $Car->carImagePath;
        }
    }

    public function submit()
    {
        $this->validate();
        

        $carImagePath = $this->carImage ? $this->carImage->store('uploads', 'public') : null;
        
        if ($this->carId) {
            // Update existing visa
            $Car = carTypeModel::findOrFail($this->carId);
            $Car->update([
                'car_type' => $this->carType,
                'carImagePath' => $carImagePath ?? $Car->carImagePath, // Keep old file path if no new file is uploaded
            ]);
            session()->flash('message', 'Car details updated successfully!');
        } else {
            // Add new visa
            carTypeModel::create([
                'car_type' => $this->carType,
                'carImagePath' => $carImagePath,
                'delete_status' => 1,
            ]);
            session()->flash('message', 'Car details added successfully!');
        }
        // Reset form fields
        $this->reset(['carType','carImage']);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-car-type');
    }
}
