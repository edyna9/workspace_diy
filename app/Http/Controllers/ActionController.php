<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;

use App\Models\Project;

class ActionController extends Controller
{
    public function addProject(Request $request)
    {
        $project= new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->visual = $request->visual;
        $project->source = $request->source ;
        $project->author = $request->author;
        $project->save();
        $project->tags()->attach($request->tags);
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
        $project->tags()->sync($request->tags);
        $project->save();
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

    public function addTag(Request $request)
    {
        $tag= new Tag;
        $tag->name = $request->name;
        $tag->description = $request->description;
        $tag->visual = $request->visual;
        $tag->category_id = $request->category_id;
        $tag->projects()->attach($request->projects);
        $tag->save();
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
        $tag->projects()->sync($request->projects);
        $tag->save();
        return redirect('/home');
    }

    
}
