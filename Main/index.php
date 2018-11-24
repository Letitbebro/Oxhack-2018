
<?php
   include_once("header.php");
?>

    <body>
    <?php

if (isset($_SESSION['u_id'])) {
  echo "You are logged in!";
} else {
  echo "Please Login!";
}

?>

            

            <?php
   include_once("main.php");
?>


<?php
   include_once('footer.php');
?>
