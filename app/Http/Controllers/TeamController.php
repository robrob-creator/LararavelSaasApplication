<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use  App\Models\User;
use Illuminate\Auth;

class TeamController extends Controller
{
    
    /** 
    *@return view
    */
    public function index():View
    {
        $team = auth()->user()->team()->with('members')->first();
        return view('team.index',[
            'team'=>$team
        ]);
    }
}
