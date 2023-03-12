<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Quill;

class Post extends Component
{
    public $title;
    
    public $body;

    public $listeners = [
        Quill::EVENT_VALUE_UPDATED
    ];

    public function quill_value_updated($value){
        $this->body = $value;
    }

    public function save(){
        dd([
            'title' => $this->title,
            'body' => $this->body
        ]);
    }

    public function render()
    {
        return view('livewire.post');
    }
}