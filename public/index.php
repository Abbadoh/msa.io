<?php
ob_start();
require_once(__DIR__ . "/src/auth/auth.php");

// Ensure required variables are set
$page_title = isset($page_title) ? $page_title : "Abbadoh Official Website";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="styles.css"> <!-- Optional: Link to your CSS -->
</head>
<body>
  <main class="abb-wrapper">
    <section class="abb-con-4-marg">
      <header>
        <h3>Welcome to Abbadoh Official Website</h3>
        <p>Please read our terms & conditions of this site</p>
      </header>

      <form action="process.php" method="post" class="abb-con-frm">
        <input type="hidden" name="startingPoint" value="<?php echo htmlspecialchars(reel()); ?>">
        <input type="hidden" name="geon" value="<?php echo htmlspecialchars(addr()); ?>">
        <input type="hidden" name="lock" value="<?php echo date("Y-m-d H:i:s"); ?>">

        <div class="abb-con-4-flex">
          <button type="submit" class="abb-btn nextbtn">Accept</button>
          <button type="button" class="abb-btn canceltbtn" disabled>Decline</button>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
