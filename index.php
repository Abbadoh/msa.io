<?php
ob_start();
session_start();
session_regenerate_true(true);

header("Location: public/");
exit;
?>
