<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Faculty of Social Science Education') }}
        </h2>
    </x-slot>

    <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/slider/btec-slider-1.jpg') }}">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="it-breadcrumb-content z-index-3 text-center">
                        <div class="it-breadcrumb-title-box">

                            <!-- science-education -->
                            <h3 class="it-breadcrumb-title">Curriculum</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="{{ route('pages.home') }}">Home</a></span> 
                                <span class="dvdr">//</span>
                                <span><a href="{{ route('pages.program') }}">Programs</a></span> 
                                <span class="dvdr">//</span>
                                <span>
                                    <a href="{{ route('pages.science_edu') }}">Faculty of Science Education</a>                                 
                                </span> 
                                <span class="dvdr">//</span>
                                <span>
                                    <a href="{{route('pages.faculty.dept', ['faculty-science-education', 'science-dept']) }}">Department of Science</a>
                                </span>
                                <span class="dvdr">//</span>
                                <span>Curriculum</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-department.curriculum />
</x-btec-layout>

