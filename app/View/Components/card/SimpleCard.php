<?php

namespace App\View\Components\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleCard extends Component
{
    public $title, $subtitle, $footer, $right;
    public $headerColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title = null, $subtitle = null, $right = null, $footer = null, $headerColor = 'bg-yellow-500')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->right = $right;
        $this->footer = $footer;
        $this->headerColor = $headerColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.simple-card');
    }
}
