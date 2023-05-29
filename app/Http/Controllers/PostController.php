<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "All Post";
    }
    public function create()
    {
        return "Add new post";
    }
    public function store(Request $request)
    {
        return "Save new post";
    }
    public function show(string $id)
    {
        return "Display single post";
    }

    public function edit(string $id)
    {
        return "Edit single post";
    }
    public function update(Request $request, string $id)
    {
        return "Update single post";
    }
    public function destroy(string $id)
    {
        return "Delete individual post";
    }
}
