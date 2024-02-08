<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // department-detail
    public function departmentDetail($department)
    {
        return view('pages.departments.index', compact('department'));
    }
}
