@extends('layouts.master')

@section('title', 'Update a TAG')

@section('content')
    <div class="container">
        <div class=formBoard>
            <div>
                <img class="visualForm"src="/images/inspiration-tag.jpeg" alt="brushes">
            </div>
        
            <div>
                <h1>Change this TAG</h1>
                <form action="/updateTag" method="POST">
                    @csrf
                        <div>
                            <label for="category">Category</label>
                        <div>
                            <select name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                    <input type="hidden" name="id" value="{{$tag->id}}"> 
                        <div>
                            <label for="name">Name</label>
                                <div>
                                    <input type="text" name="name" placeholder="Name" value="{{$tag->name}}">
                                </div>
                        </div>
                        <br>
                        <div>
                            <label for="visual">Visual (Image adress)</label>
                                
                                    <div>
                                        <input type="text" name="visual" placeholder="Visual" value="{{$tag->visual}}">
                                    </div>
                        </div>
                        <br>
                        <div>
                            <label for="description">Description</label>
                            <div>
                                <input type="text"name="description" placeholder="Description" value="{{$tag->description}}">
                            </div>
                        </div>
                    <br>
                        <div class="buttonsBox">
                            <button class="buttonCreate"  type="submit">Chage this Tag !</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection



