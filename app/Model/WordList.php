<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1)
 */
class WordList extends Model
{
    protected $table = 'wordlist';
    protected $guarded=[];
    public $timestamps=false;
}
