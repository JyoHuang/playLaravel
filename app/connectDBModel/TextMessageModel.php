<?php

namespace App\connectDBModel;

use Illuminate\Database\Eloquent\Model;

class TextMessageModel extends Model{
    //資料表的名稱
    protected $table = 'message_text';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以變更的欄位
    protected $fillable = [
       "message",
    ];
}