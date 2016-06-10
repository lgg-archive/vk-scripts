<?php
/*
Yeah, I could use Classes, frameworks and others, but...
seriously? For this dumb scripts?
*/

//Your VK token, paste your instead YOURTOKENHERE
$token = "YOURTOKENHERE";


//for getting VK api url for method request
function getVkUrl($method, $params, $token)
{
    return "https://api.vk.com/method/" . $method . "?" . $params . "&access_token=" . $token;
}
