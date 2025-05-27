<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function ourfilestore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $post->image = $imageName;
        }

        $post->save();
        flash()->success('Your post has been created!');
        return redirect()->route('home');
    }

    public function editData($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', ['ourPost' => $post]);
    }

    public function updateData($id, Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $post->image = $imageName;
        }

        $post->save();
        flash()->success('Your post has been updated!');
        return redirect()->route('home');
    }

    public function deleteData($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        flash()->error('Your post has been delated!');
        return redirect()->route('home');

    }
    // app/Http/Controllers/PostController.php
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }


}
