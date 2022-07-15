<?php
include '../config.php';

session_start();

if (isset($_SESSION['email'])) {
  session_destroy();
  header('location: /login');
} else {
  header('location: /login');
}