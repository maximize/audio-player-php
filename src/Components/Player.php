<?php

namespace Maximize\AudioPlayer\Components;

use Illuminate\View\Component;

class Player extends Component
{
    public $src;
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $title = '', $description = '')
    {
        $this->src = $src;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('audio::player');
    }
}
