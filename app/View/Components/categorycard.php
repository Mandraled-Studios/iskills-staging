<?php

namespace App\View\Components;

use Closure;
use App\Models\CourseCategory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class categorycard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(CourseCategory $category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categorycard')->with([
            'category' => $this->category,
        ]);
    }
}
