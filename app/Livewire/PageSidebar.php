<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class PageSidebar extends Component
{
    /**
     * Array of sidebar links.
     *
     * Each item: [
     *   'label' => 'About 01',
     *   'route' => 'page.about',   // named route (preferred)
     *   // OR 'url' => '/page-about' // if you don’t have a named route
     *   'icon'  => 'tractor-home', // optional icon class
     *   'params'=> ['slug' => '...'] // optional route params
     * ]
     */
    public array $links = [];

    /**
     * Name of the currently active route (optional).
     * If null, the component auto-detects using the current route.
     */
    public ?string $activeRouteName = null;

    /**
     * Optional title above the links.
     */
    public string $title = 'Other Pages';

    /**
     * Optional "case studies" data. You can pass [] to hide this block.
     * Each item:
     * [
     *   'title' => 'GreenEco Park',
     *   'category' => 'Industry',
     *   'image' => asset('assets/img/industry/1-75x64.jpg'),
     *   'url' => route('case.show', 1) // or plain URL
     * ]
     */
    public array $caseStudies = [];

    public function mount(
        array $links = [],
        ?string $activeRouteName = null,
        string $title = 'Other Pages',
        array $caseStudies = []
    ): void {
        $this->links = $links;
        $this->activeRouteName = $activeRouteName;
        $this->title = $title;
        $this->caseStudies = $caseStudies;
    }

    public function getResolvedLinksProperty(): array
    {
        $currentName = $this->activeRouteName ?? optional(request()->route())->getName();

        return collect($this->links)->map(function ($item) use ($currentName) {
            $label = Arr::get($item, 'label', 'Untitled');
            $icon  = Arr::get($item, 'icon'); // e.g. 'tractor-history'
            $name  = Arr::get($item, 'route'); // named route
            $url   = Arr::get($item, 'url');   // fallback plain URL
            $params = Arr::get($item, 'params', []);

            if ($name && Route::has($name)) {
                $href = route($name, $params);
                $isActive = $currentName
                    ? request()->routeIs($name . '*') // supports nested names
                    : url()->current() === $href;
            } else {
                $href = $url ?? '#';
                $isActive = url()->current() === $href;
            }

            return [
                'label' => $label,
                'icon'  => $icon,
                'href'  => $href,
                'active' => $isActive,
            ];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.page-sidebar');
    }
}
