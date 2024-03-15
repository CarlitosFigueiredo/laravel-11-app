<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertInline extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return <<<'blade'
            <div>
                <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
            </div>
        blade;
    }
}
