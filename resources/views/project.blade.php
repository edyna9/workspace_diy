@extends('layouts.master')

@section('title', '{{$project->name}}')

@section('content')
<div class="contain">


    <div class="boxWelcome">
        <div>
            <a href="{{$project->source}}"><img class="visual" src="{{$project->visual}}" alt="{{$project->name}}"></a>
        </div>

        <div class="boxText">
            <h1>{{$project->name}}</h1>
            <p>{{$project->description}}</p>
            <h3>Author : <a href="{{$project->source}}" target="_blank" rel="noopener noreferrer">{{$project->author}}</a></h3>
        </div>
    </div>


</div>
@endsection
