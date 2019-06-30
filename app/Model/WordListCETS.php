<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WordListCETS extends WordList
{
    protected $table = 'wordlist_cets';
    protected $guarded=[];
    public $timestamps=false;
}
