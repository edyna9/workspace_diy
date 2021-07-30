@extends('layouts.master')

@section('title', 'Create a New Tag')

@section('content')
    <div class="container">
        <div class=formBoard>
            <div>
                <img class="visualForm"src="/images/brushes.jpeg" alt="brushes">
            </div>
            <div>
                <h1>Create a new TAG</h1>
                    <h2>Share your inspiration</h2>
                <div>
                    <form action="/addTag" method="POST">
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
                            </div>
                            <br>
                            <div>
                                <label for="name">Name</label>
                                    <div>
                                        <input type="text" name="name" placeholder="Name" value="Vintage">
                                    </div>
                            </div>
                            <br>
                            <div>
                                <label for="visual">Visual (Image adress)</label>
                                <div>
                                    <input type="text" name="visual" placeholder="Visual" value="https://i.pinimg.com/564x/ac/cb/e2/accbe28e038aac55bfa8676420d25f59.jpg">
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
        
    </div>
@endsection
