<?php

namespace Providers;

use Inspira\Framework\Providers\Provider;
use Inspira\View\View;

class ViewServiceProvider extends Provider
{
    public function register():void
    {
        View::getInstance()
            ->setViewsPath(base_path('/assets/views'))
            ->setComponentPrefix('app')
            ->setComponentViewsPath('components')
            ->autoloadComponentsFrom('App\Views');
    }

    public function start(): void
    {
        //
    }
}
