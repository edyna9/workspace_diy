@extends('layouts.master')

@section('title', 'Home')

@section('content')
    
    <div class="container">

        <div class="moodboard">
            <div class="welcomeText">
                <h2 class="specialWelcomelText">Welcome to our Workspace!</h2>
            </div>

            <div class="boxWelcome">
                <div>
                    <img class="visualBig" src="https://i.pinimg.com/564x/a9/1a/43/a91a435165dec4fdaff39d157a18c8d0.jpg" alt="studio">
                </div>
                <div class="boxText">
                    <h2>We share with you the design principles and the last trends in the decoration world</h2>
                        <p>The elements are simply the tools you have available to create something, such as line, shape, space, color, and texture. In contrast, the principles are a set of guidelines on how to use these tools to create a good composition. These guidelines are timeless and hold a lot of value in various disciples of design. You’ll find that all good designers use them, whether they’re aware of it or not. So, if these guidelines are so universal, how can they help us create better-designed learning experiences?</p>
                </div>
                <div>
                    <img class="visualBig" src="https://i.pinimg.com/564x/59/8d/f1/598df1c6b39d79485b3771fcef4b61d9.jpg" alt="studio">
                </div>
                <div class="boxText">
                    <h2>We work hardly to choose the best DIY Projects for you</h2>
                        <p>When you make items yourself, you can choose projects that suit your tastes, create them in your choice of colours/textures, and then use them to your heart’s content. Whether you’re aiming for efficiency, decoration, fun, or self-sufficiency, there’s a grat selection of awesome DIY projects just waiting for you. Pick a few that you might like to try out!</p>
                </div>
            </div>
        </div>
        

        <div class="moodboardUse">
            <div class="welcomeText">
                <h1 class="whiteBorder" id="textLight">HOW IT WORKS?</h1>
            </div>
            <div class="boxWelcome">
                <div class="boxShortText">
                    <h3 class="specialText">Choose a Category >></h3>
                </div>
                <div class="boxShortText">
                    <h3 class="specialText">Learn about it >></h3>
                </div>
                <div class="boxShortText">
                    <h3 class="specialText">Choose a Project DIY >></h3>
                </div>
                <div class="boxShortText">
                    <h3 class="specialText">Create and have FUN! >></h3>
                </div>
                <div class="boxShortText">
                    <h3 class="specialText">Share your Project</h3>
                </div>
            </div>
            <div class="welcomeText">
                <h1 class="whiteBorder">YOUR CREATIVITY HAS NO LIMITS!</h1>
            </div>
        </div>

            @foreach ($categories as $category)
                <div class="moodboardCategory">
                    <div>
                        <h1 id="section{{$category->name}}" class="specialScriptText">{{$category->name}}</h1>
                    </div>

                    <div class="boxVisual">
                        @foreach ($category->tags as $tag)
                        <div class="boxTag">
                            <a href="/tag/{{ $tag->id }}"><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                            <h2>{{$tag->name}}</h2>
                        </div> 
                            {{-- <div class="boxTag">
                                <a href="/tag/{{ $tag->id }}"><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                                <h2>{{$tag->name}}</h2>
                            </div> --}}
                        @endforeach
                    </div>

                </div>
            @endforeach
    </div>
@endsection





