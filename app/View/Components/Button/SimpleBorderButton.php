<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleBorderButton extends Component
{
    public $links, $border_color, $icons;
    public function __construct($links = null, $border_color = "white", $icons = null)
    {
        $this->links = $links;
        $this->border_color = $border_color;
        $this->icons = $icons;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.simple-border-button');
    }
}
