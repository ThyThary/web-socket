<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivateChatModel;
class PrivateChatController extends Controller
{
    public function store(Request $req)
    {
        dd('test');
        // $validator = Validators::make($req->all(), [
        //     "id" => ["required", "integer"],
        //     "message" => ["required"]
        // ]);

        // if ($validator->fails()) {
        //     return responseController::client($validator->getMessageBag()->toArray());
        // } else {
            $result = PrivateChatModel::store($req);
            return $result;
        // }
    }
}
