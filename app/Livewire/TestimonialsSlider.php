<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialsSlider extends Component
{

    public array $items = [];

    public function mount(array $items = []): void
    {
        $this->items = $items ?: [
            [
                'name' => 'Mr. Babu',
                'designation' => 'Mahalakshmi Traders',
                'rating' => 5,
                'text' => 'Leading manufacturer of high-quality PEB structures in Tamil Nadu.',
            ],
            [
                'name' => 'Mr. Ram Sai',
                'designation' => 'Shaya Polymers Ltd',
                'rating' => 5,
                'text' => 'They provided a thorough explanation of every detail, which gave me confidence throughout the process.',
            ],
            [
                'name' => 'Mr. Vasu Devan',
                'designation' => 'Pioneer Cold Store & Cladding Pvt Ltd',
                'rating' => 5,
                'text' => 'Never seen PEB structures like this in my life—best PEB structure maker in the world.',
            ],
            [
                'name' => 'Mr. Chandramohan',
                'designation' => 'Dolphin Autocomponents',
                'rating' => 5,
                'text' => 'The team’s strong work ethic and strict adherence to safety protocols were evident throughout the project. They completed the shed within the three-month timeframe.',
            ],
            [
                'name' => 'Mr. Jay Kumar',
                'designation' => 'KA Industries',
                'rating' => 5,
                'text' => 'I trust them for any fabrication work—skilled team, fair pricing, and reliable service every time.',
            ],
        ];
    }


    public function render()
    {
        return view('livewire.testimonials-slider');
    }
}
