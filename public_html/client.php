<?php

    $url = 'http://localhost/PROJS/VIDEO_AULAS/SERIE/03_APIREST2021/public_html/api';

    $class = '/user';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    //echo $response;

    //
    //$response = json_decode($response, 1);
    //var_dump($response['data'][1]['email']);