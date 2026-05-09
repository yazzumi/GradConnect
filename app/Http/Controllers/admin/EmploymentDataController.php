<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmploymentDataController extends Controller
{
    public function index() : View {
        return view('admin.employment_data');
    }
}
