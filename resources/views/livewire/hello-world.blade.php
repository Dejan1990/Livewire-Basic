<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->name))    
    @endforeach

    <hr>

    {{ now() }}

    <button wire:click="refreshChildren">Refresh Children</button>
    <!-- Na ovaj nacin $emit('refreshChildren') parent se ne rifresuje, samo children, ako hocemo i parent onda radimo kao pre $emit('refreshChildren') -->
</div>
