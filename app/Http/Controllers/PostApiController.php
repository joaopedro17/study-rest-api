<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        $payload = Post::all();
        
        return $payload;
    }

    public function store():mixed
    {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'   
           ]);
       
           $payload = Post::create($data);
           
           return $payload;
    }

    public function update(Post $post):Array
    {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'   
           ]);
           
        $success = $post->update($data);

        $payload = [ 'success', $success];
    
        return $payload;
    }

    public function delete(Post $post):Array
    {
        $success = $post->delete();

        $payload = [ 'success', $success];
    
        return $payload;
    }
}