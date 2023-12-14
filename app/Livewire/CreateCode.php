<?php

namespace App\Livewire;

use Livewire\Component;
use PDO;

class CreateCode extends Component
{
    public int $count =0;
    public function render()
    {
        return view('livewire.create-code');
    }

    public function increment(){
        $this->count++;
    }
}
