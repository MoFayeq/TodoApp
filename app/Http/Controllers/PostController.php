<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
       // return response('success');
       return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
      //  return view('posts.show', compact('post'));
      $posts = Post::onlyTrashed()->get();
      return view('posts.soft', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);          //only with id
        //$post=Post::where('id',$id)->first();
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, $id)
    {
        $post=post::findOrFail($id); 
        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }
    public function restore($id){
       Post::withTrashed()->where('id',$id)->restore();
       return redirect()->back();
       

    }
    public function forcedelete($id){
        Post::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
        
 
     }
}
