<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class StaticController extends Controller
{
    public function index() {
        return view('Welcom');
    }
    public function settings()
    {
        return view("settings", [
            // 'computers' => self::getData()
            'computers' => Computer::all()
        ]);
    }
    public function contact() {
        return view('contact');
    }
}


