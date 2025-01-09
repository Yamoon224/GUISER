<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AuthLayout extends Component
{
    public $title;
    public $description;

    public function __construct($title, $description)  
    {
        $this->title = $title;
        $this->description = $description;
    }
    
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.auth');
    }
}
