<div>
    <input wire:model="name" type="text"> <!-- U pozadini se odvija AJAX request -->
    <input wire:model="loud" type="checkbox">
    <select wire:model=greeting multiple>
        <option>Hello</option>
        <option>Goodbay</option>
        <option>Adios</option>
    </select>

    {{ implode(', ',$greeting) }} {{ $name }} @if ($loud) ! @endif

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button>Reset Name</button> <!-- wire: -> Ovde mozemo ubaciti bilo koji event -->
    </form>
</div>
