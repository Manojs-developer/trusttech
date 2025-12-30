@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-5">
    <h1 class="display-5 fw-bold text-primary">All Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-sm">
        Write New Post
    </a>
</div>

@if($posts->isEmpty())
    <div class="text-center py-5">
        <p class="lead text-muted fs-4">No posts yet. Be the first to write one</p>
    </div>
@else
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        @foreach($posts as $post)
            <div class="col">
                <div class="card h-100 shadow-lg rounded-4 hover-shadow transition-shadow">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4 fw-bold text-dark mb-3">{{ $post->title }}</h2>
                        <p class="card-text text-muted flex-grow-1">{{ Str::limit($post->content, 150) }}</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <small class="text-muted">By {{ $post->user->name }}</small>
                            
                            @if($post->user_id === Auth::id())
                                <div class="d-flex gap-3">
                                    <a href="{{ route('posts.edit', $post) }}" class="text-primary fw-medium text-decoration-none hover-underline">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('posts.destroy', $post) }}" class="d-inline mb-0">
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            type="submit" 
                                            onclick="return confirm('Delete this post?')" 
                                            class="btn btn-link text-danger fw-medium p-0 text-decoration-none hover-underline">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

@endsection