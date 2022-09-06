<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();
        $projects = Project::paginate(10);
        return view('dashboards.admins.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboards.admins.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        $Project = new Project();
        $Project->title = $request->title;
        //$Project->image = $request->image;
        $filePath = $request->file('image');
        $fileName = time() . '.' . $filePath->getClientOriginalExtension();
        $filePath->move('img/projects', $fileName);
        $Project->image = $fileName;
        $Project->body = $request->body;


        $Project->save();
        return redirect()->route('admin.project')->with('success', 'Project created successfully!');
    }

    public function show($id)
    {
        $projects =  Project::find($id);
        return view('dashboards.admins.projects.show', compact('projects'));
    }

/* HOME Page */

     public function home()
    {
        $projects = Project::orderBy('id','DESC')->limit(3)->get();
        $posts = Post::orderBy('id','DESC')->limit(3)->get();
        $gallery = Gallery::orderBy('id','DESC')->limit(4)->get();
        return view('welcome', compact('projects', 'posts', 'gallery'));
    }
    public function about()
    {
        $posts = Post::orderBy('id','DESC')->limit(3)->get();
        return view('pages.about', compact('posts'));
    }
    public function projects()
    {
        $projects = Project::orderBy('id','DESC')->get();
        $posts = Post::orderBy('id','DESC')->limit(3)->get();
        return view('pages.projects', compact('projects', 'posts'));
    }

    public function edit($id)
    {
        $projects =  Project::find($id);
        return view('dashboards.admins.projects.edit', compact('projects'));
    }

    public function update($id, Request $request)
    {
        $Project =  Project::find($id);
        $Project->title = $request->title;
        $filePath = $request->file('image');
        if ($filePath) {
            $fileName = time() . '.' . $filePath->getClientOriginalExtension();
            $filePath->move('img/projects', $fileName);
            $Project->image = $fileName;
        }
        $Project->body = $request->body;


        $Project->save();
        return redirect()->route('admin.project')->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $Project =  Project::find($id);
        $Project->delete();
        return redirect()->route('admin.project')->with('success', 'Project deleted successfully!');
    }
}
