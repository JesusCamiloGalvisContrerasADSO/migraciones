<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::paginate(10);
        return view("categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {
        $category = Categories::create($request->all());
        return redirect()->route("categories.edit", $category->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Categories::where("id" ,$id)->first();
        
        return view("categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesRequest $request,$id)
    {
        $category = Categories::where("id" ,$id)->first();
        $category ->update($request->all());

        return redirect()->route("categories.index");

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $category = Categories::where("id" ,$id)->first();
        $category->delete();
        return redirect()->route("categories.index");
    }
}
