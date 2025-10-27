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
                'name' => 'RD BROWN BOX PACKAGING PVT LTD',
                'designation' => '',
                'rating' => 5,
                'text' => 'electing Jay Vee Group for our warehouse construction was a perfect decision. The team was very cautious of our specifications and came up with an area that fulfilled its purpose and had the potential for expansion. They had a clear structure, communicated with us often, and worked efficiently to meet the deadline. The final outcome was even better, and now we have a reliable space for our business. The quality of their work can actually do all the talking. All was smooth and their knowledge enhanced our experience to perform a lot better. Their professionalism and adherence to quality in their work are some of the aspects we highly appreciate.',
            ],
            [
                'name' => 'PIONEER COLDSTORE ',
                'designation' => '',
                'rating' => 5,
                'text' => 'The team was effective and careful at tackling every facet to make sure structure was perfect for all of our needs. They provided good recommendations considering the specific ways of utilizing the space and were very willing to help answering our questions. The project remained affordable, and for that, we thank you a lot for a great job well done!',
            ],
            [
                'name' => 'DOLPHINE AUTO COMPONENTS',
                'designation' => '',
                'rating' => 5,
                'text' => 'we chose Jay Vee Group and the team was really good. Together they spent much time and delicate efforts in order to build the whole structure and to fulfill our requirements. They delivered it on time and to quality of work they did was exceptional. We were also happy with their professional attitude and non-problematic approach to work done. We are really pleased & glad to suggest them for having excellent services in quality PEB construction work.',
            ],
            [
                'name' => 'CHAKARA DESIGN AND CONSTRUCTION ENGINEERS PVT LTD',
                'designation' => '',
                'rating' => 5,
                'text' => 'We are happy with the Service, repeated the Order. Everything was on time.',
            ],


            // 
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