<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Http\FormRequest;

class PostController extends Controller
{
    public function index() {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function show($id) {
        return view('posts.show', ['post' => Post::all()->where('id', $id)->first()]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(StorePostRequest $request) {
        // validate the request
        $formFields = $request->validated();
        Post::create($formFields);
        return redirect('/');
    }
}
