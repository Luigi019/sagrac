<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\basqyr01;
use App\Models\bashis01;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bashis01 = bashis01::all();
        $basqyr01 = basqyr01::all();
        $user = User::all();
        $role = Role::all();
        return view('panel.home', compact('user', 'bashis01', 'basqyr01', 'role'));
    }
   
}
