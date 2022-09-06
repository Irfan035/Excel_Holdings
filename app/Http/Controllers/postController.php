<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        $posts = Post::paginate(10);
        return view('dashboards.admins.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('dashboards.admins.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        //$post->image = $request->image;
        $filePath = $request->file('image');
        $fileName = time() . '.' . $filePath->getClientOriginalExtension();
        $filePath->move('img/blog', $fileName);
        $post->image = $fileName;
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect()->route('admin.post')->with('success', 'post created successfully!');
    }

    public function show($id)
    {
        $posts =  Post::find($id);
        return view('dashboards.admins.posts.show', compact('posts'));
    }

    
    public function posts()
    {
        $posts = Post::orderBy('id','DESC')->get();
        return view('pages.news', compact('posts'));
    }

    public function edit($id)
    {
        $posts =  Post::find($id);
        return view('dashboards.admins.posts.edit', compact('posts'));
    }

    public function update($id, Request $request)
    {
        $post =  Post::find($id);
        $post->title = $request->title;
        $filePath = $request->file('image');
        if ($filePath) {
            $fileName = time() . '.' . $filePath->getClientOriginalExtension();
            $filePath->move('img/blog', $fileName);
            $post->image = $fileName;
        }
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect()->route('admin.post')->with('success', 'post updated successfully!');
    }

    public function destroy($id)
    {
        $post =  Post::find($id);
        $post->delete();
        return redirect()->route('admin.post')->with('success', 'post deleted successfully!');
    }
}
