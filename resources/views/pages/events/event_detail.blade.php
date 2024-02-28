<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Detail') }}
        </h2>
    </x-slot>

    <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/slider/btec-slider-1.jpg') }}">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="it-breadcrumb-content z-index-3 text-center">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">News and Events</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="{{ route('pages.home') }}">Home</a></span> 
                                <span class="dvdr">//</span>
                                <span>News and Events</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($event_title == 'research-conference-nirc-vll-2024')
        <x-events.research_conference />
    @elseif($event_title == 'signing-mou-btec-and-buriram')
        <x-events.signing_mou />
    @elseif($event_title == 'signing-mou-btec-and-nara-university-education')
        <x-events.signing_mou_nara_edu />
    @elseif($event_title == 'btec-nihon-university-meeting')
        <x-events.nihon_u_meeting />
    @elseif($event_title == 'btec-semester-1-exam')
        <x-events.btec_semester_exam />
    @else
        <x-events.event_detail />
    @endif

</x-btec-layout>