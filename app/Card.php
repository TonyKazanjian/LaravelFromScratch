<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //Defines relationship between notes and class
    public function notes() {
        return $this->hasMany(Note::class); //Could also say 'App\Note', but Note::class gives us string representation of class
    }


    //for path function
//    public function path() {
//        return '/cards/' . $this ->id;
//    }

    public function addNote(Note $note) {
        return $this->notes()->save($note);
    }
}
