<?php

namespace App\View\Components;

use Illuminate\View\Component;

class movie-component extends Component
{

    public $movie;
    public $genres;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movie, $genres)
    {
        $this->movie = $movie;
        $this->genre = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-component');
    }
}
