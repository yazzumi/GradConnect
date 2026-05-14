<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
class AuditLogsController extends Controller
{
    public function index() : View
    {
        $admin_logs = DB::table('audit_logs')
            ->leftJoin('admins', 'audit_logs.admin_id', '=', 'admins.admin_id')
            ->select('audit_logs.*', 'admins.username as admin_name')
            ->get();

        return view('admin.audit_logs', [
            'audit_logs' => $admin_logs
        ]);

    }
}
