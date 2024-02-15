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
                            @if($department == 'pedagogy-dept')
                                @php $departmentName = 'Department of Pedagogy' @endphp
                            @elseif($department == 'research-dept')
                                @php $departmentName = 'Department of Research and Library' @endphp

                            <!-- science-education -->
                            @elseif($department == 'science-dept')
                                @php $departmentName = 'Department of Science' @endphp
                            @elseif($department == 'mathematics-dept')
                                @php $departmentName = 'Department of Mathematics' @endphp
                            @elseif($department == 'ict-dept')
                                @php $departmentName = 'Department of ICT' @endphp
                            
                             <!-- social-science-education -->
                            @elseif($department == 'language-dept')
                                @php $departmentName = 'Department of Language' @endphp
                            @elseif($department == 'social-science-dept')
                                @php $departmentName = 'Department of Social Science' @endphp

                            @else
                                @php $departmentName = '' @endphp
                            @endif
                            <h3 class="it-breadcrumb-title">{{ $departmentName }}</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="{{ route('pages.home') }}">Home</a></span> 
                                <span class="dvdr">//</span>
                                <span><a href="{{ route('pages.program') }}">Programs</a></span> 
                                <span class="dvdr">//</span>
                                <span>
                                    @if($faculty == 'faculty-pedagogy-research')
                                        <a href="{{ route('pages.pedagogy_research') }}">Faculty of Pedagogy Research</a>
                                    @elseif($faculty == 'faculty-science-education')
                                        <a href="{{ route('pages.science_edu') }}">Faculty of Science Education</a>
                                    @else
                                        <a href="{{ route('pages.social_science_edu') }}">Faculty of Social Science Education</a>
                                    @endif
                                </span> 
                                <span class="dvdr">//</span>
                                <span>{{ $departmentName }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-department.detail :faculty="$faculty" :department="$department" />

</x-btec-layout>