<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{

    public $title;
    public $body;

    public function mount(){
        $this->title=null;
        $this->body=null;
    }

    public function render()
    {
        return view('livewire.home');
    }

    public function subir(){
        $this->validate([
            'title'=> 'string|required|max:30',
            'body' => 'string|required|max:300'
        ]);

        $post = Post::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'user_id'=>Auth::user()->id,
        ]);

        $this->limpiar();
        $this->emit('postAdd');
    }

    public function limpiar(){
        $this->body=null;
        $this->title=null;
    }
}
