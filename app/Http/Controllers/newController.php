<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class newController extends Controller
{
    //
    public function form(){
        return view('new.form');
    }
}
