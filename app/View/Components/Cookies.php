<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cookies extends Component
{
    public $texts;

    public function __construct($texts)
    {
        $this->texts = $texts;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.cookies');
    }
}
