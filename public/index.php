
<?php
ob_start();
require_once(__DIR__."/src/auth/auth.php");
?>
<!Doctype html>
<html lang="<?php echo htmlspecialchars("en");?>" dir="<?php echo htmlspecialchars("ltr");?>">
<head>
  <title><?php echo htmlspecialchars($page_title);?></title>
</head>
<body>
<div class="abb-wrapper">
  <div class="abb-con-4-marg">
    <table>
      <tr>
        <td><h3>Welcome to Abbadoh Official Website</h3></td>
        <td><p>Please read our terms & conditons of this site</p></td>
      </tr>
      <tr>
        <td>
          <div class="abb-con-frm">
            <div class="abb-con-4-flex">
              <form action="" method="post">
                <div class="nodisplay">
                  <input type="hidden" value="<?php reel();?>" name="startingPoint" />
                   <input type="hidden" value="<?php addr();?>" name="geon"/>
                   <input type="hidden" value="<?php time("y-m-d h-m-s);?>" name="lock" />
                  </div>
                  <div class="yesdisplay">
                   <button class="abb-btn nextbtn"><div>Accept</div></button>
                   <button class="abb-btn canceltbtn" disabled><div>Accept</div></button>
                  </div>
              </form>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
