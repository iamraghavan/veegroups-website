<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialsSlider extends Component
{
    /**
     * Each item structure:
     * [
     *   'name' => 'John Doe',
     *   'designation' => 'Founder, X Company',
     *   'photo' => 'assets/img/testimonial/1.jpg', // relative to /public
     *   'rating' => 5, // 1..5
     *   'text' => 'Great service...'
     * ]
     */
    public array $items = [];

    public function mount(array $items = []): void
    {
        // You can pass $items from the parent view/controller.
        // Fallback demo data (remove in prod if you always pass items).
        $this->items = $items ?: [
            [
                'name' => 'Fannie Moreno',
                'designation' => 'Founder, X Company',
                'photo' => 'assets/img/testimonial/1.jpg',
                'rating' => 4,
                'text' => 'Highly recommended. The team is dedicated and responsive.',
            ],
            [
                'name' => 'David James',
                'designation' => 'CTO, Y Labs',
                'photo' => 'assets/img/testimonial/2.jpg',
                'rating' => 5,
                'text' => 'Professional staff and accurate solutions delivered on time.',
            ],
            [
                'name' => 'Bryan Freeman',
                'designation' => 'COO, Z Corp',
                'photo' => 'assets/img/testimonial/3.jpg',
                'rating' => 4,
                'text' => 'Made everything simple and easy for our team.',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.testimonials-slider');
    }
}