@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$item->title}}</div>

                <div class="panel-body">
                    {{$item->detail_text}}
                </div>
            </div>
        </div>
    </div>
@endsection