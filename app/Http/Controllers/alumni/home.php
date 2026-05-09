<?php

namespace App\Http\Controllers\alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\graduates;

class home extends Controller
{
    public function index() :View
    {
        return view('alumni.home');
    }

    public function test()
    {
      return response()->json(graduates::all()->toArray());
    }
}
