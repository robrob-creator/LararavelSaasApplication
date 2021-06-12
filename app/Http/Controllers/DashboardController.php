<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function index():View
    {
        $team = auth()->user()->team()->with('members')->first();
        return view('dashboard.index',[
            'team'=>$team
        ]);
    } 
}
