<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class post extends Model {

	protected $fillable =  ['title', 'slug', 'excerpt', 'content', 'published_at', 'published'];
	public function getPublishedPosts(){
	$posts = $this->latest('published_at')->published()->get();
		return $posts;
	}
	public function getUnpublishedPosts(){
	$posts = $this->latest('published_at')->unpublished()->get();
		return $posts;
	}
	public function getPostsToEdit($id){
		$id = intval($id);
		$posts  = Post::where('id',$id)->exists();
		return $posts;
	}
	public function scopePublished($query){
		$query->where('published_at','<=', Carbon::now())
		->where('published','=', 1);
	}
	
	public function scopeUnPublished($query){
		$query->where('published_at','>=', Carbon::now())->where('published','=', 0);
	}
//	public function scopePostsToEdit($query, $id){
//		$query->where('id','=',$id)->get();
//	}


}

