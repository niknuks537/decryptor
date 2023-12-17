<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;
use PDO;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'mode_dual',
        'heat',
        'wall_lamp',
        'quiet_time',
        'nest_farsight_weather',
        'nest_cam_iq',
        'nest_thermostat_gen_3',
        'nest_heat_link_e',
        'arrows_more_up',
        'weather_snowy',
        'airwave',
        'tools_power_drill',
        'nest_eco_leaf',
        'stadia_controller',
        'stockpot',
        'skillet',
        'shelves',
        'doorbell_3p',
        'umbrella',
        'toolbar',
        'pip',
        'ripples',
        'chips',
        'sunny',
        'wc',
        'bedtime',
    ];

    #[Computed(persist:true)]
    public function letters(): array{

        shuffle($this->symbols);

        return collect(range('a', 'z'))
            ->combine($this->symbols)
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
