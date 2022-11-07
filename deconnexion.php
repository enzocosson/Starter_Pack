<?php
session_start();
require 'lib.inc.php';

$_SESSION = array();
session_destroy();

header('location:home.php');
