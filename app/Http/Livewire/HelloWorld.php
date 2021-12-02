<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;

    protected $listeners = ['foo' => '$refresh'];

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeContact(Contact $contact)
    {
        $contact->delete();
        $this->contacts = Contact::all();
    }

    // This method is  not needed if $emit('refreshChildren') is used in blade template
    public function refreshChildren()
    {
        $this->emit('refreshChildren', 'foo'); // You can pass a variable as the second argument
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
