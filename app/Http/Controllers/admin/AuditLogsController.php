<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
class AuditLogsController extends Controller
{
    public function index() : View
    {
        return view('admin.audit_logs');
    }
}
