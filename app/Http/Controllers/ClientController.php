<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }
    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts/',
            [
                'userid' => 1,
                'title' => 'new Post',
                'body' => 'new post descriotion',

            ]);
        return $post->json();
    }
    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'updated title',
            'body' => 'update description',
        ]);
        return $response->json();
    }
    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts' . $id);
        return $response->json();
    }
}
