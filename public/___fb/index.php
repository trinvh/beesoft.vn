<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET' && $_GET['hub_mode'] == 'subscribe' && $_GET['hub_verify_token'] == 'trinvhapp') {
   echo $_GET['hub_challenge'];
   exit;
}
file_put_contents("post.log",print_r($_REQUEST,true));
?>