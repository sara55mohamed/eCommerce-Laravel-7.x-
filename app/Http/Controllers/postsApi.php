<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class postsApi extends Controller
{
    public function index()
    {
        return Staff::all();
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        return Staff::create([
            'title' => request('title'),
            'content' => request('content'),
        ]);
    }

    public function update(Staff $post)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $success = $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Staff $post)
    {
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}