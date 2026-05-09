<?php

namespace App\Http\Controllers\alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\view\view;

class profile extends Controller
{
    public function index() : View {
        return View('alumni.profile');
    }
}
