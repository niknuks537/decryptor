<?php

namespace App\Livewire;

use Livewire\Component;
use PDO;

class CreateCode extends Component
{
    public string $message;

    public function render()
    {
        return view('livewire.create-code');
    }
}
