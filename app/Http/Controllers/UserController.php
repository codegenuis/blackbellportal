<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Audit;
use Response;

class UserController extends Controller
{
  
    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');
        $user = User::where([
            'fld_username' => $username,
        ])->exists();
        $record = User::where('fld_username', $username)->get();
        $form = new Audit;
        $form->fld_username = $request->input('username');
        if($user){
            $record = User::select('fld_password','fld_name')->where('fld_username', $username)->get();
            $name = $record[0]->fld_name;
            $storedPassword = $record[0]->fld_password;
            if(password_verify($password,$storedPassword)){
                $form->fld_action = 'Logged In';
                $form->fld_status = 'open';
                $form->save();
                return redirect('/')->with('success','Welcome '.ucfirst($name));
            }
            else {
                $form->fld_action = 'Failed Log in';
                $form->fld_status = 'closed';
                $form->save();
                return redirect('login')->with('error','Wrong credentials');
            }
        }
        else {
            $form->fld_action = 'Failed Log in';
            $form->fld_status = 'closed';
            $form->save();
            return redirect('login')->with('error','User name not found');
        }
    } 
}