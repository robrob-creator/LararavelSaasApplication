<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\User;
use Illuminate\Auth;


class ChatroomController extends Controller
{
    //
    function index(){
        $chatroom = DB::table('chat_rooms')->get();
        return view('chat.conversation',['chatroom'=>$chatroom]);
    }
    function show()
    {
        
        $chatroom = DB::table('chat_rooms')->get();
        $conversation = DB::table('messages')->get();
        return view('chat.index',['chatroom'=>$chatroom],['conversation'=>$conversation]);
    }
    function conversation(){
        $conversation = DB::table('messages')->get();
        return view('chat.index',['conversation'=>$conversation]);
    }
}
