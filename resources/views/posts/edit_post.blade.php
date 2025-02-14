@extends("layouts.app")

@section("title") Add New Post @endsection

@section('section1')
    <h1 class="text-center">Add New Post</h1>
    <div class="container">
        <form action="{{ route('posts.update', $post['id'])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Post Name</label>
                <input type="text"  value=" {{$post->title}}"
                       class="form-control" id="title" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="user_id" class="form-label">Users</label>
                <select class="form-select" id="user_id" name="user_id">
                    <option selected disabled value="">Select user</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}"  @selected(old('user_id', $post->user_id) == $user->id)>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description"
                          name="description" rows="3">{{$post->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="text" class="form-control" id="image" value="{{old("image"),$post->image}}"
                       name="image"  >
                {{-- @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
