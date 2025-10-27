@extends('layouts.app')
@section('content')

{{-- breadcrumb --}}
<livewire:breadcrumbs
    title="JAKUVA BUILD TECH"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Peoples'],
        ['label' => 'Our Workforce']
    ]"
/>

{{-- Smooth scroll (move to app CSS if you prefer) --}}
<style>html{scroll-behavior:smooth}</style>

<div class="page-content-wrapper section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-page-content">

                    <h2 class="common-page-title section-space--bottom--30">Our Team</h2>

                    <div class="testimonial-single__wrapper">

                        <!-- JAYATHARINI (C.E.O) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXeHSsU4DDOzHHo3witNlviBE1IKM9Up-DeGx4KS6Z3my7wKR_KfJBwlCpxJc1S69Fm5OTwdcDP7fKGtM5OPqrJg5w3GSHajkogIet8XM05q6wm3o8JAXFy4NFrwgOkoFFOoh2t2jUkOsJJ5xHrMXA?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="JAYATHARINI">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">JAYATHARINI <span class="designation">(C.E.O)</span></h4>
                                    <p class="text">As we continue to grow and evolve, our focus remains clear — delivering excellence, embracing innovation, and staying deeply committed to our clients, partners, and people. With a clear vision and strong industry knowledge, we have successfully become a leader in pre-engineered buildings and industrial construction, setting new standards for quality and innovation.</p>
                                </div>
                            </div>
                        </div>

                        <!-- SATHIYA K (OPERATION MANAGER) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXct8b7ATgebZqR1MNhm3Y2DGKl7VdYHax2bCOK13aX8EYdrPbOlQidkxvhEFVNsWyA3-qFq6uMthwpLd0sz8bt-WkV8qzKaEceiqo1MKc96S4_mHuqR4_9COOBqyeXOGq2PbVE6-d2hmSjplJindKU?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="SATHIYA K">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">SATHIYA K <span class="designation">(OPERATION MANAGER)</span></h4>
                                    <p class="text">STEEL STRUCTURALS FABRICATION & ERECTION</p>
                                </div>
                            </div>
                        </div>

                        <!-- ANTONY CYRIL C (PROJECT MANAGER) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXd6V6LufIEZ4vnpgkw7sxYhwZ2r3qWv7ZGlEtOvUlC-LROd2o11S36VCXaF4VcaSEROtxjAqh1VwhD7IuN3AP9d0s2DD0d4YzKwriDgue_P12IYwXB3eflvyIL-_E-Ba6gkejncJrhCTLNLhG_nJQ?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="ANTONY CYRIL C">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">ANTONY CYRIL C <span class="designation">(PROJECT MANAGER)</span></h4>
                                    <p class="text">CIVIL</p>
                                </div>
                            </div>
                        </div>

                        <!-- PAUL PANDIAN B (PROJECT ENGINEER) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXfNI5DZ-7OTjOvpGu0uVUMogxUQDnczkzehpkjZnxN25Qq64CDtekEfK6quDaRDYXXwPZ8SWuibMpNiTKSRdU8bdTqjoVYcoS5Mfd5ZPey4s5Fezz2Ff4XTTNCBeFVDZbeg00GNgN0lz8DoMMnecDM?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="PAUL PANDIAN B">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">PAUL PANDIAN B <span class="designation">(PROJECT ENGINEER)</span></h4>
                                    <p class="text">CIVIL</p>
                                </div>
                            </div>
                        </div>

                        <!-- MANI KANDAN (SITE ENGINEER) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXdwTLp-Kvh8MgHW1u-QxOo2M7DEUvVoGP1a_ATKycWoyZgtA1PuNTeHbb8AM1N1-hg4FzbBPC95AXD8-PsujpHlyOIXMFuTSyGOYud4y43Co5ekanfHKcbUoRGDPotFJ24opi8Gk5bBKklqFJGSc-Q?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="MANI KANDAN">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">MANI KANDAN <span class="designation">(SITE ENGINEER)</span></h4>
                                    <p class="text">CIVIL</p>
                                </div>
                            </div>
                        </div>

                        <!-- PREMNATH P (SITE ENGINEER) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXfFR8t5NMglk3UR8ziWt-biNrRvG09c6zWqOu8JizQ5W6iDBhQ_TR8Pq3ba6cZ2Pe-VOyRuaKqPog--d6LEpFl7La1dpY97jKhu5jVJu_KeYDBYYt_IX1g2J2BS4BFj6ZEVRVgnYveiyIn9HI6R1A?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="PREMNATH P">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">PREMNATH P <span class="designation">(SITE ENGINEER)</span></h4>
                                    <p class="text">CIVIL</p>
                                </div>
                            </div>
                        </div>

                        <!-- DINESH KUMAR MOHAN DASS (SITE INCHARGE) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXdgpOTMiE1OtSqN6VcKz86XNM-d06xig59B_KHbQ7LNF6O1EO9kfXSp9154nrwN2OJKP_u4jz4V0ehkWDTzqRdAmX0-T3wgI7YkizuPlTobHCOIpMt2K_0LkhARrgzojpdRyvrdq0NCsS_zyVbXGQ?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="DINESH KUMAR MOHAN DASS">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">DINESH KUMAR MOHAN DASS <span class="designation">(SITE INCHARGE)</span></h4>
                                    <p class="text">STEEL STRUCTURALS FABRICATION & ERECTION</p>
                                </div>
                            </div>
                        </div>

                        <!-- HARI HARAN K (3D DESIGNER) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXfjrA0dISox5Ua7iCEtJd5PiHCYiklbZgaa8_6swq3LxikbatrTWZbedtXac2uk0TKxMn12EaXpSe6mSRTZJvNjSKJZWgZiS8D90tX_HAmlp2_67EN7pJS8Ce1i7ri-oVuoJ-loOURCWpWnLPYVYfQ?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="HARI HARAN K">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">HARI HARAN K <span class="designation">(3D DESIGNER)</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- BIRBAL BHAGT (FABRICATION & ERECTION SUPERVISOR) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXck7JyVJO-_3xOeYI5FvPScp6LswcozUJK0xqKs2ONXrF3C7uZPiChiiNuPvqRB7mkjqbazPLC3u4LLsrBcX-8E6orig2oANKbIHDetC8MtHFRQUrYL2jDcLvhLU8maxZxxhDj8jVpA2G33510z7gA?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="BIRBAL BHAGT">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">BIRBAL BHAGT <span class="designation">(FABRICATION & ERECTION SUPERVISOR)</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- MOHANRAJ K (FACTORY SUPERVISOR) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXcHL3w0T1PJbSZ6UwU37ZxYzqmBBQoQmExlNXgQGvhkC9leGi_ZDun7SWU8f8xZ_HCNJV0wE-w10kvPp_aGdphVmjVIikBfh3UxqtXnnG0UvuTxoVjhcINlfbzh6ghTbZ2jt5dueyHboWBmQVoDrcQ?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="MOHANRAJ K">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">MOHANRAJ K <span class="designation">(FACTORY SUPERVISOR)</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- MOHAMMED ASHFAQ M.A (ACCOUNTANT) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXcEnVgYgmFx_Y9pQQ81XMwsxJiahq9dTuOlyvXaU4vvLKNu6mlifk18pbXoXwSIbRlvqPLOVksvPXqcMm8Vzq6bfK5E40fV-unJhXKLhcEXZlo8j6Ai85GurLh5YtkG34SwnUPqjTIMLUB219oUmQ?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="MOHAMMED ASHFAQ M.A">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">MOHAMMED ASHFAQ M.A <span class="designation">(ACCOUNTANT)</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- SENTHIL NAYAGAM (ACCOUNTANT) -->
                        <div class="testimonial-single__item">
                            <div class="testimonial-slider__single-item testimonial-slider__single-item--style2">
                                <div class="testimonial-slider__single-item__image">
                                    <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXdqtGo7h3CvQtN6eBerrstM_OVNs-6mcwTdi-l1C-lUxOULWdCSVxvbz7KGsDQ0PJdpuDrCTMlJ7hw6n34VUYh-hjdkbaimQzhCAtU8tVaVX7-jWZtxAHDu0q5GEVKrpDk7PE7-4k6rFwk0WpW5Bg4?key=H4VSBsxU_-f8f3pTqBsmYg" class="img-fluid" alt="SENTHIL NAYAGAM">
                                </div>
                                <div class="testimonial-slider__single-item__content">
                                    <h4 class="testimonial-name">SENTHIL NAYAGAM <span class="designation">(ACCOUNTANT)</span></h4>
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
