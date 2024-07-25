<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('Tenemos que crear la vista');
        $users = User::all();
        return view("users.index",compact('users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // dd($request->all());
        $user = User::create($request->all());
        
        return redirect() ->route("users.edit", $user->id);
        
        // $user = User::create([
        //     "name" => $request->name,
        //     "email" => $request->email,
        //     "password" => $request->password,
        // ]);
        // return redirect()->route('editar.usuario',["id" => $usuario->id] );
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
        $user = User::where("id",$id) -> first();
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request, string $id)
    {
        $user = User::where("id" ,$id) -> first();
        $user -> update($request -> all());

        return redirect() -> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where("id" ,$id) -> first();
        $user->delete()->back();
    }
}
