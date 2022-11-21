<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index() {

        return view('panel.profile.index');
    }


    public function update(Request $request)
    {
            $user = auth()->user();
           $user->name = $request->name;
           $user->cedula = $request->cedula;
           $user->email = $request->email;

           if($request->password)
           {
               $user->password = $request->password;
           }

            ($user->save());

            return back();
    }

}
