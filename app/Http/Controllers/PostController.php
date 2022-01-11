<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::all();

        return $this->show('posts', [
            'posts' => $posts
        ]);
    }

    public function onePost($id)
    {
        // Example request with where(')
        // $post = Post::where('title', 'Quisquam soluta architecto iure doloremque iure ipsum quam.')->first();

        return view('post', [
            'post' => Post::findOrFail($id),
        ]);
    }

    public function create(Request $request)
    {
        $httpMethod = $request->getMethod();

        if($httpMethod === "POST"){
            Post::create([
                'title' => $request->title,
                'cLes controlleursontent' => $request->content,
            ]);

            return redirect()->route('posts');
        }
        else if($httpMethod === "GET"){
            return view('form-create-post');
        }
    }

    public function update(Request $request, $id)
    {

        $httpMethod = $request->getMethod();

        if($httpMethod === "POST"){

            Post::findOrFail($id)->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            return redirect()->route('posts.onePost', ['id' => $id]);
        }
        else if($httpMethod === "GET"){

            return view('form-update-post', [
                'post' => Post::findOrFail($id),
            ]);
        }
    }

    public function delete(Request $request, $id)
    {

        $httpMethod = $request->getMethod();

        if($httpMethod === "POST"){

            Post::findOrFail($id)->delete();

            return redirect()->route('posts');
        }
        else if($httpMethod === "GET"){

            return view('form-delete-post', [
                'post' => Post::findOrFail($id),
            ]);
        }
    }
}
