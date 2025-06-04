<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class newController extends Controller
{
    //
    public function form(){
        $news = News::all();
        $users = User::all();
        return view('new.form', ['news' => $news, 'users' => $users]);
    }
}
