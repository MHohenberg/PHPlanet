<?php

include ("../includes/config.inc.php");
require ("../includes/simplepie/simplepie.inc");

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$r = $db->query("select * from feeds order by feed_lastfetched desc limit 1");
$nextfeed = $r->fetch_assoc();

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
