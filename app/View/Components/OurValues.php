<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurValues extends Component
{
    public $texts, $ourValues;

    public function __construct($texts = [], $ourValues = [])
    {
        $this->texts = $texts;
        $this->ourValues = $ourValues;
    }

    public function render(): View|Closure|string
    {
        return view('components.our-values');
    }
}
