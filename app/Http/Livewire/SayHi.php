<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class SayHi extends Component
{
    public $contact;

    protected $listeners = ['foo' => '$refresh'];

    //protected $listeners = ['refreshChildren' => '$refresh']; 
    // You dont actually have to specify a key and a value if the name of event and a method are same

    public function emitFoo()
    {
        $this->emitUp('foo');
    }

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
