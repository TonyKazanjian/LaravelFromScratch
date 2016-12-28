<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {

//        $note = new Note;
//        $note->body = $request->body;
//
//        $card->notes()->save($note);

        /**
         * other ways to do this
         */
        // pass an array to the constructor, must set fillable fields (look at Note model)
//        $note = new Note(['body' => $request->body]);

//        $card->notes()->save(new Note(['body' => $request -> body]));

        // use create method
//        $card->notes()->create(['body' => $request->body]);

        //$request->all() returns the whole array of parameters passed through
//        $card->notes()->create($request->all());

        //this is the best way. Explicit
        $card->addNote(
            new Note($request->all())
        );

        return back();

    }
}
