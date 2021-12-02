<div>
    @foreach($contacts as $contact)
        <p>
            @livewire('say-hi', ['contact' => $contact], key($contact->id))
            <button wire:click="removeContact({{ $contact->id }})">Remove</button>
        </p>
    @endforeach

    <hr>

    <button wire:click="$refresh">Refresh</button> {{ now() }}
</div>
