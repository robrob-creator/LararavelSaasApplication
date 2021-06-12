<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use  App\Models\Chatroom;

class SendController extends Controller
{
    function save(Request $req)
    {
        $message= new Message;
        $message->id= $req->id;
        $message->name= $req->name;
        $message->sender_id= $req->sender_id;
        $message->chat_room_id= $req->chat_room_id;
        $message->content= $req->content;
        $message->save();
        return redirect('chat');


        
       
    }
 
    public function indexes()
    {
      
    } 
}

