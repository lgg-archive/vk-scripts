<?php

require_once "api.php";

//method of VK API
$method = "account.banUser";

//load all 'ifollow' ids
$result = json_decode(file_get_contents("followers.txt"), true)["response"];

//empty log var
$log = "";

//if it followers
if(isset($result["count"])){
    $result = $result["items"];
}else{
    //if it friends requests
}

//Run through all received ids
foreach ($result as $id) {
    //send request to VK and add result to log
    $log .= file_get_contents(getVkUrl($method, "user_id=" . $id, $token));

    //Sleep 1 sec
    sleep(1);
}

//save log to file
file_put_contents("ban.log", $log);


