@extends('layouts.app')
@section('content')

{{-- content --}}
<livewire:breadcrumbs
    title="Jay Vee Engineering"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'], 
        ['label' => 'Companies'],
        ['label' => 'Jay Vee Engineering']                 
    ]"
/>

{{-- Smooth scroll (can move to your main CSS) --}}
<style>
  html { scroll-behavior: smooth; }
</style>

<div class="page-content-wrapper page-content-double-sidebar section-space--inner--120">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-xl-3 order-2 order-xl-1">
                <div class="page-sidebar">

                    <!-- About Us Widget -->
                    <div class="single-sidebar-widget">
                        <h2 class="widget-title">About Us</h2>
                        <div class="sidebar-about">
                            <div class="sidebar-about__image">
                                <img src="{{ asset('assets/img/jve/bg/peb-structure-1000x1000.webp') }}" class="img-fluid" alt="About Jay Vee">
                            </div>
                            <div class="sidebar-about__text">
                                Jay Vee Engineering was established in 1995 under the visionary leadership of 
                                Mr. S. Udayakumar, a veteran in fabrication and erection of structures. 
                                With decades of experience, we deliver complete solutions from design to execution.
                            </div>
                        </div>
                    </div>

                    <!-- Download Widget -->
                    <div class="single-sidebar-widget">
                        <h2 class="widget-title">Download</h2>
                        <ul class="sidebar-download-items">
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i> <span class="button-text">Company Profile</span></a></li>
                            <li><a class="dark-download-btn" href="#"><i class="fa fa-file-pdf-o"></i> <span class="button-text">Brochure</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-xl-6 order-1 order-xl-2">
                <div class="service-details-page-content"
                     data-bs-spy="scroll"
                     data-bs-target="#tocSidebar"
                     data-bs-offset="120"
                     tabindex="0">

                    <!-- About Us -->
                    <div id="about-us"  class="service-details-text-wrapper section-space--bottom--60">
                        <h1 class="big-title">About Us</h1>
                        <p>
                            Jay Vee Engineering was established in 1995 under the dynamic leadership and 
                            visionary endeavor of <strong>Mr. S. Udayakumar</strong>. With a vision to provide 
                            complete solutions from the best designing till execution in construction, we have 
                            built a strong reputation with recurring business from our clients. 
                        </p>
                        <p>
                            Our client-focused approach ensures timely project completion, satisfaction, and 
                            eco-friendly practices while adapting to the evolving needs of our customers.
                            Our vision is to offer outstanding quality experiences at a reasonable price.
                        </p>
                    </div>

                    <!-- What We Do -->
                    <div id="what-we-do" class="service-details-text-wrapper section-space--bottom--60">
                        <h2  class="title">What We Do?</h2>
                        <ul class="service-details-list-text">
                            <li>Pre-Engineering Building Manufacturer</li>
                            <li>Multi–Storey Steel Building</li>
                            <li>All Kind of Civil Construction</li>
                            <li>Design Services</li>
                            <li>Pre-Fabricated Structure Manufacturer</li>
                            <li>Crane Girder</li>
                            <li>Mezzanine Floor</li>
                            <li>Roof Sheeting, Cable Rack & Pipe Rack</li>
                            <li>EOT Crane</li>
                        </ul>
                    </div>

                    <!-- Mission / Vision / Quality -->
                    <div class="service-details-text-wrapper section-space--bottom--60">
                        <h2 id="mission" class="title">Mission</h2>
                        <p>
                            Jay Vee Group’s mission is to be a manufacturer and supplier of prefabricated buildings, 
                            offering high-quality, quick, and affordable solutions. Our goal is to provide timely, 
                            high-quality service and sustainable solutions that adapt to our clients’ needs.
                        </p>

                        <h2 id="vision" class="title">Vision</h2>
                        <p>
                            Our vision is to become the most acknowledged solution provider in the manufacturing 
                            industry and contribute to a modern society. We also serve the service sector with the 
                            same level of excellence and cost-effective turnkey solutions.
                        </p>

                        <h2 id="quality" class="title">Quality</h2>
                        <p>
                            We provide products and services that meet or exceed customer expectations through 
                            continuous improvement and adherence to quality management systems.
                        </p>
                    </div>

                    <!-- Clients -->
                    <div id="our-clients" class="service-details-text-wrapper section-space--bottom--60">
                        <h2  class="title">Our Clients</h2>
                        <ul class="service-details-list-text">
                            <li>SHAYA POLYMERS LIMITED</li>
                            <li>ASHOK LEYLAND</li>
                            <li>PIONEER COLD STORAGE</li>
                            <li>CHAKARA INDUSTRIES</li>
                            <li>KA INDUSTRIES</li>
                            <li>RD BROWN BOX PACKAGING PVT LTD</li>
                            <li>DOLPHIN AUTO COMPONENTS</li>
                            <li>AMPHENOL INDIA PVT LTD.</li>
                            <li>AIRPORT – HYDERABAD & DELHI</li>
                            <li>RENUGA INDUSTRIES</li>
                            <li>RASI BUILDERS</li>
                            <li>VELAAN ENGINEERING WORKS</li>
                            <li>UNIGLAZE</li>
                            <li>PON PURE CHEMICALS</li>
                            <li>AM INDUSTRIES</li>
                            <li>DOSS PACKAGING</li>
                            <li>INDO NIPPON</li>
                            <li>R & G ENGINEERING</li>
                            <li>AGNI STEELS</li>
                            <li>SRI MAHALAKSHMI TRADERS</li>
                            <li>AMMAN TOOLS</li>
                            <li>SP TECH</li>
                            <li>R.S ENGINEERING</li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div id="contact" class="service-details-text-wrapper section-space--bottom--60">
                        <h2  class="title">Contact</h2>
                        <p><strong>Email:</strong> jayveesepl@gmail.com, jayveeengineering@yahoo.com</p>
                        <p><strong>Phone:</strong> +91 99400 88581, 89394 55585, 8072141341</p>
                        <p><strong>Telephone:</strong> 044 – 26550079</p>

                        <h4>Head Office</h4>
                        <p>
                            PL NO:100 EAST PART, 2nd Floor, SRI DEVI STREET, VGV NAGAR, EXT2, KANNAPLAYAM, 
                            KAMARAJNAGAR, AVADI-600071.
                        </p>

                        <h4>Workshop 1</h4>
                        <p>
                            7/4B1, JV, PAPPARAMBAKKAM ROAD, MANNUR, SRIPERUMBUDUR - 602 105
                        </p>

                        <h4>Workshop 2</h4>
                        <p>
                            PL No: 7 SIDCO INDUSTRIAL ESTATE, MULLUVADI, KALLAVI, RANIPET - 632 506.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Sidebar (TOC) -->
            <div class="col-xl-3 order-3">
              <div class="page-sidebar">
                <div class="single-sidebar-widget">
                  <h2 class="widget-title">On This Page</h2>
                  <ul id="tocSidebar" class="sidebar-category">
                    <li><a class="nav-link" href="#about-us">About Us</a></li>
                    <li><a class="nav-link" href="#what-we-do">What We Do?</a></li>
                    <li><a class="nav-link" href="#mission">Mission</a></li>
                    <li><a class="nav-link" href="#vision">Vision</a></li>
                    <li><a class="nav-link" href="#quality">Quality</a></li>
                    <li><a class="nav-link" href="#our-clients">Our Clients</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>

        </div>
    </div>
</div>

<livewire:testimonials-slider />
@endsection
