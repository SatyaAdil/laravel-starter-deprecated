<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $content;
    public $image;
    public $link;

    public function __construct($title, $content, $image, $link)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.card');
    }
}
