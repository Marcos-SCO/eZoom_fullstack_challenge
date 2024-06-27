<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsSectionComponent extends Component
{
    public $sectionItem;

    /**
     * Create a new component instance.
     */
    public function __construct($sectionItem)
    {
        $this->sectionItem = $sectionItem;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-section-component', [
            'sectionItem' => $this->sectionItem,
        ]);
    }
}
