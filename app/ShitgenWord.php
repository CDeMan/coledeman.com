<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShitgenWord extends Model
{

    protected $table = 'shitgen_words';
    //these fields can be filled en masse
    protected $fillable = ['word', 'type'];

    //don't show these fields in json results
    protected $hidden = array('id', 'created_at', 'updated_at', 'publish_at');

    function getWord()
    {
        return $this->fillable[0];
    }
}


