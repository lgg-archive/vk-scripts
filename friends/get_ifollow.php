<?php

require_once "api.php";

//method of VK API
$method = "friends.getRequests";

//Set count to max allowed and than we need outgoing friend requests
$params = "count=1000&out=1";

//set request to VK and save it to $result
$result = file_get_contents(getVkUrl($method, $params, $token));

//save all ids to file
file_put_contents("ifollow.txt", $result);
