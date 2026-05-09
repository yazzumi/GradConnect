<?php

namespace App\Http\Controllers\alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
class submission extends Controller
{
    public function index() : View
    {
        return view('alumni.submission');
    }
}
