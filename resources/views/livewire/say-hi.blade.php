<span>
    Hello, {{ $contact->name }}: {{ now() }}
    {{-- <button wire:click="$refresh">Refresh</button> --}}
    <button wire:click="emitFoo">Emit Foo</button>
</span>
