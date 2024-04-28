@extends('layouts.app')
@section('title')
    update post
@endsection
@section('content')

    <form action="{{route('posts.update', $post['id'])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$post['title']}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{$post['description']}}</textarea>
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created By</label>
            <input type="text" name="created_by" class="form-control" id="created_by" value="{{$post['posted_by']}}">
        </div>
        <button type="submit" class="btn btn-success">update post</button>
    </form>
@endsection
