<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $menus = [];
    public $flatMenus = [];
    public $search = '';
    public $results = [];

    public function mount()
    {
        $this->menus = [
            [
                'label' => 'Home',
                'route' => route('index'),
            ],
            [
                'label' => 'Companies',
                'children' => [
                    ['label' => 'Jay Vee Engineering', 'route' => route('companies.jay-vee-engineering')],
                    ['label' => 'Jay Vee Structural Engineering Pvt Ltd', 'route' => route('companies.jay-vee-structural-engineering')],
                    ['label' => 'Jakuva Build Tech', 'route' => route('companies.jakuva-build-tech')],
                ],
            ],
            [
                'label' => 'About Us',
                'children' => [
                    ['label' => 'About Us', 'route' => route('about-us.about')],
                    ['label' => 'Company History', 'route' => route('about-us.company-history')],
                    ['label' => 'Mission & Vision', 'route' => route('about-us.mission-and-vision')],
                    ['label' => 'Leadership', 'route' => route('about-us.leadership')],
                ],
            ],
            [
                'label' => 'Projects',
                'children' => [
                    ['label' => 'All Projects', 'route' => route('projects.all-projects')],
                    ['label' => 'Structural Projects', 'route' => route('projects.structural-projects')],
                    ['label' => 'Manufacturing', 'route' => route('projects.manufacturing')],
                    ['label' => 'Construction', 'route' => route('projects.construction')],
                ],
            ],
            [
                'label' => 'People',
                'children' => [
                    ['label' => 'Our Workforce', 'route' => route('peoples.our-workforce')],
                ],
            ],
            [
                'label' => 'Contact',
                'route' => route('contact.show'),
            ],
            [
                'label' => 'Certifications',
                'route' => route('Certifications'),
            ],
        ];

        // Flatten the menu once
        $this->flatMenus = $this->flattenMenu($this->menus);
    }
    private function flattenMenu($menus)
    {
        $flat = [];

        foreach ($menus as $menu) {
            $flat[] = [
                'label' => $menu['label'],
                'route' => $menu['route'] ?? '#',
            ];

            if (isset($menu['children'])) {
                foreach ($menu['children'] as $child) {
                    $flat[] = [
                        'label' => $child['label'],
                        'route' => $child['route'] ?? '#',
                    ];
                }
            }
        }

        return $flat;
    }

    public function updatedSearch()
    {
        if (!$this->search) {
            $this->results = [];
            return;
        }

        $this->results = array_filter($this->flatMenus, function ($menu) {
            return stripos($menu['label'], $this->search) !== false;
        });

        // Reset array keys to prevent weird rendering
        $this->results = array_values($this->results);

        // Limit for performance
        $this->results = array_slice($this->results, 0, 10);
    }


    public function render()
    {
        return view('livewire.header');
    }
}
