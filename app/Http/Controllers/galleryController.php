<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index(Request $request)
    {
        $Gallery = Gallery::all();
        $Gallery = Gallery::orderBy('id', 'DESC')->get();
        return view('dashboards.admins.gallery.index', compact('Gallery'));
    }

    public function create()
    {
        return view('dashboards.admins.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);
        $gallery = new Gallery();
        $gallery->title = $request->title;
        //$gallery->image = $request->image;
        $filePath = $request->file('image');
        $fileName = time() . '.' . $filePath->getClientOriginalExtension();
        $filePath->move('img/gallery', $fileName);
        $gallery->image = $fileName;

        $gallery->save();
        return redirect()->route('admin.gallery')->with('success', 'gallery created successfully!');
    }


    public function gallery()
    {
        $gallery = Gallery::orderBy('id','DESC')->get();
        return view('pages.gallery', compact('gallery'));
    }


    public function edit($id)
    {
        $gallery =  Gallery::find($id);
        return view('dashboards.admins.gallery.edit', compact('gallery'));
    }

    public function update($id, Request $request)
    {
       
        $gallery =  Gallery::find($id);
        $gallery->title = $request->title;
        $filePath = $request->file('image');
        if ($filePath) {
            $fileName = time() . '.' . $filePath->getClientOriginalExtension();
            $filePath->move('img/gallery', $fileName);
            $gallery->image = $fileName;
        }

        $gallery->save();
        return redirect()->route('admin.gallery')->with('success', 'gallery updated successfully!');
    }

    public function destroy($id)
    {
        $gallery =  Gallery::find($id);
        $gallery->delete();
        return redirect()->route('admin.gallery')->with('success', 'Image deleted successfully!');
    }
}
