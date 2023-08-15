<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    public function index(){
        return view('admin.dashboard');
    }

    public function users(){
        return view('admin.users.index');
    }
}
