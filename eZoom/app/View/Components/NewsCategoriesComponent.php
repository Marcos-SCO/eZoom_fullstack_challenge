<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsCategoriesComponent extends Component
{
    public $sectionParamsItens;

    public function sectionParams()
    {
        $sectionParamsItens = require_once(base_path('app/View/Components/data/sectionCategoriesData.php'));

        return $sectionParamsItens;
    }


    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sectionParamsItens = $this->sectionParams();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-categories-component', [
            'sectionParamsItens' => $this->sectionParamsItens,
        ]);
    }
}
