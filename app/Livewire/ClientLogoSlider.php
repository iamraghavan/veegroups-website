<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class ClientLogoSlider extends Component
{
    public $logos = [];

    public function mount()
    {
        $path = public_path('assets/img/jve/our-clients');
        $files = File::files($path);

        foreach ($files as $file) {
            $this->logos[] = 'assets/img/jve/our-clients/' . $file->getFilename();
        }
    }

    public function render()
    {
        return view('livewire.client-logo-slider');
    }
}
