<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Go to the chat room
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chat');
    }

    /**
     * Get the messages from DB
     * 
     * @return Message
     */
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }
    /**
     * Persist message to the DB
     * 
     * @param Request $_REQUEST
     * @return Response
     */
    public function sendMessage()
    {
        $user = Auth::user();

        $message = $user->messages()-create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();
        
        return ['status' => 'Message Sent!'];
    }
}
