<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    protected $btnText;
    protected $color;
    protected $method;
    protected $action;
    protected $buttonType;
    protected $hoverText;

    /**
     * Create a new component instance.
     * @param string $btnText
     * @param string $color
     * @param string $method
     * @param Symfony\Component\Routing\Route $action
     *
     * @return void
     */
    public function __construct( $action = "home", $buttonText = "Sonraki", $color = "primary", $method = "POST", $hoverText = "Sonraki", $buttonType = "submit")
    {
        $this->btnText = $buttonText;
        $this->color = $color;
        $this->method = $method;
        $this->action = $action;
        $this->hoverText = $hoverText;
        $this->buttonType = $buttonType;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button', [
            'btnText' => $this->btnText,
            'color' => $this->color,
            'method' => $this->method,
            'action' => $this->action,
            'hoverText' => $this->hoverText,
            'buttonType' => $this->buttonType,
        ]);
    }
}
