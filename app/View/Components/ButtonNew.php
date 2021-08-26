<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonNew extends Component
{
    public $text;

    public $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $text, string $url = '#')
    {
        $this->text = $text;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button-new');
    }
}
