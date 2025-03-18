<?php

$username = "pinney.16";
$domain = "gmail.com";
$to = $username . "@" . $domain;
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com";

mail($to,$subject,$txt,$headers);

?>