<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $card_contents  = \App\CardContent::all();
        
        return view('welcome');
    }
}
