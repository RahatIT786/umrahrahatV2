<?php

namespace App\Livewire\Admin\umrahv2;

use App\Jobs\CalculateWednesdaysJob;
use App\Models\Package;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\AgentSignUp as SignUp;
class AgentSignup extends Component
{
    use WithFileUploads;
    public $agentSignUps;
  
    public function mount(){

    $this->agentSignUps=SignUp::where('delete_status',1)->get();

    }


    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('admin.umrahv2.agent-signup');
    }
}
