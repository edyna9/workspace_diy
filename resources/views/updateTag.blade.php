@extends('layouts.master')

@section('title', 'Update a TAG')

@section('content')
<div class="contain">
    <h1>Change this TAG</h1>
       
    
    
    <div>
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
                        {{--<input type="text" name="author" placeholder="Author" value="{{$book->author->id}}">--}}
                    </div>





{{--

                    <label for="category">Category</label>
                    <div>
                        @foreach ($categories as $category)
                        <input type="checkbox" name="categories[]" value="{{$category->id}}">
                        <label for="category">{{$category->name}}</label>
                        @endforeach
                    </div>
--}}
                <input type="hidden" name="id" value="{{$tag->id}}"> 
                <div>
                    <label for="name">Name</label>
                    <div>
                        <input type="text" name="name" placeholder="Name" value="{{$tag->name}}">
                    </div>
                </div>

                

                <div>
                    <label for="visual">Visual</label>
                    <p>Add the image adress Exemple of type: https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png</p>
                    <div>
                        <input type="text" name="visual" placeholder="Visual" value="{{$tag->visual}}">
                    </div>
                </div>


                <div>
                    <label for="description">Description</label>
                    <div>
                        <input type="text"name="description" placeholder="Description" value="{{$tag->description}}">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit">Chage this Tag !</button>
                </div>
            </form>
        </div>
</div>
@endsection



