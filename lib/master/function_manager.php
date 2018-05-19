<?php
/**
 * Created by PhpStorm.
 * User: ExiLon2400
 * Date: 11/05/2018
 * Time: 14:11
 */

function register_function($fnc) {
    $function_root = "lib/function/";
    $function_prefix = "fnc_";
    $function_extention = ".php";

    include $function_root.$function_prefix.$fnc.$function_extention;
}

register_function("debug");