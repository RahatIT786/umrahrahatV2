<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\CateringController;


class Catringlist extends Component
{
    use WithPagination; 
    public $showModal = false;
    public $foodId;
    public $search = null;
    public function confirmDelete($id)
    {
        $this->foodId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->foodId) {
            $foodDetails = CateringController::findOrFail($this->foodId);
            $foodDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Visa details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $foodDetails = CateringController::where('delete_status', 1)
        ->where(function($query){
            $query->where('foodType', 'like', '%'.$this->search.'%')
                  ->orWhere('foodPrice', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        return view('livewire.admin.components.catringlist',['foodDetails'=>$foodDetails]);
    }
}
