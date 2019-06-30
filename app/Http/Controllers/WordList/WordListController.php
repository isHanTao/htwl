<?php

namespace App\Http\Controllers\WordList;

use App\Model\WordList;

use App\Model\WordListCETF;
use App\Model\WordListCETS;
use App\Model\WordListGk;
use App\Model\WordListZk;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WordListController extends Controller
{

    //随机单词
    public function getRandomWord($grade){
       $word = new WordList();
       $sentence =array();
       switch ($grade){
           case 0:
                    $id = WordListZk::max('id');
                    $word = WordListZk::find(rand(1,$id));
                    $sentences = WordList::where('word','like', '%'.$word->word.'%')->get()->toArray();
                    $index = array_rand($sentences,3);
                    foreach ($index as $i){
                        $sentence[] = $sentences[$i];
                    }break;
           case 1:
               $id = WordListGk::max('id');
               $word = WordListGk::find(rand(1,$id));
               $sentences = WordList::where('word','like', '%'.$word->word.'%')->get()->toArray();
               $index = array_rand($sentences,3);
               foreach ($index as $i){
                   $sentence[] = $sentences[$i];
               }break;
           case 2:
               $id = WordListCETS::max('id');
               $word = WordListCETS::find(rand(1,$id));
               $sentences = WordList::where('word','like', '%'.$word->word.'%')->get()->toArray();
               $index = array_rand($sentences,3);
               foreach ($index as $i){
                   $sentence[] = $sentences[$i];
               }break;
           case 3:
               $id = WordListCETF::max('id');
               $word = WordListCETF::find(rand(1,$id));
               $sentences = WordList::where('word','like', '%'.$word->word.'%')->get()->toArray();
               $index = array_rand($sentences,3);
               foreach ($index as $i){
                   $sentence[] = $sentences[$i];
               }break;
       }
       return view('word.wordrandlist')->with(['word'=>$word,'sentence'=>$sentence]);
   }


   //单词列表
    public function getWordList($grade){
        $word = new WordList();
        switch ($grade){
            case 0:
                $word = WordListZk::paginate(8);
                break;
            case 1:
                $word = WordListGk::paginate(8);
                break;
            case 2:
                $word = WordListCETF::paginate(8);
                break;
            case 3:
                $word = WordListCETS::paginate(8);
                break;
        }
        return view('word.worddetiallist')->with(['words'=>$word]);
    }

    public function getWordCount($grade){
        $count = new WordList();
        switch ($grade){
            case 0:
                $count = WordListZk::all()->count();
                break;
            case 1:
                $count = WordListGk::all()->count();
                break;
            case 2:
                $count = WordListCETF::all()->count();
                break;
            case 3:
                $count = WordListCETS::all()->count();
                break;
        }
        return view('word.wordlist')->with(['count'=>$count/8]);
    }

}
