<?php

class PopulateCommand extends CConsoleCommand
{
	
	const BLOGS_COUNT = 100;
	const COMMENTS_COUNT = 15;
	
	public $verbose=true;
	
	public function run($args)
	{
		$tags = array("tag1", "tag2", "tag3", "tag4", "tag5",
					  "tag6", "tag7", "tag8", "tag9", "tag0");
		
		$commenters = array(
			"Mike", "John", "Fred", "Barney", "Jane", "Wilma", "Jenny",
			"Mary", "Susan", "Brenda", "Anne"
		);
		
		for ( $i =0; $i < 5; $i++ )
		{
			shuffle($tags);
			
			$post = new Post();
			$post->title = "YiiBlog AutoPost - post ".$i;
			$post->content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
			$post->status = Post::STATUS_PUBLISHED;
			$tagStr = join(",", array_slice($tags, 0, 3));
			$post->tags = $tagStr;
			
			$post->save();
			
			shuffle($commenters);
			$comment_count = rand(1,20);
			for ( $j = 0; $j < $comment_count; $j++ )
			{
				$k = rand(0,10);
				$comment = new Comment();
				$comment->author = $commenters[$k];
				$comment->email = $commenters[$k]."@example.com";
				$comment->url = "http://www.yahoo.com";
				$comment->content = "My name is ".$commenters[$k]."  This is an auto-generated comment";
					
				$post->addComment($comment);
			}
			
		}

		
	}
	
}