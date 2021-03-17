<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly', $hydrate;

    public function mount($name) // Lifecycle Hooks
    {
        $this->name = $name; // ovaj metod se odvija sa prvim request-om, it's gonna be the first thing that happens when this component is boot up
    }

    public function hydrate() // Lifecycle Hooks -> is gonna run at the begining of every subsequent request that'll livewire component makes
    {
        $this->hydrate = 'I am from Hydrate';
    }

    public function updatedName() // Lifecycle Hooks -> is gonna run any time you update a public property
    {
        $this->name = strtoupper($this->name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
