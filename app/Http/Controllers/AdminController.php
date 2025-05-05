<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function AdminManageRecipes()
    {
        return view('admin.manageRecipes');
    }

}
