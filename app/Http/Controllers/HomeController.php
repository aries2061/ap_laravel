<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\storePostRequest;

class HomeController extends Controller
{
    
    public function about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect("/login");
        }
        // $post = Post::orderBy("id","desc")->get();
        $post = Post::with("categories")->with("users")->orderBy("id","desc")->get();
        return view("home",compact("post"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view("create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePostRequest $request,Post $post)
    {
        $validated = $request->validated();
        $post->create($validated);

        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        // if($post->user_id !== auth()->id()){
        //     abort(403);
        // }
        
        $this->authorize('view', $post);
        return view("show",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('view', $post);
        $categories = Category::orderBy('id','desc')->get();
        return view("edit",compact("post","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storePostRequest $request, Post $post)
    {
        $this->authorize('view', $post);
        $validated = $request->validated();
        $post->update($validated);
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('view', $post);
        $post->delete();
        return redirect("/");
    }
}
