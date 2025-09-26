@extends('layouts.app')

@section('content')

<livewire:breadcrumbs
    title="All Projects"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[ 
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Projects'],
        ['label' => 'All Projects']
    ]"
/>

<div class="page-content-wrapper section-space--inner--120 grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Filter Title -->
                <ul class="project-filter-menu section-space--bottom--80 mt-0">
                    <li class="active" data-filter="*">All <span class="filter-counter">{{ $projects->count() }}</span></li>
                    @foreach ($projectCounts as $company => $count)
                        <li data-filter=".{{ strtolower(str_replace(' ', '-', $company)) }}" class="">
                            {{ strtoupper($company) }} <span class="filter-counter">{{ $count }}</span>
                        </li>
                    @endforeach
                </ul>

                <!-- Filter Content -->
                <div class="project-filter-content">
                    <div class="row project-isotope" style="position: relative;">
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 {{ strtolower(str_replace(' ', '-', $project->company)) }} project-item" style="display: block;">
                                <!-- Single Project -->
                                <div class="single-case-study-project single-case-study-project--style2">
                                    <a href="{{ route('projects.details', $project->id) }}">
                                        <span class="case-readmore"><i class="ion-arrow-right-c"></i></span>
                                        <div class="single-case-study-project__image">
                                            <img src="{{ Storage::url($project->images[0]) }}" class="img-fluid" alt="{{ $project->title }}">
                                        </div>
                                        <div class="single-case-study-project__content">
                                             
                                            <h3 class="title">{{ $project->title }}</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
         <div class="pagination-wrapper">
                    {{ $projects->links() }}
                </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.project-filter-menu li');
        const projectItems = document.querySelectorAll('.project-item');

        // Add event listener to filter buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove 'active' class from all filter buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add 'active' class to the clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                filterProjects(filterValue);
            });
        });

        // Function to show or hide projects based on the selected filter
        function filterProjects(filterValue) {
            projectItems.forEach(item => {
                if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                    item.style.display = 'block'; // Show the project
                } else {
                    item.style.display = 'none'; // Hide the project
                }
            });
        }
    });
</script>

<style>
    .project-item {
        transition: opacity 0.3s ease-in-out;
    }
</style>

@endsection
