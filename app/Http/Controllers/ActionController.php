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
        $project->save();
        $project->tags()->attach($request->tags);
        return redirect('/home');
    }

    public function deleteProject(Request $request)
    {
        $project = Project::find($request->id);
        $project->tags()->detach();
        $project->delete();

        //tag::destroy($request->id);
        return redirect('/home');
    }

    public function updateProject(Request $request)
    {
        $project= Project::findOrFail($request->id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->visual = $request->visual;
        $project->source = $request->source ;
        $project->author = $request->author;
        $project->tags()->attach($request->tags);
        $project->save();
        return redirect('/home');
    }


    public function addTag(Request $request)
    {
        $tag= new Tag();
        $tag->name = $request->name;
        $tag->description = $request->description;
        $tag->visual = $request->visual;
        $tag->category_id = $request->category_id;
        $tag->save();
        $tag->projects()->attach($request->projects);
        return redirect('/home');
    }

    public function deleteTag(Request $request)
    {
        $tag = Tag::find($request->id);
        $tag->projects()->detach();
        $tag->delete();

        //tag::destroy($request->id);
        return redirect('/home');
    }

    public function updateTag(Request $request)
    {

        $tag= Tag::findOrFail($request->id);
        $tag->name = $request->name;
        $tag->description = $request->description;
        $tag->visual = $request->visual;
        $tag->category_id = $request->category_id;
        $tag->projects()->attach($request->projects);
        $tag->save();
        return redirect('/home');
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
