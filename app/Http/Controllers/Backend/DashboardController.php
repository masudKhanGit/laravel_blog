<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $post_count = Post::where('user_id', Auth::user()->id)
            ->get()
            ->count();
        $active_post = Post::where('user_id', Auth::user()->id)
            ->where('status', 'ACTIVE')
            ->get()
            ->count();
        return view('backend.dashboard.index', compact('post_count', 'active_post'));
    }
}
