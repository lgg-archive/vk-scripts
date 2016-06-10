<?php

require_once "api.php";

//method of VK API
$method = "friends.add";

//load all 'ifollow' ids
$result = json_decode(file_get_contents("followers.txt"), true)["response"];

//empty log var
$log = "";

//Run through all received ids
foreach ($result as $id) {
    //send request to VK and add result to log 
    $log .= file_get_contents(getVkUrl($method, "user_id=" . $id, $token));

    //Sleep 1 sec
    sleep(1);
}

//save log to file
file_put_contents("add.log", $log);


