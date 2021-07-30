@extends('layouts.master')

@section('title', '{{$project->name}}')

@section('content')
    <div class="container">
        <div class="boxWelcome">
            <div>
                <a href="{{$project->source}}"><img class="visualDescription" src="{{$project->visual}}" alt="{{$project->name}}"></a>
            </div>
            <div class="boxDescription">
                <h1>{{$project->name}}</h1>
                    <p>{{$project->description}}</p>
                        <h3>Watch more of this project with: </h3>
                            <a class="authorLink" href="{{$project->source}}" target="_blank" rel="noopener noreferrer">{{$project->author}}</a>
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
            
        </div>


    </div>
@endsection
