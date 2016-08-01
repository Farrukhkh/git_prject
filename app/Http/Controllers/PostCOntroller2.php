asdasd<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostCOntroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Post $postModel)
	{
		$posts = $postModel->getPublishedPosts();
		return view('post.index', ['posts'=>$posts]);
		}
		
	public function unpublished(Post $postModel)
	{
		$posts = $postModel->getUnpublishedPosts();
		return view('post.index', ['posts'=>$posts]);
		}
    public function edit_post()
    {
		$posts  = Post::all();
        return view('post.edit_list', ['posts'=>$posts]);
    }
	public function edit_page($id, Post $postModel)
	{
		$posts = $postModel->getPostsToEdit($id);
		return view('post.edit_page', ['posts'=>$posts]);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Post $postModel, Request $request)
	{
        $post= new Post;
        $post = $postModel->create($request->all());

        if($post->published == "on"){
            $post->published = 1;
        }
        else {
            $post->published = 0;
        }

        $post->save();

        return redirect()->route('posts');
//        $postModel->create($request->all());
//		return redirect()->route('$posts');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
