<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function form() {
        return view('form');
    }

    public function welcome1() {
        return view('welcome1');
    }
}
