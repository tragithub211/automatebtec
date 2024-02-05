<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <!-- feature-area-start -->
    @include('pages.home.feature')
    
    <!-- about-area-start -->
    @include('pages.home.about_us')

    <!-- cta-area-start -->
    {{-- @include('pages.home.cta') --}}

    <!-- course-area-start -->
    {{-- @include('pages.home.course') --}}

    <!-- choose-area-start -->
    {{-- @include('pages.home.choose') --}}

    <!-- testimonial-area-start -->
    {{-- @include('pages.home.testimonial') --}}

    <!-- video-area-start -->
    {{-- @include('pages.home.enrollment') --}}

    <!-- contact-area-start -->
    {{-- @include('pages.home.contact') --}}

    <!-- event-area-start -->
    @include('pages.home.event')

    <!-- brand-area-start -->
    @include('pages.home.partner')

    <!-- faq-area-start -->
    {{-- @include('pages.home.faq') --}}

    <!-- blog-area-start -->
    {{-- @include('pages.home.blog') --}}
</x-btec-layout>
