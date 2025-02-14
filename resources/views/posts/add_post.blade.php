
@extends("layouts.app")


@section("title") Add New Post @endsection

@section('section1')
    <h1 class="text-center">Add new Post</h1>
    <div class="container">
    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Post Name</label>
            <input type="text" value="{{old("title")}}"
                   class="form-control" id="title" name="title" >
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description"
                      name="description" rows="3" >{{old("description")}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="text" class="form-control" id="image" value="{{old("image")}}"
                   name="image"  >
        </div>
        {{-- <div class="mb-3">
            <label for="image" class="form-label">Categories</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected disabled value="null">Open this select menu</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach --}}


            {{-- </select>

        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection

