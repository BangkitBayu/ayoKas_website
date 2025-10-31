<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Counter extends Component
{

    public int $count = 0;

    public function increment()
    {
        $this->count++;
    }

    #[Title('Counter')] // Set the document title to "Counter"
    public function render()
    {
        return view('livewire.counter');
    }
}
