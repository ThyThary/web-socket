<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ui\PrivateChat;
use Illuminate\Http\Request;
use App\Models\PrivateChatModel;
use Illuminate\Support\Facades\DB;

class PrivateChatController extends Controller
{
    public function store(Request $request)
    {
        $lname=$request->lname;
        $fname=$request->fname;
        $age=$request->age;
        $result=PrivateChatModel::storeDataStaff($lname,$fname,$age);
        return $result;
    }
    
}
