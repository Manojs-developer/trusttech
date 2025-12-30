@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4 p-4 p-md-5 ">
                <div class="card-body">
                    <h2 class="text-center mb-5 fw-bold text-primary display-6">Edit Post</h2>

                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="form-label fw-medium text-dark">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                                required minlength="3"
                                class="form-control form-control-lg @error('title') is-invalid @enderror"
                                placeholder="Enter a catchy title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="content" class="form-label fw-medium text-dark">Content</label>
                            <textarea name="content" id="content" rows="10" required
                                class="form-control form-control-lg @error('content') is-invalid @enderror"
                                placeholder="Write your post content here...">{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-medium shadow-sm">
                                Update Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
