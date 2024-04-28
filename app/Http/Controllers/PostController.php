<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts = [
            ['id' => 1, 'title' => 'php', 'description' => "this is a simple description for php", 'posted_by' => 'ahmad', 'created_at' => '2022-10-5 09:00:00'],
            ['id' => 2, 'title' => 'js', 'description' => "this is a simple description for js", 'posted_by' => 'amjad', 'created_at' => '2022-10-2 01:00:00'],
            ['id' => 3, 'title' => 'css', 'description' => "this is a simple description for css", 'posted_by' => 'samir', 'created_at' => '2022-09-3 02:00:00'],
            ['id' => 4, 'title' => 'bootstrap', 'description' => "this is a simple description for bootstrap", 'posted_by' => 'samer', 'created_at' => '2023-09-3 02:00:00'],
    ];
    public function index () {
        return view("posts.index", ['posts' => $this->posts]);
    }
    public function show($postId){
        $searchedPost = null;
        foreach ($this->posts as $post) {
            if ($post['id'] == $postId) {
                $searchedPost = $post;
                break; // Exit the loop if the post is found
            }
        }
        if ($searchedPost) {
            // The post with the specified ID was found
            return view('posts.post', ['post' => $searchedPost]);
        } else {
            // The post with the specified ID was not found

            return "Post Not Found";
        }
    }
    public function create() {
        return view('posts.create');
    }
    public function store() {
        $data = request();
        
        return $data;
    }
    public function edit($postId) {
        $searchedPost = null;
        foreach ($this->posts as $post) {
            if ($post['id'] == $postId) {
                $searchedPost = $post;
                break; // Exit the loop if the post is found
            }
        }
        if ($searchedPost) {
            // The post with the specified ID was found
            return view('posts.edit', ['post' => $searchedPost]);
        } else {
            // The post with the specified ID was not found

            return "Post Not Found";
        }
    }
    public function update($postId) {
        return "tes";
    }

}
