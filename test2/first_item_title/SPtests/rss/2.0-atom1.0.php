<?php

$data = <<<EOD
<rss version="2.0" xmlns:a="http://www.w3.org/2005/Atom">
	<channel>
		<item>
			<a:title>Item Title</a:title>
		</item>
	</channel>
</rss>
EOD;

$expected = 'Item Title';

?>