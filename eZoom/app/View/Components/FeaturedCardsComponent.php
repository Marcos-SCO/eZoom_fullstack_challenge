<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedCardsComponent extends Component
{
    public $cardItens;

    public function sectionParams()
    {
        $cardParamItens = require_once(base_path('app/View/Components/data/featuredCardsData.php'));

        return $cardParamItens;
    }

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cardItens = $this->sectionParams();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-cards-component', [
            'cardItens' => $this->cardItens
        ]);
    }
}
