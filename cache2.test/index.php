<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

I am cache2.test.  I am going to detect if a file from cache3.test was cached or loaded for the first time.  Please note: this test requires you to load cache1.test more than 5 seconds after this page!
<p>
<script src="http://cache3.test/index.php"></script>
