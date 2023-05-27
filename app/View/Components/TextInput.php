<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextInput extends Component
{
    public $label;
    public $name;
    public $id;
    public $value;
    public $required;
    public $placeholder;
    public $class;
    public $containerClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = "", $name = "", $id = "", $value = "", $required = true, $class = "", $containerClass = "", $placeholder = "", )
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->required = $required;
        $this->placeholder = $placeholder;
        $this->class = $class;
        $this->containerClass = $containerClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-input', [
            'label' => $this->label,
            'name' => $this->name,
            'id' => $this->id,
            'value' => $this->value,
            'required' => $this->required,
            'placeholder' => $this->placeholder,
            'class' => $this->class,
            'container_class' => $this->containerClass,
        ]);
    }
}
