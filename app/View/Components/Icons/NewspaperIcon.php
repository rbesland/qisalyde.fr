<?php

namespace App\View\Components\Icons;

use Illuminate\View\Component;

class NewspaperIcon extends Component
{
    public string $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $size)
    {
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icons.newspaper-icon');
    }
}
