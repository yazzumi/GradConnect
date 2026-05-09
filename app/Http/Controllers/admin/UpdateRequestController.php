<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UpdateRequestController extends Controller
{
    public function index() : View {
        return view('admin.update_request');
    }
}
