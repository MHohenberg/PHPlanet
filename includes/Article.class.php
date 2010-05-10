<?php

class Article{

	private uri;
	private title;
	private content;
	private timestamp;
	private desc;

	function __destruct() {
		mysql_query("INSERT INTO article
			article_URI = '".$this->uri."',
			article_title = '".$this->title."',
			article_text = '".$this->content."',
			article_show = '".$this->show."',
			article_timestamp = '".$this->timestamp."',
			article_link = '".$this->link."' ");
	}

}

?>
