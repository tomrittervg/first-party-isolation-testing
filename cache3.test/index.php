<?php
date_default_timezone_set("UTC");
header("Cache-Control: max-age=2592000");
?>

document.write("I am runnign this from cache3.test. I'm going to compare the current time to the time you downloaded this to detect if the page is cached. It requires a 5 second separation between loads!<p>");

var generatedTime = Date.parse('<?=date(DATE_RFC822)?>');
var currentTime = Date.now();

var diff = (currentTime - generatedTime) / 1000;

if(diff > 5) {
    document.write("It appears that this page is cached - I got a diff of " + diff + " seconds. (Assuming it didn't take 5 seconds to download this file!)")
} else {
    document.write("It appears this page is fresh. I got a diff of " + diff + " seconds");
}
