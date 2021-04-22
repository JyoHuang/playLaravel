<?php

namespace App\Http\Controllers\message;

use App\Http\Controllers\Controller;
use Validator;
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

    public function addTextMessage(){
        //取得所有輸入
        $input = request()->all();
        //建立檢查輸入的規則
        $rules = [
            'message' =>[
                'required',
                'max:5',
            ]
        ];
        //檢查看看
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->messages(),
            ];
            return response()->json($response);
        }

        //新增至資料庫
        $mTextMessageModel = new TextMessageModel();
        $mTextMessageModel->message = $input['message'];
        $mTextMessageModel->save();
        $added_id = $mTextMessageModel->id;

        $response = [
            'success' => true,
            'message_id' => $added_id,
        ];
        return response()->json($response);
    }


}

