<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        // dd(Room::all());
        return view('Admin.home', [
            'rooms' => Room::all()
        ]);
    }
}
