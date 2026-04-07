@extends('layouts.app')

@section('content')

    <div data-aos="fade-up" data-aos-duration="1000">
        @include('layouts.partials.hero')
    </div>

    <div class="overflow-hidden" data-aos="fade-right" data-aos-delay="100">
        @include('layouts.partials.services')
    </div>

    <div class="overflow-hidden" data-aos="fade-left" data-aos-delay="100">
        @include('layouts.partials.about')
    </div>
    
    <div data-aos="zoom-in" data-aos-delay="200">
        @include('layouts.partials.icon-section')   
    </div>
    
    <div data-aos="fade-up">
        @include('layouts.partials.timeline')
    </div>
    
    <div data-aos="zoom-in-up" data-aos-delay="100">
        @include('layouts.partials.portfolio')
    </div>
    
    <div data-aos="fade-up">
        @include('layouts.partials.testimonials')
    </div>
    
@endsection