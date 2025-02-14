@extends('layouts.app')

@section('title') post details @endsection
@section('section1')
<h1 style="text-align: center; margin-top: 30px;">Post Details</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded custom-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['description'] }}</p>
                    <img src="{{ asset('imgs/' . $post->image) }}" alt="Post Image" class="img-fluid">
                </div>
            </div>
        </div>
        <a href="{{route('posts.index')}}" class="btn btn-danger mr-2">Back to Home</a>
    </div>
</div>
@endsection



