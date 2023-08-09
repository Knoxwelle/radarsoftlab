<?php include('../res/x5engine.php'); header('Content-Type: text/xml'); echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<atom:link href="http://radarsoftlab.com/blog/x5feed.php" rel="self" type="application/rss+xml" />
		<title><![CDATA[]]></title>
		<link>http://radarsoftlab.com/blog/</link>
		<description><![CDATA[]]></description>
		<language>EN</language>
		<lastBuildDate><?php echo getLastAvailableDate(array(1664770200)); ?></lastBuildDate>
		<generator>Incomedia WebSite X5 Professional</generator>
<?php if (time() > 1664770200): ?>
		<item>
			<title><![CDATA[Заголовок]]></title>
			<author><![CDATA[]]></author>
			<category domain="http://radarsoftlab.com/blog/index.php?category=Категория"><![CDATA[Категория]]></category>
			<category>imblog</category>
			<description><![CDATA[<div id="imBlogPost_000000005">Статья</div>]]></description>
			<pubDate>Mon, 03 Oct 2022 04:10:00 GMT</pubDate>
			<link>http://radarsoftlab.com/blog/?---------post1</link>
			<guid isPermaLink="false">http://radarsoftlab.com/blog/rss/000000005</guid>
		</item>
<?php endif; ?>
	</channel>
</rss>