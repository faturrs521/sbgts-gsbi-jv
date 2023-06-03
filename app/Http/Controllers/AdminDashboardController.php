<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboard() {
        return view(
            'admin.admin-dashboard',
            ["title" => "Dashboard"]
        );
    }


    public function userDashboard() {
        return view(
            'user.user-dashboard',
            ["title" => "Dashboard"]
        );
    }
}
