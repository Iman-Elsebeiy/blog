@extends('layouts.app')

@section('title') All Posts @endsection

@section('section1')
<h1 style="text-align: center; margin-top: 30px;">All Posts</h1>

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded custom-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['description'] }}</p>
                    <img src="{{ asset('imgs/' . $post->image) }}" alt="Post Image" class="img-fluid">
                </div>
                <div class="d-flex justify-content-start">
                    <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-secondary mr-2">Show</a>
                    <a href="{{route('posts.destroy', $post['id'])}}" class="btn btn-danger btn-custom mr-2">Delete</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Pagination Links -->
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
@endsection











{{-- @extends('layouts.app')

@section('title') All Posts @endsection

@section('section1')
<h1 style="text-align: center; margin-top: 30px;">All Posts</h1>
@foreach ($posts as $post)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded custom-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['description'] }}</p>
                    <img src="{{ asset('imgs/' . $post->image) }}" alt="Post Image" class="img-fluid">
                </div>
                <div class="d-flex justify-content-start">
                    <a href="{{route('posts.show', $post['id'])}}" class="btn btn-secondary mr-2">Show</a>

                    <a href="{{route('posts.destroy', $post['id'])}}" class="btn btn-danger btn-custom mr-2">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
 --}}
