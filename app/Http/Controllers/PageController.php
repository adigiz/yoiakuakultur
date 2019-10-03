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

    public function showCardList() {
        $card_contents = \App\CardContent::all();
        return view('card_lists', ['card_contents' => $card_contents]);
    }

    public function newCardForm() {
        return view('welcome_form');
    }

    public function storeCard(Request $request) {
        $request->validate([
            'card_title' => 'bail|required',
            'card_description' => 'required',
            'image' => 'required',
        ]);
        $card_contents = new CardContent();

        $image = time().'.'.request()->image->getClientOriginalExtension();
        $card_title = $request->input('card_title');
        $card_description = $request->input('card_description');

        request()->image->move(public_path('images'), $image);

        $card_contents->card_title = $card_title;
        $card_contents->description = $card_description;
        $card_contents->path =  "/images/" . $image;
        $card_contents->save();
        
        return redirect('/welcome/cards/new')->with(['success' => 'Card stored successfully!']);
    }

    public function deleteCard($id) {
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

        unlink(public_path($card_contents->path));

        request()->image->move(public_path('images'), $image);

        $card_contents->card_title = $card_title;
        $card_contents->description = $card_description;
        $card_contents->path =  "/images/" . $image;
        $card_contents->save();
        
        echo $image . " successfully moved" . "<br>";
        echo "data saved";
    }
}
