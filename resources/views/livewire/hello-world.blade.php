<div>
    <input wire:model="name" type="text"> <!-- U pozadini se odvija AJAX request -->

    Hello {{ $name }} 

    <h2>{{ $hydrate }}</h2>
</div>
