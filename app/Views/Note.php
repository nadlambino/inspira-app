<?php

namespace App\Views;

use Inspira\View\Components\Component;

class Note extends Component
{
    protected bool $mergeProps = true;
    
    public ?string $title = null;

    public ?string $note = null;
}
