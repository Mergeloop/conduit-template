<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function __construct(
        public ?string $title = null,
    ) {
        $this->title = $this->resolvePageTitle($title);
    }

    protected function resolvePageTitle($title): string
    {
        return $title
            ? $title.' | '.config('app.name')
            : config('app.name');
    }

    public function render(): View
    {
        return view('components.app-layout');
    }
}
