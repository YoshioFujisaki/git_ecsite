<?php
require_once('menu.php');

$annpan = new Menu('アンパン', 300, "../img/anpan.jpg");
$cream = new Menu('クリームパン', 300, "../img/cream.jpg");

$menus = array($annpan, $cream);