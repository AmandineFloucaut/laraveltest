<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function tags()
    {
        $tags = Tag::all();

        return $this->show('tags', [
            'tags' => $tags
        ]);
    }

    // public function create(Request $request)
    // {
    //     $httpMethod = $request->getMethod();

    //     if($httpMethod === "POST"){
    //         Tag::create([
    //             'name' => $request->name,
    //         ]);

    //         return redirect()->route('posts');
    //     }
    //     else if($httpMethod === "GET"){
    //         return view('form-create-post');
    //     }
    // }

    // public function update(Request $request, $id)
    // {

    //     $httpMethod = $request->getMethod();

    //     if($httpMethod === "POST"){

    //         Post::findOrFail($id)->update([
    //             'title' => $request->title,
    //             'content' => $request->content,
    //         ]);

    //         return redirect()->route('posts.onePost', ['id' => $id]);
    //     }
    //     else if($httpMethod === "GET"){

    //         return view('form-update-post', [
    //             'post' => Post::findOrFail($id),
    //         ]);
    //     }
    // }

    // public function delete(Request $request, $id)
    // {

    //     $httpMethod = $request->getMethod();

    //     if($httpMethod === "POST"){

    //         Post::findOrFail($id)->delete();

    //         return redirect()->route('posts');
    //     }
    //     else if($httpMethod === "GET"){

    //         return view('form-delete-post', [
    //             'post' => Post::findOrFail($id),
    //         ]);
    //     }
    // }
}
