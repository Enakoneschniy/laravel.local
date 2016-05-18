@extends('layouts.app')

@section('content')
    {{csrf_field()}}
    @foreach($items as $post)
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <a class="pull-left" href="{{url('/posts', $post->id)}}">{{$post->title}}</a>
                        <div class="pull-right">
                            <span>Rating <span class="rating">{{$post->rating}}</span></span>
                            <button class="btn btn-success btn-xs plus" data-post="{{$post->id}}">+</button>
                            <button class="btn btn-danger btn-xs minus" data-post="{{$post->id}}">-</button>
                        </div>
                    </div>

                    <div class="panel-body">
                        {{$post->preview_text}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{$items->links()}}
@endsection