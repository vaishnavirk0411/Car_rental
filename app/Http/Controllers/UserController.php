<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\UsersMaster;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        $userList = UsersMaster::select('*')->get();
        return view('admin.user',["userList"=> $userList]);
    } 
   
    public function getuserList(Request $req){
        $userList = UsersMaster::select('user_id as Id','user_name as username','user_unique_id')->get();
 
                return response()->json(
             array(
                "status"=>true,
                "data"=> $userList
             )
          );
     }
     
}
