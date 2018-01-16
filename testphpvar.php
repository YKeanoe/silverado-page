<?php
session_start();

if (isset($_GET['cat'])) {
$_SESSION['cat'] = $_GET['cat'];
}
print isset($_SESSION['cat']) ? "cat is {$_SESSION['cat']}" : 'cat is not
set<br />';
?>
<a href="Untitled-3.php?cat=1">Set cat to1</a>
<a href="Untitled-3.php?cat=2">Set cat to 2</a>
