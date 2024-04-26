@extends('layouts.app')
@section('title')
all posts
@endsection
@section('content')
<div class="text-center">
            <button type="button" class="btn btn-success">new post</button>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row"></th>
                        <td>{{$post['id']}}</td>
                        <td>{{$post['title']}}</td>
                        <td>{{$post['created_at']}}</td>
                        <td>
                            <a href = "{{route('posts.show', $post['id'])}}" class="btn btn-info">View</a>
                            <a href="#" class="btn btn-primary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
