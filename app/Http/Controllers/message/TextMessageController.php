<?php

namespace App\Http\Controllers\message;

use App\Http\Controllers\Controller;
//use Validator;
use App\connectDBModel\TextMessageModel;  //建立自己的Model
use DB;
use Illuminate\Http\Request;

class TextMessageController extends Controller{
    
    public function getTextMessage(){
        $messages = DB::table('message_text')->get();

        $response = [
            'success' => true,
            'messages' => $messages,
        ];
        return response()->json($response);
    }

}

