@extends('layouts.app')

@section('content')
<div class="container">
    <h1 id="title"></h1>
    <table class="table table-bordered">
        <tbody>
        @for($j = 0; $j <= $count/8; $j++ )
            <tr>
                @if($j%4 == 0)
                    @for($i = 0;$i < 3; $i++)
                        <td class="table-primary"><a href="{{\Illuminate\Support\Facades\URL::full()}}/detail?page={{$j*8+$i+1}}" class="text-info">单词表 {{$j*8+$i+1}}</a></td>
                    @endfor
                @elseif($j%4 ==1)
                    @for($i = 0;$i < 3; $i++)
                        <td class="table-info"><a href="{{\Illuminate\Support\Facades\URL::full()}}/detail?page={{$j*8+$i+1}}" class="text-info">单词表 {{$j*8+$i+1}}</a></td>
                    @endfor
                @elseif($j%4 ==2)
                    @for($i = 0;$i < 3; $i++)
                        <td class="table-success"><a href="{{\Illuminate\Support\Facades\URL::full()}}/detail?page={{$j*8+$i+1}}" class="text-info">单词表 {{$j*8+$i+1}}</a></td>
                    @endfor
                @else
                    @for($i = 0;$i < 3; $i++)
                        <td class="table-danger"><a href="{{\Illuminate\Support\Facades\URL::full()}}/detail?page={{$j*8+$i+1}}" class="text-info">单词表 {{$j*8+$i+1}}</a></td>
                    @endfor
                @endif

            </tr>
        @endfor
        </tbody>
    </table>
</div>
@endsection


@section('script')
    <script type="text/javascript">
        $(function () {
            var index ={{substr(\Illuminate\Support\Facades\URL::full(),-1)}}
            switch(index){
                case 0: $("#title").text("中考单词");
                        break;
                case 1: $("#title").text("高考单词");
                    break;
                case 2: $("#title").text("四级单词");
                    break;
                case 3: $("#title").text("六级单词");
                    break;
            }

        })

    </script>
@endsection
