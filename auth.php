<?php
header('Content-Type:text/html; charset=utf-8');
session_start();
if (!isset($_SESSION['user_id'])) {
	echo '<a href="login.html">Sign In</a>';
}
else {
	echo '<a href="logout.php">Your ID - ' . $_SESSION['user_id'] . '(sign out)</a>';
}
