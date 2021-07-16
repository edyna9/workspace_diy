@extends('layouts.master')

@section('title', 'Create a New Project DIY')

@section('content')
<div class="contain">
    <h1>Create a new Project DIY</h1>
        <h2>Share your inspiration</h2>
        <div>
            <form action="/addProject" method="POST">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <div>
                        <input type="text" name="name" placeholder="Name" value="Narnia">
                    </div>
                </div>
                <div>
                    <label for="author">Author</label>
                    <div>
                        <input type="text" name="author" placeholder="Author" value="Narnia">
                    </div>

                </div>

{{--  
                <div>

                    <label for="publisher">Publisher</label>
                    <select name="publisher_id">
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}">{{$publisher->name}}</option>
                        @endforeach
                    </select>

                </div>

--}}

                <div>
                    <label for="visual">Visual</label>
                    <p>Add the image adress Exemple of type: https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png</p>
                    <div>
                        <input type="text" name="visual" placeholder="Visual" value="https://www.youtube.com/embed/Img49q_NTIU">
                    </div>
                </div>

                <div>
                    <label for="source">Source</label>
                    <div>
                        <input type="text" name="source" placeholder="Source" value="https://www.youtube.com/embed/Img49q_NTIU">
                    </div>
                </div>
{{--  

                <div>
                    <label for="genre">Genre</label>
                    <div>

                            @foreach ($genres as $genre)
                                <input type="checkbox" name="genres[]" value="{{ $genre->id }}">
                                <label for="">{{ $genre->name }}</label>
                            @endforeach

                    </div>
                </div>
--}}

                <div>
                    <label for="description">Description</label>
                    <div>
                        <input type="text"name="description" placeholder="Description" value="These DIY rope crafts make perfect additions to coastal and rustic home decor. Best part? You can find rope at the dollar store, making these projects super budget-friendly! Check out these awesome home decor ideas using rope, such as rugs, baskets, placemats, and more! #DIY #rope #crafts #homedecor #mindfulofthehome">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit">CREATE !</button>
                </div>
            </form>
        </div>
</div>
@endsection
