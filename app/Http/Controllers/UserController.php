<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function index():View
    {
        $users = DB::table('users')->get();
        return view('dashboard.index', ['users' => $users]);
    } 
}
