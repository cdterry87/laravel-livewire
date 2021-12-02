<span>
    Hello, {{ $contact->name }}: {{ now() }}
    <button wire:click="$refresh">Refresh</button>
</span>
