<?php
ob_start();
require_once(__DIR__."/../src/auth/auth.php");
?>
<!Doctype html>
<html lang="<?php echo htmlspecialchars("en");?>" dir="<?php echo htmlspecialchars("ltr");?>">
<head>
  <title><?php echo htmlspecialchars($page_title);?></title>
</head>
<body>
 <?php include (__DIR__."/../includes/header.php");?>

<?php include (__DIR__."/../includes/footer.php");?>
</body>
