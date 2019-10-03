<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\CardContent;

class PageController extends Controller
{
    public function index() {
        $card_contents  = \App\CardContent::all();
        return view('welcome', ['card_contents' => $card_contents]);
    }

    public function cards() {
        $card_contents = \App\CardContent::all();
        return view('card_lists', ['card_contents' => $card_contents]);
    }

    public function form() {
        return view('welcome_form');
    }

    public function upload(Request $request) {
        $card_contents = new CardContent();

        $image = time().'.'.request()->image->getClientOriginalExtension();
        $card_title = $request->input('card_title');
        $card_description = $request->input('card_description');

        request()->image->move(public_path('images'), $image);

        $card_contents->card_title = $card_title;
        $card_contents->description = $card_description;
        $card_contents->path =  "/images/" . $image;
        $card_contents->save();
        
        echo $image . " successfully moved" . "<br>";
        echo "data saved";
    }

    public function deleteCards($id) {
        $card = CardContent::find($id);
        $card->delete();

        unlink(public_path($card->path));

        return redirect('/welcome/cards');
    }

    public function editCardForm($id) {
        $card = CardContent::find($id);
        return view('welcome_form', ['card' => $card]);
    }

    public function editCard(Request $request) {
        $card_contents = CardContent::find($request->id);

        $image = time().'.'.request()->image->getClientOriginalExtension();
        $card_title = $request->input('card_title');
        $card_description = $request->input('card_description');

        // delete image
        unlink(public_path($card_contents->path));
        // Storage::delete(public_path() . '' . $card_contents->path );

        request()->image->move(public_path('images'), $image);

        $card_contents->card_title = $card_title;
        $card_contents->description = $card_description;
        $card_contents->path =  "/images/" . $image;
        $card_contents->save();
        
        echo $image . " successfully moved" . "<br>";
        echo "data saved";
    }
}
