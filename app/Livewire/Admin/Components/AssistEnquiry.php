<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\AssistForm;

class AssistEnquiry extends Component
{
    use WithPagination;
    public $search = null;
    public $hotelId;
    public $showModal = false;

    public function confirmDelete($id)
    {
        $this->hotelId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->hotelId) {
            $hotelDetails = AssistForm::findOrFail($this->hotelId);
            $hotelDetails->update(['delete_status' => 2]);
            session()->flash('message', 'User Enquiry successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $userEnquiry = AssistForm::where('delete_status', 1)->paginate(10);
        return view('livewire.admin.components.assist-enquiry',['userEnquiry' => $userEnquiry]);
    }
}
