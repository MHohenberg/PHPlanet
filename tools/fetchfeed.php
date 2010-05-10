<?php

include ("../includes/config.inc.php");
require ("../includes/simplepie/simplepie.inc");

$nextfeed = mysql_fetch_array(mysql_query("select * from feeds order by feed_lastfetched desc limit 1"));

$feed = new SimplePie();
$feed->set_feed_url($nextfeed['feed_url']);
$feed->init();

foreach($feed->get_items(0,20) as $item) {
	print_r($item);
	echo "<hr>";


	$x = new Article();
	$x->setURI($item->get_permalink());
	$x->setTitle($item->get_title());
	$x->setDesc($item->get_description());
	$x->setTimestamp($item->get_date());
}

?>
