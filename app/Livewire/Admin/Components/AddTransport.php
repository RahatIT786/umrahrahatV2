<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\CarSector;
use App\Models\CarType;
use App\Models\transportController;
use Livewire\WithFileUploads;

class AddTransport extends Component
{
    use WithFileUploads;
    public $transportId;
    public $carType;
    public $allCarTypes;
    public $carSector;
    public $allCarSectors;
    public $currency;
    public $seatsCount;
    public $airConditioner;
    public $price;
    public $transportImage;
    public $transportImagePath;
    public $termsAndConditision;
    public $discription;

    protected $rules = [
        'carType' => 'required',
        'carSector' => 'required',
        'currency' => 'required',
        'seatsCount' => 'required',
        'price' => 'required',
        'transportImage' => 'nullable|image',
        'termsAndConditision' => 'required',
        'discription' => 'required',
    ];

    protected $messages = [
        'carType.required' => 'car type is required.',
        'carSector.required' => 'car Sector this field.',
        'currency.required' => 'currency is required.',
        'seatsCount.required' => 'seatsCount  is required.',
        'price.required' => 'Price is required.',
        'transportImage.image' => 'The transportImage must be an image.',
        'termsAndConditision.required' => 'Terms And Conditision is required.',
        'discription.required' => 'discription  is required.',
    ];

    public function mount(){
        $this->allCarTypes = CarType::where('delete_status',1)->get();
        $this->allCarSectors = CarSector::where('delete_status',1)->get();
    }
    public function submit()
    {
        $this->validate();

        $transportImagePath = $this->transportImage ? $this->transportImage->store('uploads', 'public') : null;

        if ($this->transportId) {
            // Update existing visa
            $transport = transportController::findOrFail($this->transportId);
           // dd($this->visaType);
            $transport->update([
                'carType' => $this->carType,
                'carSector' => $this->carSector,
                'currency' => $this->currency,
                'seatsCount' => $this->seatsCount,
                'price' => $this->price,
                'transportImage' => 'null',
                'airConditioner' => 'yes',
                'termsAndConditision' => $this->termsAndConditision,
                'discription' => $this->discription,
            ]);
            session()->flash('message', 'Visa details updated successfully!');
        } else {
            // Add new visa
            transportController::create([
                'carType' => $this->carType,
                'carSector' => $this->carSector,
                'currency' => $this->currency,
                'seatsCount' => $this->seatsCount,
                'price' => $this->price,
                'transportImage' => 'null',
                'airConditioner' => 'yes',
                'termsAndConditision' => $this->termsAndConditision,
                'discription' => $this->discription,
                'delete_status' => 1,
            ]);
            session()->flash('message', 'Transport details added successfully!');
        }
        // Reset form fields
        $this->reset(['carType', 'carSector', 'currency','seatsCount', 'price', 'transportImage', 'airConditioner','termsAndConditision','discription']);
    }  

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-transport');
    }
}
