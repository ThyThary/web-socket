<?php

namespace App\Http\Controllers;

use App\Models\ChatMessageModel;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function store(Request $req){
        $result  = [];
        $message = $req->message;
        $result  = ChatMessageModel::storeData($message);
        return $result;
    }
}
