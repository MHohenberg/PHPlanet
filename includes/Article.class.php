<?php

class Article{

	private uri;
	private title;
	private content;
	private timestamp;
	private desc;

   function __destruct() {
      $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$db->query("INSERT INTO article
 			article_URI = '".$this->uri."',
			article_title = '".$this->title."',
			article_text = '".$this->content."',
			article_show = '".$this->show."',
			article_timestamp = '".$this->timestamp."',
         article_link = '".$this->link."' ");
      $db = null;
	}

}
