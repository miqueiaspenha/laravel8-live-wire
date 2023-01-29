<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Apenas uma váriavel';

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', ['tweets' => $tweets]);
    }
}
