<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutUSController;
use App\Http\Controllers\ActionResearchController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurCampusController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SocialServiceController;

// BTEC Website's Routes
Route::get('/', [HomeController::class, 'home'])->name('pages.home');

Route::get('about-us', [AboutUSController::class, 'aboutUs'])->name('pages.about_us');
Route::get('message-director', [AboutUSController::class, 'messageDirector'])->name('pages.message_director');
Route::get('mission-vision-core-value', [AboutUSController::class, 'missionVision'])->name('pages.mission_vision');
Route::get('organizational-chart', [AboutUSController::class, 'organizationalChart'])->name('pages.organizational_chart');
Route::get('logo-meaning', [AboutUSController::class, 'logoMeaning'])->name('pages.logo_meaning');
Route::get('btec-history', [AboutUSController::class, 'History'])->name('pages.btec_history');

Route::get('programs', [ProgramController::class, 'program'])->name('pages.program');
Route::get('programs/faculty-pedagoy-research', [ProgramController::class, 'pedagoyResearch'])->name('pages.pedagogy_research');
Route::get('programs/faculty-science-education', [ProgramController::class, 'scienceEdu'])->name('pages.science_edu');
Route::get('programs/faculty-social-science-education', [ProgramController::class, 'socialScienceEdu'])->name('pages.social_science_edu');

Route::get('programs/{faculty}/{department}', [DepartmentController::class, 'departmentDetail'])->name('pages.faculty.dept');
Route::get('programs/{faculty}/{department}/{curriculum}', [DepartmentController::class, 'curriculumDetail'])->name('pages.faculty.dept.curriculum');

Route::get('our-campus', [OurCampusController::class, 'ourCampus'])->name('pages.our_campus');
Route::get('clubs', [OurCampusController::class, 'clubs'])->name('pages.clubs');


Route::get('action-research', [ActionResearchController::class, 'actionResearch'])->name('pages.action_research');
Route::get('book_action-research', [ActionResearchController::class, 'bookResearch'])->name('pages.book_action_research');

Route::get('social-services', [SocialServiceController::class, 'socialService'])->name('pages.social_service');
Route::get('contact-us', [ContactUSController::class, 'contactUs'])->name('pages.contact_us');

Route::get('events', [EventController::class, 'event'])->name('pages.event');
Route::get('events/{event_title?}', [EventController::class, 'eventDetail'])->name('pages.events.detail');

Route::get('courses/{course_title}', [CourseController::class, 'courseDetail'])->name('pages.courses.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// BTEC Authentication Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
