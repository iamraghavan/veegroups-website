<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $menus = [];

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
            // [
            //     'label' => 'People',
            //     'children' => [
            //         ['label' => 'Founders', 'route' => '#'],
            //         ['label' => 'Key Personnel', 'route' => '#'],
            //         ['label' => 'Our Workforce', 'route' => '#'],
            //     ],
            // ],
            [
                'label' => 'Contact',
                'route' => route('contact.show'),
            ],
            [
                'label' => 'Certifications',
                'route' => route('Certifications'),
            ],
        ];
    }

    public function render()
    {
        return view('livewire.header');
    }
}