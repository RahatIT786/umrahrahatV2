<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\MainZiyarat;
use Livewire\WithPagination;

class Ziyarat extends Component
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
            $visaDetails = MainZiyarat::findOrFail($this->ziyaratId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'ziyarat details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $ZiyaratDetails = MainZiyarat::with('serviceCity')->where('delete_status', 1)->paginate(10);
        //dd($ZiyaratDetails);
        return view('livewire.admin.components.ziyarat',['ZiyaratDetails' => $ZiyaratDetails]);
    }
}
