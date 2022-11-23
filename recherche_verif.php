<?php
session_start();

$search = $_GET['search'];
$_SESSION['search'] = $search;
header('location:recherche.php');
