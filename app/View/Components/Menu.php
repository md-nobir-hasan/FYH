<?php

namespace App\View\Components;

use App\Models\Feature;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public $menus;
    public function __construct($menus = null)
    {
        if ($menus) {
            $this->menus = $menus;
        } else {
            $this->menus = Feature::with('children')->where('feature_id', null)->orderBy('title', 'asc')
                ->get();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}
