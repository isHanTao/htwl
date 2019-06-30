<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WordListCETF extends WordList
{
    protected $table='wordlist_cetf';
    protected $guarded=[];
    public $timestamps=false;
}
