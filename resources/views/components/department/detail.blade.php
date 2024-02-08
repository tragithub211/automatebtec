<!-- faculty-of-science-education -->
<div class="it-about-4-area  inner-about-style pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="it-about-3-title-box">
                    <span class="it-section-subtitle">
                        <img src="{{ asset('assets/img/category/inner.svg') }}" alt=""> 
                        @if($faculty == 'faculty-pedagogy-research')
                            Faculty Of Pedagogy Research's Department
                        @elseif($faculty == 'faculty-science-education')
                            Faculty of Science Education\'s Departments
                        @else
                            Faculty of Social Science Education's Departments
                        @endif
                    </span>
                    <!-- pedagogy-research -->
                    @if($department == 'pedagogy-dept')
                        <h2 class="it-section-title-3 pb-30">Department of <span>Pedagogy</span></h2>
                        <p>The Department of Pedagogical aims to improve education quality by exploring effective strategies to engage students, promote critical thinking, and create inclusive learning environments.</p>
                    @elseif($department == 'research-dept')
                        <h2 class="it-section-title-3 pb-30">Department of <span>Research and Library</span></h2>

                    @elseif($department == 'science-dept')
                        <h2 class="it-section-title-3 pb-30">Department of <span>Science</span></h2>
                        <p>The Department of Science covers physics, chemistry, biology, and Earth science.</p>
                    @elseif($department == 'mathematics-dept')
                        <h2 class="it-section-title-3 pb-30">Department of <span>Mathematics</span></h2>
                        <p>The Department of Mathematics equips teachers with mathematical knowledge and pedagogical skills.</p>
                    @elseif($department == 'ict-dept')
                        <h2 class="it-section-title-3 pb-30">Department of <span>ICT</span></h2>
                        <p>The Department of ICT trains teachers to integrate technology into their teaching practices.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- organizational chart details -->
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- pedagogy-research -->
                @if($department == 'pedagogy-dept')
                    <img src="{{ asset('assets/img/charts/pedagogy-dept.jpg') }}" class="mx-auto d-block" alt="Pedagogy Department">
                
                @elseif($department == 'science-dept')
                    <img src="{{ asset('assets/img/charts/science-dept.jpg') }}" class="mx-auto d-block" alt="FSE">
                
                @elseif($department == 'mathematics-dept')
                    <img src="{{ asset('assets/img/charts/mathematics-dept.jpg') }}" class="mx-auto d-block" alt="FSE">
                
                @elseif($department == 'ict-dept')
                    <img src="{{ asset('assets/img/charts/ict-dept.jpg') }}" class="mx-auto d-block" alt="FSE">

                @else
                    ''
                @endif
            </div>
        </div>
    </div>
</div>
