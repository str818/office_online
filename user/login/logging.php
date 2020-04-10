<?php

if(!defined('IN_DZZ')) {
    exit('Access Denied');
}
Hook::listen('mod_run');//执行配置
Hook::listen('mod_start',$_GET);//模块路由

include $_GET['route_file'];
