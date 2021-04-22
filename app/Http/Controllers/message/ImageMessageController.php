<?php

namespace App\Http\Controllers\message;

use App\Http\Controllers\Controller;
use Validator;
//use App\connectDBModel\ImageMessageModel;  //建立自己的Model
use DB;
use Illuminate\Http\Request;

class ImageMessageController extends Controller
{

    public function getImageMessage()
    {
        $messages = DB::table('message_image')->get();

        $response = [
            'success' => true,
            'messages' => $messages,
        ];
        return response()->json($response);
    }

}
