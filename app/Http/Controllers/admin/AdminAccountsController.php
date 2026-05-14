<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Admin;
class AdminAccountsController extends Controller
{
    public function index() : View {

        $admins = Admin::all();


        return view('admin.admin_accounts',[
            'admins' => $admins
        ]);

}
}
