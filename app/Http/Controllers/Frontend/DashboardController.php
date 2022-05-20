<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        $this->param['dashboard'] = Dashboard::first();
        $this->param['agallery'] = Gallery::inRandomOrder()->limit(5)->get();
        $this->param['ogallery'] = Gallery::inRandomOrder()->limit(3)->get();

        return view('dashboard', $this->param);
    }
}
