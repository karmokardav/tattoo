<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\GalleryLike;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function UserIndex()
    // {
    //     return view("gallery.gallery");
    // }
    public function index()
    {
        $galleries = Gallery::where('status', 'active')->get();
        return view('gallery.gallery', compact('galleries'));
    }

    public function list()
    {
        $galleries = Gallery::orderBy('id', 'desc')
            ->paginate(2)
            ->onEachSide(1);

        return view('admin.components.gallery.index', compact('galleries'));

    }

    public function form()
    {
        return view('admin.components.gallery.form');
    }



    public function create()
    {
        //
    }

    public function view(Gallery $gallery)
    {
        $gallery->increment('views');

        return response()->json([
            'views' => $gallery->views
        ]);
    }

    public function like(Gallery $gallery)
    {
        $user = auth()->user();
        $sessionId = session()->getId();

        if ($user) {
            $alreadyLiked = GalleryLike::where('gallery_id', $gallery->id)
                ->where('user_id', $user->id)
                ->exists();
        } else {
            $alreadyLiked = GalleryLike::where('gallery_id', $gallery->id)
                ->where('session_id', $sessionId)
                ->exists();
        }

        if (!$alreadyLiked) {
            DB::transaction(function () use ($gallery, $user, $sessionId) {
                GalleryLike::create([
                    'gallery_id' => $gallery->id,
                    'user_id' => $user?->id,
                    'session_id' => $user ? null : $sessionId,
                ]);

                $gallery->increment('likes');
            });
        }
        return response()->json([
            'views' => $gallery->views,
            'likes' => $gallery->likes,
            'already_liked' => $alreadyLiked
        ]);
    }




    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:30000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
        }

        Gallery::create([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $imagePath,
            'views' => 0,
            'likes' => 0,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gallery not found'
            ], 404);
        }

        // delete image from storage
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Gallery deleted successfully'
        ]);
    }
}
