<?php
session_start();

if (!$_SESSION['logged']) {
    header('location: ./login.php');
} else {
    header('location: ./participaciones.php');
}