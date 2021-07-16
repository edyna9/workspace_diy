<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Project;

class NavController extends Controller
{
    public function showHome()
    {
        $categories = Category::with('tags')->get()->sortBy('name');
        return view('home', ['categories' => $categories]);
    }

    public function showTag($id)
    {
        $categories = Category::all()->sortBy('name');
        $projects = Project::all();
        
        return view('tag', ['tag' => Tag::findOrFail($id),'projects' => $projects, 'categories' => $categories ]);
    }

    public function showProject($id)
    {
        return view('project', ['project' => Project::findOrFail($id)]);
    }

    public function showAddProject()
    {   
        $categories = Category::all()->sortBy('name');
        $tags = Tag::all();

        return view('addProject', ['tags' => $tags, 'categories' => $categories]);
    }

    public function showUpdateProject($id)
    {
        $project = Project::findOrFail($id);
        $categories = Category::all()->sortBy('name');
        $tags = Tag::all();
        return view('updateProject', ['project' => $project, 'categories' => $categories, 'tags' => $tags]);
    }
}


