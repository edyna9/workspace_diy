@extends('layouts.master')

@section('title', 'Home')

@section('content')


<div class="contain">
    <div class="welcomeText">
        <h2 class="specialText">Welcome to our Workspace!</h2>
    </div>
    
        <div class="boxWelcome">
            <div>
                <img class="visual" src="https://i.pinimg.com/564x/a9/1a/43/a91a435165dec4fdaff39d157a18c8d0.jpg" alt="studio">
            </div>
            <div class="boxText">
                <h2>We share with you the design principles and the last trends in the decoration world</h2>
            <p>The elements are simply the tools you have available to create something, such as line, shape, space, color, and texture. In contrast, the principles are a set of guidelines on how to use these tools to create a good composition. These guidelines are timeless and hold a lot of value in various disciples of design. You’ll find that all good designers use them, whether they’re aware of it or not. So, if these guidelines are so universal, how can they help us create better-designed learning experiences?</p>
            </div>
            <div>
                <img class="visual" src="https://i.pinimg.com/564x/59/8d/f1/598df1c6b39d79485b3771fcef4b61d9.jpg" alt="studio">
            </div>
            <div class="boxText">
                <h2>We work hardly to choose the best DIY Projects for you</h2>
                    <p>When you make items yourself, you can choose projects that suit your tastes, create them in your choice of colours/textures, and then use them to your heart’s content. Whether you’re aiming for efficiency, decoration, fun, or self-sufficiency, there’s a grat selection of awesome DIY projects just waiting for you. Pick a few that you might like to try out!</p>
            </div>
        </div>

        <div class="welcomeText">
            <h3 class="specialText">YOUR CREATIVITY HAS NO LIMITS!</h3>
        </div>
        



        <div class="boxVisual">
            <div class="boxText">
                <h3>Choose a Category >></h3>
            </div>
            <div class="boxText">
                <h3>Learn about it >></h3>
            </div>
            <div class="boxText">
                <h3>Choose a Project DIY >></h3>
            </div>
            <div class="boxText">
                <h3>Create and have FUN!</h3>
            </div>
        </div>
            
            

        @foreach ($categories as $category)
        <div>
            <h2 id="section{{$category->name}}" class="sectionText">{{$category->name}}</h2>
        </div>
        <div class="boxVisual">
        @foreach ($category->tags as $tag)
                        <div>
                            <a href="/tag/{{ $tag->id }}" ><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                        </div>
             @endforeach
        </div>
       @endforeach

       
 </div>






    {{--  

        <h2 id=styleSection class="sectionText">STYLE</h2>     
        <div class="boxVisual">
            @foreach ($tags as $tag)
                        <div>
                            <a href="/tag/{{ $tag->id }}" ><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                        </div>
             @endforeach

             @foreach ($categories as $category)
             <div>
                 <h2>{{$category->name}}</h2>
             </div>
            @endforeach
        </div>



        <h2 id=roomSection class="sectionText">ROOM</h2>     
        <div class="boxVisual">
            @foreach ($tags as $tag)
                        <div>
                            <a href="/tag/{{ $tag->id }}" ><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                        </div>
             @endforeach

             @foreach ($categories as $category)
             <div>
                 <h2>{{$category->name}}</h2>
             </div>
            @endforeach
        </div>




        <h2 id=colorSection class="sectionText">COLOR</h2>     
            <div class="boxVisual">
                @foreach ($tags as $tag)
                            <div>
                                <a href="/tag/{{ $tag->id }}" ><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                            </div>
                 @endforeach

                 @foreach ($categories as $category)
                 <div>
                     <h2>{{$category->name}}</h2>
                 </div>
                @endforeach
            </div>

            

            


            <h2 id=materialSection class="sectionText">MATERIAL</h2>     
            <div class="boxVisual">
                @foreach ($tags as $tag)
                            <div>
                                <a href="/tag/{{ $tag->id }}" ><img class="visual" src="{{$tag->visual}}" alt="{{$tag->name}}"></a>
                            </div>
                 @endforeach

                 @foreach ($categories as $category)
                 <div>
                     <h2>{{$category->name}}</h2>
                 </div>
                @endforeach
            </div>

        
</div>
    
    --}}
@endsection





