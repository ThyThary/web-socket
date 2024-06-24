<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\partConfigController;
use App\Http\Controllers\responseController;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Events\staff;

class PrivateChatModel extends Model
{
   public static function storeDataStaff($lname,$fname,$age)
   {
        DB::beginTransaction();
        try
        {
            $result=DB::select("INSERT INTO public.staff (last_name, first_name, age) VALUES(?,?, ?) returning id",[$lname,$fname,$age]) ;
            broadcast(new staff($lname,$fname,$age))->toOthers();
            DB::commit();
            return response()->json(['status'=>200,'resutl'=>$result],200);
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return response()->json($e->getMessage(),500);
        }
   }
}
