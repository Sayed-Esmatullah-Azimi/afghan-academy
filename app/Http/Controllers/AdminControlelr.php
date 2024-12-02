<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminControlelr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'Admin';
        $post = Post::all();
        return view('admin.index',['page'=>$page , 'posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'Admin';
        return view('admin.create',['page'=>$page]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required'
        ]
    ,[
        'title.required' => 'عنوان پوست باید  خالی نباشد',
    ]);
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.index');
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
    public function edit(string $admin)
    {
        $page = 'Admin';
        $post = Post::find($admin);
        return view('admin.edit',['page' => $page , 'posts' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $admin)
    {
        $post = Post::find($admin);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.index');
    }
}
