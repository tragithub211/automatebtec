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
                        <strong class="fs-5 mx-6">THE POSITIONS AND RESPONSIBILITIES OF DEPARTMENT OF EDUCATIONAL RESEARCH AND LIBRARY (DERL)</strong>
                        <hr>
                        <p class="m-2">The Ministry of Education Youth and Sport of Cambodia has reformed the quality of teacher education recently; however, this reforming needs a longer time to produce the qualified future teachers. <br>
                           Since 2017, Battambang Teacher Education College (BTEC) has been implemented as a four years’ program educating curriculum. BTEC is one of the schools to reform and educate student teachers with high commitment. Now, to improve the basic quality of education, a department was created in BTEC. That is the Department of Educational Research and Library (DERL). The purpose of creating this department is to provide the basically qualified research skill in the area of education for student teachers and teacher educators. There are various positions and responsibilities in the name of DERL. <br>
                        </p> 
                           <p class="m-2"><strong class="ps-5">First,</strong> DERL leads and manages with good governance to prepare an annual operational plan, to monitor, and evaluate the implementation of the annual operational plan. To achieve this, all the staff of the department work cooperatively and effectively.</p>
                            <p class="m-2"><strong class="ps-5">Second,</strong> DERL plans to recruit new teacher educators who have the qualification of Master’s degree or PhD with the specific skills for working in the departments, especially in research. In addition, existing teacher educators definitely encourage and motivate students to continue their study with either fee or scholarship in order to obtain a Master’s degree or Doctorate degree. This is the way to obtain lecturer resources for working in the department as well as the faculty.</p>
                            <P class="m-2"><strong class="ps-5">Third,</strong> DERL actively participates to develop and improve the detailed curricula to meet the educational curriculum framework for each school year. Pedagogical counseling also leads and organizes regularly for all officers and teacher educators in the departments.</p>
                            <P class="m-2"><strong class="ps-5">Fourth,</strong> teacher educators’ research knowledge and skill need to be strengthened as soon as possible. All teacher educators absolutely require to get more training on their profession by allowing them to join workshops or other training programs. To make sure all teacher educators’ research ability is enhanced, the DERL takes high responsibility to run the research workshop. <br></p>
                            <P class="m-2"><strong class="ps-5">Fifth,</strong> DERL provides educational research courses, guides student teachers to conduct action research, and produces educational documents certainly promoted to disseminate. <br>
                            <P class="m-2"><strong class="ps-5">Sixth,</strong> DERL plays the main role to build student teachers and teacher educators capacity in research to meet the skills of 21st century. The educational or/ and action research skill would be the first acceleration to whom working in the departments as well as encounter in whole college. Teacher educators who working in the DERL or cross department will be promoted to conduct the educational or action research to ensure their teaching profession adeptly. In this case, their educational or action research works will be definitely supported by the research technician. Through DERL’s working experiences would benefit and help teacher educators to conduct at least one of action research in a year. All things considered, teacher educators’ research result will be opportunely provided to present and publish in national, regional, and international conferences. <br> </p>
                            <P class="m-2"><strong class="ps-5">The last,</strong> DERL cooperatively works with other faculties and departments.  According to this, DERL establishes a good communication mechanism and mobilizes with either national, regional or international institutions. Teacher educators and student teachers positively inspire to establish study tours and exchange experiences in conferences either national or international. <br> </p>
                        <div class=" mx-3 px-2 rounded" style="background: rgb(210, 212, 216)">
                            <p>As demonstrated above, all positions and responsibilities of DERL are technically implemented to properly function and contribute to the development of teacher education to produce highly qualified future teachers at Battambang Teacher Education College (BTEC). </p>
                        </div>
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
                    
                @endif
            </div>
        </div>
    </div>
</div>
