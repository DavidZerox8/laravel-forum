<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Thread $thread)
    {
        $categories = Category::get();
        return view('threads.create', [
            'categories' => $categories,
            'thread'     => $thread,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'body'        => 'required',
            'category_id' => 'required',
        ]);

        auth()->user()->threads()->create($request->all());

        return redirect()->route('threads.index');
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
    public function edit(Thread $thread)
    {
        $this->authorize('update', $thread);

        $categories = Category::get();
        return view('threads.edit', [
            'categories' => $categories,
            'thread'     => $thread,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        $this->authorize('update', $thread);

        $request->validate([
            'title'       => 'required',
            'body'        => 'required',
            'category_id' => 'required',
        ]);

        $thread->update($request->all());

        return redirect()->route('thread.show', $thread);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
