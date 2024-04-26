
@extends('layouts.app')
@section('title')
show post
@endsection
@section('content')
<div class="card">
            <div class="card-header">
                post info
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post['title']}}</h5>
                <p class="card-text">{{$post['description']}}</p>
                <small><i>{{$post['created_at']}}</i></small>
            </div>
        </div>
@endsection
