<?php

namespace App\Http\Controllers\User;

use App\Helpers\BackendValidation;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with([
            'user:id,name,image',
            'comments.user:id,name,image',
            'likes.user:id,name,image',
        ]);

        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        $posts = $query->orderBy('created_at', 'desc')->where('status',1)->get();

        return PostResource::collection($posts);
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
        return response()->json(['status' => 'success', 'message' => 'Post Created SuccessFully']);
    }

    public function destroy(Request $request)
    {
        $post = Post::where('id', $request->post_id)->first();
        $post->delete();
        return response()->json(['status' => 'success', 'message' => 'Post Deleted SuccessFully']);
    }




    public function comment(Request $request)
    {
        $validate = BackendValidation::comment($request);

        if ($validate['status'] == "error") {
            return response()->json(['status' => 'error', 'message' => $validate['message']], 400);
        }

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        return response()->json(['status' => 'success', 'message' => 'Your Commend Added Successfully']);
    }

    public function reactToPost(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
        ]);

        $like = Like::where('user_id', Auth::id())
            ->where('post_id', $request->post_id)
            ->first();

        if ($like) {
            $like->is_like = !$like->is_like;
        } else {
            $like = new Like();
            $like->user_id = Auth::id();
            $like->post_id = $request->post_id;
            $like->is_like = true;
        }

        $like->save();

        return response()->json([
            'status' => 'success',
            'message' => $like->is_like ? 'Post liked' : 'Post disliked',
            'data' => $like
        ]);
    }
    public function summary(Request $request)
    {
        $query = Post::query()->where('user_id', Auth::id());


        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        return response()->json([
            'total' => $query->count(),
            'published' => $query->where('status', 1)->count(),
            'draft' => $query->where('status', 0)->count(),
            'likes' => Like::where('user_id',  Auth::id())->where('is_like', true)->count(),
            'dislikes' => Like::where('user_id',  Auth::id())->where('is_like', false)->count(),
        ]);
    }
    public function dashboard()
    {
        $userId = Auth::id();
        $postIds = Post::where('user_id', $userId)->pluck('id');

        return response()->json([
            'total_posts'    => $postIds->count(),
            'published'      => Post::where('user_id', $userId)->where('status', 1)->count(),
            'drafts'         => Post::where('user_id', $userId)->where('status', 0)->count(),
            'likes_received' => Like::whereIn('post_id', $postIds)->where('is_like', true)->count(),
            'comments_count' => Comment::whereIn('post_id', $postIds)->count(),
        ]);
    }
}
