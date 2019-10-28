<?php
echo "TESTING";


$access_token = "EAAKJh2HgAJQBAOO6N1EN3ZAUBNuOq3EKZCl25WNeM56F0yDufX5bUYjtcCGEc6L7y7qpxrnkzbHfbzGfUgAbQHIovdaKo3NP0yC8abt6OIGIAP6ZASZACcH08WZCT0L9ZCDFvQIEqhhU7iTtXVd8CGjxaxn3F8wqYQz0z5XYWdRfNZAF22qoN8f8XuPMZCDsCTUZD";
$verify_token = "fb_time_bot";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}


if ($hub_verify_token === $verify_token) {
    echo $challenge;
}