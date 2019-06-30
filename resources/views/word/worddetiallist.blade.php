@extends('layouts.app')

@section('content')
<div class="container">


    @foreach($words as $w)
        <h3 class="card-title" >{{$w->word}} [{{$w->phonetic}}]</h3>
        <p class="card-text text-info" >{!! str_replace('\n','<br>',$w->translation) !!}</p>
    @endforeach
    <a href="{{substr(\Illuminate\Support\Facades\URL::full(),0,strpos(\Illuminate\Support\Facades\URL::full(),'detail')-1)}}" class="btn btn-success">返回列表</a>
    <hr>
    {{$words->onEachSide(0)->links()}}
</div>
@endsection

