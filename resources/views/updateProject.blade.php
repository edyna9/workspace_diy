@extends('layouts.master')

@section('title', 'Update a Project DIY')

@section('content')
<div class="contain">
    <h1>Change this Project DIY</h1>
       
    
    
    <div>
            <form action="/updateProject" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$project->id}}">
                <div>
                    <label for="name">Name</label>
                    <div>
                        <input type="text" name="name" placeholder="Name" value="{{$project->name}}">
                    </div>
                </div>
                <div>
                    <label for="author">Author</label>
                    <div>
                        <input type="text" name="author" placeholder="Author" value="{{$project->author}}">
                    </div>

                </div>

                <div>
                    <label for="visual">Visual</label>
                    <p>Add the image adress Exemple of type: https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png</p>
                    <div>
                        <input type="text" name="visual" placeholder="Visual" value="{{$project->visual}}">
                    </div>
                </div>

                <div>
                    <label for="source">Source</label>
                    <div>
                        <input type="text" name="source" placeholder="Source" value="{{$project->source}}">
                    </div>
                </div>




                {{-- <input type="text"name="genre" placeholder="Genre" value="{{$book->genre}}"> --}}
                
                <div>
                    <label for="tag">Tag</label>
                    <div>
                        
                        @foreach ($tags as $tag)
                        <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                        <label for="tag">{{$tag->name}}</label>
                        @endforeach
                    </div>
                </div>
              











                <div>
                    <label for="description">Description</label>
                    <div>
                        <input type="text"name="description" placeholder="Description" value="{{$project->description}}">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit">Chage this Project !</button>
                </div>
            </form>
        </div>
</div>
@endsection



