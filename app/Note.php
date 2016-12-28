<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = ['body']; //shows that the only thing we allow to be assigned is the body

    public function card() {
        return $this->belongsTo(Card::class);
    }
}
