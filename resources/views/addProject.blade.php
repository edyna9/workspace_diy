@extends('layouts.master')

@section('title', 'Create a New Project DIY')

@section('content')
    <div class="container">
        <div class=formBoard>
            <div>
                <img class="visualForm"src="/images/brush-diy.jpeg" alt="brushes">
            </div>
                <div>
                    <h1>Create a new Project</h1>
                        <h2>Share your inspiration !</h2>
                            <form action="/addProject" method="POST">
                                @csrf
                                    <div>
                                        <label for="name">Name</label>
                                            <div>
                                                <input type="text" name="name" placeholder="Name" value="Narnia">
                                            </div>
                                    </div>
                                <br>
                                    <div>
                                        <label for="tag">Tag</label>
                                            <div>
                                                <select multiple name="tags[]">
                                                    @foreach ($tags as $tag)
                                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                        <h6>To make a multiple selection, hold down the CTRL key</h6>
                                    </div> 
                                
                                    <div>
                                        <label for="author">Author</label>
                                            <div>
                                                <input type="text" name="author" placeholder="Author" value="Narnia">
                                            </div>
                                    </div>
                                <br>
                                    <div>
                                        <label for="visual">Visual (Image adress)</label>
                                                <div>
                                                    <input type="text" name="visual" placeholder="Visual" value="https://www.youtube.com/embed/Img49q_NTIU">
                                                </div>
                                    </div>
                                <br>
                                    <div>
                                        <label for="source">Source</label>
                                            <div>
                                                <input type="text" name="source" placeholder="Source" value="https://www.youtube.com/embed/Img49q_NTIU">
                                            </div>
                                    </div>
                                <br>
                                    <div>
                                        <label for="description">Description</label>
                                            <div>
                                                <input type="text"name="description" placeholder="Description" value="These DIY rope crafts make perfect additions to coastal and rustic home decor. Best part? You can find rope at the dollar store, making these projects super budget-friendly! Check out these awesome home decor ideas using rope, such as rugs, baskets, placemats, and more! #DIY #rope #crafts #homedecor #mindfulofthehome">
                                            </div>
                                    </div>
                                <br>
                                    <div class="buttonsBox">
                                        <button class="buttonCreate" type="submit">Create !</button>
                                    </div>
                            </form>
                </div>
        </div>
        
    </div>
@endsection
