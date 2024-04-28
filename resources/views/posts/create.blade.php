@extends('layouts.app')
@section('title')
    create post
@endsection
@section('content')
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter The Title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created By</label>
            <input type="text" name="created_by" class="form-control" id="created_by" placeholder="example: Ahmad">
        </div>
        <button type="submit" class="btn btn-success">create post</button>
    </form>
@endsection
