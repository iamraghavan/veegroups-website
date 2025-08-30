<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $socialLinks = [];
    public $footerMenus = [];
    public $legalMenus = [];

    public function mount()
    {
        $this->socialLinks = [
            ['icon' => 'ion-social-facebook', 'url' => 'https://facebook.com', 'label' => 'Facebook'],
            ['icon' => 'ion-social-twitter', 'url' => 'https://twitter.com', 'label' => 'Twitter'],
            ['icon' => 'ion-social-linkedin', 'url' => 'https://linkedin.com', 'label' => 'LinkedIn'],
            ['icon' => 'ion-social-instagram', 'url' => 'https://instagram.com', 'label' => 'Instagram'],
        ];

        $this->footerMenus = [
            [
                'title' => 'Company',
                'links' => [
                    ['label' => 'About Us', 'route' => route('about-us.company-history')],
                    ['label' => 'Our Services', 'route' =>  '#'],
                    ['label' => 'Projects', 'route' =>  '#'],
                    ['label' => 'Contact', 'route' =>  '#'],
                ],
            ],
            [
                'title' => 'Resources',
                'links' => [
                    ['label' => 'Blog', 'route' =>  '#'],
                    ['label' => 'Careers', 'route' =>  '#'],
                    ['label' => 'Help Center', 'route' =>  '#'],
                    ['label' => 'FAQ', 'route' =>  '#'],
                ],
            ],
            [
                'title' => 'Industries',
                'links' => [
                    ['label' => 'Engineering', 'route' => '#'],
                    ['label' => 'Manufacturing', 'route' => '#'],
                    ['label' => 'Construction', 'route' => '#'],
                ],
            ],
        ];

        $this->legalMenus = [
            ['label' => 'Privacy Policy', 'route' =>  '#'],
            ['label' => 'Terms of Use', 'route' =>  '#'],
            ['label' => 'Sitemap', 'route' =>  '#'],
        ];
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
