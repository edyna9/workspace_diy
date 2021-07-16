@extends('layouts.master')

@section('title', '{{$tag->name}}')

@section('content')
<div class="contain">

    <div class="boxWelcome">
        <div>
            <img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}">
            
        </div>

        <div class="boxText">
            <h1 class="specialText">{{$tag->name}}</h1>
            <h3>{{$tag->description}}</h3>
        </div>
    </div>
  
        <h2 class="specialText">Discover somes projects with this category</h2>

        
            <div class="boxVisual">
                @foreach ($projects as $project)
                <div class="boxProject">
                    <h2>{{$project->name}}</h2>
                            <a href="/project/{{ $project->id }}"><img class="visual" src="{{$project->visual}}" alt="{{$project->name}}"></a>
                        <h3>Author : {{$project->author}}</h3>
                </div>
                @endforeach  
            </div> 
                        

        
        
            
</div>
@endsection
