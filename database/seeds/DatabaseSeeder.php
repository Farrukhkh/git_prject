<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PostsSeeder');
	}

}


class PostsSeeder extends Seeder {
	public function run()
	{
		/*Post::create([
			'title'=>'First post',
			'slug'=>'First -post',
			'excerpt'=>'<strong>First post body</strong>',
			'content'=>'<strong>Content First post body</strong>',
			'published'=>false ,
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')]);
		
		Post::create([
			'title'=>'Second post',
			'slug'=>'Second -post',
			'excerpt'=>'<strong>Second post body</strong>',
			'content'=>'<strong>Content Second post body</strong>',
			'published'=>false ,
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')]);
		}*/
		Post::create([
			'title'=>'Fourth post',
			'slug'=>'Fourth -post',
			'excerpt'=>'<strong>Fourth post body</strong>',
			'content'=>'<strong>Content Fourth post body</strong>',
			'published'=>false ,
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')]);
}
}
