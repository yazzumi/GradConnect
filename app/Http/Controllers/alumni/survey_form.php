<?php

namespace App\Http\Controllers\alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\graduates;

class survey_form extends Controller
{
 public function index($guid) : View
 {
     $graduate = Graduates::where('guid', $guid)->first();

     return view('alumni.survey_form', [
         'graduate' => $graduate
     ]);
 }
}
