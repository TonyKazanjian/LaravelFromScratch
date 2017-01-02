<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Note;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {
        //For validating
         $this->validate($request, [
            'body' => 'required|min:10' // look at Laravel documentation for other rules we can reference
         ]);

        // for adding the user:
        $note = new Note($request->all());
//        $note ->user_id = 1; // somehow getting user ID here and assigning it to the user_id variable from the database?
//        $card ->addNote($note);

        //or make a new "by" method in the Note class
//        $note->by(Auth::user());
        $card->addNote($note, 1);


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
//        $card->addNote(
//            new Note($request->all())
//        );

        return back();

    }

    public function edit(Note $note) {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note) {

        $note->update($request->all());

        return back();
    }
}
