<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://www.baiwar.com All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：respondwx.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信手机支付接口通知文件
 * ----------------------------------------------------------------------------
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */


//define('IN_ECTOUCH', true);
//if(!isset($_REQUEST['code'])){
//    //header('location: ./index.php?'.$_SERVER['QUERY_STRING']);
//    //exit;
//}
//$_GET["code"]="YToyOntzOjQ6InR5cGUiO2k6MTtzOjQ6ImNvZGUiO3M6NToid3hwYXkiO30";
//define('CONTROLLER_NAME', 'Respond');
//
///* 加载核心文件 */
//require ('include/EcTouch.php');

define('IN_ECTOUCH', true);
define('CONTROLLER_NAME', 'Respond');
if(!isset($_REQUEST['code'])){
    header('location: ./index.php?'.$_SERVER['QUERY_STRING']);
    exit;
}
require ('include/bootstrap.php');