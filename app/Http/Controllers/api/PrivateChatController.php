<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\responseController;
use App\Models\PrivateChatModel;
use Illuminate\Http\Request;
use Nette\Utils\Validators;

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

