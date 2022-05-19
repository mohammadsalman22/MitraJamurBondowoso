<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $this->param['dashboard'] = Dashboard::first();

        return view('dashboard', $this->param);
    }
}
