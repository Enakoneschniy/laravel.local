@extends('layouts.app')

@section('content')
    @foreach($items as $post)
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{url('/posts', $post->id)}}">{{$post->title}}</a></div>

                    <div class="panel-body">
                        {{$post->preview_text}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{$items->links()}}
@endsection