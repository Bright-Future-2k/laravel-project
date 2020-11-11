<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Models\Post;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function create()
    {
        return view('postCreate');
    }

    public function store(Request $request)
    {
        $post = new Post($request->all());
        $post->save();
        return redirect()->route('post.list');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('postEdit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->fill($request->all());
        $post->save();
        return redirect()->route('post.list');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.list');
    }

    public function exportExcel()
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }
    
}
