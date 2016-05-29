<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;


class PostController extends Controller
{
    public function index( Post $postModel )
    {
        $posts = $postModel->getPublishedPosts();

        return view( 'post.index', [ 'posts' => $posts ] );
    }

    public function unpublished( Post $postModel )
    {
        $posts = $postModel->getUnPublishedPosts();

        return view( 'post.index', [ 'posts' => $posts ] );
    }

    public function create()
    {
        return view( 'post.create' );
    }

    public function store( Post $postModel, Request $request )
    {
        $post = $postModel->create( $request->all() );

        if( $post->published == "on" ){
            $post->published = 1;
        }
        else{
            $post->published = 0;
        }

        $post->save();

        return redirect()->route( 'post' );
    }

    public function show( $id )
    {

    }

    public function edit( $id )
    {

    }

    public function update( $id )
    {

    }

    public function destroy( $id )
    {

    }
}
