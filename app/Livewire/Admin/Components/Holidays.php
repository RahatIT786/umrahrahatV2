<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\MainZiyarat;
use Livewire\WithPagination;
use App\Models\MainHoliday;


class Holidays extends Component
{
    use WithPagination;

    public $showModal = false;
    public $ziyaratId;
    public $search = null;
    public function confirmDelete($id)
    {
        $this->ziyaratId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->ziyaratId) {
            $visaDetails = MainHoliday::findOrFail($this->ziyaratId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Holiday details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $HolidayDetails = MainHoliday::with('serviceCity')->where('delete_status', 1)
        ->where(function($query){
            $query->where('name', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        return view('livewire.admin.components.holidays',['HolidayDetails' => $HolidayDetails]);
    }
}
