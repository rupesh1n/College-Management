<?php
$to = "mailtest1@localhost.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: mailtest2@localhost.com" . "\n" .
"CC: mailtest2@localhost";

mail($to,$subject,$txt,$headers);
?>