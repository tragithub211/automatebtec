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
    @elseif($event_title == 'btec-teaching-practicum-event')
        <x-events.btec_practicum_event />
    @elseif($event_title == 'project-based-efl-learning-via-international-exchange')
        <x-events.efl_learning />
    @elseif($event_title == 'pisa-2022-cambodia')
        <x-events.pisa_2022_cambodia />
    @elseif($event_title =='btec-short-course-study')
        <x-events.btec_short_course />
    @elseif($event_title =='english-course-study')
        <x-events.english_short_course />
    @elseif($event_title =='exchange-session-between-tgu-and-btec-students')
        <x-events.exchange_session_tgu />
    @elseif($event_title =='btec-management-meeting')
        <x-events.btec_management_meeting />
    @elseif($event_title =='btec-anusa-hall')
        <x-events.btec_anusa_hall />
    @elseif($event_title =='btec-auf-meeting')
        <x-events.btec_auf_meeting />
    @elseif($event_title =='btec-receive-ict-equipment-donation-from-jica')
        <x-events.ict_equipment_handover_jica />
    
    @elseif($event_title =='rdi-ecosystem-higher-education')
        <x-events.rdi_ecosystem_higher_education />
    @elseif($event_title =='teachers-math-science-meeting-jica')
        <x-events.teachers_math_science_meeting_jica />
    @elseif($event_title =='rdi-pics')
        <x-events.rdi_pics />
    @elseif($event_title =='workshop-law-public-financial-management-reform')
        <x-events.workshop_law_public_financial_management_reform />
    @elseif($event_title =='technology-training-teaching')
        <x-events.technology_training_teaching />
    @elseif($event_title =='delivery-of-ICT-practice-school')
        <x-events.delivery_of_ICT_practice_schools />
    @elseif($event_title =='partnership-with-university-of-fukoi')
        <x-events.partnership_with_university_of_fukoi />
    @elseif($event_title =='technical-council-meeting')
        <x-events.technical_council_meeting />
    @elseif($event_title =='orientation-workshops-for-teaching-and-learning')
        <x-events.orientation_workship />
    @elseif($event_title =='btec-stem-comming-soon')
        <x-events.btec_stem_comming_soon />
    @elseif($event_title =='meeting-between-btec-and-world-bank-delegation')
        <x-events.bten_meeting_world_bank />
    @elseif($event_title =='sincere-gratitude-his-excellency-dr-hel-chamroeun-for-providing-books')
        <x-events.sincere_gratitude />
    @elseif($event_title =='appreciation-to-canadia-bank')
        <x-events.appreciation_canadia />
    @elseif($event_title =='appreciation-to-forte')
        <x-events.appreciation_forte />
    @elseif($event_title =='appreciation-to-kizuna')
        <x-events.appreciation_kizuna />
    @elseif($event_title =='appreciation-to-sponsors')
        <x-events.appreciation_sponsors />
    @elseif($event_title =='btec-research-proposal-workshop')
        <x-events.research_proposal_workshop />
    @elseif($event_title =='btec-second-research-conference')
        <x-events.second_research_conference />
    @elseif($event_title =='btec-guides-150-students-to-become-teachers-in-battambang')
        <x-events.btec_quides_students_become_teachers />
    @elseif($event_title =='nisti-and-btec-forge-mou-to-propel-stem-innovation')
        <x-events.btec_and_nisti_mou_stem_innovation />
    @elseif($event_title == 'btec-opening-ceremony')
        <x-events.bten_opening_ceremony />
    @elseif($event_title == 'btec-english-placement-test')
        <x-events.btec_english_placement_test />
    @elseif($event_title == 'workshop-advanced-ms-word-for-thesis-writing')
        <x-events.workshop_advanced_ms_word_for_thesis_writing />
    @elseif($event_title == 'Strengthen-Cooperation-between-Battambang-Teacher-Education-College-and-Us-Embassy')
        <x-events.stregnthen_cooperation_btec_us_embassy />
    @elseif($event_title == 'BTEC-opening-ceremony-pimary-student-generation4th')
        <x-events.btec_opening_ceremony_pimary_student_generation4th />
    @elseif($event_title == 'The-BTEC-management-team-and-SHCC-team-held-a-courtesy-meeting-with-the-Nippon-Foundation-in-Tokyo-Japan')
        <x-events.btec_130924 />
    @elseif($event_title == 'The-BTEC-management-team-and-SHCC-team-held-a-courtesy-meeting-with-the-Tokyo-Gakugei-University-in-Japan')
        <x-events.btec_150924 />
    @elseif($event_title == 'btec-and-forum-zfd-meetup')
        <x-events.btec_200924 />
    @elseif($event_title == 'btec-opening-ceremony-of-13th-generation-basic-teacher-training-course')
        <x-events.btec_251024 />
    @elseif($event_title == 'btec-2nd-conference-2024')
        <x-events.btec_251024_1 />
    @elseif($event_title == 'btec-2nd-conference-2024-event')
        <x-events.btec_021124 />
    @elseif($event_title == 'btec-opening-ceremony-student-teacher-12-plus-4-generation-3th')
        <x-events.btec_051124 />
    @elseif($event_title == 'Public-Private-Partnership-to-Improve-Teacher-Training-System-and-Quality-of-Education-in-Cambodia')
        <x-events.btec_061124 />
    @elseif($event_title == 'BTEC-Annual-Education-Conference-2024-Gallery')
        <x-events.btec_061124_1 />
    @elseif($event_title == 'Osteopathie-by-French-and-Khmer-doctors-of-Hattha-Vichesas-Organization-to-teachers-and-student-teacher-of-Battambang-Teacher-Education-College')
        <x-events.btec_071124 />
    @elseif($event_title == 'Fukuoka-and-Kizuna-Global-Wing-Youth-Cultural-Exchange-Study-Tour')
        <x-events.btec_121124 />
    @elseif($event_title == 'BTEC-2nd-Technical-Council-Meeting-2024')
        <x-events.btec_181124 />
    @elseif($event_title == 'BTEC-become-the-15th-Deputy-Member-of-AUF')
        <x-events.btec_141124 />
    @elseif($event_title == 'BTEC-Graduation-Ceremony-for-Student-Teachers-2024')
        <x-events.btec_171124 />
    @elseif($event_title == 'Master-Scholarship-at-Thailand')
        <x-events.btec_201124 />
    @elseif($event_title == 'BTEC-Competency-Test-Academic-Year-2024-2025')
        <x-events.btec_271124 />
    @elseif($event_title == 'BTEC-Collaborate-with-US-Embassy-on-Workshop-Project-Based-Teaching')
        <x-events.btec_281124 />
    @elseif($event_title == 'PISA-Test-Academic-Year-2024-2025')
        <x-events.btec_021224 />
    @elseif($event_title == 'Reflection-of-Activities-and-Results-forumZFD')
        <x-events.btec_031224 />
    @elseif($event_title == 'Closing-Ceremony-of-the-8th-Annual-Science-Fair')
        <x-events.btec_061224 />
    @elseif($event_title == 'BTEC-Launch-CPD-on-Pedagogy-and-Teaching-Methods-in-a-New-Context')
        <x-events.btec_071224 />
    @elseif($event_title == 'Minister-of-Education-Youth-and-Sports-Meeting-with-forumZFD')
        <x-events.btec_091224 />
    @elseif($event_title == 'Promoting-Young-Technology-and-Science-Teacher-Training-from-ASEAN-in-China')
        <x-events.btec_161224 />
    @elseif($event_title == 'BTEC-General-English-Program')
        <x-events.btec_171224 />
    @else
        <x-events.event_detail />
    @endif

</x-btec-layout>

//rdi-ecosystem-higher-education.blade