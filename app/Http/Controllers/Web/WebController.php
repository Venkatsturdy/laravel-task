<?php

namespace App\Http\Controllers\Web;

use App\Helpers\BackendValidation;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class WebController extends Controller
{

    public function userProfile()
    {
        $user = Auth::user()->loadCount('posts'); 
        $posts = $user->posts()->latest()->get();   

        return view('web.dashboard', compact('user', 'posts'));
    }

    public function index(Request $request)
    {
        $search = $request->get('search', '');

        $query = Post::with('user')
            ->where('status', 1)
            ->orderBy('created_at', 'desc');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('content', 'like', "%{$search}%")
                ->orWhereHas('user', function ($q2) use ($search) {
                    $q2->where('name', 'like', "%{$search}%");
                });
            });
        }

        $posts = $query->paginate(10);

        return view('web.index', compact('posts'));
    }


    public function loadMorePosts(Request $request)
    {
        $page = $request->get('page', 1);
        $cacheKey = 'posts_page_' . $page;

        $posts =  Post::with('user')
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return response()->json([
            'html' => view('layout.web.partial.post_list', compact('posts'))->render(),
            'hasMore' => $posts->hasMorePages()
        ]);
    }
    public function store(Request $request)
    {
        $validate = BackendValidation::poststore($request);

        if ($validate['status'] == "error") {
            return response()->json(['status' => 'error', 'message' => $validate['message']], 400);
        }
        $post = new Post();
        $post->user_id = Auth::id();
        $post->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('posts', 'public');
            $post->image = $path;
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
    }

    public function destroy(Request $request)
    {
        $post = Post::where('id', $request->post_id)->first();
        $post->delete();
        return redirect()->back()->with('success', 'Post Deleted Successfully');
    }


    public function storeComment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'comment' => 'required|string|max:500',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json([
            'status' => 'success',
            'html' => view('layout.web.partial.comment', ['comment' => $comment])->render()
        ]);
    }

    public function reactToPost(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);

        $user = Auth::user();
        $like = Like::where('user_id', $user->id)->where('post_id', $request->post_id)->first();

        if ($like) {
            $like->is_like = !$like->is_like;
        } else {
            $like = new Like();
            $like->user_id = $user->id;
            $like->post_id = $request->post_id;
            $like->is_like = true;
        }

        $like->save();

        $likeCount = Like::where('post_id', $request->post_id)->where('is_like', true)->count();

        return response()->json([
            'status' => 'success',
            'message' => $like->is_like ? 'Post liked' : 'Post disliked',
            'like_count' => $likeCount
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully');
    }
   
    public function poststore(Request $request)
    {
        // dd($request->all());
        $validate = BackendValidation::poststore($request);

        if ($validate['status'] === "error") {
            return back()->withErrors($validate['message'])->withInput();
        }
        $post = new Post();
        $post->user_id = Auth::id();
        $post->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('posts', 'public');
            $post->image = $path;
        }
        $post->save();
        return back()->with(['status' => 'success', 'message' => 'Post Created SuccessFully']);
    }
}
