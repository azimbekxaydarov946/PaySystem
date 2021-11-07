<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MaoshComponent extends Component
{
    public function render()
    {
        return view('livewire.maosh-component')->layout('layouts.base');
    }
}
