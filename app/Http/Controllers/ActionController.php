<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;

use App\Models\Project;

class ActionController extends Controller
{
    public function addProject(Request $request)
    {
        $project= new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->visual = $request->visual;
        $project->source = $request->source ;
        $project->author = $request->author;
        $project->tags()->attach($request->tags);
        $project->save();
        return redirect('/project/{id}');
    }
/*
    public function addTag(Request $request)
    {
        $tag= new Tag;
        $tag->title = $request->title;
        $tag->author_id = $request->author_id;
        $tag->publisher_id = $request->publisher_id;
        $tag->publication_year = $request->publication_year ;
        $tag->synopsis = $request->synopsis;
        $tag->save();
        $tag->genres()->attach($request->genres);
        return redirect('/list');
    }

    public function deleteTag(Request $request)
    {
        $tag = Tag::find($request->id);
        $tag->genres()->detach();
        $tag->delete();

        //tag::destroy($request->id);
        return redirect('/list');
    }

    public function updateTag(Request $request)
    {
        $tag = Tag::findOrFail($request->id);
        $tag->title = $request->title;
        $tag->author_id = $request->author_id;
        $tag->publisher_id = $request->publisher_id;
        $tag->publication_year = $request->publication_year ;
        $tag->synopsis = $request->synopsis;
        $tag->genres()->sync($request->genres);
        $tag->save();
        return redirect('/list'); 
    }
*/
}
