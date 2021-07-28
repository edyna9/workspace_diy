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
        $categories = Category::with('tags')->get()->sortBy('id');
        return view('home', ['categories' => $categories]);
    }

    public function showTag($id)
    {
        //pour afficher les categories
        $categories = Category::all()->sortBy('name');
        //pour afficher les projects a partir du tag choisi
        $tag = Tag::with('projects')->findOrFail($id);

        return view('tag', ['tag' => $tag, 'categories' => $categories ]);
    


        /* $categories = Category::all()->sortBy('name');
        $projects = Project::all();
        return view('tag', ['tag' => Tag::findOrFail($id),'projects' => $projects, 'categories' => $categories ]); */
        
    }

    public function showList()
    {
        $projects = Project::all();
        return view('listProjects', ['projects'=> $projects]);
    }


    public function showProject($id)
    {
        return view('project', ['project' => Project::findOrFail($id)]);
    }

    public function showAddProject()
    {   
        $categories = Category::with('tags')->get()->sortBy('name');
        $tags = Tag::all()->sortBy('name');
    
        return view('addProject', ['tags' => $tags, 'categories' => $categories]);
    }

    public function showUpdateProject($id)
    {
        $project = Project::findOrFail($id);
        $categories = Category::all()->sortBy('name');
        $tags = Tag::all();
        return view('updateProject', ['project' => $project, 'categories' => $categories, 'tags' => $tags]);
    }

    //a modifier pour les tags
    public function showAddTag()
    {   
        $categories = Category::all()->sortBy('name');
        $tags = Tag::all();

        return view('addTag', ['tags' => $tags, 'categories' => $categories]);
    }

    public function showUpdateTag($id)
    {
        $tag = Tag::findOrFail($id);
        $categories = Category::all()->sortBy('name');
    
        return view('updateTag', ['categories' => $categories, 'tag' => $tag]);
    }
}


