<?php

namespace App\Livewire\Admin\Components;

use App\Models\VisaDetail;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AddVisa extends Component
{
    use WithFileUploads;

    public $visaType;
    public $country;
    public $validity;
    public $documentsRequired;
    public $processingTime;
    public $price;
    public $file;
    public $visaId;
    public $filePath;
    public $flyer;
    public $flyerPath;
    public $visaTypes = [
        'UMRAH VISA',
        'TOURIST VISA',
        'BUSINESS VISA',
        'PERSONAL VISA'
    ];
    

    protected $rules = [
        'visaType' => 'required|string',
        'country' => 'required',
        'validity' => 'required',
        'documentsRequired' => 'required|string',
        'processingTime' => 'required|integer',
        'price' => 'required|numeric',
        'file' => 'nullable|image|max:2048', // Only images allowed
        'flyer' => 'nullable|image|max:2048',
    ];

    protected $messages = [
        'visaType.required' => 'Visa type is required.',
        'visaType.string' => 'Visa type must be a string.',
        'visaType.max' => 'Visa type cannot exceed 255 characters.',
        'country.required' => 'country type is required.',
        'validity.required' => 'validity type is required.',
        'documentsRequired.required' => 'Fill this field.',
        'documentsRequired.string' => 'Documents required must be a string.',
        'documentsRequired.max' => 'Documents required description cannot exceed 1000 characters.',
        'processingTime.required' => 'Processing time is required.',
        'processingTime.integer' => 'Processing time must be an integer.',
        'processingTime.min' => 'Processing time must be at least 1 day.',
        'price.required' => 'Price is required.',
        'price.numeric' => 'Price must be a numeric value.',
        'price.min' => 'Price must be a positive value.',
        'file.image' => 'The file must be an image.',
        'file.max' => 'The image size must not exceed 2MB.',
        'flyer.image' => 'The file must be an image.',
        'flyer.max' => 'The image size must not exceed 2MB.',
    ];

    public function mount($id = null)
    {
        if ($id) {
           
            $visa = VisaDetail::findOrFail($id);
            $this->visaId = $visa->id;
            $this->visaType = $visa->visa_type;
            $this->country = $visa->country;
            $this->validity = $visa->validity;
            $this->documentsRequired = $visa->documents_required;
            $this->processingTime = $visa->processing_time;
            $this->price = $visa->price;
            $this->filePath = $visa->file_path;
            $this->flyerPath = $visa->flyer_path;
        }
    }

    public function submit()
    {
        $this->validate();

        $filePath = $this->file ? $this->file->store('uploads', 'public') : null;
        $flyerPath = $this->flyer ? $this->flyer->store('flyers', 'public') : null;

        if ($this->visaId) {
            // Update existing visa
            $visa = VisaDetail::findOrFail($this->visaId);
           // dd($this->visaType);
            $visa->update([
                'visa_type' => $this->visaType,
                'country' => $this->country,
                'validity' => $this->validity,
                'documents_required' => $this->documentsRequired,
                'processing_time' => $this->processingTime,
                'price' => $this->price,
                'file_path' => $filePath ?? $visa->file_path, // Keep old file path if no new file is uploaded
                'flyer_path' => $flyerPath ?? $visa->flyer_path, // Keep old flyer path if no new flyer is uploaded
            ]);
            session()->flash('message', 'Visa details updated successfully!');
        } else {
            // Add new visa
            VisaDetail::create([
                'visa_type' => $this->visaType,
                'country' => $this->country,
                'validity' => $this->validity,
                'documents_required' => $this->documentsRequired,
                'processing_time' => $this->processingTime,
                'price' => $this->price,
                'file_path' => $filePath,
                'flyer_path' => $flyerPath,
                'delete_status' => 1,
            ]);
            session()->flash('message', 'Visa details added successfully!');
        }
        // Reset form fields
        $this->reset(['visaType','country','validity', 'documentsRequired', 'processingTime', 'price', 'file', 'flyer']);
    }   

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-visa');
    }
}
