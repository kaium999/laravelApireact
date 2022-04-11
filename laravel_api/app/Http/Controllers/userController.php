<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    function register(Request $req){
        $user=new User;
        $user->uname=$req->input('name');
        $user->uemail=$req->input('email');
        $user->upassword=Hash::make($req->input('password'));
        $user->save();
        return $user;

    }
    function Showdata(){
        return User::all();
    }
    function deleteuser($id){
        $data= User::find($id);
        $data->delete();
        return"delete Successfully";
    }
    function editShow($id){
        $data=User::find($id);
        //$data=User::find($id);
        return $data;
        //return view('Edit',['user'=>$data]);
        
    }
    function update( Request $req,$id){
        
        $data=User::find($id);
        $data->uname = $req->input('name');
        $data->uemail= $req->input('email');
        $data->upassword= $req->input('password');
        $data->update();
        return response()->json([
            'status'=>200,
            'message'=>"Student Update successfully",
        ]);
        //return redirect('show');*/
        
        return $id;
    }
}
