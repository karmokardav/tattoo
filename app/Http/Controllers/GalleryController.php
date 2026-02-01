<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $galleries = Gallery::get();

        return view('admin.gallery.index', compact('galleries'));


    }

    public function form()
    {
        return view('admin.gallery.form');

    }


    /**
     * Show the dashboard of gallery.
     */


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
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required|string|max:255',
    //         'status' => 'required|in:active,inactive',
    //         'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    //     ]);

    //     if ($validator->fails()) {
    //         return back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $imagePath = null;
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('gallery', 'public');
    //     }

    //     Gallery::create([
    //         'title' => $request->title,
    //         'status' => $request->status,
    //         'image' => $imagePath,
    //         'views' => 0,
    //         'likes' => 0,
    //     ]);

    //     if ($request->ajax()) {
    //         return response()->json([
    //             'message' => 'Gallery added successfully',
    //             'redirect' => route('galleries.index')
    //         ]);
    //     }
    // }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $imagePath,
            'views' => 0,
            'likes' => 0,
        ]);
        return redirect()->route('galleries.index');
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
    public function destroy(Gallery $gallery)
    {
        //
    }
}
