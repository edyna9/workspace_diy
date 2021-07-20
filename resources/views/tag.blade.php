@extends('layouts.master')

@section('title', '{{$tag->name}}')

@section('content')
    <div class="container">
        <div class="boxWelcome">
            <div>
                <img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}">
            </div>
        <div class="boxText">
            <h1 class="specialText">{{$tag->name}}</h1>
                <h3>{{$tag->description}}</h3>
        <div>
            <form action="/deleteTag" method="POST">
                @csrf
                    <input type="hidden" name="id" value="{{$tag->id}}">
                    <input type="submit" value="X">
            </form>
        </div>
            <div>
                <a href="/updateTag/{{$tag->id}}">Change it</a> 
            </div>
        </div>
    </div>
        <h2 class="specialText">Discover somes projects with this category</h2>
            <div class="boxVisual">
                @foreach ($projects as $project)
                    <div class="boxProject">
                        <h2>{{$project->name}}</h2>
                                <a href="/project/{{ $project->id }}"><img class="visual" src="{{$project->visual}}" alt="{{$project->name}}"></a>
                            <h3>Author : {{$project->author}}</h3>
                                <div>
                                    <form action="/deleteProject" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$project->id}}">
                                        <input type="submit" value="X">
                                    </form>
                                </div>
                    </div>
                @endforeach  
            </div>  
    </div>
@endsection












         