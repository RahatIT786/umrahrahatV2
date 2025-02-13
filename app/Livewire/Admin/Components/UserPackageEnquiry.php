<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\CommonForm;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class UserPackageEnquiry extends Component
{
    use WithPagination;  // ✅ Livewire pagination trait

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
            $hotelDetails = CommonForm::findOrFail($this->hotelId);
            $hotelDetails->update(['delete_status' => 2]);
            session()->flash('message', 'User Enquiry successfully marked as deleted.');
            $this->showModal = false;
        }
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $userEnquiry = CommonForm::where('delete_status', 1)
            ->paginate(10); // ✅ Move pagination here

        return view('livewire.admin.components.user-package-enquiry', [
            'userEnquiry' => $userEnquiry  // ✅ Pass data to the view
        ]);
    }
}

