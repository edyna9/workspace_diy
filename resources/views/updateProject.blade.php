@extends('layouts.master')

@section('title', 'Update a Project DIY')

@section('content')
    <div class="container">
        <div class=formBoard>
            <div>
                <img class="visualForm"src="/images/inspiration-project.jpeg" alt="brushes">
            </div>
        
            <div>
                <h1>Change this Project DIY</h1>
                    <form action="/updateProject" method="POST">
                        @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                        <div>
                            <label for="name">Name</label>
                                <div>
                                    <input type="text" name="name" placeholder="Name" value="{{$project->name}}">
                                </div>
                        </div>
                        <br>
                        <div>
                            <label for="tag">Tag</label>
                                <select  name="tags[]">
                                    @foreach ($tags as $tag)
                                    
                                        <option name="tags[]" value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            <h6>To make a multiple selection, hold down the CTRL key</h6>
                        </div> 
                        <br>
                        <div>
                            <label for="author">Author</label>
                                <div>
                                    <input type="text" name="author" placeholder="Author" value="{{$project->author}}">
                                </div>
                        </div>
                        <br>
                        <div>
                            <label for="visual">Visual (Images adress)</label>
                            <div>
                                <input type="text" name="visual" placeholder="Visual" value="{{$project->visual}}">
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="source">Source</label>
                                <div>
                                    <input type="text" name="source" placeholder="Source" value="{{$project->source}}">
                                </div>
                        </div>
                        <br>
                        <div>
                            <label for="description">Description</label>
                                <div>
                                    <input type="text"name="description" placeholder="Description" value="{{$project->description}}">
                                </div>
                        </div>
                        <br>
                        <div class="buttonsBox">
                            <button class="buttonCreate"  type="submit">Chage this Project !</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection



