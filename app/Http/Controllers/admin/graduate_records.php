<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
class graduate_records extends Controller
{
    public function index() : View
    {
        return view('admin.graduate_records');
    }
}
