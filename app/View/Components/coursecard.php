<?php

namespace App\View\Components;

use Closure;
use App\Models\Course;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class coursecard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.coursecard')->with([
            'course' => $this->course,
        ]);
    }
}
