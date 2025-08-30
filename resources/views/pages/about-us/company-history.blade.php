@extends('layouts.app')
@section('content')

{{-- content --}}
<livewire:breadcrumbs
    title="Company History"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'], 
        ['label' => 'About Us'],
        ['label' => 'Company History']                 
    ]"
/>



<div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="common-page-content">

    <!-- Corporate Section -->
    <div class="common-page-text-wrapper section-space--bottom--50">
        <h2 class="common-page-title">Corporate</h2>
        <p>Welcome to <strong>JAY VEE GROUP</strong>, your premier destination for innovative and sustainable PEB structure, warehouse, and factory solutions. Since 1995, we have been committed to delivering excellence in design and functionality, meeting the diverse needs of our clients across India. Join us in our journey of building the future, one project at a time.</p>
    </div>

   
  <div class="history-grid__wrapper row">

    <div class="col-sm-6 history-grid__single-wrapper">
        <div class="dot"></div>
        <div class="history-grid__single">
            <div class="content-head">
                JAY VEE STRUCTURALS ENGINEERING PVT. LTD.
            </div>
            <div class="content-body">
                
                <div class="content">
                    <strong>GST No:</strong> 33AAGCJ5473M1Z6 <br>
                    &rarr; Design <br>
                    &rarr; Planning <br>
                    &rarr; Steel Structural Fabrication
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 history-grid__single-wrapper">
        <div class="dot"></div>
        <div class="history-grid__single">
            <div class="content-head">
                JAY VEE ENGINEERING
            </div>
            <div class="content-body">
               
                <div class="content">
                    <strong>GSTIN:</strong> 33AAYPU5680L1ZN <br>
                    &rarr; PEB Structure <br>
                    &rarr; Crane Girder <br>
                    &rarr; Mezzanine Floor
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 history-grid__single-wrapper">
        <div class="dot"></div>
        <div class="history-grid__single">
            <div class="content-head">
                JAKUVA BUILD TECH
            </div>
            <div class="content-body">
                <div class="image">
               
                <div class="content">
                    <strong>GSTIN:</strong> 33CDXPJ0162N1Z4 <br>
                    &rarr; Industrial Building <br>
                    &rarr; Machine Flooring <br>
                    &rarr; All Kind of Civil Works
                </div>
            </div>
        </div>
    </div>

</div>

  </div>


  

</div>

                </div>
               
            </div>
        </div>
    </div>

<livewire:testimonials-slider />
@endsection