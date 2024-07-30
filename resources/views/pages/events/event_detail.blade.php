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
    @elseif($event_title =='btec-opening-ceremony')
        <x-events.bten_opening_ceremony />
    @else
        <x-events.event_detail />
    @endif

</x-btec-layout>

//rdi-ecosystem-higher-education.blade