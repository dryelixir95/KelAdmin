<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView(){
        $data['allDataUser']=User::all();
        return view('backend.user.view_user', $data);
    }

    public function UserAdd(){
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){
        $validatedData=$request->validate([
            'email' => 'required|unique:users',
            'textName' => 'required',
        ]);

        $data=new User();
        $data->usertype=$request->usertype;
        $data->name=$request->textName;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('user.view')->with('info','Data added Successfully');
    }

    public function UserEdit($id){
        $editData= User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){
        $validatedData=$request->validate([
            'email' => 'required|unique:users',
            'textName' => 'required',
        ]);

        $data=User::find($id);
        $data->usertype=$request->usertype;
        $data->name=$request->textName;
        $data->email=$request->email;
        
        $data->save();

        return redirect()->route('user.view')->with('info','Update Data Successfully');
    }

    public function UserDelete($id){
        $deleteData= User::find($id);
        $deleteData->delete();

        return redirect()->route('user.view')->with('info','Delete Data Successfully');
    }
}
