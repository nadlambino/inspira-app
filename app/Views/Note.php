<?php

namespace App\Views;

use Inspira\View\Component;

class Note extends Component
{
    protected bool $mergeProps = true;
    
    public ?string $title = null;

    public ?string $note = null;
}
