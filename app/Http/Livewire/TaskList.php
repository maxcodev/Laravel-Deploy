<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class TaskList extends Component
{
    public function render()
    {
        return view('livewire.task-list', [
            'courses' => Course::latest()->with('user')->take(9)->get()
        ]);
    }
}
