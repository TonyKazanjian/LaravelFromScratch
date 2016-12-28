<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Card;


class CardsController extends Controller
{
    public function index() {

        $cards = Card::all();
        return view('cards.index', compact('cards')); //index view within cards folder
    }

    public function show(Card $card) //Type hinting - hinting what kind of instance you expect
    {

//        $card = Card::find($id); With type hinting, Laravel finds the card by ID for us

        return view('cards.show', compact('card'));
    }

}
