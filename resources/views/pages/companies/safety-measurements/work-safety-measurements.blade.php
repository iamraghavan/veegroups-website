@extends('layouts.app')
@section('content')

{{-- breadcrumb --}}
<livewire:breadcrumbs
    title="Work Safety Measurements"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Companies'],
        ['label' => 'Safety Measurements'],
        ['label' => 'Work Safety Measurements', 'route' => 'companies.safety-measurements.work-safety-measurements'],
    ]"
/>

{{-- Smooth scroll --}}
<style>html{scroll-behavior:smooth}</style>

<div class="container my-5">
    <h1 class="mb-4">Work Safety Measurements</h1>

    <div class="accordion" id="safetyAccordion">

        {{-- Site Safety Training --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTraining">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTraining" aria-expanded="true" aria-controls="collapseTraining">
                    Site Safety Training
                </button>
            </h2>
            <div id="collapseTraining" class="accordion-collapse collapse show" aria-labelledby="headingTraining" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Every employee and site worker should be given adequate safety training to learn the risks involved in the performance of their duties as well as procedures to follow when accidents occur.
                </div>
            </div>
        </div>

        {{-- Personal Protective Equipment --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingPPE">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePPE" aria-expanded="false" aria-controls="collapsePPE">
                    Personal Protective Equipment (PPE)
                </button>
            </h2>
            <div id="collapsePPE" class="accordion-collapse collapse" aria-labelledby="headingPPE" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Enforce that construction workers wear mandatory personal protective equipment like helmets, gloves, eye protection glasses, and high visibility vests to reduce accidents and injuries on site.
                </div>
            </div>
        </div>

        {{-- Safety Signage --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSignage">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSignage" aria-expanded="false" aria-controls="collapseSignage">
                    Safety Signage
                </button>
            </h2>
            <div id="collapseSignage" class="accordion-collapse collapse" aria-labelledby="headingSignage" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Install safety signs prominently where there are constructions so that people working there and visitors are warned of hazards such as overhead loads, restricted areas, or wet surfaces.
                </div>
            </div>
        </div>

        {{-- Fall Protection Systems --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFallProtection">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFallProtection" aria-expanded="false" aria-controls="collapseFallProtection">
                    Fall Protection Systems
                </button>
            </h2>
            <div id="collapseFallProtection" class="accordion-collapse collapse" aria-labelledby="headingFallProtection" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Use ropes and nets in steel structure construction areas, particularly where workers are at high risk of falling from great heights.
                </div>
            </div>
        </div>

        {{-- Fire Safety Protocols --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFireSafety">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFireSafety" aria-expanded="false" aria-controls="collapseFireSafety">
                    Fire Safety Protocols
                </button>
            </h2>
            <div id="collapseFireSafety" class="accordion-collapse collapse" aria-labelledby="headingFireSafety" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Provide the site with firefighting equipment, map out emergency exits, and train staff on fire-related emergency procedures.
                </div>
            </div>
        </div>

        {{-- First Aid Readiness --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFirstAid">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFirstAid" aria-expanded="false" aria-controls="collapseFirstAid">
                    First Aid Readiness
                </button>
            </h2>
            <div id="collapseFirstAid" class="accordion-collapse collapse" aria-labelledby="headingFirstAid" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Ensure first aid kits are stocked and workers are trained to handle minor injuries.
                </div>
            </div>
        </div>

        {{-- Emergency Response Plan --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEmergency">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmergency" aria-expanded="false" aria-controls="collapseEmergency">
                    Emergency Response Plan
                </button>
            </h2>
            <div id="collapseEmergency" class="accordion-collapse collapse" aria-labelledby="headingEmergency" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Create regulatory procedures for emergency calls, building evacuation, and headcounts.
                </div>
            </div>
        </div>

        {{-- Proper Material Handling --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingMaterial">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMaterial" aria-expanded="false" aria-controls="collapseMaterial">
                    Proper Material Handling
                </button>
            </h2>
            <div id="collapseMaterial" class="accordion-collapse collapse" aria-labelledby="headingMaterial" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                    Educate workers on correct lifting methods and the use of tools for moving objects to avoid strain or injury.
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
