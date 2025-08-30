<?php

namespace App\Livewire;

use Livewire\Component;

class WhatWeDo extends Component
{
    public array $services = [];

    public function mount(): void
    {
        $this->services = [
            [
                'no' => '01',
                'title' => 'Pre-Engineering Building Manufacturer',
                'excerpt' => 'We deliver precision-engineered steel structures tailored for various industries.',
                'image' => asset('assets/img/jve/bg/wwd/pre-engineering-building-manufacturer.webp'),
                'link' => '#',
            ],
            [
                'no' => '02',
                'title' => 'Multi – Storey Steel Building',
                'excerpt' => 'Expert solutions for durable, high-rise steel structures.',
                'image' => asset('assets/img/jve/bg/wwd/multi-storey-steel-building.webp'),
                'link' => '#',
            ],
            [
                'no' => '03',
                'title' => 'All Kind of Civil Construction',
                'excerpt' => 'Comprehensive civil construction services from foundation to finish.',
                'image' => asset('assets/img/jve/bg/wwd/civil-construction.webp'),
                'link' => '#',
            ],
            [
                'no' => '04',
                'title' => 'Design Services',
                'excerpt' => 'Innovative and efficient design solutions for steel and civil projects.',
                'image' => asset('assets/img/jve/bg/wwd/design-services.webp'),
                'link' => '#',
            ],
            [
                'no' => '05',
                'title' => 'Pre-Fabricated Structure Manufacturer',
                'excerpt' => 'Quality pre-fab structures for quick, reliable installation.',
                'image' => asset('assets/img/jve/bg/wwd/prefabricated-structure.webp'),
                'link' => '#',
            ],
            [
                'no' => '06',
                'title' => 'EOT Crane / Crane Girder',
                'excerpt' => 'Reliable crane girder and EOT crane solutions.',
                'image' => asset('assets/img/jve/bg/wwd/eot-crane.webp'),
                'link' => '#',
            ],
            [
                'no' => '07',
                'title' => 'Mezzanine Floor',
                'excerpt' => 'Strong, adaptable mezzanine floor systems.',
                'image' => asset('assets/img/jve/bg/wwd/mezzanine-floor.webp'),
                'link' => '#',
            ],
            [
                'no' => '08',
                'title' => 'Roof Sheeting, Cable Rack & Pipe Rack',
                'excerpt' => 'End-to-end roofing, cable rack, and pipe rack solutions.',
                'image' => asset('assets/img/jve/bg/wwd/roof-sheeting-cable-pipe-rack.webp'),
                'link' => '#',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.what-we-do');
    }
}