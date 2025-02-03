<?php

namespace App\Livewire\Admin\Components;

use App\Models\PackageDepartureType;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\DepartureCity as City;
class PackageTransportType extends Component
{
    public $showModal;
       public $departureType;
      

       public $typeEdit=false;

       public $editId;

    public function mount(){
        
    }


   
    public function saveDepartureType(){
        $var = strtolower($this->departureType);
        // dd($var);
        PackageDepartureType::create([
            'type'=>$var,
        ]);
        $this->reset();
        session()->flash('message','Data Added Successfully');
    }

    public function typeEditModal($id){
        $this->typeEdit=true;
        $this->editId=$id;

    }

    public function saveEditedType(){
    //   $editedData = PackageDepartureType::findOrFail($this->editId);
    //   $editedData->type=$this->editedType;
    //   $editedData->save();
    }

    

    public function confirmDelete($id)
    {
       
      $delData=  PackageDepartureType::findOrFail($id);
      $delData->delete_status=2;
      $delData->save();
      $this->render();
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

   
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $datas = PackageDepartureType::where('delete_status', true)->get();
        return view('livewire.admin.components.package-transport-type',['datas' => $datas]);
    }
}
