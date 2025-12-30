<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostApiController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::with('user:id,name,email')->latest()->get();
        
        return response()->json($posts);
    }

    
}