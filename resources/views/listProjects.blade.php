@extends('layouts.master')

@section('title', 'All Projects DIY')

@section('content')
    <div class="container">
        <h2 class="specialText">Take a look of all our projects DIY!</h2>
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
