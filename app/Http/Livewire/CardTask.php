<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\task;

class CardTask extends Component
{

    protected $listeners = ['indexTask'];

    public function render()
    {
        $tsk = task::orderBy('id', 'desc')->limit(10)->get();
        return view('livewire.card-task', ['tsk' => $tsk]);
    }

    public function indexTask($task)
    {
        //dd($task);
    }
}
