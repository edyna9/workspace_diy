@extends('layouts.master')

@section('title', 'All Projects DIY')

@section('content')
    <div class="container">
            <div class="boxVisual">
                <h2 class="titleSection">Take a look of all our projects DIY!</h2>
                @foreach ($projects as $project)
                    <div class="boxProject">
                        <h2>{{$project->name}}</h2>
                            <a href="/project/{{ $project->id }}"><img class="visualProject" src="{{$project->visual}}" alt="{{$project->name}}"></a>
                        <h3>{{$project->author}}</h3>
                        
                    </div>
                @endforeach  
            </div> 
    </div>
@endsection
