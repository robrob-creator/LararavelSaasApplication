<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{
    //
    function conversation(){
        $conversation = DB::table('messages')->get();
        return view('chat.index',['conversation'=>$conversation]);
    }
}
