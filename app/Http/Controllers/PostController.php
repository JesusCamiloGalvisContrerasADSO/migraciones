<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categories;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index',compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::pluck('name', "id");
        $categories = Categories::pluck('name','id');
        return view("posts.create", compact("users", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        return redirect()->route("posts.index");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::pluck('name', "id");
        $post = Post::where("id",$id) -> first();
        return view("posts.edit", compact("users", "post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        
        $post = Post::where("id" ,$id) -> first();
        $post = $post->update($request -> all());

        return redirect() ->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where("id" ,$id) -> first();
        $post->delete();
        return redirect()->route("posts.index");
    }


    

    // function users($id)
    // {
    //     $user = User::where("id" ,$id) -> first();
    //     // dd($user->post()->paginate(2));
        
    // }
}
