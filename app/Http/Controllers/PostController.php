<?php

namespace App\Http\Controllers;

use App\post;

class PostController extends Controller
{
  public function slug(post $post)
  {
    if (!$post) return abort(404);

    return view("pages.post.slug", compact("post"));
  }
  public function index()
  {
    // $posts = post::get();
    $posts = post::paginate(6);
    return view("pages.post.index", compact("posts"));
  }
}
