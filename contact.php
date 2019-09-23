<?php
/**
 * Created by IntelliJ IDEA.
 * User: tunghuynh
 * Date: 2019-09-21
 * Time: 23:54
 */

require_once "config.php";

    $curl = curl_init($submitUrl);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    if ($response){
        echo 'success';
    }else{
        echo 'error';
    }

