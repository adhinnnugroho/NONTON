<?php

namespace App\Http\Livewire\Breadcrumbs;

use Livewire\Component;

class SimpleBreadcrumbs extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.breadcrumbs.simple-breadcrumbs');
    }
}
