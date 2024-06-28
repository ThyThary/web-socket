<?php

namespace App\Models;

use App\Events\chatMessage;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChatMessageModel extends Model
{
    use HasFactory;
    public static function storeData($message){
        
        DB::beginTransaction();
        try{
            $result = DB::select("INSERT INTO public.chat_message (message) VALUES(?) returning id",[$message]);
            $id=DB::select("SELECT id from chat_message where id=?",[$result[0]->id])[0]->id;
            
            broadcast(new chatMessage($id,$message))->toOthers();
            DB::commit();
            return response()->json(['status'=>200,'result'=>$result],200); 
        }catch(Exception $e){
            DB::rollBack();
            return response()->json($e->getMessage(),500);
        }
    }
}
