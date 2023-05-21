<?php

namespace App\Http\Controllers;

use ChatGPT;
use Illuminate\Http\Request;

class ChatGPTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create(Request $request)
    {

        return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $res = ChatGPT::sendChatGPTRequest($request->question);

        if($res[1] != 200){
            return response($res[0], 429);
        }
        return response($res[0], 200);
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
    public function destroy(string $id)
    {
        //
    }
}
