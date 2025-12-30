@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4 p-4 p-md-5 ">
                <div class="card-body">
                    <h2 class="text-center mb-5 fw-bold text-primary display-6">Write a New Post</h2>

                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="form-label fw-medium text-dark">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                minlength="3" class="form-control form-control-lg @error('title') is-invalid @enderror"
                                placeholder="Enter a catchy title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="content" class="form-label fw-medium text-dark">Content</label>
                            <textarea name="content" id="content" rows="10" required
                                class="form-control form-control-lg @error('content') is-invalid @enderror"
                                placeholder="Write your post content here...">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-medium shadow-sm">
                                Publish Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
