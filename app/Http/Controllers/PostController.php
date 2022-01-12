<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
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

        if($request->isMethod('POST')){
            dd($request->input('title'));
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            return redirect()->route('posts');
        }
        else if($request->isMethod('GET')){
            return view('form-create-post');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('POST')){

            Post::findOrFail($id)->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            return redirect()->route('posts.onePost', ['id' => $id]);
        }
        else if($request->isMethod('GET')){

            return view('form-update-post', [
                'post' => Post::findOrFail($id),
            ]);
        }
    }

    public function delete(Request $request, $id)
    {
        if($request->isMethod('POST')){

            Post::findOrFail($id)->delete();

            return redirect()->route('posts');
        }
        else if($request->isMethod('GET')){

            return view('form-delete-post', [
                'post' => Post::findOrFail($id),
            ]);
        }
    }

    /**
     * Route : /polimorphic-registration
    //DOC https://laravel.com/docs/8.x/eloquent-relationships#inserting-and-updating-related-models
     */
    public function register()
    {
       $video = Video::find(1);
       $post = Post::find(1);

       $comment1 = new Comment(['content' => 'Belle video']);
       $comment2 = new Comment(['content' => 'Les relations polymorphique permettent de respecter le principe DRY (Do no Repeat Yourself']);
       $comment3 = new Comment(['content' => 'Eloquent provides convenient methods for adding new models to relationships. For example, perhaps you need to add a new comment to a post. Instead of manually setting the post_id attribute on the Comment model you may insert the comment using the relationship\'s save method:']);


       $video->comments()->save($comment1);

       $post->comments()->saveMany([
        $comment2,
        $comment3,
    ]);
    }
}
