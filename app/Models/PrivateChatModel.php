<?php

namespace App\Models;
use App\Events\pusherMessage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\partConfigController;
use App\Http\Controllers\responseController;
use Exception;
use Illuminate\Support\Facades\DB;


class PrivateChatModel extends Model

{
    use HasFactory;
    public static function store($request)
    {
        DB::beginTransaction();
        try
        {
        // Params
        $id = $request->id ?? null;
        $message = $request->message ?? null;
        $createBy = $_SESSION['userId'];
        // INSERT
        $result = DB::select("SELECT public.insert_chat_messages(?,?)",
                                    [
                                            $id ?? null,
                                            $message ?? null
                                    ]
                                    );
            // if ($result)
            // {
            //     // Event Broadcasting
                broadcast(new pusherMessage($id, $message))->toOthers();
                DB::commit();
                return responseController::success($result);
            // }
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return responseController::error($e->getMessage());
        }
    }
}
