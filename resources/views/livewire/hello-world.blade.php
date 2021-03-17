<div>
    <input wire:model="name" type="text"> <!-- U pozadini se odvija AJAX request -->
    <input wire:model="loud" type="checkbox">
    <select wire:model=greeting multiple>
        <option>Hello</option>
        <option>Goodbay</option>
        <option>Adios</option>
    </select>

    {{ implode(', ',$greeting) }} {{ $name }} @if ($loud) ! @endif
</div>
