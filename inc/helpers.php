<?php

define('BASE_URL', 'http://localhost/sites/college/time/');

function url(string $url = '', array $params = [])
{
    return BASE_URL . $url . (!empty($params) ? '?' . http_build_query($params) : '');
}
