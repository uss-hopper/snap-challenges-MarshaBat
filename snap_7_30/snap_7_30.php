<?php

/**Using the Tweet.php class found on the Object Oriented PHP page, write and document a getTweetsByTweetDate method that takes a DateTime object as a parameter and returns an array of all Tweets on that date.
 link to OOP Tweet example: https://bootcamp-coders.cnm.edu/class-materials/object-oriented/object-oriented-php.php**/


public function getTweetByTweetDate() : \DateTime {
	return($this->tweetByTweetDate);

class Tweets {

	private $tweetByTweetDate;
	public function __construct($tweetByTweetDate) {
		$this->tweetByTweetDate = $tweetByTweetDate;
	}

}


}


class TweetArray implements ArrayAccess
	{
		private $container = [];

		public function offsetSet($offset, $tweetByTweetDate)
		{
			if (!$tweetByTweetDate instanceof Tweets) {
				throw new Exception('value must be an instance of Item');
			}

			if (is_null($offset)) {
				$this->container[] = $tweetByTweetDate;
			} else {
				$this->container[$offset] = $tweetByTweetDate;
			}
		}
	public function offsetExists($offset)
	{
		return isset($this->container[$offset]);
	}

	public function offsetUnset($offset)
	{
		unset($this->container[$offset]);
	}

	public function offsetGet($offset)
	{
		return isset($this->container[$offset]) ? $this->container[$offset] : null;
	}
}

function getItems() : TweetArray
{
	$items = new TweetArray();
	$items[0] = new Tweets(0);
	$items[1] = new Tweets(2);
	return $items;
}

var_dump((array)getItems());
