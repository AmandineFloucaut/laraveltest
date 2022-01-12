<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('post', [
            'post' => Post::findOrFail($id),
        ]);
    }

    public function create(Request $request)
    {

        if($request->isMethod('POST')){

            $this->checkValidateForm($request);

            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            // $image = new Image();
            // $image->path = $path;
            // $post->image()->save($image);
            // $this->saveImage();
            $this->defineAndSaveImagePath($request, $post);

            return redirect()->route('posts');
        }
        else if($request->isMethod('GET')){
            return view('form-create-post');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('POST')){

            $this->checkValidateForm($request);

            $post = Post::findOrFail($id);
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            // $image = new Image();
            // $image->path = $path;
            // $post->image()->save($image);
            // $this->saveImage();
            
            $this->defineAndSaveImagePath($request, $post);

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

    public function checkValidateForm(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    }

    public function defineAndSaveImagePath(Request $request, $currentPost)
    {
        $filename = time() . '.' . $request->image->extension();

        $path = $request->file('image')->storeAs(
            'images',
            $filename,
            'public',
        );

        $image = new Image();
        $image->path = $path;
        $currentPost->image()->save($image);
    }

    // public function saveImage()
    // {
    //     $image = new Image();
    //     $image->path = $path;
    //     $post->image()->save($image);
    // }

    /**
     * Example Polymorphic relation
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
