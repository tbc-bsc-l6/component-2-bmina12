<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    //
    public function adminOnlyDashboard(){
        return view('admin.layouts.admin-dash-layout');
    }
}
