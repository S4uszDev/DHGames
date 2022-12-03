<?php 

function redirect(string $url)
{
    header(sprintf('Location: %s', $url));
    http_response_code(301);
    die;
}