<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Jelly', 'Man', 'Chico'];
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeContact(Contact $contact)
    {
        $contact->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
