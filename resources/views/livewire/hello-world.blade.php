<div>
    @foreach($contacts as $contact)
        <p>
            @livewire('say-hi', ['contact' => $contact], key($contact->id))
            <button wire:click="removeContact({{ $contact->id }})">Remove</button>
        </p>
    @endforeach

    <hr>

    {{ now() }}

    {{-- This will re-render the current component and then emit the refreshChildren event --}}
    {{-- This is because it  has to first go to the Controller to call the refreshChildren method --}}
    <button wire:click="refreshChildren">Refresh Parent and Children</button>

    {{-- This version will directly emit the refreshChildren event without re-rendering the current component --}}
    <button wire:click="$emit('refreshChildren')">Refresh Only Children</button>

    {{-- There is also a `livewire` global variable in the window. You can call `livewire.emit('refreshChildren')` in the console and it'll refresh --}}
</div>
