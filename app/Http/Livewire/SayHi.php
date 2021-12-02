<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{
    public $contact;

    // You can call $refresh manually to force a re-render.
    protected $listeners = [
        'refreshChildren' => '$refresh',
        'foo' => '$refresh',
    ];

    // In your listeners, you can specify the `refresh` method and pass a value to it
    // public function refresh($value)
    // {
    //     // dd($value);
    // }

    public function emitFoo()
    {
        // $this->emit('foo');
        $this->emitUp('foo'); // will only emit up to the parent component
    }

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
