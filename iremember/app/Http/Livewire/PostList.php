<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $postList=[];
    protected $listeners = ['postAdd'=>'render'];

    public function render()
    {
        $postList2 = Post::orderBy('id','desc')
        ->paginate(5);
        return view('livewire.post-list',compact('postList2'));
    }
}
