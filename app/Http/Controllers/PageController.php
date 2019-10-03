<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $card_contents  = \App\CardContent::all();
        // return $card_contents;
        return view('welcome', ['card_contents' => $card_contents]);
    }
}
