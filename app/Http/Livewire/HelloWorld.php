<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'World';
    public $loud = false;
    public $greeting = ['Hello'];

    public function resetName()
    {
        $this->name = 'Livewire';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
