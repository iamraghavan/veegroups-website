<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectGridPosts extends Component
{
    public array $units = [];
    public ?int $selectedUnit = null;

    public function mount(array $units = [], ?int $selectedUnit = null)
    {
        // Default units
        $this->units = $units ?: [
            [
                'id' => 1,
                'title' => 'Unit 1',
                'name' => 'JAY VEE ENGINEERING',
                'address' => "Pl No: 7, Sri, Ashtalakshmi Nagar, Mannur, Sriperumbudur, Tamil Nadu 602105",
                'phone' => null,
                'email' => null,
                'map' => 'https://maps.app.goo.gl/Ae9ZcXWSHBTPJacm9',
                'img' => null,
            ],
            [
                'id' => 2,
                'title' => 'Unit 2',
                'name' => 'JAY VEE ENGINEERING',
                'address' => "Mulluvadi, Tamil Nadu",
                'phone' => null,
                'email' => null,
                'map' => 'https://maps.app.goo.gl/m4hQuvVmg8jZmsGg7',
                'img' => null,
            ],
        ];

        // Select default unit (first) if not provided
        $this->selectedUnit = $selectedUnit ?? ($this->units[0]['id'] ?? null);
    }

    public function selectUnit(int $id): void
    {
        $this->selectedUnit = $id;
    }

    public function render()
    {
        return view('livewire.project-grid-posts', [
            'units' => $this->units,
            'currentUnit' => collect($this->units)->firstWhere('id', $this->selectedUnit),
        ]);
    }
}
