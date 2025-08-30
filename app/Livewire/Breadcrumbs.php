<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Breadcrumbs extends Component
{
    public string $title = 'Page Title';
    public ?string $background = null;

    /**
     * Ordered breadcrumb items.
     * Last item is current page (no link).
     * Each item: ['label' => 'Home', 'route' => 'home'] OR ['label' => 'Home', 'url' => '/']
     */
    public array $items = [];

    public bool $uppercase = true;

    public function mount(
        string $title = 'Page Title',
        ?string $background = null,
        array $items = [],
        bool $uppercase = true
    ): void {
        $this->title = $title;
        $this->background = $background;
        $this->items = $items;
        $this->uppercase = $uppercase;
    }

    public function getResolvedItemsProperty(): array
    {
        $count = count($this->items);

        return collect($this->items)->values()->map(function ($item, $i) use ($count) {
            $label = Arr::get($item, 'label', 'Untitled');
            $name  = Arr::get($item, 'route');
            $url   = Arr::get($item, 'url');
            $params = Arr::get($item, 'params', []);
            $children = Arr::get($item, 'children', []);
            $isLast = ($i === $count - 1);

            $href = null;
            if (!$isLast) {
                if ($name && Route::has($name)) {
                    $href = route($name, $params);
                } else {
                    $href = $url ?? '#';
                }
            }

            $resolvedChildren = collect($children)->map(function ($child) {
                $clabel = Arr::get($child, 'label', 'Item');
                $cname  = Arr::get($child, 'route');
                $curl   = Arr::get($child, 'url');
                $cparams = Arr::get($child, 'params', []);

                $chref = ($cname && Route::has($cname)) ? route($cname, $cparams) : ($curl ?? '#');

                return ['label' => $clabel, 'href' => $chref];
            })->toArray();

            return [
                'label'        => $label,
                'href'         => $href,
                'children'     => $resolvedChildren,
                'has_children' => !empty($resolvedChildren),
                'is_current'   => $isLast,
            ];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.breadcrumbs');
    }
}
