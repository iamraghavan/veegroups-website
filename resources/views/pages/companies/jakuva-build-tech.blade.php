@extends('layouts.app')
@section('content')

{{-- breadcrumb --}}
<livewire:breadcrumbs
    title="JAKUVA BUILD TECH"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Companies'],
        ['label' => 'JAKUVA BUILD TECH']
    ]"
/>

{{-- Smooth scroll (move to app CSS if you prefer) --}}
<style>html{scroll-behavior:smooth}</style>

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
                                <img src="{{ asset('assets/img/jve/bg/construction.webp') }}" class="img-fluid" alt="About JAKUVA BUILD TECH">
                            </div>
                            <div class="sidebar-about__text">
                                JAKUVA BUILD TECH delivers top-rated design-to-execution services in civil & industrial construction with a strong track record of on-time, quality delivery.
                            </div>
                        </div>
                    </div>

                    <!-- Download Widget (optional) -->
                    <div class="single-sidebar-widget">
                        <h2 class="widget-title">Download</h2>
                        <ul class="sidebar-download-items">
                            <li><a href="{{ \App\Http\Controllers\CertificationController::signedUrl('certifications.view', 'JAY_VEE_BROUCHER.pdf') }}">
    <i class="fa fa-file-pdf-o"></i> <span class="button-text">View Brochure</span>
</a></li><li><a class="dark-download-btn" href="{{ \App\Http\Controllers\CertificationController::signedUrl('certifications.download', 'JAY_VEE_BROUCHER.pdf') }}">
    Download Brochure
</a></li>
                            
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
                    <div id="about-us" class="service-details-text-wrapper section-space--bottom--60">
                        <h1 class="big-title">About Us</h1>
                        <p>
                            <strong>JAKUVA BUILD TECH</strong> was established with a clear mission: to offer top-rated
                            design-to-execution services in the construction industry. We’ve built a solid reputation
                            as a reliable partner by consistently delivering quality work.
                        </p>
                        <p>
                            <strong>Welcome to JAKUVA BUILD TECH.</strong> We prioritize understanding and meeting the diverse needs
                            of our customers. Our efficient services are tailored to each project's unique requirements,
                            and we maintain open communication with our clients throughout the entire process. This
                            approach has helped us meet project deadlines and deliver overall client satisfaction.
                        </p>
                    </div>

                    <!-- Our Expertise -->
                    <div id="expertise" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">Our Expertise</h2>
                        <ul class="service-details-list-text">
                            <li>We believe in fostering long-term relationships by consistently delivering high-quality results that align with our clients' vision and expectations.</li>
                            <li>Our dedication to quality ensures that each project not only meets but exceeds industry standards.</li>
                        </ul>
                    </div>

                    <!-- What We Do -->
                    <div id="what-we-do" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">What We Do?</h2>
                        <ul class="service-details-list-text">
                            <li>Pre-Engineering Building</li>
                            <li>Factory Building</li>
                            <li>Industrial Construction</li>
                            <li>Design Services</li>
                            <li>STP Tanks, Industrial Sump Tank</li>
                            <li>VDF Floor</li>
                            <li>Epoxy Flooring</li>
                            <li>All Kind of Civil Works</li>
                        </ul>
                    </div>

                    <!-- Quality -->
                    <div id="quality" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">Quality</h2>
                        <p>
                            To provide products and services that meet or exceed customer expectations through
                            continuous improvement and adherence to quality management systems.
                        </p>
                    </div>

                    <!-- Completed Projects -->
                    <div id="completed-projects" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">Completed Projects</h2>
                        <ul class="service-details-list-text">
                            <li>SHAYA POLYMERS LIMITED – SIPCOT Irrungattukottai</li>
                            <li>RD BROWN BOX PACKAGING PVT. LTD. – SIPCOT Oragadam</li>
                            <li>KA INDUSTRIES – SIPCOT Vallam</li>
                            <li>BONTAZ Automotive India Pvt Ltd. – Maraimalai Nagar</li>
                            <li>Amphenol – Maraimalai Nagar</li>
                        </ul>
                    </div>

                    <!-- Ongoing Projects -->
                    <div id="ongoing-projects" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">Ongoing Projects</h2>
                        <ul class="service-details-list-text">
                            <li>SP TECH – SIDCO Mulluvadi</li>
                            <li>R.S. Engineering – SIDCO Mulluvadi</li>
                            <li>Sri Venkateshwara Traders – SIDCO Mulluvadi</li>
                            <li>Rasi Builders – SIPCOT Irrungattukottai</li>
                            <li>Sri Mahalakshmi Traders – SIPCOT Irrungattukottai</li>
                        </ul>
                    </div>

                    <!-- Clients -->
                    <div id="our-clients" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">Clients</h2>
                        <ul class="service-details-list-text">
                            <li>SHAYA POLYMERS LIMITED</li>
                            <li>ASHOK LEYLAND</li>
                            <li>PIONEER COLD STORAGE</li>
                            <li>CHAKARA INDUSTRIES</li>
                            <li>KA INDUSTRIES</li>
                            <li>RD BROWN BOX PACKAGING PVT LTD</li>
                            <li>DOLPHIN AUTO COMPONENTS</li>
                            <li>AMPHENOL INDIA PVT LTD.</li>
                            <li>AIRPORT – HYDERABAD &amp; DELHI</li>
                            <li>RENUGA INDUSTRIES</li>
                            <li>RASI BUILDERS</li>
                            <li>VELAAN ENGINEERING WORKS</li>
                            <li>UNIGLAZE</li>
                            <li>PON PURE CHEMICALS</li>
                            <li>AM INDUSTRIES</li>
                            <li>DOSS PACKAGING</li>
                            <li>INDO NIPPON</li>
                            <li>R &amp; G ENGINEERING</li>
                            <li>AGNI STEELS</li>
                            <li>SRI MAHALAKSHMI TRADERS</li>
                            <li>AMMAN TOOLS</li>
                            <li>SP TECH</li>
                            <li>R.S ENGINEERING</li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div id="contact" class="service-details-text-wrapper section-space--bottom--60">
                        <h2 class="title">Contact</h2>
                        <p><strong>Email:</strong> jakuvabuildtech@gmail.com</p>
                        <p><strong>Phone:</strong> +91 99400 88581, 89394 55585, 8072141341</p>
                        <p><strong>Telephone:</strong> 044 – 26550079</p>
                        <h4>Office</h4>
                        <p>
                            PL NO:100 EAST PART, 2nd Floor, SRI DEVI STREET, VGV NAGAR, EXT2,
                            KANNAPLAYAM, KAMARAJNAGAR, AVADI-600071.
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
                            <li><a class="nav-link" href="#expertise">Our Expertise</a></li>
                            <li><a class="nav-link" href="#what-we-do">What We Do?</a></li>
                            <li><a class="nav-link" href="#quality">Quality</a></li>
                            <li><a class="nav-link" href="#completed-projects">Completed Projects</a></li>
                            <li><a class="nav-link" href="#ongoing-projects">Ongoing Projects</a></li>
                            <li><a class="nav-link" href="#our-clients">Clients</a></li>
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
