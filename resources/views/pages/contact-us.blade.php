@extends('layouts.app')
@section('content')

<livewire:breadcrumbs
    title="Contact Us"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Contact Us']
    ]"
/>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
      <ul class="mb-0">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<div class="page-content-wrapper section-space--inner--120">
    <div class="contact-location-grid__wrapper">
        <div class="container">
            <div class="row">

                <!-- JAKUVA BUILD TECH -->
                <div class="col-md-4">
                    <div class="contact-location-grid__single">
                        <div class="contact-location-grid__content">
                            <h2 class="title">JAKUVA BUILD TECH</h2>
                            <ul class="info-list">
                                <li class="email"><strong>Email:</strong> jakuvabuildtech@gmail.com</li>
                                <li class="phone"><strong>Phone:</strong> +91 99400 88581, 89394 55585, 8072141341</li>
                                <li class="phone"><strong>Telephone:</strong> 044 – 26550079</li>
                                <li class="address"><strong>Office:</strong> PL NO:100 EAST PART, 2nd Floor, SRI DEVI STREET,
                                    VGV NAGAR, EXT2, KANNAPLAYAM, KAMARAJNAGAR, AVADI-600071.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- JAY VEE STRUCTURALS -->
                <div class="col-md-4">
                    <div class="contact-location-grid__single">
                        <div class="contact-location-grid__content">
                            <h2 class="title">JAY VEE STRUCTURALS</h2>
                            <ul class="info-list">
                                <li class="email"><strong>Email:</strong> jayveesepl@gmail.com</li>
                                <li class="phone"><strong>Phone:</strong> +91 99400 88581, 89394 55585, 8072141341</li>
                                <li class="phone"><strong>Telephone:</strong> 044 – 26550079</li>
                                <li class="address"><strong>Office:</strong> 7/4B1, JV, PAPPARAMBAKKAM ROAD,
                                    MANNUR, SRIPERUMBUDUR - 602 105</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- JAY VEE ENGINEERING -->
                <div class="col-md-4">
                    <div class="contact-location-grid__single">
                        <div class="contact-location-grid__content">
                            <h2 class="title">JAY VEE ENGINEERING</h2>
                            <ul class="info-list">
                                <li class="email"><strong>Email:</strong> jayveesepl@gmail.com, jayveeengineering@yahoo.com</li>
                                <li class="phone"><strong>Phone:</strong> +91 99400 88581, 89394 55585, 8072141341</li>
                                <li class="phone"><strong>Telephone:</strong> 044 – 26550079</li>
                                <li class="address"><strong>Head Office:</strong> PL NO:100 EAST PART, 2nd Floor,
                                    SRI DEVI STREET, VGV NAGAR, EXT2, KANNAPLAYAM,
                                    KAMARAJNAGAR, AVADI-600071.</li>
                                <li class="address"><strong>Workshop 1:</strong> 7/4B1, JV, PAPPARAMBAKKAM ROAD,
                                    MANNUR, SRIPERUMBUDUR - 602 105</li>
                                <li class="address"><strong>Workshop 2:</strong> PL No: 7 SIDCO INDUSTRIAL ESTATE,
                                    MULLUVADI, KALLAVI, RANIPET - 632 506.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- row -->
        </div>
    </div>

    <div class="contact-form-area section-space--top--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="career-title-area section-space--bottom--30">
                        <h2 class="title mb-0">Drop us a line</h2>
                    </div>

                    <div class="contact-form-wrapper">
                      <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name *" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email *" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                                </div>

                                {{-- honeypot (spam trap) --}}
                                <input type="text" name="company" style="display:none">

                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Message *" required>{{ old('message') }}</textarea>
                                </div>
                                <div class="col-lg-12">
                                     <x-turnstile />
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="ht-btn ht-btn--default">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                  
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
