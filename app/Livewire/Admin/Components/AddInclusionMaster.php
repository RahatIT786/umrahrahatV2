<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\inclusion;

class AddInclusionMaster extends Component
{
    public $InclusionName;
    public $InclusionId;

    protected $rules = [
        'InclusionName' => 'required|string',
    ];

    protected $messages = [
        'InclusionName.required' => 'Inclusion Nmae is required.',
        'InclusionName.string' => 'Inclusion Name   must be a string.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $inclusion = inclusion::findOrFail($id);
            $this->InclusionId = $inclusion->id;
            $this->InclusionName = $inclusion->InclusionName;
        }
    }

    public function submit()
    {
        $this->validate();

        if ($this->InclusionId) {
            // Update existing package
            $Inclusion = inclusion::findOrFail($this->InclusionId);
            $Inclusion->update([
                'InclusionName' => $this->InclusionName,
            ]);
            session()->flash('message', 'Package Type details updated successfully!');
        } else {
            // Add new package
            inclusion::create([
                'InclusionName' => $this->InclusionName,
                'delete_status' =>1,
            ]);
            session()->flash('message', 'Package Type added successfully!');
        }

        // Reset form fields
        $this->reset(['InclusionName']);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-inclusion-master');
    }
}
