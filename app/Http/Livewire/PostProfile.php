<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostProfile extends Component
{
    
    protected $listeners = ['render' => 'render',
                            'delete' => 'delete'] ;
    
    public function render() {
        $posts = [] ;

        $userPosts = User::find(Auth::user()->id_user)->posts()->get() ;
        foreach ($userPosts as $userPost) {
            array_push($posts, $userPost) ;
        }

        // Ordena los resultados de Mayor a Menos.
        usort($posts, function($x, $y) {
            return $x['created_at'] < $y['created_at'];
        });

        return view('components.post-profile', compact("posts"));
    }

    public function delete (Post $post) {
        $post->delete() ;
    }
}
