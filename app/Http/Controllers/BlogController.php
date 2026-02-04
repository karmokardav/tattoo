<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.blog');
    }
    public function list()
    {
        $blogs = Blog::orderBy('id', 'desc')
            ->paginate(10)
            ->onEachSide(1);

        return view('admin.components.blog.index', compact('blogs'));

    }
    public function form()
    {
        return view('admin.components.blog.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'description' => 'required|string',
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
            $imagePath = $request->file('image')->store('blog', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imagePath,
            'views' => 0,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Blog created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $blog = Blog::find($id);


        if (!$blog) {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found'
            ], 404);
        }

        // delete image from storage
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog deleted successfully'
        ]);
    }
}
