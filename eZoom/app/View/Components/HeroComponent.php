<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroComponent extends Component
{
    public $title;
    public $subtitle;
    public $knowMoreLink;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $subtitle, $knowMoreLink = false)
    {
        if ($knowMoreLink) $this->knowMoreLink = $knowMoreLink;

        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-component');
    }
}
