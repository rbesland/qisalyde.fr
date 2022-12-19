<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class Navlink extends Component
{
    public string $title;
    public string $url;
    public string $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $url, string $icon)
    {
        $this->url = $url;
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar.navlink');
    }
}
