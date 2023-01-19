<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LinkController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('home.userpage',compact('products'));
    }
    //
    public function adminOnlyDashboard(){
        return view('admin.layouts.admin-dash-layout');
    }
}
