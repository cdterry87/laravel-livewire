<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greeting" multiple>
        <option value="Hello">Hello</option>
        <option value="Goodbye">Goodbye</option>
        <option value="Adios">Adios</option>
        <option value="Aloha">Aloha</option>
    </select>
    {{ implode(', ', $greeting) }} {{ $name }} @if($loud) ! @endif

    <form action="#" wire:submit.prevent="resetName">
        <button>Reset Name</button>
    </form>

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button>Dynamic Reset Name</button>
    </form>
</div>
