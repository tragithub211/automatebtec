<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // department-detail
    public function departmentDetail($faculty, $department)
    {
        return view('pages.departments.index', compact('faculty', 'department'));
    }
     // department-detail
    public function curriculumDetail($faculty, $department,$curriculum)
    {
        return view('pages.departments.curriculum', compact('faculty', 'department','curriculum'));
    }
}
