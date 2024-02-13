<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Action Research') }}
        </h2>
    </x-slot>

    <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/slider/btec-slider-1.jpg') }}">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="it-breadcrumb-content z-index-3 text-center">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Action Research</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="{{ route('pages.home') }}">Home</a></span> 
                                <span class="dvdr">//</span>
                                <span>Action Research</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-action_research.action_research />


</x-btec-layout>

<style>
    .card:hover {
        background-color: rgb(192, 192, 241) !important;
        transition: all 0.3s;
    }
    .card:hover h5,
    .card:hover p {
        color: white !important;
    }
    .card:hover {
         transform: scale(1.05);
    }
</style>