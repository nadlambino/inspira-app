<?php

namespace Providers;

use App\Views\Note;
use App\Views\Welcome;
use Inspira\Framework\Providers\Provider;
use Inspira\View\View;

class ViewProvider extends Provider
{
    public function register(): void
    {
        /** @var View $view */
        $view = $this->app->make(View::class);

        $view->registerComponent('welcome', Welcome::class)
            ->registerComponent('note', Note::class);
    }

    public function start(): void
    {

    }
}
