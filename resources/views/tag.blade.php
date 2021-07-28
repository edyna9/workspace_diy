@extends('layouts.master')

@section('title', '{{$tag->name}}')

@section('content')
    <div class="container">
        <div class="moodboardDescription">
            <div>
            <img class="visualDescription" src="{{$tag->visual}}" alt="{{$tag->name}}">
            </div>

            <div class="boxDescription">
                <h1 class="specialText">{{$tag->name}}</h1>
                    <h3>{{$tag->description}}</h3>
            

            
                                                    {{-- <div>
                                                        <form action="/deleteTag" method="POST">
                                                            @csrf   
                                                                <input type="hidden" name="id" value="{{$tag->id}}">
                                                                <input type="submit" value="X"> 
                                                        </form>
                                                    </div> --}}
<div class="buttonsBox">
    <div>
        <form action="/deleteTag" method="POST">
            @csrf   
                <input type="hidden" name="id" value="{{$tag->id}}">
                <button type="submit"><i class="fas fa-trash-alt"></i></button>
                
        </form>

    </div>
    <div>
        <a href="/updateTag/{{$tag->id}}"><i class="fas fa-edit"></i></a> 
    </div>
</div>
                                                    
</div>
        </div>
    </div>
            
        <h2 class="titleSection">Discover somes projects with this category</h2>
            <div class="boxVisual">
                @foreach ($tag->projects as $project)
                    <div class="boxProject">
                        <h2>{{$project->name}}</h2>
                                <a href="/project/{{ $project->id }}"><img class="visualProject" src="{{$project->visual}}" alt="{{$project->name}}"></a>
                                    <h3>Author : {{$project->author}}</h3>
                                
                            <div class="buttonsBox">
                                <div>
                                    <form action="/deleteProject" method="POST">
                                        @csrf   
                                            <input type="hidden" name="id" value="{{$project->id}}">
                                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                            
                                    </form>
                            
                                </div>
                                <div>
                                    <a href="/updateProject/{{$project->id}}"><i class="fas fa-edit"></i></a> 
                                </div>
                            </div>
                            
                
                    </div>
                @endforeach  
            </div>  
    </div>
@endsection












         