<?php

namespace App\Livewire\UserFront\Umrahv2;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\transportController;
use App\Models\TransferForm;
class TransfersSingle extends Component
{
    public $transportDetail;
    public $car_id;
    public $carsectormaster, $cartypemaster, $star_rating, $car_type_id, $car_sector_id;
    public $cartype,$carsector;
    public $name, $email, $phone, $adult, $children;

    public function mount($id)
    {
        $this->car_id = $id;
        $this->transportDetail = transportController::find($this->car_id);
        $this->car_sector_id = $this->transportDetail->carSector;
        $this->car_type_id = $this->transportDetail->carType;
        $this->cartype = $this->transportDetail->cartypemaster->car_type;
        $this->carsector = $this->transportDetail->carsectormaster->car_sector;
    }
    public function getcars()
    {
        // return transportController::with(['cartypemaster', 'carsectormaster'])->get();
        return transportController::search('carType', $this->car_type_id)->search('carSector', $this->car_sector_id)->get();
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required | email',
        'phone' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'phone.required' => 'Phone is required.',
    ];

    public function submit()
    {
        // dd($this->package);
        $this->validate();

       $suss = TransferForm::create([
            'user_name' => $this->name,
            'user_email' => $this->email,
            'user_phone' => $this->phone,
            'user_adult' => $this->adult,
            'user_children' => $this->children,
            'car_type' => $this->cartype,
            'sector_type' => $this->carsector,
            'delete_status' => 1,
        ]);
        $this->reset(['name', 'email', 'phone', 'adult', 'children']);
        session()->flash('message', 'Your query send successfully!');

        // Handle form submission with package details
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.transfers-single');
    }
}
