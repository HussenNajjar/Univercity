<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.show_post', compact('posts'));
    }

    public function create()
    {
        return view('post.add_post');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'data_time' => 'required|date',
        ]);

        $img = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $img, 'image');

        $insert_post = new Post();
        $insert_post->text = $validatedData['text'];
        $insert_post->image = $img;
        $insert_post->data_time = $validatedData['data_time'];
        $insert_post->save();

        return "تمت الإضافة بنجاح";
    }

    public function edit($id)
    {
        $edit_post = Post::find($id);
        return view('post/edit_post', compact('edit_post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'data_time' => 'required|date',
        ]);

        $update_post = Post::find($id);
        $update_post->text = $validatedData['text'];

        if ($request->hasFile('image')) {
            // Handle image update
            $img = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $img, 'image');
            $update_post->image = $img;
        }

        $update_post->data_time = $validatedData['data_time'];
        $update_post->save();

        return "تم التعديل بنجاح";
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return "تم الحذف بنجاح";
    }
}
