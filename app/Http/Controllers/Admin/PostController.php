<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $image = $request->file('image')->store('public/posts');

        $post = Post::create([
            'title_en' => $request->title_en,
            'full_text_en' => $request->full_text_en,
            'title_ru' => $request->title_ru,
            'full_text_ru' => $request->full_text_ru,
            'title_mn' => $request->title_mn,
            'full_text_mn' => $request->full_text_mn,
            'image' => $image,
            'user_id' => Auth::id(),
        ]);

        return to_route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title_en' => 'required',
            'full_text_en' => 'required',
            'title_ru' => 'required',
            'full_text_ru' => 'required',
            'title_mn' => 'required',
            'full_text_mn' => 'required',
        ]);

        $image = $post->image;

        if($request->hasFile('image')){
            Storage::delete($post->image);
            $image = $request->file('image')->store('public/posts');
        }

        $post->update([
            'title_en' => $request->title_en,
            'full_text_en' => $request->full_text_en,
            'title_ru' => $request->title_ru,
            'full_text_ru' => $request->full_text_ru,
            'title_mn' => $request->title_mn,
            'full_text_mn' => $request->full_text_mn,
            'image' => $image,
            'user_id' => Auth::id(),
        ]);

        return to_route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        $post->delete();

        return to_route('admin.posts.index');
    }
}
