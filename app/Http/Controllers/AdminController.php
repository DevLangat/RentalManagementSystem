<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tenant;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator');
    }
    public function index()
    {
        $count_tenants = Tenant::count();
        return view('admin.index',compact('count_tenants'));
    }

}
