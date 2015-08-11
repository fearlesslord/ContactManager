<?php
//var_dump(get_included_files());
?>
<!doctype html>
<html>
  <head>
      <title>Contact Manager</title>
      <link rel="stylesheet" type="text/css" href="<?php echo URL ?>public/css/default.css" />
      <script type="text/javascript" src="<?php echo URL ?>public/js/jquery.js"></script>
      <!--        <script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script>  for debug js and ajax -->

      <?php
        if (isset ($js)) {
            foreach ($js as $jsName) {
                echo '<script type="text/javascript" src="'.URL.'public/js/'.$jsName.'.js"></script>'."\n";
            }
        }
      ?>
  </head>
  <body>

      <?php require '/../elements/header.php'; ?>

      <div id = "content">

        <div class="flash">
          <?php require '/../elements/flashMessage.php'; ?>
        </div>

          <?php echo $contentForLayout; ?>
      </div>

      <?php require '/../elements/footer.php'; ?>
  </body>
</html>