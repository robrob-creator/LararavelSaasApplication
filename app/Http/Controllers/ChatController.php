<?php

namespace App\Http\Controllers;

use http\Client\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use  App\Models\User;
use App\Models\ChatRoom;

class ChatController extends Controller
{
    /**
     * @return View
     */
    public function index():View
    {
    return view('chat.index');
    } 
    /**
     * @param Request $request
     * @return JsonResponse
     */
    
    public function messages(Chatroom $chatRoom){
        
    }
}
