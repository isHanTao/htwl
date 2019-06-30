<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WordListZk extends WordList
{
    protected $table = 'wordlist_zk';
    protected $guarded=[];
    public $timestamps=false;
}
