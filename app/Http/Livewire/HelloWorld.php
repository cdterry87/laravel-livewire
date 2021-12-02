<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'World';
    public $loud = false;
    public $greeting = ['Hello'];

    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name', $name); // This will set the name property to the value of the name query parameter.
        // $this->name = $name; // This will override the defined value of name above when component is mounted.
    }

    public function hydrate()
    {
        // Runs when component is re-rendered.
        $this->name = 'Hydrated!';
    }

    public function updated($field)
    {
        // Runs when a property is updated.
        if ($field === 'name') {
            $this->name = strtoupper($this->name);
        }
    }

    public function resetName()
    {
        $this->name = 'Livewire';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
