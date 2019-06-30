@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body" >
                        <h3 class="card-title" style="white-space: pre-line;">{{$word['word']}} [{{$word['phonetic']}}]</h3>
                        <p class="card-text text-info" style="white-space:pre-line">{!! str_replace('\n','<br>',$word['translation']) !!}</p>
                        <p class="card-text text-danger">{!! str_replace('\n','<br>',$word['definition']) !!}</p>
                        @if(isset($sentence))
                            @foreach($sentence as $se)
                                <p class="card-text text-success">{!! str_replace('\n','<br>',$se['word']) !!}</p>
                                <p class="card-text text-dark">{!! str_replace('\n','<br>',$se['translation']) !!}</p>
                            @endforeach
                        @endif

                    </div>
                    <div class="card-footer text-center">
                        <div class="row justify-content-between">
                            <a href="{{\Illuminate\Support\Facades\URL::full()}}" class="text-success col-4">Get it</a>
                            <a href="#" class="text-danger col-4">Mark Down</a>
                            <a href="#" class="text-danger col-4">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
