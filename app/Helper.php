<?php

function print_r2($var)
{
    echo "<pre>";
    print_r($var);
    die();
}

function var_dump2($var)
{
    echo "<pre>";
    var_dump($var);
    die();
}

function header_json()
{
    header('Content-Type: application/json');
}

function header_text()
{
    header("Content-Type: text/plain");
}

function header_cross_domain()
{
    header("Access-Control-Allow-Origin: *");
}

function intval2($str)
{
    $int = str_replace(',', '', $str);
    $int = intval($int);
    return $int;
}

function is_float2($float)
{
    $float = floatval($float) . "";
    $pos = strpos($float, '.');
    if ($pos > 0) {
        return true;
    } else {
        return false;
    }
}

function floatval2($str)
{
    $int = str_replace(',', '', $str);
    $int = floatval($int);
    return $int;
}