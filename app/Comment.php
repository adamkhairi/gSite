<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    public function comment(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function article(){
        return$this->belongsTo('App\Article');
    }

    public  function getUser($id){
//        $get_user = User::all();
//        $user_id = DB::table('users')->where('username', $user_input)->first()->id;
        $user_name = DB::table('users')->where('id', $id)->first();
        return $user_name;
//        User::where('id',$id)->first();
    }
}
