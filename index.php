<?php
$globalConfig = include_once 'config/config.global.php';
$team = array_key_exists('t', $_GET)?$_GET['t']:'default';
$filename = array_key_exists('m', $_GET)?$_GET['m'].'.md':null;
//load team local config
if('default'!==$team){
    $globalConfig = array_merge($globalConfig, include_once "config/config.$team.php");
}
ksort($globalConfig);
//default show an index
$localConfig = $globalConfig['index.md'];
//otherwise load the template
if(null!==$filename) $localConfig = $globalConfig[$filename];
//include files
include_once 'header.php';
include_once $localConfig['template'];
include_once 'footer.php';