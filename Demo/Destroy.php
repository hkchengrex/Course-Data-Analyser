#!/usr/local/bin/php
<?php
#destroy session
session_start();
?>
<html>
<body>
<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
header("Location: Page.php");
exit();
?>
</body>
</html> 