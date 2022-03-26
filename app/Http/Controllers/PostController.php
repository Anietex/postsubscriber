<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function createPost(CreatePostRequest  $request){

        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $post = Post::create($data);

        PostCreated::dispatch($post);
        return $this->success($post);
    }


    public function listPosts(){

        $posts = Post::all();

        return $this->success($posts);
    }
}
