<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Field;
use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $fieldCount = Field::count();
        $bookingCount = Booking::count();
        return view('admin.dashboard', compact('userCount', 'fieldCount', 'bookingCount'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
