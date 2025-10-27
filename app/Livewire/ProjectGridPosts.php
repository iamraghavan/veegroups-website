<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectGridPosts extends Component
{
    public array $projects = [];
    public array $units = [];
    public ?int $selectedUnit = null;
    public string $viewMode = 'grid'; // 'grid' or 'list'
    public string $search = '';

    public function mount(array $projects = [], array $units = [], ?int $selectedUnit = null)
    {
        // Default projects (keeps original sample content). Can be overridden when including the component.
        $this->projects = $projects ?: [
            [
                'id' => 1,
                'title' => 'Industry Effectiveness Solutions',
                'excerpt' => 'A Company involved in servicing, maintenance and repairs of engines, prime movers…',
                'image' => 'assets/img/projects/post1.jpg',
                'link' => '#',
            ],
            [
                'id' => 2,
                'title' => 'Continuous Improving Approaches',
                'excerpt' => 'Committed to presenting & interpreting corporate organization, change, and innovation.',
                'image' => 'assets/img/projects/post2.jpg',
                'link' => '#',
            ],
        ];

        // Default units (your provided units)
        $this->units = $units ?: [
            [
                'id' => 1,
                'title' => 'Unit 1',
                'name' => 'JAY VEE ENGINEERING',
                'address' => "Pl No: 7, Sri, Ashtalakshmi Nagar, Mannur, Sriperumbudur, Tamil Nadu 602105",
                'phone' => null,
                'email' => null,
            ],
            [
                'id' => 2,
                'title' => 'Unit 2',
                'name' => 'JAY VEE ENGINEERING',
                'address' => "Mulluvadi, Tamil Nadu",
                'phone' => null,
                'email' => null,
            ],
        ];

        // Select default unit (first) if not provided.
        $this->selectedUnit = $selectedUnit ?? ($this->units[0]['id'] ?? null);
    }

    public function selectUnit(int $id): void
    {
        $this->selectedUnit = $id;
    }

    public function setViewMode(string $mode): void
    {
        if (in_array($mode, ['grid', 'list'])) {
            $this->viewMode = $mode;
        }
    }

    public function updatedSearch(): void
    {
        // Could be extended to server-side filtering / debounced search.
    }

    public function render()
    {
        $filtered = $this->projects;

        if ($this->search !== '') {
            $q = mb_strtolower($this->search);
            $filtered = array_filter($filtered, function ($p) use ($q) {
                return mb_strpos(mb_strtolower($p['title']), $q) !== false
                    || mb_strpos(mb_strtolower($p['excerpt']), $q) !== false;
            });
        }

        // Pass filtered projects to view
        return view('livewire.project-grid-posts', [
            'filteredProjects' => array_values($filtered),
            'currentUnit' => collect($this->units)->firstWhere('id', $this->selectedUnit),
        ]);
    }
}