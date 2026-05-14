<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class graduate_records extends Controller
{
    public function index()  {

        $graduates = DB::table('graduates')
            ->leftJoin('programs', 'graduates.program_id', '=', 'programs.program_id')
            ->leftJoin('addresses', 'graduates.graduate_id', '=', 'addresses.graduate_id')
            ->join('civil_status', 'graduates.civil_status_id', '=', 'civil_status.civil_status_id')
            ->select(
                'graduates.*',
                'programs.program_code as program_code',
                'civil_status.status_name as civil_status',
                'addresses.street_address',
                'addresses.barangay',
                'addresses.city_municipality',
                'addresses.province'
            )
            ->get();

        return view('admin.graduate_records',[
            'graduates' => $graduates
        ]);

    }
}

