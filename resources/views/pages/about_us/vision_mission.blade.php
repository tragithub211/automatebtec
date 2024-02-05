<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vision, Mission and Core Values') }}
        </h2>
    </x-slot>

    <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/slider/btec-slider-1.jpg') }}">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="it-breadcrumb-content z-index-3 text-center">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Vision, Mission and Core Values</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="{{ route('pages.home') }}">Home</a></span> 
                                <span class="dvdr">//</span>
                                <span><a href="{{ route('pages.about_us') }}">About Us</a></span> 
                                <span class="dvdr">//</span>
                                <span>Vision, Mission and Core Values</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-about_us.vision_mission />

</x-btec-layout>